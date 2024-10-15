<x-app-layout>
        <style>

:root {
    --bg-color: {{ $cmsData->bg_color ?? '#ffffff' }};
    --primary-color: {{ $cmsData->primary_color ?? '#FFFFFF' }};
    --secondary-color: {{ $cmsData->secondary_color ?? '#FFFFFF' }};
    --light-color: {{ $cmsData->light_color ?? '#ffffff' }};
    --dark-color: {{ $cmsData->dark_color ?? '#000000' }};
    --gradient-from: {{ $cmsData->gradient_from?? '#3b82f6' }}; /* Default: blue-500 */
    --gradient-to: {{ $cmsData->gradient_to  ?? '#1d4ed8' }}; /* Default: blue-800 */
}

.bg {
    background-color: var(--bg-color);
}

.primary {
    color: var(--primary-color);
}

.secondary {
    color: var(--secondary-color);
}

.light {
    color: var(--light-color);
}

.dark {
    color: var(--dark-color);
}

.gradient-bg {
    background: linear-gradient(to bottom right, var(--gradient-from), var(--gradient-to));
}

        </style>
        <!-- Main content -->
        <div class="relative isolate bg dark">

           <!-- Carousel Section -->
<section id="home" class="relative w-full h-screen overflow-hidden">
    <div class="carousel-wrapper w-full h-full flex transition-transform duration-500" id="carousel">
        <!-- Carousel items -->

        @if (!empty($cmsData->carousel_image) && ($cmsData && is_array($cmsData->carousel_image) && count($cmsData->carousel_image) > 0))
            @foreach ($cmsData->carousel_image as $carouselImage)
                <div class="carousel-item w-full h-full flex-shrink-0 relative">
                    <img class="w-full h-full object-cover" src="{{ asset('storage/' . $carouselImage) }}" alt="Carousel Image">
                </div>
            @endforeach
        @else
            <div class="carousel-item w-full h-full flex-shrink-0 relative">
                <img class="w-full h-full object-cover" src="https://via.placeholder.com/1200x800?text=No+Image" alt="No Image Available">
            </div>
        @endif

    </div>
</section>



            <!-- Profile Section -->
<section id="profile" class="mt-12 py-32 px-6 lg:px-16">
    <div class="flex flex-col items-center">
        <h2 class="text-md font-semibold mb-4 text-center primary">{{ $cmsData->profile_title ?? 'Profile' }}</h2>

        <!-- YouTube iframe -->
        @php
    $cmsData = \App\Models\CmsData::first();
@endphp

@if ($cmsData && $cmsData->profile_image)
    <div class="mb-6 w-full overflow-hidden relative" style="padding-top: 56.25%;"> <!-- 16:9 aspect ratio -->
        <iframe class="absolute top-0 left-0 w-full h-full rounded-lg"
                src="{{ $cmsData->profile_image }}"
                frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>
@else
    <div class="mb-6 w-full overflow-hidden relative" style="padding-top: 56.25%;">
        <iframe class="absolute top-0 left-0 w-full h-full rounded-lg"
                src="https://www.youtube.com/embed/"
                frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>
@endif



        <div class="w-full flex justify-center rounded-lg p-4">
            <a href="{{ route('register') }}"
               class="px-8 py-3 bg-green-500 light font-semibold rounded-full shadow-md hover:bg-green-600 transition-all duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-50">
               Daftar
            </a>
        </div>
    </div>
