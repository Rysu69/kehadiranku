    <x-app-layout>
        <!-- Main content -->
        <div class="relative isolate bg-gray-100 text-gray-800">

            <!-- Carousel Section -->
            <section id="home" class="relative w-full h-screen overflow-hidden">
        <div class="carousel-wrapper w-full h-full flex transition-transform duration-500" id="carousel">
            <!-- Carousel items -->
            <div class="carousel-item w-full h-full flex-shrink-0 relative">
                <img class="w-full h-full object-cover" src="https://via.placeholder.com/1200x800?text=Event+1" alt="Event 1">
            </div>
            <div class="carousel-item w-full h-full flex-shrink-0 relative">
                <img class="w-full h-full object-cover" src="https://via.placeholder.com/1200x800?text=Event+2" alt="Event 2">
            </div>
            <div class="carousel-item w-full h-full flex-shrink-0 relative">
                <img class="w-full h-full object-cover" src="https://via.placeholder.com/1200x800?text=Event+3" alt="Event 3">
            </div>
        </div>
    </section>

            <!-- Profile and Daftar Section -->
       <section class="mt-12 py-12 px-6 lg:px-16">
    <div class="flex flex-col items-center">
        <!-- H2 at the top -->
        <h2 class="text-md font-semibold mb-4 text-center text-gray-500">Kehadiranku – Presensi Online Siswa hadir sebagai solusi presensi dan absensi siswa yang praktis, terjangkau, efisien, transparan, serta dapat dipertanggungjawabkan. Dengan Kehadiranku, presensi siswa dapat dilakukan dengan mudah hanya melalui smartphone Bapak/Ibu Guru.</h2>

        <!-- Image below the H2 -->
        <img src="https://via.placeholder.com/1200x800?text=Event+1" alt="Your Image" class="mb-6 rounded-lg" />

        <div class="w-full flex justify-center rounded-lg p-4">
    <a href="{{ route('register') }}"
       class="px-8 py-3 bg-green-500 text-white font-semibold rounded-full shadow-md hover:bg-green-600 transition-all duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-50">
       Daftar
    </a>
</div>

    </div>
