@extends('layout')
@section('content')
<div class="lg:px-28 px-5 bg-no-repeat bg-white bg-center p-4 relative pt-40 py-10">
    <div class="xl:flex items-center gap-10">
        <img data-aos="fade-right" src="{{ asset('storage/assets/service_top.jpg') }}" alt="" srcset="">
        <div data-aos="fade-left" class="mt-5 md:mt-0">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-900">
                Tersedia beragam layanan dan solusi yang ditawarkan oleh Andromega.
            </h2>

            <p class="text-gray-700 mb-6">
                Kami menawarkan solusi untuk bisnis, komunitas, dan merek, serta produk dan layanan yang meningkatkan
                kenyamanan dan kemajuan Anda.
            </p>
        </div>
    </div>
</div>
<div class="flex flex-col space-y-8 md:space-y-0 pt-16 md:pt-32 bg-[#000022]">
    @foreach($layanan as $data)
    <div class="lg:px-28 px-5 relative">
        <div data-aos="fade-up" class="container mx-auto px-4">
            <div class="flex flex-col items-center justify-center text-center text-white">
                <!-- Number indicator -->
                <div class="flex items-center justify-center w-full my-8">
                    <!-- Left line with diamond -->
                    <div class="flex-grow relative">
                        <div class="h-0.5 w-full bg-teal-400"></div>
                        <div class="absolute left-0 top-1/2 -translate-y-1/2 w-2 h-2 bg-teal-400 rotate-45"></div>
                    </div>

                    <!-- Number in circle -->
                    <div class="flex items-center justify-center w-16 h-16 rounded-full border-2 border-teal-400 mx-2">
                        <span class="text-3xl font-bold text-teal-400">{{$loop->iteration}}</span>
                    </div>

                    <!-- Right line with diamond -->
                    <div class="flex-grow relative">
                        <div class="h-0.5 w-full bg-teal-400"></div>
                        <div class="absolute right-0 top-1/2 -translate-y-1/2 w-2 h-2 bg-teal-400 rotate-45"></div>
                    </div>
                </div>
                {{-- Image --}}
                <div class="w-full relative">
                    <!-- Mobile Image -->
                    <div class="block md:hidden">
                        <img loading="lazy" src="{{ asset('storage/'.$data->image) }}" alt="Service"
                            class="w-full h-auto rounded-lg">
                    </div>

                    <!-- Background Image Container (shows only on md screens and up) -->
                    <div class="hidden md:block w-full min-h-screen rounded-lg bg-center bg-no-repeat"
                        style="background-image: url('{{ asset('storage/'.$data->image) }}');">
                        <h2 class="text-3xl font-semibold mb-4">{{$data->nama}}</h2>
                        <div class="max-w-6xl mx-auto">
                            <p class="text-sm md:text-base leading-relaxed">
                                {!!$data->deskripsi!!}
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Section heading and description -->
                <div class="mt-8 block md:hidden">
                    <h2 class="text-3xl font-semibold mb-4">{{$data->nama}}</h2>
                    <div class="max-w-6xl mx-auto">
                        <p class="text-sm md:text-base leading-relaxed">
                            {!!$data->deskripsi!!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection