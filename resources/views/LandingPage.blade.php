@extends('layout')
@section('content')

{{-- HOME --}}
<div class="lg:px-28 px-5 bg-cover bg-no-repeat bg-center min-h-screen"
    style="background-image: url('{{ asset('storage/assets/bg_putih_1-8.png') }}');">
    <div class="flex justify-center items-center min-h-screen pt-5">
        <div class="lg:flex lg:flex-row lg:justify-between justify-center items-center mb-10">
            <img loading="lazy" src="{{ asset('storage/assets/gambar_tab.png') }}" alt="asset"
                class="lg:w-3/6 w-full block lg:hidden" data-aos="fade-left">
            <div data-aos="fade-right"
                class="flex flex-col justify-center items-center md:items-start space-y-10 md:pl-16">
                <h1 class="text-2xl text-center md:text-start md:text-5xl font-bold italic">Bersiaplah untuk level baru!
                </h1>
                <h1 class="text-base text-center md:text-start md:text-xl max-w-md">
                    Andromega hadir dengan solusi digital
                    yang bikin bisnis kamu lebih simpel,
                    cepat, dan efisien.
                </h1>
                <img src="{{ asset('storage/assets/logo_megalink_hitam.png') }}" alt="MegaLink" class="w-40">

                <button type="button" class="">
                    <a href="#paket-hero"
                        class="w-full bg-[#f05426] text-white rounded-full text-lg font-normal pr-2 text-center flex items-center justify-center smooth-scroll"
                        onclick="event.preventDefault(); const element = document.querySelector('#paket-hero'); const elementRect = element.getBoundingClientRect(); const absoluteElementTop = elementRect.top + window.pageYOffset; const middle = absoluteElementTop - (window.innerHeight / 2) + 360; window.scrollTo({top: middle, behavior: 'smooth'});">

                        <div class="bg-gradient-radial from-[#80439a] to-[#2c3177] rounded-full py-3 px-5">
                            <p class="block w-full lg:p-1 text-sm lg:text-base">
                                Yuk, Mulai Sekarang!
                            </p>
                        </div>
                        <div class="h-10 w-10 flex items-center justify-center my-auto mx-2">
                            <svg class="w-10 h-10" viewBox="-2.4 -2.4 28.80 28.80" fill="none"
                                xmlns="http://www.w3.org/2000/svg" transform="rotate(-45)">
                                <g id="SVGRepo_bgCarrier" stroke-width="0">
                                    <rect x="-2.4" y="-2.4" width="28.80" height="28.80" rx="14.4" fill="#ffffff"
                                        strokewidth="0"></rect>
                                </g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M6.99811 10.2467L7.43298 11.0077C7.70983 11.4922 7.84825 11.7344 7.84825 12C7.84825 12.2656 7.70983 12.5078 7.43299 12.9923L7.43298 12.9923L6.99811 13.7533C5.75981 15.9203 5.14066 17.0039 5.62348 17.5412C6.1063 18.0785 7.24961 17.5783 9.53623 16.5779L15.8119 13.8323C17.6074 13.0468 18.5051 12.654 18.5051 12C18.5051 11.346 17.6074 10.9532 15.8119 10.1677L9.53624 7.4221C7.24962 6.42171 6.1063 5.92151 5.62348 6.45883C5.14066 6.99615 5.75981 8.07966 6.99811 10.2467Z"
                                        fill="#222222"></path>
                                </g>
                            </svg>
                        </div>
                    </a>
                </button>
            </div>
            <img src="{{ asset('storage/assets/gambar_tab.png') }}" alt="asset" class="lg:w-3/5 w-full hidden lg:block">
        </div>
    </div>
</div>

