@extends('layout')
@section('content')
<div class="lg:px-28 px-5 bg-cover bg-no-repeat bg-center min-h-screen relative overflow-visibles"
    style="background-image: url('{{ asset('storage/assets/bg_putih_1-8.png') }}');">
    <div class="justify-center lg:pt-40 pt-28 relative z-10">
        {{-- HEADER --}}
        <div class="flex justify-center mx-10">
            <div class="text-center">
                <h1 class="lg:text-5xl text-3xl font-normal text-[#80439a] my-10">FAQ~</h1>
                <p class="text-black text-3xl">
                    <span class="font-bold italic">Question?</span> Find here
                </p>
            </div>
        </div>

        <div class="flex justify-center pt-10">
            <div class="w-full max-w-6xl mx-auto">
                <form method="GET" class="relative">
                    <input type="text" name="search" value="" placeholder="Search your question here"
                        class="w-full px-12 py-3 border border-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
                    <div class="absolute left-4 top-1/2 transform -translate-y-1/2">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <button type="button" onclick="window.location.href='{{ route('faq') }}'"
                        class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>

        {{-- QUESTION --}}
        <div class="flex justify-center pt-10 gap-5">
            <div class="w-full max-w-6xl space-y-4">
                <div x-data="{ open: false }" class="rounded-lg p-4 cursor-pointer transition-colors duration-300"
                    :class="{ 'bg-gradient-radial from-[#80439a] to-[#2c3177] text-white': open,
                    'bg-gradient-radial from-[#80439a80] to-[#2c317780]': !open
                    }" @click="open = !open">
                        <div class="flex justify-between items-center">
                            <p class="font-semibold italic">Bagaimana Andromega memastikan kualitas layanan yang diberikan?
                            </p>
                            <span x-text="open ? '-' : '+'" :class="{ 'text-white': open, 'text-[#f05426]': !open }"
                                class="text-5xl font-medium"></span>
                        </div>
                        <div x-show="open" class="mt-2 text-sm">Isi jawaban disini</div>
                </div>
                <div x-data="{ open: false }" class="rounded-lg p-4 cursor-pointer transition-colors duration-300"
                    :class="{ 'bg-gradient-radial from-[#80439a] to-[#2c3177] text-white': open,
                    'bg-gradient-radial from-[#80439a80] to-[#2c317780]': !open
                    }" @click="open = !open">
                        <div class="flex justify-between items-center">
                            <p class="font-semibold italic">Bagaimana Andromega memastikan kualitas layanan yang diberikan?
                            </p>
                            <span x-text="open ? '-' : '+'" :class="{ 'text-white': open, 'text-[#f05426]': !open }"
                                class="text-5xl font-medium"></span>
                        </div>
                        <div x-show="open" class="mt-2 text-sm">Isi jawaban disini</div>
                </div>
                <div x-data="{ open: false }" class="rounded-lg p-4 cursor-pointer transition-colors duration-300"
                    :class="{ 'bg-gradient-radial from-[#80439a] to-[#2c3177] text-white': open,
                    'bg-gradient-radial from-[#80439a80] to-[#2c317780]': !open
                    }" @click="open = !open">
                        <div class="flex justify-between items-center">
                            <p class="font-semibold italic">Bagaimana Andromega memastikan kualitas layanan yang diberikan?
                            </p>
                            <span x-text="open ? '-' : '+'" :class="{ 'text-white': open, 'text-[#f05426]': !open }"
                                class="text-5xl font-medium"></span>
                        </div>
                        <div x-show="open" class="mt-2 text-sm">Isi jawaban disini</div>
                </div>
                <div x-data="{ open: false }" class="rounded-lg p-4 cursor-pointer transition-colors duration-300"
                    :class="{ 'bg-gradient-radial from-[#80439a] to-[#2c3177] text-white': open,
                    'bg-gradient-radial from-[#80439a80] to-[#2c317780]': !open
                    }" @click="open = !open">
                        <div class="flex justify-between items-center">
                            <p class="font-semibold italic">Bagaimana Andromega memastikan kualitas layanan yang diberikan?
                            </p>
                            <span x-text="open ? '-' : '+'" :class="{ 'text-white': open, 'text-[#f05426]': !open }"
                                class="text-5xl font-medium"></span>
                        </div>
                        <div x-show="open" class="mt-2 text-sm">Isi jawaban disini</div>
                </div>
                <div x-data="{ open: false }" class="rounded-lg p-4 cursor-pointer transition-colors duration-300"
                    :class="{ 'bg-gradient-radial from-[#80439a] to-[#2c3177] text-white': open,
                    'bg-gradient-radial from-[#80439a80] to-[#2c317780]': !open
                    }" @click="open = !open">
                        <div class="flex justify-between items-center">
                            <p class="font-semibold italic">Bagaimana Andromega memastikan kualitas layanan yang diberikan?
                            </p>
                            <span x-text="open ? '-' : '+'" :class="{ 'text-white': open, 'text-[#f05426]': !open }"
                                class="text-5xl font-medium"></span>
                        </div>
                        <div x-show="open" class="mt-2 text-sm">Isi jawaban disini</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
