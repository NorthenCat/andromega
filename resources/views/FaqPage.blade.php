@extends('layout')
@section('content')
<div class="lg:px-28 px-5 bg-cover bg-no-repeat bg-center min-h-screen pb-20 relative overflow-visibles"
    style="background-image: url('{{ asset('storage/assets/bg_putih_1-8.png') }}');">
    <div class="justify-center lg:pt-40 pt-28 relative z-10">
        {{-- HEADER --}}
        <div data-aos="zoom-in" class="flex justify-center mx-10">
            <div class="text-center">
                <h1 class="lg:text-5xl text-3xl font-normal text-[#80439a] my-10">FAQ~</h1>
                <p class="text-black text-3xl">
                    <span class="font-bold italic">Question?</span> Find here
                </p>
            </div>
        </div>

        {{-- SEARCH BAR --}}
        <div data-aos="fade-in" class="flex justify-center pt-10">
            <div class="w-full max-w-6xl mx-auto">
                <form id="searchForm" class="relative">
                    <input type="text" id="searchInput" name="search" placeholder="Search your question here"
                        class="w-full px-12 py-3 border border-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
                    <div class="absolute left-4 top-1/2 transform -translate-y-1/2">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <div id="searchSpinner" class="absolute right-4 top-1/2 transform -translate-y-1/2 hidden">
                        <svg class="animate-spin h-5 w-5 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                            </circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                    </div>
                </form>
            </div>
        </div>

        {{-- QUESTION --}}
        <div id="faqContainer" data-aos="fade-up" class="flex justify-center pt-10 gap-5">
            <div class="w-full max-w-6xl space-y-4">
                {{-- FAQ items will be inserted here --}}
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    let searchTimer;

$(document).ready(function() {
    // Initial load of FAQs
    searchFAQs('');

    $('#searchInput').on('input', function() {
        const query = $(this).val();

        // Clear previous timer
        clearTimeout(searchTimer);

        // Show spinner
        $('#searchSpinner').removeClass('hidden');

        // Set new timer for 500ms delay
        searchTimer = setTimeout(() => {
            searchFAQs(query);
        }, 500);
    });
});

function searchFAQs(query) {
    $.ajax({
        url: '{{ route("faq.search") }}',
        method: 'POST',
        data: {
            _token: '{{ csrf_token() }}',
            search: query
        },
        success: function(response) {
            // Hide spinner
            $('#searchSpinner').addClass('hidden');

            if (response.success) {
                const container = $('#faqContainer > div');
                container.empty();

                if (response.data.length === 0) {
                    container.append(`
                        <div class="text-center text-gray-500 py-8">
                            No FAQ found matching your search
                        </div>
                    `);
                    return;
                }

                response.data.forEach(faq => {
                    container.append(`
                        <div x-data="{ open: false }"
                             class="rounded-lg p-4 cursor-pointer transition-colors duration-300"
                             :class="{ 'bg-gradient-radial from-[#80439a] to-[#2c3177] text-white': open,
                                     'bg-gradient-radial from-[#80439a80] to-[#2c317780]': !open }"
                             @click="open = !open">
                            <div class="flex justify-between items-center">
                                <p class="font-semibold italic">${faq.question}</p>
                                <span x-text="open ? '-' : '+'"
                                      :class="{ 'text-white': open, 'text-[#f05426]': !open }"
                                      class="text-5xl font-medium"></span>
                            </div>
                            <div x-show="open" class="mt-2 text-sm">${faq.answer}</div>
                        </div>
                    `);
                });
            }
        },
        error: function(xhr, status, error) {
            // Hide spinner
            $('#searchSpinner').addClass('hidden');

            console.error('Search failed:', error);
            $('#faqContainer > div').html(`
                <div class="text-center text-red-500 py-8">
                    An error occurred while searching. Please try again.
                </div>
            `);
        }
    });
}
</script>
@endpush