</section>





            <!-- Fitur Section -->
            <section id="fitur" class="mt-12 bg-gradient-to-r from-blue-500 to-blue-800 text-white py-16 px-6 lg:px-16">
                <div class="container mx-auto text-center">
                    <h2 class="text-3xl font-extrabold pb-2">Fitur Kehadiranku</h2>
                    <p class="text-xl font-bold">Apa saja yang Anda dapat saat menggunakan layanan Kehadiranku – Presensi Online Siswa</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                        <div class="p-6 bg-white text-gray-800 rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300">
                            <i class="fas fa-bolt text-blue-600 text-4xl"></i>
                            <h3 class="text-xl font-semibold mt-4">--nama fitur</h3>
                            <p class="mt-2">--deskripsi fitur</p>
                        </div>
                        <div class="p-6 bg-white text-gray-800 rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300">
                            <i class="fas fa-shield-alt text-blue-600 text-4xl"></i>
                            <h3 class="text-xl font-semibold mt-4">--nama fitur</h3>
                            <p class="mt-2">--deskripsi fitur</p>
                        </div>
                        <div class="p-6 bg-white text-gray-800 rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300">
                            <i class="fas fa-globe text-blue-600 text-4xl"></i>
                            <h3 class="text-xl font-semibold mt-4">---nama fitur</h3>
                            <p class="mt-2">--deskripsi fitur</p>
                        </div>
                         <div class="p-6 bg-white text-gray-800 rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300">
                            <i class="fas fa-bolt text-blue-600 text-4xl"></i>
                            <h3 class="text-xl font-semibold mt-4">--nama fitur</h3>
                            <p class="mt-2">--deskripsi fitur</p>
                        </div>
                        <div class="p-6 bg-white text-gray-800 rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300">
                            <i class="fas fa-shield-alt text-blue-600 text-4xl"></i>
                            <h3 class="text-xl font-semibold mt-4">--nama fitur</h3>
                            <p class="mt-2">--deskripsi fitur</p>
                        </div>
                        <div class="p-6 bg-white text-gray-800 rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300">
                            <i class="fas fa-globe text-blue-600 text-4xl"></i>
                            <h3 class="text-xl font-semibold mt-4">---nama fitur</h3>
                            <p class="mt-2">--deskripsi fitur</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Video Pengenalan Aplikasi Section -->
          <section id="video" class="mt-12 py-32 px-6 lg:px-16">
    <div class="container mx-auto">
        <h2 class="text-center text-3xl font-extrabold mb-4">Video Pengenalan</h2>
        <p class="text-center text-xl font-bold mb-20">
            Kenali beberapa fitur unggulan dari 3 aplikasi yang kami sediakan untuk sekolah
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
            <!-- First Video -->
            <div class="rounded-lg overflow-hidden text-gray-400">
                <p class="text-center text-lg font-semibold mb-2">Fitur Aplikasi 1</p>
                <iframe class="w-full h-64" src="https://www.youtube.com/embed/1-vsV_g8N6g?si=g8-YiyV1oeebbt9b" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <!-- Second Video -->
            <div class="rounded-lg overflow-hidden text-gray-400">
                <p class="text-center text-lg font-semibold mb-2">Fitur Aplikasi 2</p>
                <iframe class="w-full h-64" src="https://www.youtube.com/embed/jbGCow_lWVI?si=sE_bWCobsi8yLzxc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <!-- Third Video (Centered if odd) -->
            <div class="rounded-lg overflow-hidden lg:col-span-2 text-gray-400">
                <p class="text-center text-lg font-semibold mb-2">Fitur Aplikasi 3</p>
                <iframe class="w-full h-64 lg:w-1/2 mx-auto" src="https://www.youtube.com/embed/YhZ8IKy5pe0?si=mm8wzzUmgZ6V-QjG" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>





            <!-- Pengguna Aplikasi Section -->
            <section id="pengguna" class="mt-12 py-32 px-6 lg:px-16">
                <div class="container mx-auto">
                    <h2 class="text-center text-6xl font-extrabold pb-4">Pengguna Kehadiranku</h2>
                    <p class="text-center text-xl font-bold">Layanan Presensi Online Siswa telah digunakan oleh berbagai sekolah di seluruh indonesia</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                        <div class="bg-white p-6 rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300">
                            <p class="text-lg italic">"--comment"</p>
                            <p class="mt-4 font-semibold">-  --Nama Sekolah</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300">
                            <p class="text-lg italic">"--comment"</p>
                            <p class="mt-4 font-semibold">-  --Nama Sekolah</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300">
                            <p class="text-lg italic">"--comment"</p>
                            <p class="mt-4 font-semibold">-  --Nama Sekolah</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Biaya Aplikasi Section -->
           <!-- Biaya Aplikasi Section -->
<section id="biaya" class="mt-12 py-16 px-6 lg:px-16">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-extrabold pb-4">Biaya Langganan</h2>
        <p class="text-center text-xl font-bold">Nikmati semua fitur unggulan PIESA Presensi Online Siswa dengan biaya yang sangat terjangkau</p>
        <div class="flex flex-col md:flex-row justify-center space-y-6 md:space-y-0 md:space-x-6 mt-12">
            <div class="bg-gray-50 p-8 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold">Paket Basic</h3>
                <p class="mt-2 text-2xl font-extrabold">Rp 199.000</p>
                <p class="mt-4">Termasuk fitur dasar untuk absensi sekolah.</p>
                <a href="#" class="mt-6 inline-block bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700">Mulai Sekarang</a>
            </div>
            <div class="bg-gray-50 p-8 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold">Paket Pro</h3>
                <p class="mt-2 text-2xl font-extrabold">Rp 499.000</p>
                <p class="mt-4">Termasuk fitur lanjutan untuk mengurus sekolah.</p>
                <a href="#" class="mt-6 inline-block bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700">Mulai Sekarang</a>
            </div>
        </div>
    </div>
</section>


            <!-- Contact Us Section -->
