<x-cms-layout>
    <h2 class="text-2xl font-semibold mb-4 mt-8">User Testimonials Section</h2>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cms.testimonials.update') }}" method="POST">
        @csrf

        <div class="mb-6">
            <label for="testimonials_section_title" class="block text-gray-700 font-semibold">Testimonials Section Title</label>
            <input type="text" name="testimonials_section_title" value="{{ old('testimonials_section_title', $cmsData->testimonials_section_title) }}" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
        </div>

        <div class="mb-6">
            <label for="testimonials_section_description" class="block text-gray-700 font-semibold">Testimonials Section Description</label>
            <textarea name="testimonials_section_description" class="form-textarea mt-1 block w-full border border-gray-300 p-2 rounded-lg">{{ old('testimonials_section_description', $cmsData->testimonials_section_description) }}</textarea>
        </div>

        <div id="testimonials-list" class="space-y-4">
            @foreach($cmsData->userTestimonials as $index => $testimonial)
                <div class="flex space-x-4 items-center">
                    <!-- Name Field -->
                    <input type="text" name="userTestimonials[{{ $index }}][name]" value="{{ old("userTestimonials.$index.name", $testimonial['name']) }}" placeholder="Name" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">

                    <!-- Comment Field -->
                    <input type="text" name="userTestimonials[{{ $index }}][comment]" value="{{ old("userTestimonials.$index.comment", $testimonial['comment']) }}" placeholder="Comment" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">

                    <!-- School Field -->
                    <input type="text" name="userTestimonials[{{ $index }}][school]" value="{{ old("userTestimonials.$index.school", $testimonial['school']) }}" placeholder="School" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">

                    <!-- Remove Button -->
                    <button type="button" class="remove-item bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Remove</button>
                </div>
            @endforeach
        </div>

        <button type="button" id="add-testimonial" class="mt-4 bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Add Testimonial</button>

        <!-- Submit Button -->
        <div class="mt-8">
            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Update Testimonials</button>
        </div>
    </form>

    <script>
        document.getElementById('add-testimonial').addEventListener('click', function() {
            let index = document.querySelectorAll('#testimonials-list input[name^="userTestimonials"]').length / 3; // Adjust index calculation based on the number of fields per testimonial
            let newTestimonial = `
                <div class="flex space-x-4 items-center">
                    <input type="text" name="userTestimonials[${index}][name]" placeholder="Name" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                    <input type="text" name="userTestimonials[${index}][comment]" placeholder="Comment" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                    <input type="text" name="userTestimonials[${index}][school]" placeholder="School" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                    <button type="button" class="remove-item bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Remove</button>
                </div>
            `;
            document.getElementById('testimonials-list').insertAdjacentHTML('beforeend', newTestimonial);
        });

        // Remove item functionality
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-item')) {
                e.target.parentElement.remove();
            }
        });
    </script>
</x-cms-layout>
