<x-cms-layout>
    <h2 class="text-2xl font-semibold mb-4 mt-8">Features Section</h2>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cms.features.update') }}" method="POST">
        @csrf

        <div class="mb-6">
            <label for="features_section_title" class="block text-gray-700 font-semibold">Features Section Title</label>
            <input type="text" name="features_section_title" value="{{ old('features_section_title', $cmsData->features_section_title) }}" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
        </div>

        <div class="mb-6">
            <label for="features_description" class="block text-gray-700 font-semibold">Features Description</label>
            <textarea name="features_description" class="form-textarea mt-1 block w-full border border-gray-300 p-2 rounded-lg">{{ old('features_description', $cmsData->features_description) }}</textarea>
        </div>

        <div id="features-list" class="space-y-4">
            @foreach($cmsData->features as $index => $feature)
                <div class="flex space-x-4 items-center">
                    <input type="text" name="features[{{ $index }}][name]" value="{{ old("features.$index.name", $feature['name']) }}" placeholder="Feature Name" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                    <input type="text" name="features[{{ $index }}][description]" value="{{ old("features.$index.description", $feature['description']) }}" placeholder="Feature Description" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                    <button type="button" class="remove-item bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Remove</button>
                </div>
            @endforeach
        </div>

        <button type="button" id="add-feature" class="mt-4 bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Add Feature</button>

        <!-- Submit Button -->
        <div class="mt-8">
            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Update Features</button>
        </div>
    </form>

    <script>
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

        // Remove item functionality
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-item')) {
                e.target.parentElement.remove();
            }
        });
    </script>
</x-cms-layout>
