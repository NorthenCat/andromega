@extends('layout')
@section('content')
    <div class="lg:px-28 px-5 bg-no-repeat bg-white bg-center p-4 relative pt-40 py-10">
                <div class="xl:flex items-center gap-10">
                    <img data-aos="fade-right" src="{{ asset('storage/assets/service_top.jpg') }}" alt="" srcset="">
                    <div data-aos="fade-left" class="mt-5 md:mt-0">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-900">
                            Tersedia beragam layanan dan solusi yang ditawarkan oleh Andromega.
                        </h2>
                        
                        <p class="text-gray-700 mb-6">
                            Kami menawarkan solusi untuk bisnis, komunitas, dan merek, serta produk dan layanan yang meningkatkan kenyamanan dan kemajuan Anda.
                        </p>
                    </div>
                </div>
    </div>
    {{-- 1 --}}
    <div class="lg:px-28 px-5 bg-[#000022] relative py-32">
        <div data-aos="fade-up" class="container mx-auto px-4 pb-16">
            <div class="flex flex-col items-center justify-center text-center mb-16 text-white">
                <!-- Number indicator -->
                <div class="flex items-center justify-center w-full my-8">
                    <!-- Left line with diamond -->
                    <div class="flex-grow relative">
                        <div class="h-0.5 w-full bg-teal-400"></div>
                        <div class="absolute left-0 top-1/2 -translate-y-1/2 w-2 h-2 bg-teal-400 rotate-45"></div>
                    </div>
                    
                    <!-- Number in circle -->
                    <div class="flex items-center justify-center w-16 h-16 rounded-full border-2 border-teal-400 mx-2">
                        <span class="text-3xl font-bold text-teal-400">01</span>
                    </div>
                    
                    <!-- Right line with diamond -->
                    <div class="flex-grow relative">
                        <div class="h-0.5 w-full bg-teal-400"></div>
                        <div class="absolute right-0 top-1/2 -translate-y-1/2 w-2 h-2 bg-teal-400 rotate-45"></div>
                    </div>
                </div>
                {{-- Image --}}
            <div class="w-full relative">
                <!-- Mobile Image -->
                <div class="block md:hidden">
                    <img src="{{ asset('storage/assets/service1.jpg') }}" alt="Service" class="w-full h-auto rounded-lg">
                </div>
                
                <!-- Background Image Container (shows only on md screens and up) -->
                <div class="hidden md:block w-full min-h-screen rounded-lg bg-center bg-no-repeat" 
                    style="background-image: url('{{ asset('storage/assets/service1.jpg') }}');">
                    <h2 class="text-3xl font-semibold mb-4">Layanan ISP: Solusi Teknologi Informasi yang Bermutu dan Berintegritas</h2>
                    <div class="max-w-6xl mx-auto">
                        <p class="text-sm md:text-base leading-relaxed">
                            Sebagai penyedia layanan internet terkemuka (ISP), kami berkomitmen untuk menyediakan solusi Teknologi Informasi yang objektif dan tidak memihak kepada pelanggan kami. Kami menyadari bahwa keberhasilan bisnis pelanggan tergantung pada keandalan dan kinerja sistem TI mereka, oleh karena itu, kami menyampaikan solusi dengan integritas dan komitmen untuk mencapai kepuasan maksimal melalui layanan yang responsif dan dukungan pelanggan yang terbaik.
                        </p>
                    </div>
                </div>
            </div>
                <!-- Section heading and description -->
                <div class="mt-8 block md:hidden">
                    <h2 class="text-3xl font-semibold mb-4">Layanan ISP: Solusi Teknologi Informasi yang Bermutu dan Berintegritas</h2>
                    <div class="max-w-6xl mx-auto">
                        <p class="text-sm md:text-base leading-relaxed">
                            Sebagai penyedia layanan internet terkemuka (ISP), kami berkomitmen untuk menyediakan solusi Teknologi Informasi yang objektif dan tidak memihak kepada pelanggan kami. Kami menyadari bahwa keberhasilan bisnis pelanggan tergantung pada keandalan dan kinerja sistem TI mereka, oleh karena itu, kami menyampaikan solusi dengan integritas dan komitmen untuk mencapai kepuasan maksimal melalui layanan yang responsif dan dukungan pelanggan yang terbaik.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- 2 --}}
    <div class="lg:px-28 px-5 bg-[#000022] relative py-32">
        <div data-aos="fade-up" class="container mx-auto px-4 pb-16">
            <div class="flex flex-col items-center justify-center text-center mb-16 text-white">
                <!-- Number indicator -->
                <div class="flex items-center justify-center w-full my-8">
                    <!-- Left line with diamond -->
                    <div class="flex-grow relative">
                        <div class="h-0.5 w-full bg-teal-400"></div>
                        <div class="absolute left-0 top-1/2 -translate-y-1/2 w-2 h-2 bg-teal-400 rotate-45"></div>
                    </div>
                    
                    <!-- Number in circle -->
                    <div class="flex items-center justify-center w-16 h-16 rounded-full border-2 border-teal-400 mx-2">
                        <span class="text-3xl font-bold text-teal-400">02</span>
                    </div>
                    
                    <!-- Right line with diamond -->
                    <div class="flex-grow relative">
                        <div class="h-0.5 w-full bg-teal-400"></div>
                        <div class="absolute right-0 top-1/2 -translate-y-1/2 w-2 h-2 bg-teal-400 rotate-45"></div>
                    </div>
                </div>
                {{-- Image --}}
            <div class="w-full relative">
                <!-- Mobile Image -->
                <div class="block md:hidden">
                    <img src="{{ asset('storage/assets/service2.jpg') }}" alt="Service" class="w-full h-auto rounded-lg">
                </div>
                
                <!-- Background Image Container (shows only on md screens and up) -->
                <div class="hidden md:block w-full min-h-screen rounded-lg bg-center bg-no-repeat" 
                    style="background-image: url('{{ asset('storage/assets/service2.jpg') }}');">
                    <h2 class="text-3xl font-semibold mb-4">Infrastruktur Jaringan</h2>
                    <div class="max-w-6xl mx-auto">
                        <p class="text-sm md:text-base leading-relaxed">
                            Kami menawarkan layanan komprehensif untuk merancang, membangun, dan mengelola infrastruktur jaringan organisasi Anda dengan teliti, yang akan memberikan dampak positif pada setiap aspek bisnis Anda. Dengan pendekatan yang cermat dan berorientasi pada kebutuhan unik Anda, kami memastikan bahwa infrastruktur jaringan yang kami implementasikan tidak hanya andal dan efisien, tetapi juga didesain untuk mendukung pertumbuhan dan inovasi bisnis Anda secara berkelanjutan.
                        </p>
                    </div>
                </div>
            </div>
                <!-- Section heading and description -->
                <div class="mt-8 block md:hidden">
                    <h2 class="text-3xl font-semibold mb-4">Infrastruktur Jaringan</h2>
                    <div class="max-w-6xl mx-auto">
                        <p class="text-sm md:text-base leading-relaxed">
                            Kami menawarkan layanan komprehensif untuk merancang, membangun, dan mengelola infrastruktur jaringan organisasi Anda dengan teliti, yang akan memberikan dampak positif pada setiap aspek bisnis Anda. Dengan pendekatan yang cermat dan berorientasi pada kebutuhan unik Anda, kami memastikan bahwa infrastruktur jaringan yang kami implementasikan tidak hanya andal dan efisien, tetapi juga didesain untuk mendukung pertumbuhan dan inovasi bisnis Anda secara berkelanjutan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- 3 --}}
    <div class="lg:px-28 px-5 bg-[#000022] relative py-32">
        <div data-aos="fade-up" class="container mx-auto px-4 pb-16">
            <div class="flex flex-col items-center justify-center text-center mb-16 text-white">
                <!-- Number indicator -->
                <div class="flex items-center justify-center w-full my-8">
                    <!-- Left line with diamond -->
                    <div class="flex-grow relative">
                        <div class="h-0.5 w-full bg-teal-400"></div>
                        <div class="absolute left-0 top-1/2 -translate-y-1/2 w-2 h-2 bg-teal-400 rotate-45"></div>
                    </div>
                    
                    <!-- Number in circle -->
                    <div class="flex items-center justify-center w-16 h-16 rounded-full border-2 border-teal-400 mx-2">
                        <span class="text-3xl font-bold text-teal-400">03</span>
                    </div>
                    
                    <!-- Right line with diamond -->
                    <div class="flex-grow relative">
                        <div class="h-0.5 w-full bg-teal-400"></div>
                        <div class="absolute right-0 top-1/2 -translate-y-1/2 w-2 h-2 bg-teal-400 rotate-45"></div>
                    </div>
                </div>
                {{-- Image --}}
            <div class="w-full relative">
                <!-- Mobile Image -->
                <div class="block md:hidden">
                    <img src="{{ asset('storage/assets/service3.jpg') }}" alt="Service" class="w-full h-auto rounded-lg">
                </div>
                
                <!-- Background Image Container (shows only on md screens and up) -->
                <div class="hidden md:block w-full min-h-screen rounded-lg bg-center bg-no-repeat" 
                    style="background-image: url('{{ asset('storage/assets/service3.jpg') }}');">
                    <h2 class="text-3xl font-semibold mb-4">Pengembangan Perangkat Lunak</h2>
                    <div class="max-w-6xl mx-auto">
                        <p class="text-sm md:text-base leading-relaxed">
                            Andromega memiliki komitmen yang kuat untuk menyediakan layanan pengembangan perangkat lunak 
                        khusus yang tidak hanya cepat dan efektif, tetapi juga sangat disesuaikan dengan kebutuhan unik setiap 
                        klien. Melalui pendekatan yang teliti dan kolaboratif, tim kami bekerja dengan Anda untuk merancang, 
                        mengimplementasikan, dan menguji solusi perangkat lunak yang tepat, yang tidak hanya memenuhi, 
                        tetapi juga melampaui harapan Anda.
                        </p>
                    </div>
                </div>
            </div>
                <!-- Section heading and description -->
                <div class="mt-8 block md:hidden">
                    <h2 class="text-3xl font-semibold mb-4">Pengembangan Perangkat Lunak</h2>
                    <div class="max-w-6xl mx-auto">
                        <p class="text-sm md:text-base leading-relaxed">
                            Andromega memiliki komitmen yang kuat untuk menyediakan layanan pengembangan perangkat lunak 
                        khusus yang tidak hanya cepat dan efektif, tetapi juga sangat disesuaikan dengan kebutuhan unik setiap 
                        klien. Melalui pendekatan yang teliti dan kolaboratif, tim kami bekerja dengan Anda untuk merancang, 
                        mengimplementasikan, dan menguji solusi perangkat lunak yang tepat, yang tidak hanya memenuhi, 
                        tetapi juga melampaui harapan Anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- 4 --}}
    <div class="lg:px-28 px-5 bg-[#000022] relative py-32">
        <div data-aos="fade-up" class="container mx-auto px-4 pb-16">
            <div class="flex flex-col items-center justify-center text-center mb-16 text-white">
                <!-- Number indicator -->
                <div class="flex items-center justify-center w-full my-8">
                    <!-- Left line with diamond -->
                    <div class="flex-grow relative">
                        <div class="h-0.5 w-full bg-teal-400"></div>
                        <div class="absolute left-0 top-1/2 -translate-y-1/2 w-2 h-2 bg-teal-400 rotate-45"></div>
                    </div>
                    
                    <!-- Number in circle -->
                    <div class="flex items-center justify-center w-16 h-16 rounded-full border-2 border-teal-400 mx-2">
                        <span class="text-3xl font-bold text-teal-400">04</span>
                    </div>
                    
                    <!-- Right line with diamond -->
                    <div class="flex-grow relative">
                        <div class="h-0.5 w-full bg-teal-400"></div>
                        <div class="absolute right-0 top-1/2 -translate-y-1/2 w-2 h-2 bg-teal-400 rotate-45"></div>
                    </div>
                </div>
                {{-- Image --}}
            <div class="w-full relative">
                <!-- Mobile Image -->
                <div class="block md:hidden">
                    <img src="{{ asset('storage/assets/service4.jpg') }}" alt="Service" class="w-full h-auto rounded-lg">
                </div>
                
                <!-- Background Image Container (shows only on md screens and up) -->
                <div class="hidden md:block w-full min-h-screen rounded-lg bg-center bg-no-repeat" 
                    style="background-image: url('{{ asset('storage/assets/service4.jpg') }}');">
                    <h2 class="text-3xl font-semibold mb-4">Video Penjelasan</h2>
                    <div class="max-w-6xl mx-auto">
                        <p class="text-sm md:text-base leading-relaxed">
                            Kami membuat video untuk mempromosikan produk yang sedang Anda jual serta berbagai informasi tentang bisnis atau organisasi Anda.
                        </p>
                    </div>
                </div>
            </div>
                <!-- Section heading and description -->
                <div class="mt-8 block md:hidden">
                    <h2 class="text-3xl font-semibold mb-4">Video Penjelasan</h2>
                    <div class="max-w-6xl mx-auto">
                        <p class="text-sm md:text-base leading-relaxed">
                            Kami membuat video untuk mempromosikan produk yang sedang Anda jual serta berbagai informasi tentang bisnis atau organisasi Anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- 5 --}}
    <div class="lg:px-28 px-5 bg-[#000022] relative py-32">
        <div data-aos="fade-up" class="container mx-auto px-4 pb-16">
            <div class="flex flex-col items-center justify-center text-center mb-16 text-white">
                <!-- Number indicator -->
                <div class="flex items-center justify-center w-full my-8">
                    <!-- Left line with diamond -->
                    <div class="flex-grow relative">
                        <div class="h-0.5 w-full bg-teal-400"></div>
                        <div class="absolute left-0 top-1/2 -translate-y-1/2 w-2 h-2 bg-teal-400 rotate-45"></div>
                    </div>
                    
                    <!-- Number in circle -->
                    <div class="flex items-center justify-center w-16 h-16 rounded-full border-2 border-teal-400 mx-2">
                        <span class="text-3xl font-bold text-teal-400">05</span>
                    </div>
                    
                    <!-- Right line with diamond -->
                    <div class="flex-grow relative">
                        <div class="h-0.5 w-full bg-teal-400"></div>
                        <div class="absolute right-0 top-1/2 -translate-y-1/2 w-2 h-2 bg-teal-400 rotate-45"></div>
                    </div>
                </div>
                {{-- Image --}}
            <div class="w-full relative">
                <!-- Mobile Image -->
                <div class="block md:hidden">
                    <img src="{{ asset('storage/assets/service5.jpg') }}" alt="Service" class="w-full h-auto rounded-lg">
                </div>
                
                <!-- Background Image Container (shows only on md screens and up) -->
                <div class="hidden md:block w-full min-h-screen rounded-lg bg-center bg-no-repeat" 
                    style="background-image: url('{{ asset('storage/assets/service5.jpg') }}');">
                    <h2 class="text-3xl font-semibold mb-4">Desain Grafis & UI/UX</h2>
                    <div class="max-w-6xl mx-auto">
                        <p class="text-sm md:text-base leading-relaxed">
                            Buat kesan pertama yang positif pada pelanggan Anda, jangan biarkan desain yang buruk atau tata letak yang tidak jelas membuat mereka beralih ke pesaing.
                        </p>
                    </div>
                </div>
            </div>
                <!-- Section heading and description -->
                <div class="mt-8 block md:hidden">
                    <h2 class="text-3xl font-semibold mb-4">Desain Grafis & UI/UX</h2>
                    <div class="max-w-6xl mx-auto">
                        <p class="text-sm md:text-base leading-relaxed">
                            Buat kesan pertama yang positif pada pelanggan Anda, jangan biarkan desain yang buruk atau tata letak yang tidak jelas membuat mereka beralih ke pesaing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- 6 --}}
    <div class="lg:px-28 px-5 bg-[#000022] relative py-32">
        <div data-aos="fade-up" class="container mx-auto px-4 pb-16">
            <div class="flex flex-col items-center justify-center text-center mb-16 text-white">
                <!-- Number indicator -->
                <div class="flex items-center justify-center w-full my-8">
                    <!-- Left line with diamond -->
                    <div class="flex-grow relative">
                        <div class="h-0.5 w-full bg-teal-400"></div>
                        <div class="absolute left-0 top-1/2 -translate-y-1/2 w-2 h-2 bg-teal-400 rotate-45"></div>
                    </div>
                    
                    <!-- Number in circle -->
                    <div class="flex items-center justify-center w-16 h-16 rounded-full border-2 border-teal-400 mx-2">
                        <span class="text-3xl font-bold text-teal-400">06</span>
                    </div>
                    
                    <!-- Right line with diamond -->
                    <div class="flex-grow relative">
                        <div class="h-0.5 w-full bg-teal-400"></div>
                        <div class="absolute right-0 top-1/2 -translate-y-1/2 w-2 h-2 bg-teal-400 rotate-45"></div>
                    </div>
                </div>
                {{-- Image --}}
            <div class="w-full relative">
                <!-- Mobile Image -->
                <div class="block md:hidden">
                    <img src="{{ asset('storage/assets/service6.jpg') }}" alt="Service" class="w-full h-auto rounded-lg">
                </div>
                
                <!-- Background Image Container (shows only on md screens and up) -->
                <div class="hidden md:block w-full min-h-screen rounded-lg bg-center bg-no-repeat" 
                    style="background-image: url('{{ asset('storage/assets/service6.jpg') }}');">
                    <h2 class="text-3xl font-semibold mb-4">Pengembangan Website</h2>
                    <div class="max-w-6xl mx-auto">
                        <p class="text-sm md:text-base leading-relaxed">
                            Spesialis pengembangan web kami memiliki pengetahuan yang cukup dan cepat dalam menyelesaikan masalah apa pun yang mungkin Anda alami dengan situs web Anda.
                        </p>
                    </div>
                </div>
            </div>
                <!-- Section heading and description -->
                <div class="mt-8 block md:hidden">
                    <h2 class="text-3xl font-semibold mb-4">Pengembangan Website</h2>
                    <div class="max-w-6xl mx-auto">
                        <p class="text-sm md:text-base leading-relaxed">
                            Spesialis pengembangan web kami memiliki pengetahuan yang cukup dan cepat dalam menyelesaikan masalah apa pun yang mungkin Anda alami dengan situs web Anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
