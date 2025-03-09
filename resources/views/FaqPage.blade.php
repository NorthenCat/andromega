@extends('layout')
@section('content')
    <div class="lg:px-28 px-5 bg-cover bg-no-repeat bg-center min-h-screen relative overflow-visible"
    style="background-image: url('{{ asset('storage/bg_putih_1-8.png') }}');">
    <div class="justify-center lg:pt-40 pt-28 relative z-10">
        <div class="flex justify-center mx-10">
            <div class="text-center">
                <h1 class="lg:text-5xl text-3xl font-normal text-[#80439a] my-10">FAQ~</h1>
                <p class="text-black text-3xl">
                    <span class="font-bold italic">Question?</span> Find here
                </p>
            </div>
        </div>
        <div class="flex justify-center pt-10 gap-5">
            <div class="w-full max-w-6xl space-y-4">
                <div x-data="{ open: false }" class="rounded-lg p-4 cursor-pointer transition-colors duration-300" 
                :class="{ 'bg-gradient-radial from-[#80439a] to-[#2c3177] text-white': open,
                'bg-gradient-radial from-[#80439a80] to-[#2c317780]': !open 
                }" 
                @click="open = !open">
               <div class="flex justify-between items-center">
                   <p class="font-semibold italic">Bagaimana Andromega memastikan kualitas layanan yang diberikan?</p>
                   <span x-text="open ? '-' : '+'" :class="{ 'text-white': open, 'text-[#f05426]': !open }" class="text-5xl font-medium"></span>
               </div>
               <div x-show="open" class="mt-2 text-sm">Isi jawaban disini</div>
            </div>
            <div class="w-full max-w-6xl space-y-4">
                <div x-data="{ open: false }" class="rounded-lg p-4 cursor-pointer transition-colors duration-300" 
                :class="{ 'bg-gradient-radial from-[#80439a] to-[#2c3177] text-white': open,
                'bg-gradient-radial from-[#80439a80] to-[#2c317780]': !open 
                }" 
                @click="open = !open">
               <div class="flex justify-between items-center">
                   <p class="font-semibold italic">Bagaimana Andromega memastikan kualitas layanan yang diberikan?</p>
                   <span x-text="open ? '-' : '+'" :class="{ 'text-white': open, 'text-[#f05426]': !open }" class="text-5xl font-medium"></span>
               </div>
               <div x-show="open" class="mt-2 text-sm">Isi jawaban disini</div>
            </div>
            <div class="w-full max-w-6xl space-y-4">
                <div x-data="{ open: false }" class="rounded-lg p-4 cursor-pointer transition-colors duration-300" 
                :class="{ 'bg-gradient-radial from-[#80439a] to-[#2c3177] text-white': open,
                'bg-gradient-radial from-[#80439a80] to-[#2c317780]': !open 
                }" 
                @click="open = !open">
               <div class="flex justify-between items-center">
                   <p class="font-semibold italic">Bagaimana Andromega memastikan kualitas layanan yang diberikan?</p>
                   <span x-text="open ? '-' : '+'" :class="{ 'text-white': open, 'text-[#f05426]': !open }" class="text-5xl font-medium"></span>
               </div>
               <div x-show="open" class="mt-2 text-sm">Isi jawaban disini</div>
            </div>
            <div class="w-full max-w-6xl space-y-4">
                <div x-data="{ open: false }" class="rounded-lg p-4 cursor-pointer transition-colors duration-300" 
                :class="{ 'bg-gradient-radial from-[#80439a] to-[#2c3177] text-white': open,
                'bg-gradient-radial from-[#80439a80] to-[#2c317780]': !open 
                }" 
                @click="open = !open">
               <div class="flex justify-between items-center">
                   <p class="font-semibold italic">Bagaimana Andromega memastikan kualitas layanan yang diberikan?</p>
                   <span x-text="open ? '-' : '+'" :class="{ 'text-white': open, 'text-[#f05426]': !open }" class="text-5xl font-medium"></span>
               </div>
               <div x-show="open" class="mt-2 text-sm">Isi jawaban disini</div>
            </div>
        </div>
    </div>
    </div>
@endsection