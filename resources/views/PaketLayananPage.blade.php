@extends('layout')
@section('content')
<div class="lg:px-28 px-5 bg-cover bg-repeat bg-center min-h-screen relative"
    style="background-image: linear-gradient(150deg, #1e2756, #332e67, rgb(75, 52, 119,0.95), rgb(101, 57, 134,0.9), rgb(128, 61, 146,0.9)), url('{{ asset('storage/assets/bg_putih_polos-8.png') }}');">
    <div class="justify-center lg:pt-40 pt-28 relative z-10">
        <div class="flex justify-center">
            <div data-aos="zoom-in" class="text-center max-w-6xl">
                <h1 class="text-2xl md:text-3xl lg:text-5xl font-semibold text-white italic my-10">Dapatkan Paket
                    Terbaik
                    & Nikmati
                    Layanan
                    MegaLink Sekarang!
                </h1>
                <p class="text-white text-sm md:text-lg">Pilih paket terbaik yang sesuai dengan kebutuhan
                    Anda dan nikmati layanan
                    terbaik dari Andromega!</p>
            </div>
        </div>
        {{-- Card --}}
        <div
            class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-24 place-items-strech max-w-7xl mx-auto px-4 my-10">
            @foreach($paket as $data)
            <div data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 + 150 }}"
                class="w-full h-full max-w-sm max-h-xl rounded-3xl overflow-hidden bg-white">
                <!-- White Card Section -->
                <div class="m-4 p-5 rounded-2xl bg-cover bg-no-repeat bg-center"
                    style="background-image: url('{{ asset('storage/assets/bg_card_ungu.png') }}');">
                    <div class="flex justify-between items-start">
                        <div class="text-white">
                            <p class="font-medium capitalize">{{$data->tipe_paket}}</p>
                            <h2 class="text-5xl font-bold italic mt-1">{{number_format($data->harga, 0, ',', '.')}}</h2>
                            <p class="mt-1 italic">{{$data->kecepatan}}</p>
                        </div>
                        <div class="bg-red-500 h-10 w-10 rounded-full flex items-center justify-center text-white">
                            <svg viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg"
                                transform="rotate(-45)" stroke="#ffffff">
                                <g id="SVGRepo_bgCarrier" stroke-width="0">
                                    <rect x="-2.4" y="-2.4" width="28.80" height="28.80" rx="14.4" fill="#f05426"
                                        strokewidth="0"></rect>
                                </g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
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
                <div class="p-6 text-black space-y-4">
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
                            <svg class="h-7 w-7" viewBox="-2.4 -2.4 28.80 28.80" fill="none"
                                xmlns="http://www.w3.org/2000/svg" transform="rotate(-45)">
                                <g id="SVGRepo_bgCarrier" stroke-width="0">
                                    <rect x="-2.4" y="-2.4" width="28.80" height="28.80" rx="14.4" fill="#000000"
                                        strokewidth="0"></rect>
                                </g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M6.99811 10.2467L7.43298 11.0077C7.70983 11.4922 7.84825 11.7344 7.84825 12C7.84825 12.2656 7.70983 12.5078 7.43299 12.9923L7.43298 12.9923L6.99811 13.7533C5.75981 15.9203 5.14066 17.0039 5.62348 17.5412C6.1063 18.0785 7.24961 17.5783 9.53623 16.5779L15.8119 13.8323C17.6074 13.0468 18.5051 12.654 18.5051 12C18.5051 11.346 17.6074 10.9532 15.8119 10.1677L9.53624 7.4221C7.24962 6.42171 6.1063 5.92151 5.62348 6.45883C5.14066 6.99615 5.75981 8.07966 6.99811 10.2467Z"
                                        fill="#ffffff"></path>
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
        {{-- Logo --}}
        <div class="flex justify-center py-10">
            <img src="{{ asset('storage/assets/logo_megalink_putih.png') }}" alt="MegaLink" class="h-14">
        </div>
    </div>
</div>
@endsection
