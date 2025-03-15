<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
</head>

<body class="bg-gray-100 font-poppins">

    <nav id="navbar"
        class="{{ request()->is('contact') || request()->is('paket') ? 'bg-white' : 'bg-[#262262]' }}  fixed w-11/12 z-20 left-1/2 -translate-x-1/2 top-7 border-gray-200 xl:rounded-full rounded-2xl shadow-lg">
        <div class="w-full flex flex-wrap items-center justify-between px-5 py-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src={{ asset(request()->is('contact') || request()->is('paket') ?
                'storage/assets/logo_andromega_hitam.png' : 'storage/assets/logo_andromega_putih.png') }} class="md:h-8
                h-9 mx-4"
                alt="Website Logo">
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
                    class="flex flex-col p-4 xl:p-1 mt-4 text-lg font-normal border {{ request()->is('contact') || request()->is('paket') ? 'text-[#3a3491]' : 'text-gray-300' }} xl:border-none xl:rounded-none xl:bg-transparent rounded-lg xl:space-x-8 rtl:space-x-reverse xl:flex-row xl:mt-0 xl:border-0">
                    <li>
                        <a href="{{ route('home') }}"
                            class="block py-2 px-3  lg:p-1  {{ request()->is('/') ? 'font-bold text-white ' : '' }} {{ request()->is('paket') ? 'lg:hover:text-[#262262]' : (request()->is('paket') || (request()->is('contact')) ? 'text-[#3a3491] hover:text-[#262262] lg:hover:text-[#262262]' : 'text-gray-300 hover:text-white lg:hover:text-white') }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('paket') }}"
                            class="block py-2 px-3  lg:p-1  {{ request()->is('paket') || request()->is('paket/*') ? 'font-bold text-[#262262] lg:hover:text-[#262262]' : (request()->is('paket') || (request()->is('contact')) ? 'text-[#3a3491] hover:text-[#262262] lg:hover:text-[#262262]' : 'text-gray-300 hover:text-white lg:hover:text-white') }}">
                            Paket Layanan
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('service') }}" class="block py-2 px-3 lg:p-1 {{ request()->is('service') ? 'font-bold text-white' : (request()->is('paket') || (request()->is('contact')) ? 'text-[#3a3491] hover:text-[#262262] lg:hover:text-[#262262]' : 'text-gray-300 hover:text-white lg:hover:text-white') }}">
                            Service & Solution
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('faq') }}"
                            class="block py-2 px-3 lg:p-1 {{ request()->is('faq') ? 'font-bold text-white ' : '' }} {{ request()->is('paket') ? 'lg:hover:text-[#262262]' : (request()->is('paket') || (request()->is('contact')) ? 'text-[#3a3491] hover:text-[#262262] lg:hover:text-[#262262]' : 'text-gray-300 hover:text-white lg:hover:text-white') }}">
                            FAQs
                        </a>
                    </li>
                    <button type="button"
                        class="xl:hidden mt-10 text-white bg-[#f05426] focus:ring-4 focus:outline-none rounded-full text-lg font-bold px-4 py-2 text-center">
                        <a href="{{ route('contact') }}">
                            Contact Us
                        </a>
                    </button>
                </ul>
            </div>
        </div>
    </nav>


    <div class="min-w-screen flex-grow">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer class="bg-[#262262] text-white p-4 text-center py-5">
        <div class="container mx-auto px-6 py-2">
            <!-- Company information section -->
            <div class="{{ request()->is('contact') ? 'block' : 'hidden' }}">
                <div class="grid md:grid-cols-2 gap-8 ">
                  <!-- Left column with company info -->
                  <div class="text-start">
                    <h2 class="text-2xl font-bold mb-6">PT. ANDROMEGA DATA NUSANTARA</h2>
                    <div class="space-y-4">
                      <!-- Address with icon -->
                      <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-white flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <div class="space-y-1">
                          <p>Jl. Panjang 2 Blok AU 10, Puri Bojong Lestari</p>
                          <p>Pabuaran - Bojong Gede</p>
                          <p>Kabupaten Bogor - Jawa Barat</p>
                          <p>Indonesia</p>
                        </div>
                      </div>
                      
                      <!-- Email with icon -->
                      <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-white flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:info@andromega.co.id" class="hover:text-white transition">info@andromega.co.id</a>
                      </div>
                      
                      <!-- Phone with icon -->
                      <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-white flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <a href="tel:+6281752285844" class="hover:text-blue-400 transition">Admin (+62) 817 5228 844</a>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Right column with company services-->
                  <div class="text-start">
                    <h3 class="text-xl font-semibold mb-4">Our Services</h3>
                    <ul class="space-y-2">
                      <li class="hover:text-blue-400 transition cursor-pointer">Layanan ISP</li>
                      <li class="hover:text-blue-400 transition cursor-pointer">Infrastruktur Jaringan</li>
                      <li class="hover:text-blue-400 transition cursor-pointer">Pengembangan Perangkat Lunak</li>
                      <li class="hover:text-blue-400 transition cursor-pointer">Video Penjelasan</li>
                      <li class="hover:text-blue-400 transition cursor-pointer">Desain Grafis & UI/UX</li>
                      <li class="hover:text-blue-400 transition cursor-pointer">Pengembangan Website</li>
                    </ul>
                  </div>
                </div>
                <!-- Divider -->
                <div class="border-t border-white my-8"></div>
            </div>
            
            <!-- Copyright section -->
            <div class="justify-between items-center text-sm text-white">
              <p>Copyright © 2023 PT. Andromega Data Nusantara. All Rights Reserved.</p>
            </div>
          </div>
    </footer>

    <!-- Flowbite JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>

</html>
