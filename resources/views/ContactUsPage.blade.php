@extends('layout')
@section('content')

<div class="lg:px-28 px-5 bg-cover bg-no-repeat bg-center min-h-screen relative overflow-visible"
    style="background-image: url('{{ asset('storage/assets/bg_ungu-8.png') }}');">
    <img src="{{ asset('storage/assets/gambar_cs.png') }}" alt="" srcset=""
        class="xl:w-5/12 w-1/2 absolute xl:-top-24 lg:-top-14 right-20 z-0 hidden md:block">
    <div class="justify-between lg:pt-40 pt-28 relative z-10">
        <div class="flex justify-between mx-10">
            <div class="">
                <h1 class="lg:text-5xl text-3xl font-bold text-white my-10">Hubungi Kami</h1>
                <p class="text-white text-xl">
                    Ingin terhubung dengan kami? Kami ingin mendengar dari Anda. <br>
                    Berikut adalah cara untuk menghubungi kami.
                </p>
            </div>
        </div>
        <div class="flex flex-wrap justify-center pt-10 gap-5 z-10">
            {{-- card --}}
            <div class="flex-1 basis-full md:basis-2/5 min-h-[400px] my-5 mx-10 md:p-12 p-5 md:px-10 px-5 bg-white rounded-3xl bg-cover bg-no-repeat shadow-lg text-center"
                style="background-image: url('{{ asset('storage/assets/bg_card.png') }}');">
                <div class="w-16 h-16 mx-auto my-5">
                    <svg class="w-16 h-16" viewBox="0 0 15 15" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <title>call [#192]</title>
                            <desc>Created with Sketch.</desc>
                            <defs> </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Dribbble-Light-Preview" transform="translate(-103.000000, -7321.000000)"
                                    fill="#000000">
                                    <g id="icons" transform="translate(56.000000, 160.000000)">
                                        <path
                                            d="M61.7302966,7173.99596 C61.2672966,7175.40296 59.4532966,7176.10496 58.1572966,7175.98796 C56.3872966,7175.82796 54.4612966,7174.88896 52.9992966,7173.85496 C50.8502966,7172.33496 48.8372966,7169.98396 47.6642966,7167.48896 C46.8352966,7165.72596 46.6492966,7163.55796 47.8822966,7161.95096 C48.3382966,7161.35696 48.8312966,7161.03996 49.5722966,7161.00296 C50.6002966,7160.95296 50.7442966,7161.54096 51.0972966,7162.45696 C51.3602966,7163.14196 51.7112966,7163.84096 51.9072966,7164.55096 C52.2742966,7165.87596 50.9912966,7165.93096 50.8292966,7167.01396 C50.7282966,7167.69696 51.5562966,7168.61296 51.9302966,7169.09996 C52.6632966,7170.05396 53.5442966,7170.87696 54.5382966,7171.50296 C55.1072966,7171.86196 56.0262966,7172.50896 56.6782966,7172.15196 C57.6822966,7171.60196 57.5872966,7169.90896 58.9912966,7170.48196 C59.7182966,7170.77796 60.4222966,7171.20496 61.1162966,7171.57896 C62.1892966,7172.15596 62.1392966,7172.75396 61.7302966,7173.99596 C61.4242966,7174.92396 62.0362966,7173.06796 61.7302966,7173.99596"
                                            id="call-[#192]"> </path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <h2 class="text-lg font-bold text-gray-900 mb-10">Bicara dengan Tim Sales</h2>
                <p class="text-gray-600 mt-2 mb-4">
                    Tertarik dengan layanan Andromega? Angkat telepon Anda dan bicaralah langsung dengan tim sales kami
                    untuk mendapatkan informasi lebih lanjut.
                </p>
                <button type="button" class="mt-10">
                    <div
                        class="w-full bg-[#f05426] text-white rounded-full text-lg font-normal pr-2 text-center flex items-center justify-center">
                        <div class="bg-gradient-radial from-[#80439a] to-[#2c3177] rounded-full py-3 px-5">
                            <a href="#" class="block w-full lg:p-1">
                                Hubungi Sales
                            </a>
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
            {{-- Card --}}
            <div class="flex-1 basis-full md:basis-2/5 min-h-[400px]  my-5 mx-10 md:p-12 p-5 md:px-10 px-5 bg-white rounded-3xl bg-cover bg-no-repeat shadow-lg text-center"
                style="background-image: url('{{ asset('storage/assets/bg_card.png') }}');">
                <div class="w-16 h-16 mx-auto my-5">
                    <svg class="w-16 h-16" fill="#000000" height="200px" width="200px" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 512 512" xml:space="preserve">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <g>
                                    <path
                                        d="M283.826,0H50.091C22.473,0,0.005,22.467,0.005,50.086v166.953c0,27.619,22.467,50.086,50.086,50.086h16.695v50.086 c0,14.843,18.005,22.298,28.499,11.804l61.89-61.89h126.65c27.618,0,50.086-22.467,50.086-50.086V50.086 C333.912,22.467,311.444,0,283.826,0z M100.177,150.258c-9.22,0-16.695-7.475-16.695-16.695s7.475-16.695,16.695-16.695 c9.22,0,16.695,7.475,16.695,16.695S109.397,150.258,100.177,150.258z M166.958,150.258c-9.22,0-16.695-7.475-16.695-16.695 s7.475-16.695,16.695-16.695c9.22,0,16.695,7.475,16.695,16.695S176.179,150.258,166.958,150.258z M233.74,150.258 c-9.22,0-16.695-7.475-16.695-16.695s7.475-16.695,16.695-16.695s16.695,7.475,16.695,16.695S242.96,150.258,233.74,150.258z">
                                    </path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M461.909,178.083h-94.607v38.956c0,43.807-33.927,79.815-76.882,83.192c2.805,2.986,4.536,6.994,4.536,11.415 c0,9.22-7.475,16.695-16.695,16.695s-16.695-7.475-16.695-16.695c0-4.282,1.626-8.175,4.276-11.13h-87.753v94.607 c0,27.603,22.483,50.086,50.086,50.086h126.662l61.883,61.884c10.55,10.548,28.494,2.927,28.494-11.798v-50.086h16.695 c27.603,0,50.086-22.483,50.086-50.086V228.169C511.995,200.567,489.511,178.083,461.909,178.083z M345.042,328.341 c-9.22,0-16.695-7.475-16.695-16.695c0-9.22,7.475-16.695,16.695-16.695s16.695,7.475,16.695,16.695 C361.737,320.866,354.262,328.341,345.042,328.341z M411.823,328.341c-9.22,0-16.695-7.475-16.695-16.695 c0-9.22,7.475-16.695,16.695-16.695s16.695,7.475,16.695,16.695C428.518,320.866,421.043,328.341,411.823,328.341z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <h2 class="text-lg font-bold text-gray-900 mb-10">Hubungi Layaan Pelanggan</h2>
                <p class="text-gray-600 mt-2 mb-4">
                    Butuh bantuan? Tim dukungan Andromega selalu siap membantu Anda. Jangan ragu untuk menghubungi kami!
                </p>
                <button type="button" class="mt-10">
                    <div
                        class="w-full bg-[#f05426] text-white rounded-full text-lg font-normal pr-2 text-center flex items-center justify-center">
                        <div class="bg-gradient-radial from-[#80439a] to-[#2c3177] rounded-full py-3 px-5">
                            <a href="#" class="block w-full lg:p-1">
                                Hubungi Support
                            </a>
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
@endsection
