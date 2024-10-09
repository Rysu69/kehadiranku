<x-cms-layout>
    <div class="container mx-auto p-10">
        <h1 class="text-3xl font-bold mb-8">Edit CMS Content</h1>

        <form action="{{ route('cms.update') }}" method="POST">
            @csrf

                <!-- Carousel Section -->
            <div id="carousel">
            <h2 class="text-2xl font-semibold mb-4">Carousel Images</h2>
            <div id="carousel-images-list" class="space-y-4">
                @foreach($cmsData->carousel_image as $index => $image)
                    <div class="flex space-x-4 items-center">
                        <input type="text" name="carousel_image[{{ $index }}][route]" value="{{ $image['route'] }}" placeholder="Image route" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                        <button type="button" class="remove-item bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Remove</button>
                    </div>
                @endforeach
            </div>
            <button type="button" id="add-carousel-image" class="mt-4 bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Add Carousel Image</button>
            </div>

            <!-- Profile Section -->
            <div id="profile">
            <h2 class="text-2xl font-semibold mb-4">Profile Section</h2>
            <div class="mb-6">
                <label for="profile_title" class="block text-gray-700 font-semibold">Title</label>
                <input type="text" name="profile_title" value="{{ $cmsData->profile_title }}" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
            </div>

            <div class="mb-6">
                <label for="profile_image" class="block text-gray-700 font-semibold">Image URL</label>
                <input type="text" name="profile_image" value="{{ $cmsData->profile_image }}" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
            </div>

            </div>

            <!-- Features Section -->
            <h2 class="text-2xl font-semibold mb-4 mt-8">Features Section</h2>
             <div class="mb-6">
                <label for="features_section_title" class="block text-gray-700 font-semibold">Features Section Title</label>
                <input type="text" name="features_section_title" value="{{ $cmsData->features_section_title }}" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
            </div>

            <div class="mb-6">
                <label for="features_description" class="block text-gray-700 font-semibold">Features Description</label>
                <textarea name="features_description" class="form-textarea mt-1 block w-full border border-gray-300 p-2 rounded-lg">{{ $cmsData->features_description }}</textarea>
            </div>
            <div id="features-list" class="space-y-4">
                @foreach($cmsData->features as $index => $feature)
                    <div class="flex space-x-4 items-center">
                        <input type="text" name="features[{{ $index }}][name]" value="{{ $feature['name'] }}" placeholder="Feature Name" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                        <input type="text" name="features[{{ $index }}][description]" value="{{ $feature['description'] }}" placeholder="Feature Description" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                        <button type="button" class="remove-item bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Remove</button>
                    </div>
                @endforeach
            </div>
            <button type="button" id="add-feature" class="mt-4 bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Add Feature</button>

            <!-- Video Section -->
            <h2 class="text-2xl font-semibold mb-4 mt-8">Video Section</h2>
              <div class="mb-6">
                <label for="video_section_title" class="block text-gray-700 font-semibold">Video Section Title</label>
                <input type="text" name="video_section_title" value="{{ $cmsData->video_section_title }}" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
            </div>

            <div class="mb-6">
                <label for="video_section_description" class="block text-gray-700 font-semibold">Video Section Description</label>
                <textarea name="video_section_description" class="form-textarea mt-1 block w-full border border-gray-300 p-2 rounded-lg">{{ $cmsData->video_section_description }}</textarea>
            </div>
            <div id="videos-list" class="space-y-4">
                @foreach($cmsData->videos as $index => $video)
                    <div class="flex space-x-4 items-center">
                        <input type="text" name="videos[{{ $index }}][title]" value="{{ $video['title'] }}" placeholder="Video Title" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                        <input type="text" name="videos[{{ $index }}][url]" value="{{ $video['url'] }}" placeholder="Video URL" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                        <button type="button" class="remove-item bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Remove</button>
                    </div>
                @endforeach
            </div>
            <button type="button" id="add-video" class="mt-4 bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Add Video</button>

                        <!-- User Testimonials -->
            <h2 class="text-2xl font-semibold mb-4 mt-8">User Testimonials</h2>
              <div class="mb-6">
                <label for="testimonials_section_title" class="block text-gray-700 font-semibold">User Testimonials Title</label>
                <input type="text" name="video_section_title" value="{{ $cmsData->testimonials_section_title }}" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
            </div>

            <div class="mb-6">
                <label for="testimonials_section_description" class="block text-gray-700 font-semibold">User Testimonials Description</label>
                <textarea name="video_section_description" class="form-textarea mt-1 block w-full border border-gray-300 p-2 rounded-lg">{{ $cmsData->testimonials_section_description }}</textarea>
            </div>
           <div id="testimonials-list" class="space-y-4">
    @foreach($cmsData->userTestimonials as $index => $testimonial)
        <div class="flex space-x-4 items-center">
            <!-- Name Field -->
            <input type="text" name="userTestimonials[{{ $index }}][name]" value="{{ $testimonial['name'] }}" placeholder="Name" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">

            <!-- Comment Field -->
            <input type="text" name="userTestimonials[{{ $index }}][comment]" value="{{ $testimonial['comment'] }}" placeholder="Comment" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">

            <!-- School Field -->
            <input type="text" name="userTestimonials[{{ $index }}][school]" value="{{ $testimonial['school'] }}" placeholder="School" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">

            <!-- Remove Button -->
            <button type="button" class="remove-item bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Remove</button>
        </div>
    @endforeach
