@extends('layout')
@section('content')
<div class="lg:px-28 px-5 bg-cover bg-repeat bg-center min-h-screen relative"
    style="background-image: linear-gradient(to bottom right, rgba(25,38,78,255), rgba(45,49,117,255), rgba(61,53,110,0.9), rgba(103,49,122,0.8)  ), url('{{ asset('storage/assets/bg_putih_polos-8.png') }}');">
    <div class="justify-center lg:pt-40 pt-28 relative z-10">
        <div class="flex justify-center mx-10">
            <div data-aos="zoom-in" class="text-center max-w-6xl">
                <h1 class="lg:text-5xl text-3xl font-semibold text-white italic my-10">Dapatkan Paket Terbaik & Nikmati
                    Layanan
                    MegaLink Sekarang!
                </h1>
                <p class="text-white text-xl">Pilih paket terbaik yang sesuai dengan kebutuhan Anda dan nikmati layanan
                    terbaik dari Andromega!</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-24 place-items-strech max-w-7xl mx-auto px-4 my-10"">
            <!-- Card 1 -->
            <div data-aos="fade-up" data-aos-delay="100" class=" w-full h-full max-w-sm max-h-xl rounded-3xl overflow-hidden bg-white">
                <!-- White Card Section -->
                <div class="m-4 p-5 rounded-2xl bg-cover bg-no-repeat bg-center"
                                style="background-image: url('{{ asset('storage/assets/bg_card_ungu.png') }}');">
                                <div class="flex justify-between items-start">
                                    <div class="text-white">
                                        <p class="font-medium">Bulanan</p>
                                        <h2 class="text-5xl font-bold italic mt-1">166.500</h2>
                                        <p class="mt-1">15 Mbps</p>
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
                                <!-- Feature 1 -->
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
                                    <p>Cocok untuk browsing dan media sosial</p>
                                </div>

                                <!-- Feature 2 -->
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
                                    <p>Streaming video HD tanpa buffering</p>
                                </div>

                                <!-- Feature 3 -->
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
                                    <p>Bisa digunakan untuk 2-3 perangkat</p>
                                </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div data-aos="fade-up" data-aos-delay="150" class="w-full h-full max-w-sm max-h-xl rounded-3xl overflow-hidden bg-white">
                <!-- White Card Section -->
                <div class="m-4 p-5 rounded-2xl bg-cover bg-no-repeat bg-center"
                    style="background-image: url('{{ asset('storage/assets/bg_card_ungu.png') }}');">
                    <div class="flex justify-between items-start">
                        <div class="text-white">
                            <p class="font-medium">Bulanan</p>
                            <h2 class="text-5xl font-bold italic mt-1">205.350</h2>
                            <p class="mt-1">25 Mbps</p>
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
                    <!-- Feature 1 -->
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
                        <p>Browsing, media sosial, dan
                            streaming lebih lancar</p>
                    </div>

                    <!-- Feature 2 -->
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
                        <p>Streaming Full HD tanpa gangguan</p>
                    </div>

                    <!-- Feature 3 -->
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
                        <p>Bisa digunakan untuk 3-5 perangkat </p>
                    </div>

                    <!-- Feature 4 -->
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
                        <p>Cukup untuk gaming online dengan
                            latensi stabil</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div data-aos="fade-up" data-aos-delay="200" class="w-full h-full max-w-sm max-h-xl rounded-3xl overflow-hidden bg-white">
                <!-- White Card Section -->
                <div class="m-4 p-5 rounded-2xl bg-cover bg-no-repeat bg-center"
                    style="background-image: url('{{ asset('storage/assets/bg_card_ungu.png') }}');">
                    <div class="flex justify-between items-start">
                        <div class="text-white">
                            <p class="font-medium">Bulanan</p>
                            <h2 class="text-5xl font-bold italic mt-1">250.000</h2>
                            <p class="mt-1">30 Mbps</p>
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
                    <!-- Feature 1 -->
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
                        <p>Cocok untuk keluarga kecil atau
                            kantor kecil</p>
                    </div>

                    <!-- Feature 2 -->
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
                        <p>Streaming Full HD dan video call
                            tanpa lag</p>
                    </div>

                    <!-- Feature 3 -->
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
                        <p>Bisa digunakan untuk 4-6 perangkat</p>
                    </div>

                    <!-- Feature 4 -->
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
                        <p>Stabil untuk gaming online dan
                            kerja remote </p>
                    </div>

                    <!-- Feature 5 -->
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
                        <p>Akses gratis ke 40 channel TV untuk
                            pengalaman hiburan yang
                            lebih lengkap.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div data-aos="fade-up" data-aos-delay="250" class="w-full h-full max-w-sm max-h-xl rounded-3xl overflow-hidden bg-white">
                <!-- White Card Section -->
                <div class="m-4 p-5 rounded-2xl bg-cover bg-no-repeat bg-center"
                    style="background-image: url('{{ asset('storage/assets/bg_card_ungu.png') }}');">
                    <div class="flex justify-between items-start">
                        <div class="text-white">
                            <p class="font-medium">Bulanan</p>
                            <h2 class="text-5xl font-bold italic mt-1">250.000</h2>
                            <p class="mt-1">30 Mbps</p>
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
                    <!-- Feature 1 -->
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
                        <p>Cocok untuk keluarga kecil atau
                            kantor kecil</p>
                    </div>

                    <!-- Feature 2 -->
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
                        <p>Streaming Full HD dan video call
                            tanpa lag</p>
                    </div>

                    <!-- Feature 3 -->
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
                        <p>Bisa digunakan untuk 4-6 perangkat</p>
                    </div>

                    <!-- Feature 4 -->
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
                        <p>Stabil untuk gaming online dan
                            kerja remote </p>
                    </div>

                    <!-- Feature 5 -->
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
                        <p>Akses gratis ke 40 channel TV untuk
                            pengalaman hiburan yang
                            lebih lengkap.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div data-aos="fade-up" data-aos-delay="300" class="w-full h-full max-w-sm max-h-xl rounded-3xl overflow-hidden bg-white">
                <!-- White Card Section -->
                <div class="m-4 p-5 rounded-2xl bg-cover bg-no-repeat bg-center"
                    style="background-image: url('{{ asset('storage/assets/bg_card_ungu.png') }}');">
                    <div class="flex justify-between items-start">
                        <div class="text-white">
                            <p class="font-medium">Bulanan</p>
                            <h2 class="text-5xl font-bold italic mt-1">250.000</h2>
                            <p class="mt-1">30 Mbps</p>
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
                    <!-- Feature 1 -->
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
                        <p>Cocok untuk keluarga kecil atau
                            kantor kecil</p>
                    </div>

                    <!-- Feature 2 -->
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
                        <p>Streaming Full HD dan video call
                            tanpa lag</p>
                    </div>

                    <!-- Feature 3 -->
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
                        <p>Bisa digunakan untuk 4-6 perangkat</p>
                    </div>

                    <!-- Feature 4 -->
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
                        <p>Stabil untuk gaming online dan
                            kerja remote </p>
                    </div>

                    <!-- Feature 5 -->
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
                        <p>Akses gratis ke 40 channel TV untuk
                            pengalaman hiburan yang
                            lebih lengkap.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div data-aos="fade-up" data-aos-delay="350" class="w-full h-full max-w-sm max-h-xl rounded-3xl overflow-hidden bg-white">
                <!-- White Card Section -->
                <div class="m-4 p-5 rounded-2xl bg-cover bg-no-repeat bg-center"
                    style="background-image: url('{{ asset('storage/assets/bg_card_ungu.png') }}');">
                    <div class="flex justify-between items-start">
                        <div class="text-white">
                            <p class="font-medium">Bulanan</p>
                            <h2 class="text-5xl font-bold italic mt-1">250.000</h2>
                            <p class="mt-1">30 Mbps</p>
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
                    <!-- Feature 1 -->
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
                        <p>Cocok untuk keluarga kecil atau
                            kantor kecil</p>
                    </div>

                    <!-- Feature 2 -->
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
                        <p>Streaming Full HD dan video call
                            tanpa lag</p>
                    </div>

                    <!-- Feature 3 -->
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
                        <p>Bisa digunakan untuk 4-6 perangkat</p>
                    </div>

                    <!-- Feature 4 -->
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
                        <p>Stabil untuk gaming online dan
                            kerja remote </p>
                    </div>

                    <!-- Feature 5 -->
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
                        <p>Akses gratis ke 40 channel TV untuk
                            pengalaman hiburan yang
                            lebih lengkap.
                        </p>
                    </div>
                </div>
            </div>

    </div>
    <div class="flex justify-center py-10">
        <img src="{{ asset('storage/assets/logo_megalink_putih.png') }}" alt="MegaLink" class="h-14">
    </div>
</div>
</div>
@endsection
