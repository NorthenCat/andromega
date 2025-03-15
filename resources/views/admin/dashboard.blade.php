@extends('admin.layout')
@push('head-scripts')
<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.46.0/dist/apexcharts.min.js"></script>
@endpush

@section('content')
<main class="px-4 pt-6 space-y-6">
    {{-- Header --}}
    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <div class="items-center justify-between flex flex-col gap-4">
            <div class="flex justify-between items-center w-full">
                <div class="flex flex-col justify-center">
                    <h3 class="text-lg md:text-xl font-bold text-gray-900 dark:text-white">Dashboard</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
        <div class="p-4 bg-white rounded-lg shadow-sm dark:bg-gray-800">
            <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Today's Visitors</h3>
            <p class="text-3xl font-bold text-blue-600">{{ $todayVisitors }}</p>
        </div>

        <div class="p-4 bg-white rounded-lg shadow-sm dark:bg-gray-800">
            <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Weekly Visitors</h3>

            <div id="column-chart"></div>
        </div>

        <div class="p-4 bg-white rounded-lg shadow-sm dark:bg-gray-800">
            <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Total Visitors</h3>
            <p class="text-3xl font-bold text-green-600">{{ $totalVisitors }}</p>
        </div>
    </div>

</main>
@endsection

@push('scripts')
<script>
    // Get the weekly data from Laravel
   const weeklyData = @json($weeklyVisitors);
    console.log('Weekly Data:', weeklyData); // Debug: Check raw data

    // Create array for all days of the week
    const daysOfWeek = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

    // Map data to days, with improved date handling
    const mappedData = daysOfWeek.map(day => {
        // Find matching date by converting both to same format
        const matchingDate = Object.entries(weeklyData).find(([date, count]) => {
            const dayName = new Date(date).toLocaleDateString('en-US', { weekday: 'short' });
            return dayName === day;
        });

        // Debug: Log matching process
        console.log(`Checking ${day}:`, matchingDate);

        return {
            x: day,
            y: matchingDate ? matchingDate[1] : 0 // Use [1] to get count from entry
        };
    });

    // Debug: Log final mapped data
    console.log('Mapped Data:', mappedData);

    const options = {
        colors: ["#1A56DB"],
        series: [{
            name: "Visitors",
            color: "#1A56DB",
            data: mappedData.map(item => item.y)
        }],
        chart: {
            type: "bar",
            height: "320px",
            fontFamily: "Inter, sans-serif",
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: "70%",
                borderRadiusApplication: "end",
                borderRadius: 8
            }
        },
        tooltip: {
            enabled: true,
            theme: 'light',
            custom: function({ series, seriesIndex, dataPointIndex }) {
                return '<div class="p-2">' +
                    '<span class="font-medium">' + daysOfWeek[dataPointIndex] + '</span>' +
                    '<div class="text-blue-600 font-bold">' +
                        series[seriesIndex][dataPointIndex] + ' visitors' +
                    '</div>' +
                    '</div>';
            }
        },
        states: {
            hover: {
                filter: {
                    type: "darken",
                    value: 1
                }
            }
        },
        stroke: {
            show: true,
            width: 0,
            colors: ["transparent"]
        },
        grid: {
            show: false,
            strokeDashArray: 4,
            padding: {
                left: 2,
                right: 2,
                top: -14
            }
        },
        dataLabels: {
            enabled: false
        },
        legend: {
            show: false
        },
        xaxis: {
            categories: daysOfWeek,
            floating: false,
            labels: {
                show: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                    cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                }
            },
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            }
        },
        yaxis: {
            show: true
        },
        fill: {
            opacity: 1
        }
    };

    if(document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("column-chart"), options);
        chart.render();
    }
</script>
@endpush