</div>

            <button type="button" id="add-testimonial" class="mt-4 bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Add Testimonial</button>

            <!-- Pricing Plans Section -->
            <h2 class="text-2xl font-semibold mb-4 mt-8">Pricing Plans Section</h2>
             <div class="mb-6">
                <label for="pricing_section_title" class="block text-gray-700 font-semibold">Pricing Section Title</label>
                <input type="text" name="pricing_section_title" value="{{ $cmsData->pricing_section_title }}" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
            </div>

            <div class="mb-6">
                <label for="pricing_section_description" class="block text-gray-700 font-semibold">Pricing Section Description</label>
                <textarea name="pricing_section_description" class="form-textarea mt-1 block w-full border border-gray-300 p-2 rounded-lg">{{ $cmsData->pricing_section_description }}</textarea>
            </div>

            <div id="pricing-plans-list" class="space-y-4">
                @foreach($cmsData->pricingPlans as $index => $plan)
                    <div class="flex space-x-4 items-center">
                        <input type="text" name="pricingPlans[{{ $index }}][name]" value="{{ $plan['name'] }}" placeholder="Plan Name" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                        <input type="text" name="pricingPlans[{{ $index }}][description]" value="{{ $plan['description'] }}" placeholder="Plan Description" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                        <input type="text" name="pricingPlans[{{ $index }}][price]" value="{{ $plan['price'] }}" placeholder="Plan Price" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                        <button type="button" class="remove-item bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Remove</button>
                    </div>
                @endforeach
            </div>
            <button type="button" id="add-pricing-plan" class="mt-4 bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Add Pricing Plan</button>

             <!-- Contact Section -->
            <h2 class="text-2xl font-semibold mb-4 mt-8">Contact Section</h2>

            <div class="mb-6">
                <label for="contact_section_title" class="block text-gray-700 font-semibold">Contact Section Title</label>
                <input type="text" name="contact_section_title" value="{{ $cmsData->contact_section_title }}" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
            </div>

            <div class="mb-6">
                <label for="contact_section_description" class="block text-gray-700 font-semibold">Contact Section Description</label>
                <textarea name="contact_section_description" class="form-textarea mt-1 block w-full border border-gray-300 p-2 rounded-lg">{{ $cmsData->contact_section_description }}</textarea>
            </div>

            <div class="mb-6">
                <label for="no_telp" class="block text-gray-700 font-semibold">Phone Number</label>
                <input type="text" name="no_telp" value="{{ $cmsData->no_telp }}" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
            </div>

            <div class="mb-6">
                <label for="no_wa" class="block text-gray-700 font-semibold">WhatsApp Number</label>
                <input type="text" name="no_wa" value="{{ $cmsData->no_wa }}" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
            </div>

            <div class="mb-6">
                <label for="alamat_1" class="block text-gray-700 font-semibold">Address Line 1</label>
                <input type="text" name="alamat_1" value="{{ $cmsData->alamat_1 }}" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
            </div>

            <div class="mb-6">
                <label for="alamat_2" class="block text-gray-700 font-semibold">Address Line 2</label>
                <input type="text" name="alamat_2" value="{{ $cmsData->alamat_2 }}" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
            </div>

            <!-- Submit Button -->
            <div class="mt-8">
                <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Update CMS</button>
            </div>
        </form>
    </div>

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
</x-cms-layout>
