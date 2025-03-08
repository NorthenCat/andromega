@extends('layout')
@section('content')
<div class="lg:px-28 px-5 bg-cover bg-no-repeat bg-center min-h-screen"
     style="background-image: url('{{ asset('storage/bg_putih_1-8.png') }}');">
    <div class="flex justify-center items-center min-h-screen pt-5">
        <div class="lg:flex lg:flex-row md:justify-between justify-center items-center">
            <img src="{{ asset('storage/gambar_tab.png') }}" alt="asset" class="lg:w-3/6 w-full block lg:hidden">
            <div class="gap-10 justify-center items-center">
                <h1 class="text-3xl font-bold italic">Bersiaplah untuk level baru!</h1>
                <h1 class="text-xl max-w-md mt-10">
                    Andromega hadir dengan solusi digital 
                    yang bikin bisnis kamu lebih simpel, 
                    cepat, dan efisien.
                </h1>
                <button type="button" class="mt-10">
                    <div class="w-full bg-[#f05426] text-white rounded-full text-lg font-normal pr-2 text-center flex">
                        <div class="bg-gradient-to-r from-[#2c3177] to-[#80439a] rounded-full py-3 px-5">
                            <a href="#" class="block w-full lg:p-1">
                                Yuk, Mulai Sekarang!
                            </a>
                        </div>
                        <div class="h-10 w-10 flex items-center justify-center my-auto mx-2">
                            <svg class="w-10 h-10" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(-45)"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-2.4" y="-2.4" width="28.80" height="28.80" rx="14.4" fill="#ffffff" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6.99811 10.2467L7.43298 11.0077C7.70983 11.4922 7.84825 11.7344 7.84825 12C7.84825 12.2656 7.70983 12.5078 7.43299 12.9923L7.43298 12.9923L6.99811 13.7533C5.75981 15.9203 5.14066 17.0039 5.62348 17.5412C6.1063 18.0785 7.24961 17.5783 9.53623 16.5779L15.8119 13.8323C17.6074 13.0468 18.5051 12.654 18.5051 12C18.5051 11.346 17.6074 10.9532 15.8119 10.1677L9.53624 7.4221C7.24962 6.42171 6.1063 5.92151 5.62348 6.45883C5.14066 6.99615 5.75981 8.07966 6.99811 10.2467Z" fill="#222222"></path> </g></svg>
                        </div>
                    </div>
                </button>
            </div> 
            <img src="{{ asset('storage/gambar_tab.png') }}" alt="asset" class="lg:w-3/6 w-full hidden lg:block">
        </div>
    </div>
</div>
