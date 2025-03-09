<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
</head>

<body class="bg-gray-100">

    <nav id="navbar" class="{{ request()->is('contact') || request()->is('paket') ? 'bg-white' : 'bg-[#262262]' }}  absolute w-11/12 z-20 left-1/2 -translate-x-1/2 top-7 border-gray-200 xl:rounded-full rounded-2xl">
        <div class="w-full flex flex-wrap items-center justify-between px-5 py-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src={{ asset(request()->is('contact') || request()->is('paket') ? 'storage/logo_andromega_hitam.png' : 'storage/logo_andromega_putih.png') }} class="md:h-8 h-9 mx-4" alt="Website Logo">
            </a>
            <button data-collapse-toggle="navbar-sticky" type="button" onclick="toggleMenu()"
                class=" inline-flex items-center p-2 w-10 h-10 justify-center text-sm {{ request()->is('contact') || request()->is('paket') ? 'text-[#f05426]' : 'text-white' }} hover:text-white rounded-lg xl:hidden hover:bg-[#f05426] focus:outline-none focus:ring-2 focus:ring-gray-200 focus:text-white"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="items-center justify-center hidden w-full xl:flex xl:w-auto xl:order-1" id="navbar-sticky">
                <div class="flex ml-auto md:ml-5 xl:order-2 space-x-3 xl:space-x-0 rtl:space-x-reverse">
                    <a href="{{ route('contact') }}"
                        class="hidden xl:flex md:text-white md:bg-[#f05426] md:hover:bg-[#e04b28] md:focus:ring-4 md:focus:outline-none md:rounded-full md:mx-auto md:font-normal md:px-6 md:py-3 md:text-center">
                        Contact Us
                    </a>
                </div>
                <ul
                    class="flex flex-col p-4 xl:p-1 mt-4 text-lg font-normal border {{ request()->is('contact') || request()->is('paket') ? 'text-[#262262]' : 'text-white' }} xl:border-none xl:rounded-none xl:bg-transparent rounded-lg xl:space-x-8 rtl:space-x-reverse xl:flex-row xl:mt-0 xl:border-0">
                    <li>
                        <a href="{{ route('home') }}"
                            class="block py-2 px-3 lg:hover:font-bold lg:p-1  {{ request()->is('/') ? 'font-bold ' : '' }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('paket') }}"
                            class="block py-2 px-3 lg:hover:font-bold lg:p-1  {{ request()->is('paket') || request()->is('paket/*') ? 'font-bold ' : '' }}">
                        Paket Layanan
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 lg:hover:font-bold lg:p-1 ">
                            Service & Solution
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('faq') }}"
                            class="block py-2 px-3 lg:hover:font-bold lg:p-1 {{ request()->is('faq') ? 'font-bold ' : '' }}">
                            FAQs
                        </a>
                    </li>
                    <button type="button"
                        class="xl:hidden mt-10 text-white bg-[#f05426] focus:ring-4 focus:outline-none rounded-full text-lg font-bold px-4 py-2 text-center">
                        Contact Us
                    </button>
                </ul>
            </div>
        </div>
    </nav>
      

    <div class="min-w-screen">
        @yield('content')
    </div>

    <!-- Flowbite JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</body>

</html>