<section id="contact" class="mt-12 bg-white py-12 text-gray-800">
    <div class="container mx-auto text-center">
        <!-- Title -->
        <h2 class="text-6xl font-extrabold mb-4">Contact Us</h2>
        <p class="text-lg mb-8">Kenali lebih jauh tentang PIESA Presensi Online Siswa dengan menghubungi kontak kami</p>

        <!-- Contact Information -->
        <div class="mb-8">
            <div class="flex justify-center space-x-6">
               <div class="flex justify-center space-x-6">
    <div class="flex space-x-2">
        <p class="font-semibold">Telp:</p>
        <p class="text-gray-600">--Nomor Telepon</p>
    </div>
</div>
<div class="flex justify-center space-x-6">
    <div class="flex space-x-2">
        <p class="font-semibold">WA:</p>
        <p class="text-gray-600">--Nomor Telepon</p>
    </div>
</div>

            </div>
        </div>

        <!-- Office Information -->
        <div class="mb-8">
            <p class="font-bold">Technical Support Office</p>
            <p class="text-gray-600">--Alamat Kantor</p>
        </div>
        <div class="mb-8">
            <p class="font-bold">Development Office</p>
            <p class="text-gray-600">--Alamat Kantor</p>
        </div>

        <!-- Social Media Links -->
        <div class="flex justify-center space-x-4 mt-8">
            <a href="#" class="text-blue-600 hover:text-blue-700">
                <i class="fab fa-facebook fa-2x"></i>
            </a>
            <a href="#" class="text-blue-400 hover:text-blue-500">
                <i class="fab fa-twitter fa-2x"></i>
            </a>
            <a href="#" class="text-pink-500 hover:text-pink-600">
                <i class="fab fa-instagram fa-2x"></i>
            </a>
            <a href="#" class="text-red-600 hover:text-red-700">
                <i class="fab fa-youtube fa-2x"></i>
            </a>
        </div>
    </div>
</section>

@include('layouts.footer')


        </div>

        <script>
        const carousel = document.getElementById('carousel');
        const items = carousel.children;
        const totalItems = items.length;
        let currentIndex = 0;
        let isDragging = false;
        let startX, currentX, dragDistance;

        // Function to move to the next slide
        function moveToNextSlide() {
            currentIndex = (currentIndex + 1) % totalItems;
            updateCarouselPosition();
        }

        // Update carousel position
        function updateCarouselPosition() {
            const offset = -currentIndex * 100; // Move to the current index
            carousel.style.transform = `translateX(${offset}%)`;
        }

        // Automatic sliding
        setInterval(moveToNextSlide, 5000); // Change slide every 5 seconds

        // Mouse dragging
        carousel.addEventListener('mousedown', (e) => {
            isDragging = true;
            startX = e.pageX - carousel.offsetLeft;
        });

        carousel.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            currentX = e.pageX - carousel.offsetLeft;
            dragDistance = startX - currentX;
            carousel.style.transform = `translateX(${-currentIndex * 100 - (dragDistance / window.innerWidth) * 100}%)`;
        });

        carousel.addEventListener('mouseup', () => {
            isDragging = false;
            if (dragDistance > 50) {
                moveToNextSlide(); // Move to next slide if dragged far enough
            } else if (dragDistance < -50) {
                currentIndex = (currentIndex - 1 + totalItems) % totalItems; // Move to previous slide if dragged back
                updateCarouselPosition();
            } else {
                updateCarouselPosition(); // Reset position
            }
        });

        carousel.addEventListener('mouseleave', () => {
            isDragging = false;
            updateCarouselPosition(); // Reset position when mouse leaves
        });

           document.addEventListener("DOMContentLoaded", function() {
        const navbar = document.querySelector('nav');
        let isScrolled = false;

        window.addEventListener('scroll', () => {
            if (window.scrollY > 0) {
                isScrolled = true;
            } else {
                isScrolled = false;
            }
            navbar.classList.toggle('bg-gray-200', isScrolled);
            navbar.classList.toggle('bg-opacity-50', isScrolled);
            navbar.classList.toggle('bg-transparent', !isScrolled);
        });
    });
    </script>

    </x-app-layout>
