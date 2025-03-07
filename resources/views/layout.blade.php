<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <nav id="navbar" class="bg-black fixed w-11/12 z-20 left-1/2 -translate-x-1/2 top-7 border-gray-200 rounded-full">
        <div class="w-full flex flex-wrap items-center justify-between px-10 py-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="md:h-10 h-20" alt="Website Logo">
            </a>
            <div class="flex ml-auto md:ml-0 xl:order-2 space-x-3 xl:space-x-0 rtl:space-x-reverse">
                <a target="_blank" href="#"
                    class="hidden xl:flex md:text-black md:bg-[#FFDD02] md:hover:bg-yellow-300 md:focus:ring-4 md:focus:outline-none md:rounded-full md:mx-auto md:font-extrabold md:px-4 md:py-3 md:text-center">
                    Contact Us
                </a>
                <button data-collapse-toggle="navbar-sticky" type="button" onclick="toggleMenu()"
                    class=" inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-[#FFDD02] hover:text-white rounded-lg xl:hidden hover:bg-[#FFDD02] focus:outline-none focus:ring-2 focus:ring-gray-200 focus:text-white"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full xl:flex xl:w-auto xl:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 xl:p-1 mt-4 font-medium border text-white xl:border-none xl:rounded-none xl:bg-transparent rounded-lg xl:space-x-8 rtl:space-x-reverse xl:flex-row xl:mt-0 xl:border-0">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-xl lg:hover:font-bold lg:p-1 lg:hover:underline {{ request()->is('/') ? 'font-bold underline' : '' }}">
                            ABOUT
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-xl lg:hover:font-bold lg:p-1 lg:hover:underline {{ request()->is('tour') || request()->is('tour/*') ? 'font-bold underline' : '' }}">
                            TOUR
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-xl lg:hover:font-bold lg:p-1 lg:hover:underline">
                            CONTACT
                        </a>
                    </li>
                    <button type="button"
                        class="xl:hidden mt-10 text-black bg-[#FFDD02] focus:ring-4 focus:outline-none rounded-full text-lg font-bold px-4 py-2 text-center">
                        SEND YOUR INQUIRTY
                    </button>
                </ul>
            </div>
        </div>
    </nav>
      

    <div class="min-w-screen px-10">
        @yield('content')
    </div>

    <!-- Flowbite JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>
