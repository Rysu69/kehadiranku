    <x-app-layout>
        <!-- Main content -->
        <div class="relative isolate bg-gray-100 text-gray-800">

            <!-- Carousel Section -->
           <section id="home" class="relative w-full h-screen overflow-hidden">
    <div class="carousel-wrapper w-full h-full flex transition-transform duration-500" id="carousel">
        <!-- Carousel items -->
        @foreach($cmsData->carousel_image as $carouselImage)
            <div class="carousel-item w-full h-full flex-shrink-0 relative">
                <img class="w-full h-full object-cover" src="{{ $carouselImage['route'] }}" alt="https://via.placeholder.com/1200x800?text=404">
            </div>
        @endforeach
    </div>
</section>


            <!-- Profile Section -->
    <section id="profile" class="mt-12 py-32 px-6 lg:px-16">
        <div class="flex flex-col items-center">
            <h2 class="text-md font-semibold mb-4 text-center text-gray-500">{{ $cmsData->profile_title ?? 'Profile' }}</h2>
            <img src="{{ $cmsData->profile_image ?? asset('public/your-image-1.jpg') }}" alt="Profile Image" class="mb-6 rounded-lg">
            <div class="w-full flex justify-center rounded-lg p-4">
    <a href="{{ route('register') }}"
       class="px-8 py-3 bg-green-500 text-white font-semibold rounded-full shadow-md hover:bg-green-600 transition-all duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-50">
       Daftar
    </a>
</div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="fitur" class="mt-12 bg-gradient-to-r from-blue-500 to-blue-800 text-white py-16 px-6 lg:px-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-extrabold pb-2">{{ $cmsData->features_section_title ?? 'Our Features' }}</h2>
            <p class="text-xl font-bold">{{ $cmsData->features_description ?? 'Apa saja yang Anda dapat saat menggunakan layanan Kehadiranku – Presensi Online Siswa' }}</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
              @foreach($cmsData->features as $feature)
    <div class="p-6 bg-white text-gray-800 rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300">
<i class="fas fa-bolt text-blue-600 text-4xl"></i>
    <h3 class="text-xl font-semibold mt-4">{{ $feature['name'] }}</h3>
        <p class="mt-2">{{ $feature['description'] }}</p>
    </div>
@endforeach


            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section id="video" class="mt-12 py-32 px-6 lg:px-16">
        <div class="container mx-auto">
            <h2 class="text-center text-3xl font-extrabold mb-4">{{ $cmsData->video_section_title ?? 'Video Pengenalan' }}</h2>
            <p class="text-center text-xl font-bold mb-20">{{ $cmsData->video_section_description ?? 'Kenali beberapa fitur unggulan dari 3 aplikasi yang kami sediakan untuk sekolah' }}</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
               @foreach($cmsData->videos as $video)
    <div class="rounded-lg overflow-hidden text-gray-400">
        <p class="text-center text-lg font-semibold mb-2">{{ $video['title'] }}</p>
        <iframe class="w-full h-64 rounded-t-lg" src="{{ $video['url'] }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
@endforeach


            </div>
        </div>
    </section>

    <!-- User Testimonials Section -->
                <section id="pengguna" class="mt-12 py-32 px-6 lg:px-16">
        <div class="container mx-auto">
            <h2 class="text-center text-5xl font-extrabold mb-4">{{ $cmsData->testimonials_section_title ?? 'User Testimonials' }}</h2>
                    <p class="text-center text-xl font-bold">{{ $cmsData->testimonials_section_description ?? 'Layanan Presensi Online Siswa telah digunakan oleh berbagai sekolah di seluruh indonesia' }}</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                @foreach($cmsData->userTestimonials as $testimonial)
    <div class="bg-white p-6 rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300">
        <p class="text-gray-600">"{{ $testimonial['comment'] }}"</p>
        <p class="text-right font-semibold mt-4">- {{ $testimonial['name'] }}, {{ $testimonial['school'] }}</p>
    </div>
@endforeach

            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="biaya" class="mt-12 py-16 px-6 lg:px-16">

        <div class="container mx-auto text-center">
            <h2 class="text-center text-3xl font-extrabold mb-4">{{ $cmsData->pricing_section_title ?? 'Pricing Plans' }}</h2>
            <p class="text-center text-xl mb-20">{{ $cmsData->pricing_section_description ?? 'Choose a plan that suits your needs.' }}</p>
            <!-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8"> -->


            <div class="flex flex-col md:flex-row justify-center space-y-6 md:space-y-0 md:space-x-6 mt-12">

               @foreach($cmsData->pricingPlans as $plan)
    <div class="bg-gray-50 p-8 rounded-lg shadow-lg">
        <h3 class="text-xl font-bold mb-2">{{ $plan['name'] }}</h3>
        <p class="mt-2 text-2xl font-extrabold">{{ $plan['price'] }}</p>
        <p class="text-gray-600 mt-4">{{ $plan['description'] }}</p>

        @if(isset($plan['id']))
            <a href="{{ route('pricing.detail', $plan['id']) }}" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded">Learn More</a>
        @endif
    </div>
@endforeach


            </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section id="contact" class="mt-12 bg-white py-12 text-gray-800">
        <div class="container mx-auto text-center">
            <h2 class="text-center text-6xl font-extrabold mb-4">{{ $cmsData->contact_section_title ?? 'Contact Us' }}</h2>
            <p class="text-center text-lg mb-8">{{ $cmsData->contact_section_description ?? 'Get in touch with us for any inquiries.' }}</p>
             <!-- Contact Information -->
        <div class="mb-8">
            <div class="flex justify-center space-x-6">
               <div class="flex justify-center space-x-6">
    <div class="flex space-x-2">
        <p class="font-semibold">Telp:</p>
        <p class="text-gray-600">{{ $cmsData->no_telp}}</p>
    </div>
</div>
<div class="flex justify-center space-x-6">
    <div class="flex space-x-2">
        <p class="font-semibold">WA:</p>
        <p class="text-gray-600">{{ $cmsData->no_wa}}</p>
    </div>
</div>
            </div>
        </div>

        <!-- Office Information -->
        <div class="mb-8">
            <p class="font-bold">Technical Support Office</p>
            <p class="text-gray-600">{{ $cmsData->alamat_1}}</p>
        </div>
        <div class="mb-8">
            <p class="font-bold">Development Office</p>
            <p class="text-gray-600">{{ $cmsData->alamat_2}}</p>
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
