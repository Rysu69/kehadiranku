<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">

        <div class="min-h-screen bg-gray-100 dark:bg-gray-100 flex">

            <!-- Sidebar -->
            <aside class="w-64 bg-blue-500 text-white min-h-screen p-6 flex flex-col">
    <nav class="flex-1">
        <ul>
            <li class="mb-4">
                <a href="/cms/welcome" class="block py-2 hover:bg-blue-600 rounded">Welcome</a>
            </li>
             <li class="mb-4">
                <a href="/cms/logo" class="block py-2 hover:bg-blue-600 rounded">Logo</a>
            </li>
            <li class="mb-4">
                <a href="/cms/colors" class="block py-2 hover:bg-blue-600 rounded">Color</a>
            </li>
            <li class="mb-4">
                <a href="/cms/carousel" class="block py-2 hover:bg-blue-600 rounded">Carousel</a>
            </li>
            <li class="mb-4">
                <a href="/cms/profile" class="block py-2 hover:bg-blue-600 rounded">Profile</a>
            </li>
            <li class="mb-4">
                <a href="/cms/features" class="block py-2 hover:bg-blue-600 rounded">Features</a>
            </li>
            <li class="mb-4">
                <a href="/cms/videos" class="block py-2 hover:bg-blue-600 rounded">Video</a>
            </li>
            <li class="mb-4">
                <a href="/cms/testimonials" class="block py-2 hover:bg-blue-600 rounded">Testimonials</a>
            </li>
            <li class="mb-4">
                <a href="/cms/contact" class="block py-2 hover:bg-blue-600 rounded">Contact</a>
            </li>
            <li class="mb-4">
                <a href="/profile" class="block py-2 hover:bg-blue-600 rounded">Admin</a>
            </li>
        </ul>
    </nav>

    <div class="mt-auto">

            <a href="/#home" class="block py-2 hover:bg-blue-600 rounded"><- back</a>

    </div>
</aside>

            <!-- Main Content -->
            <div class="flex-grow">
                <!-- Page Heading -->
                @isset($header)
                    <header class="bg-white dark:bg-gray-100 shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endisset

                <!-- Page Content -->
                <main class="p-6">
                    {{ $slot }}
                </main>
            </div>

        </div>

    </body>

</html>
  <script>
        // Add new carousel image
        document.getElementById('add-carousel-image').addEventListener('click', function() {
            let index = document.querySelectorAll('#carousel-images-list input').length;
            let newImage = `
                <div class="flex space-x-4 items-center">
                    <input type="text" name="carousel_image[${index}][route]" placeholder="Image route" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                    <button type="button" class="remove-item bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Remove</button>
                </div>
            `;
            document.getElementById('carousel-images-list').insertAdjacentHTML('beforeend', newImage);
        });

        // Add new feature
        document.getElementById('add-feature').addEventListener('click', function() {
            let index = document.querySelectorAll('#features-list input[name^="features"]').length / 2;
            let newFeature = `
                <div class="flex space-x-4 items-center">
                    <input type="text" name="features[${index}][name]" placeholder="Feature Name" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                    <input type="text" name="features[${index}][description]" placeholder="Feature Description" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                    <button type="button" class="remove-item bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Remove</button>
                </div>
            `;
            document.getElementById('features-list').insertAdjacentHTML('beforeend', newFeature);
        });

        // Add new video
        document.getElementById('add-video').addEventListener('click', function() {
            let index = document.querySelectorAll('#videos-list input[name^="videos"]').length / 2;
            let newVideo = `
                <div class="flex space-x-4 items-center">
                    <input type="text" name="videos[${index}][title]" placeholder="Video Title" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                    <input type="text" name="videos[${index}][url]" placeholder="Video URL" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                    <button type="button" class="remove-item bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Remove</button>
                </div>
            `;
            document.getElementById('videos-list').insertAdjacentHTML('beforeend', newVideo);
        });

        // Add new testimonial
document.getElementById('add-testimonial').addEventListener('click', function() {
    let index = document.querySelectorAll('#testimonials-list input[name^="userTestimonials"]').length / 3;
    let newTestimonial = `
        <div class="flex space-x-4 items-center">
            <input type="text" name="userTestimonials[${index}][name]" placeholder="Name" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
            <input type="text" name="userTestimonials[${index}][comment]" placeholder="Comment" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
            <input type="text" name="userTestimonials[${index}][school]" placeholder="School" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
            <button type="button" class="remove-item bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Remove</button>
        </div>
    `;
    document.getElementById('testimonials-list').insertAdjacentHTML('beforeend', newTestimonial);
    attachRemoveListener();
});

        // Add new pricing plan
        document.getElementById('add-pricing-plan').addEventListener('click', function() {
            let index = document.querySelectorAll('#pricing-plans-list input[name^="pricingPlans"]').length / 3;
            let newPlan = `
                <div class="flex space-x-4 items-center">
                    <input type="text" name="pricingPlans[${index}][name]" placeholder="Plan Name" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                    <input type="text" name="pricingPlans[${index}][description]" placeholder="Plan Description" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                    <input type="text" name="pricingPlans[${index}][price]" placeholder="Plan Price" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                    <button type="button" class="remove-item bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Remove</button>
                </div>
            `;
            document.getElementById('pricing-plans-list').insertAdjacentHTML('beforeend', newPlan);
        });

        // Remove item functionality
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-item')) {
                e.target.parentElement.remove();
            }
        });
    </script>