{{-- PAKET LAYANAN --}}
<div class="px-5 bg-cover bg-no-repeat bg-center flex items-center justify-center" id="paket-hero"
    style="background-image: url('{{ asset('storage/assets/bg_putih_polos-8.png') }}');">
    <div class="container mx-auto">
        <div class="flex flex-col justify-center">
            {{-- Header Section --}}
            <div data-aos="zoom-in"
                class="w-full flex flex-col md:flex-row md:justify-between items-center px-5 py-6 md:py-12">
                <h1 class="text-2xl md:text-3xl text-center md:text-left mb-5 md:mb-0">
                    Harga <span class="font-bold italic">Paket</span>
                </h1>
                <button type="button" class="md:w-auto" onclick="window.location.href='{{ route('paket') }}'">
                    <div
                        class="bg-[#f05426] text-white rounded-full md:text-lg text-normal font-normal pr-2 text-center flex items-center justify-center md:justify-start">
                        <div class="bg-gradient-radial from-[#80439a] to-[#2c3177] rounded-full py-3 px-12">
                            <a href="{{ route('paket') }}" class="block w-full lg:p-1">
                                Cek paket lainnya
                            </a>
                        </div>
                        <div class="md:h-10 md:w-10 h-8 w-8 flex items-center justify-center my-auto mx-2">
                            <svg class="w-10 h-10" viewBox="-2.4 -2.4 28.80 28.80" fill="none"
                                xmlns="http://www.w3.org/2000/svg" transform="rotate(-45)">
                                <g id="SVGRepo_bgCarrier" stroke-width="0">
                                    <rect x="-2.4" y="-2.4" width="28.80" height="28.80" rx="14.4" fill="#ffffff"
                                        strokewidth="0"></rect>
                                </g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M6.99811 10.2467L7.43298 11.0077C7.70983 11.4922 7.84825 11.7344 7.84825 12C7.84825 12.2656 7.70983 12.5078 7.43299 12.9923L7.43298 12.9923L6.99811 13.7533C5.75981 15.9203 5.14066 17.0039 5.62348 17.5412C6.1063 18.0785 7.24961 17.5783 9.53623 16.5779L15.8119 13.8323C17.6074 13.0468 18.5051 12.654 18.5051 12C18.5051 11.346 17.6074 10.9532 15.8119 10.1677L9.53624 7.4221C7.24962 6.42171 6.1063 5.92151 5.62348 6.45883C5.14066 6.99615 5.75981 8.07966 6.99811 10.2467Z"
                                        fill="#222222"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 place-items-center">
                @foreach($paket as $data)
                <!-- Card 1 -->
                <div data-aos="zoom-in-up" data-aos-delay="100"
                    class="w-full h-full max-w-sm rounded-3xl overflow-hidden bg-gradient-to-br from-[#1C2B58] via-[#2C3177] via-[#4C2B6F] to-[#80439A]">
                    <!-- White Card Section -->
                    <div class="relative m-4 p-5 rounded-2xl bg-cover bg-no-repeat bg-center"
                        style="background-image: url('{{ asset('storage/assets/bg_card.png') }}');">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-800 font-medium capitalize">{{$data->tipe_paket}}</p>
                                <h2 class="text-5xl font-black italic mt-1">{{number_format($data->harga, 0, ',', '.')}}
                                </h2>
                                <p class="text-gray-700 mt-1">{{$data->kecepatan}}</p>
                            </div>
                            <div
                                class="bg-red-500 w-8 h-8 md:h-10 md:w-10 rounded-full flex items-center justify-center text-white absolute right-2 top-3">
                                <svg viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    transform="rotate(-45)" stroke="#ffffff">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0">
                                        <rect x="-2.4" y="-2.4" width="28.80" height="28.80" rx="14.4" fill="#f05426"
                                            strokewidth="0"></rect>
                                    </g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                    </g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M6.99811 10.2467L7.43298 11.0077C7.70983 11.4922 7.84825 11.7344 7.84825 12C7.84825 12.2656 7.70983 12.5078 7.43299 12.9923L7.43298 12.9923L6.99811 13.7533C5.75981 15.9203 5.14066 17.0039 5.62348 17.5412C6.1063 18.0785 7.24961 17.5783 9.53623 16.5779L15.8119 13.8323C17.6074 13.0468 18.5051 12.654 18.5051 12C18.5051 11.346 17.6074 10.9532 15.8119 10.1677L9.53624 7.4221C7.24962 6.42171 6.1063 5.92151 5.62348 6.45883C5.14066 6.99615 5.75981 8.07966 6.99811 10.2467Z"
                                            fill="#ffffff"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Features Section -->
                    <div class="p-6 text-white space-y-4">
                        @php
                        $dom = new DOMDocument();
                        libxml_use_internal_errors(true);
                        $dom->loadHTML($data->deskripsi);
                        libxml_clear_errors();

                        $features = [];
                        $liElements = $dom->getElementsByTagName('li');
                        foreach ($liElements as $li) {
                        $features[] = $li->textContent;
                        }
                        @endphp
                        @foreach($features as $feature)
                        <div class="flex items-center space-x-3">
                            <div class="h-7 w-7 flex items-center justify-center my-auto mx-2">
                                <svg class="w-10 h-10" viewBox="-2.4 -2.4 28.80 28.80" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" transform="rotate(-45)">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0">
                                        <rect x="-2.4" y="-2.4" width="28.80" height="28.80" rx="14.4" fill="#ffffff"
                                            strokewidth="0"></rect>
                                    </g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                    </g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M6.99811 10.2467L7.43298 11.0077C7.70983 11.4922 7.84825 11.7344 7.84825 12C7.84825 12.2656 7.70983 12.5078 7.43299 12.9923L7.43298 12.9923L6.99811 13.7533C5.75981 15.9203 5.14066 17.0039 5.62348 17.5412C6.1063 18.0785 7.24961 17.5783 9.53623 16.5779L15.8119 13.8323C17.6074 13.0468 18.5051 12.654 18.5051 12C18.5051 11.346 17.6074 10.9532 15.8119 10.1677L9.53624 7.4221C7.24962 6.42171 6.1063 5.92151 5.62348 6.45883C5.14066 6.99615 5.75981 8.07966 6.99811 10.2467Z"
                                            fill="#222222"></path>
                                    </g>
                                </svg>
                            </div>
                            <p>{{$feature}}</p>
                        </div>
                        @endforeach
                    </div>

                    {{-- Pilih button --}}
                    <div class="flex justify-center mb-6 p-4">
                        <a href="{{$setting->contact_sales}}"
                            class="group relative text-white rounded-full text-lg font-medium text-center flex items-center justify-center w-full overflow-hidden transform hover:scale-105 transition-all duration-300 ease-out">

                            {{-- Animated background --}}
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-[#f05426] via-[#f3714a] to-[#ff6b3d] opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-full">
                            </div>

                            {{-- Main button content --}}
                            <div
                                class="relative bg-gradient-to-r from-[#f05426] to-[#f3714a] rounded-full py-4 px-8 w-full shadow-lg group-hover:shadow-xl transition-all duration-300 border border-white/20">
                                {{-- Shine effect --}}
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-700 ease-out">
                                </div>

                                <div class="relative flex items-center justify-center space-x-2">
                                    <span class="font-semibold tracking-wide">
                                        Pilih Paket
                                    </span>
                                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="flex justify-center p-4 md:p-8">
            <img src="{{ asset('storage/assets/logo_megalink_hitam.png') }}" alt="MegaLink" class="w-40">
        </div>
    </div>
</div>

{{-- LAYANAN UNGGULAN --}}
<div id="layananUnggulan" class="bg-cover bg-no-repeat bg-center min-h-screen items-center justify-center w-full"
    style="background-image: url('{{ asset('storage/assets/bg_putih_polos-8.png') }}');">
    <div class="container mx-auto">
        {{-- Logo Section --}}
        <div class="w-full flex justify-start pt-10 lg:px-25 p-5">
            <img src="{{ asset('storage/assets/logo_andromega_hitam.png') }}" alt="MegaLink" class="w-48">
        </div>
        {{-- Title Section --}}
        <div data-aos="zoom-in" class="flex-col justify-center pt-8 md:pt-0 lg:px-25 p-5">
            <div class="flex flex-col items-center w-full mb-10">
                {{-- Header Section --}}
                <div class="w-full flex flex-col lg:flex-row lg:justify-between items-center my-5">
                    <h1 class="text-2xl md:text-3xl text-center md:text-left mb-5 md:mb-0">
                        <span class="font-bold italic">Layanan Unggulan</span> kami
                    </h1>
                    <button type="button" class="mt-10" onclick="window.location.href='{{ route('service') }}'">
                        <div
                            class="w-full bg-[#f05426] text-white rounded-full text-lg font-normal pr-2 text-center flex items-center justify-center">
                            <div class="bg-gradient-radial from-[#80439a] to-[#2c3177] rounded-full py-3 px-5">
                                <span class="block w-full lg:p-1">
                                    Cek Layanan lainnya
                                </span>
                            </div>
                            <div class="h-10 w-10 flex items-center justify-center my-auto mx-2">
                                <svg class="w-10 h-10" viewBox="-2.4 -2.4 28.80 28.80" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" transform="rotate(-45)">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0">
                                        <rect x="-2.4" y="-2.4" width="28.80" height="28.80" rx="14.4" fill="#ffffff"
                                            strokewidth="0"></rect>
                                    </g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M6.99811 10.2467L7.43298 11.0077C7.70983 11.4922 7.84825 11.7344 7.84825 12C7.84825 12.2656 7.70983 12.5078 7.43299 12.9923L7.43298 12.9923L6.99811 13.7533C5.75981 15.9203 5.14066 17.0039 5.62348 17.5412C6.1063 18.0785 7.24961 17.5783 9.53623 16.5779L15.8119 13.8323C17.6074 13.0468 18.5051 12.654 18.5051 12C18.5051 11.346 17.6074 10.9532 15.8119 10.1677L9.53624 7.4221C7.24962 6.42171 6.1063 5.92151 5.62348 6.45883C5.14066 6.99615 5.75981 8.07966 6.99811 10.2467Z"
                                            fill="#222222"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- Card Section --}}
    <div class="w-full">
        <div class="swiper layananSwiper">
            <div class="swiper-wrapper mb-24">
                {{-- CONTENT --}}
                @foreach ($layanan as $data)
                <div data-aos="zoom-in-up" data-aos-delay="150" class="swiper-slide flex justify-center">
                    <div class="">
                        <div class="card-wrapper h-[510px]" id="cardWrapper{{ $data->id }}">
                            {{-- BASE CARD --}}
                            <div class="card-front shadow-xl w-full min-h-[510px] max-w-sm rounded-3xl  bg-gradient-to-br from-[#1C2B58] via-[#2C3177] via-[#4C2B6F] to-[#80439A] p-4 flex flex-col cursor-pointer transition-all ease-in-out duration-300 place-items-stretch"
                                onclick="flipCard({{ $data->id }})" id="baseCard{{ $data->id }}">
                                <!-- Icon Section -->
                                <div class="flex-grow flex items-center justify-center py-12">
                                    <img src="{{ asset('storage/'.$data->icon) }}" alt="{{ $data->nama }}" class="w-60">
                                </div>
                                <!-- Text Card Section -->
                                <div class="container">
                                    <div class="card">
                                        <div class="card_image bg-cover">
                                            <img src="{{ asset('storage/assets/bg_card.png') }}" alt="" srcset="">
                                            <div
                                                class="flex flex-col justify-center items-start h-full p-4 relative z-10">
                                                <h3 class="break-words font-bold text-lg text-indigo-900">
                                                    {{$data->nama}}</h3>
                                            </div>
                                        </div>
                                        <div
                                            class="card_svg bg-gradient-to-br from-[#6a3988] via-[#6f3b8c] via-[#743e90 to-[#773f92]">
                                            <svg class="h-7 w-7" viewBox="-2.4 -2.4 28.80 28.80" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" transform="rotate(-45)"
                                                stroke="#ffffff">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0">
                                                    <rect x="-2.4" y="-2.4" width="28.80" height="28.80" rx="14.4"
                                                        fill="#f05426" strokewidth="0"></rect>
                                                </g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M6.99811 10.2467L7.43298 11.0077C7.70983 11.4922 7.84825 11.7344 7.84825 12C7.84825 12.2656 7.70983 12.5078 7.43299 12.9923L7.43298 12.9923L6.99811 13.7533C5.75981 15.9203 5.14066 17.0039 5.62348 17.5412C6.1063 18.0785 7.24961 17.5783 9.53623 16.5779L15.8119 13.8323C17.6074 13.0468 18.5051 12.654 18.5051 12C18.5051 11.346 17.6074 10.9532 15.8119 10.1677L9.53624 7.4221C7.24962 6.42171 6.1063 5.92151 5.62348 6.45883C5.14066 6.99615 5.75981 8.07966 6.99811 10.2467Z"
                                                        fill="#ffffff"></path>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- content --}}
                            <div class="card-back max-w-sm min-h-[510px] p-6 bg-gradient-to-br from-[#1C2B58] via-[#2C3177] via-[#4C2B6F] to-[#80439A] text-white rounded-3xl shadow-lg cursor-pointer"
                                onclick="flipCard({{ $data->id }})" id="detailedContent{{$data->id}}"">
                                <div class=" flex items-center justify-between mb-4">
                                <h2 class="text-lg font-semibold">{{$data->nama}}</h2>
                                <img src="{{ asset('storage/'. $data->icon) }}" alt="ISP" srcset="" class="w-16">
                            </div>
                            <h3 class="text-xl font-bold mb-2">{{$data->nama}}</h3>
                            <p class="text-sm leading-relaxed">
                                Sebagai penyedia layanan internet terkemuka (ISP), kami berkomitmen untuk
                                menyediakan solusi Teknologi Informasi yang objektif dan tidak memihak kepada
                                pelanggan kami. Kami menyadari bahwa keberhasilan bisnis pelanggan tergantung
                                pada keandalan dan kinerja sistem TI mereka. Oleh karena itu, kami menyampaikan
                                solusi dengan integritas dan komitmen untuk mencapai kepuasan maksimal melalui
                                layanan yang responsif dan dukungan pelanggan yang terbaik.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination py-5 mt-20"></div>
    </div>
</div>



@endsection
