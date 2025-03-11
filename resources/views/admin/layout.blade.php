<!doctype html>
<html lang="en" class="dark">

<head>
    <!-- Meta tags first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Andromega | Dashboard Admin</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('img/logo-full.png')}}">
    <link rel="manifest" href="https://flowbite-admin-dashboard.vercel.app/site.webmanifest">
    <link rel="mask-icon" href="https://flowbite-admin-dashboard.vercel.app/safari-pinned-tab.svg" color="#5bbad5">


    <!-- Critical CSS AND JS first -->
    @if(app()->environment('local'))
    @vite(['resources/css/app.css'])
    @else
    <link rel="stylesheet" href="{{asset('build/assets/app-CZ89ZT6A.css')}}">
    @endif
    @if(app()->environment('local'))
    @vite('resources/js/app.js')
    @else
    <script src="{{asset('build/assets/app-DWMxmmyX.js')}}"></script>
    @endif

    <!-- Dark mode script - needs to run early -->
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    <!-- Third party CSS -->
    <link rel="stylesheet" href="https://flowbite-admin-dashboard.vercel.app/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    @stack('head-styles')

    @stack('head-scripts')
    <!-- Essential scripts that need to load first -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</head>

<body class="bg-gray-50 dark:bg-gray-800 font-poppins">
    <div id="spinner" class="fixed inset-0 flex items-center justify-center bg-blur z-50 hidden">
        <div role="status">
            <svg aria-hidden="true"
                class="inline w-12 h-12 text-gray-200 animate-spin dark:text-gray-600 fill-[#FFDD02]"
                viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                    fill="currentColor" />
                <path
                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                    fill="currentFill" />
            </svg>
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <nav class="fixed z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar"
                        class="p-2 text-gray-600 rounded cursor-pointer lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg id="toggleSidebarMobileClose" class="hidden w-6 h-6" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="flex ml-2 md:mr-24">
                        <span
                            class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Andromega</span>
                    </div>

                </div>
                <div class="flex items-center">

                    <button id="toggleSidebarMobileSearch" type="button"
                        class="p-2 text-gray-500 rounded-lg lg:hidden hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">

                    </button>



                    <button id="theme-toggle" data-tooltip-target="tooltip-toggle" type="button"
                        class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <div id="tooltip-toggle" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                        Toggle dark mode
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>

                    <div class="flex items-center ml-3">
                        <div>
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                id="user-menu-button-2" aria-expanded="false" data-dropdown-toggle="dropdown-2">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full" src="{{asset('img/avatar.jpg')}}" alt="user photo">
                            </button>
                        </div>

                        <!-- Menu Profile -->
                        <div class="z-50 hidden w-full max-w-52 my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="dropdown-2">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                    {{Auth::user()->username}}
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    {{Auth::user()->email ?? "No Email"}}
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="{{route('admin.profile')}}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Profile</a>
                                </li>
                                <li>
                                    <a href="/logout"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem"
                                        onclick="if(confirm('Keluar dari sistem?')){ event.preventDefault(); document.getElementById('logout-form').submit(); }else{ return false; }">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sidebar Menu -->
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
        <aside id="sidebar"
            class="fixed top-0 left-0 z-40 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width"
            aria-label="Sidebar">
            <div
                class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto no-scrollbar">
                    <div
                        class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        <ul class="pb-2 space-y-2">
                            <li>
                                <a href="{{route('admin.dashboard')}}"
                                    class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 {{ Request::is('admin/dashboard') ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
                                    <div
                                        class="w-6 h-6 text-center text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white">
                                        <i class="fa-solid fa-gauge fa-lg"></i>
                                    </div>
                                    <span class="ml-3" sidebar-toggle-item>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin.paket-internet.index')}}"
                                    class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 {{ Request::is('admin/bloklist') ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
                                    <div
                                        class="w-6 h-6 text-center text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white">
                                        <i class="fa-solid fa-wifi fa-lg"></i>
                                    </div>
                                    <span class="ml-3" sidebar-toggle-item>Paket Internet</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin.layanan.index')}}"
                                    class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 {{ Request::is('admin/bloklist') ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
                                    <div
                                        class="w-6 h-6 text-center text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white">
                                        <i class="fa-solid fa-server fa-lg"></i>
                                    </div>
                                    <span class="ml-3" sidebar-toggle-item>Layanan</span>
                                </a>
                            </li>
                            {{-- <li>
                                <a href="{{route('admin.bloklist')}}"
                                    class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 {{ Request::is('admin/bloklist') ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
                                    <div
                                        class="w-6 h-6 text-center text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white">
                                        <i class="fa-solid fa-house fa-lg"></i>
                                    </div>
                                    <span class="ml-3" sidebar-toggle-item>Perumahan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin.bookinglist.index')}}"
                                    class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 {{ Request::is('admin/bookinglist') ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
                                    <div
                                        class="w-6 h-6 text-center text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white">
                                        <i class="fa-solid fa-users fa-lg"></i>
                                    </div>
                                    <span class="ml-3" sidebar-toggle-item>Pemesan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin.gallerylist')}}"
                                    class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 {{ Request::is('admin/gallerylist') ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
                                    <div
                                        class="w-6 h-6 text-center text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white">
                                        <i class="fa-solid fa-images fa-lg"></i>
                                    </div>
                                    <span class="ml-3" sidebar-toggle-item>Gallery</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin.settingWeb')}}"
                                    class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 {{ Request::is('admin/setting-web') ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
                                    <div
                                        class="w-6 h-6 text-center text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white">
                                        <i class="fa-solid fa-cog fa-lg"></i>
                                    </div>
                                    <span class="ml-3" sidebar-toggle-item>Setting Web</span>
                                </a>
                            </li> --}}
                            {{-- Add HR line but half of width space --}}
                            <hr class="w-1/2 mx-auto my-2 border-t border-gray-200 dark:border-gray-700">
                            <div class="pt-2 space-y-2">
                                <button type="button"
                                    class="flex w-full items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700"
                                    onclick="if(confirm('Keluar dari sistem?')){ event.preventDefault(); document.getElementById('logout-form').submit(); }else{ return false; }">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m15 19-7-7 7-7" />
                                    </svg>

                                    <span class="ml-3" sidebar-toggle-item>Logout</span>
                                </button>
                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Sidebar Menu -->
        <div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>
        <div id="main-content"
            class="flex flex-col justify-between w-full h-full min-h-screen overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
            @yield('content')
        </div>
    </div>

    <!-- Scripts at the end of body -->


    <!-- Third party scripts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.41.0/dist/apexcharts.min.js" defer></script>
    <script src="https://flowbite-admin-dashboard.vercel.app/app.bundle.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js" defer></script>

    @stack('scripts')
</body>

</html>