</section>


    <!-- Features Section -->
    <section id="fitur" class="mt-12 gradient-bg secondary py-16 px-6 lg:px-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-extrabold pb-2 light">{{ $cmsData->features_section_title ?? 'Our Features' }}</h2>
            <p class="text-xl font-bold light">{{ $cmsData->features_description ?? 'Apa saja yang Anda dapat saat menggunakan layanan Kehadiranku – Presensi Online Siswa' }}</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">

                @if (!empty($features) && (is_array($features) && count($features) > 0))
                    @foreach($features as $feature)
                        <div class="p-6 bg-white dark rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300">
                            <i class="{{ $feature['icon'] }} text-blue-600 text-4xl"></i>
                            <h3 class="text-xl dark font-semibold mt-4">{{ $feature['name'] }}</h3>
                            <p class="mt-2 dark">{{ $feature['description'] }}</p>
                        </div>
                    @endforeach
                @else
                    <p>No features available.</p>
                @endif

            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section id="video" class="mt-12 py-32 px-6 lg:px-16">
        <div class="container mx-auto">
            <h2 class="text-center text-3xl font-extrabold mb-4 primary">{{ $cmsData->video_section_title ?? 'Video Pengenalan' }}</h2>
            <p class="text-center text-xl font-bold mb-20 primary">{{ $cmsData->video_section_description ?? 'Kenali beberapa fitur unggulan dari 3 aplikasi yang kami sediakan untuk sekolah' }}</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">

                @if (!empty($videos) && (is_array($videos) && count($videos) > 0))
                    @foreach($videos as $video)
                        <div class="rounded-lg overflow-hidden secondary">
                            <p class="text-center text-lg font-semibold mb-2 primary">{{ $video['title'] }}</p>
                            <iframe class="w-full h-64 rounded-t-lg primary" src="{{ $video['url'] }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    @endforeach
                @else
                    <p>No videos available.</p>
                @endif

            </div>
        </div>
    </section>

    <!-- User Testimonials Section -->
    <section id="pengguna" class="mt-12 py-32 px-6 lg:px-16">
        <div class="container mx-auto">
            <h2 class="text-center text-5xl font-extrabold mb-4 primary">{{ $cmsData->testimonials_section_title ?? 'User Testimonials' }}</h2>
                    <p class="text-center text-xl font-bold primary">{{ $cmsData->testimonials_section_description ?? 'Layanan Presensi Online Siswa telah digunakan oleh berbagai sekolah di seluruh indonesia' }}</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">

                @if (!empty($userTestimonials) && (is_array($userTestimonials) && count($userTestimonials) > 0))
                    @foreach($userTestimonials as $testimonial)
                        <div class="bg-white p-6 rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300">
                            <p class="secondary">"{{ $testimonial['comment'] }}"</p>
                            <p class="text-right font-semibold mt-4 primary">- {{ $testimonial['name'] }}, {{ $testimonial['school'] }}</p>
                        </div>
                    @endforeach
                @else
                    <p>No testimonials available.</p>
                @endif

            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="biaya" class="mt-12 py-16 px-6 lg:px-16">

        <div class="container mx-auto text-center">
            <h2 class="text-center text-3xl font-extrabold mb-4 primary">{{ $cmsData->pricing_section_title ?? 'Pricing Plans' }}</h2>
            <p class="text-center text-xl mb-20 primary">{{ $cmsData->pricing_section_description ?? 'Choose a plan that suits your needs.' }}</p>
            <!-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8"> -->


            <div class="flex flex-col md:flex-row justify-center space-y-6 md:space-y-0 md:space-x-6 mt-12">
                @if (!empty($pricingPlans) && (is_array($pricingPlans) && count($pricingPlans) > 0))
                            @foreach($pricingPlans as $plan)
                    <div class="bg-gray-50 p-8 rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold mb-2 dark">{{ $plan['name'] }}</h3>
                        <p class="mt-2 text-2xl font-extrabold dark">Rp {{ $plan['price'] }}</p>
                        <p class="secondary mt-4">{{ $plan['description'] }}</p>

                            <a href="#daftar" class="mt-4 inline-block bg-blue-600 light py-2 px-4 rounded-2xl">Daftar</a>
                    </div>
                @endforeach
                @else
                <div class="bg-gray-50 p-8 rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold mb-2 dark">null</h3>
                        <p class="mt-2 text-2xl font-extrabold dark">null</p>
                        <p class="secondary mt-4">null</p>

                            <a href="#daftar" class="mt-4 inline-block bg-blue-600 light py-2 px-4 rounded-2xl">Daftar</a>
                    </div>
                @endif

            </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section id="contact" class="mt-12 bg-white py-12 primary">
        <div class="container mx-auto text-center">
            <h2 class="text-center text-6xl font-extrabold mb-4 dark">{{ $cmsData->contact_section_title ?? 'Contact Us' }}</h2>
            <p class="text-center text-lg mb-8 dark">{{ $cmsData->contact_section_description ?? 'Get in touch with us for any inquiries.' }}</p>
             <!-- Contact Information -->
        <div class="mb-8">
            <div class="flex justify-center space-x-6">
               <div class="flex justify-center space-x-6">
    <div class="flex space-x-2 dark">
        <p class="font-semibold">Telp:</p>
        <p class="text-gray-600">{{ $cmsData->no_telp ?? '-'}}</p>
    </div>
</div>
<div class="flex justify-center space-x-6">
    <div class="flex space-x-2 dark">
        <p class="font-semibold">WA:</p>
        <p class="text-gray-600">{{ $cmsData->no_wa ?? '-'}}</p>
    </div>
</div>
            </div>
        </div>

        <!-- Office Information -->
        <div class="mb-8 dark">
            <p class="font-bold">Technical Support Office</p>
            <p class="text-gray-600">{{ $cmsData->alamat_1 ?? '-'}}</p>
        </div>
        <div class="mb-8 dark">
            <p class="font-bold">Development Office</p>
            <p class="text-gray-600">{{ $cmsData->alamat_2 ?? '-'}}</p>
        </div>

        <!-- Social Media Links -->
        <div class="flex justify-center space-x-4 mt-8">
            @if (!empty($socials) && (is_array($socials) && count($socials) > 0))
                        @foreach($socials as $social)
                    <a href="{{ $social['url'] }}" class=" hover:text-blue-700">
                        <i class="{{ $social['icon'] ?? 'fas fa-question-circle' }} fa-2x"></i>
                    </a>
            @endforeach
            @else
                    <a href="#" class=" hover:text-blue-700">
                        <i class="{{ $social['icon'] ?? 'fas fa-question-circle' }} fa-2x"></i>
                    </a>
            @endif
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
