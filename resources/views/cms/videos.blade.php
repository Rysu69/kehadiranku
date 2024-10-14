<x-cms-layout>
    <h2 class="text-2xl font-semibold mb-4 mt-8">Video Section</h2>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cms.videos.update') }}" method="POST">
        @csrf

        <div class="mb-6">
            <label for="video_section_title" class="block text-gray-700 font-semibold">Video Section Title</label>
            <input type="text" name="video_section_title" value="{{ old('video_section_title', $cmsData->video_section_title) }}" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
        </div>

        <div class="mb-6">
            <label for="video_section_description" class="block text-gray-700 font-semibold">Video Section Description</label>
            <textarea name="video_section_description" class="form-textarea mt-1 block w-full border border-gray-300 p-2 rounded-lg">{{ old('video_section_description', $cmsData->video_section_description) }}</textarea>
        </div>

        <div id="videos-list" class="space-y-4">
            @foreach($cmsData->videos as $index => $video)
                <div class="flex space-x-4 items-center">
                    <input type="text" name="videos[{{ $index }}][title]" value="{{ old("videos.$index.title", $video['title']) }}" placeholder="Video Title" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                    <input type="text" name="videos[{{ $index }}][url]" value="{{ old("videos.$index.url", $video['url']) }}" placeholder="Video URL" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                    <button type="button" class="remove-item bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Remove</button>
                </div>
            @endforeach
        </div>

        <button type="button" id="add-video" class="mt-4 bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Add Video</button>

        <!-- Submit Button -->
        <div class="mt-8">
            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Update Video Section</button>
        </div>
    </form>

    <script>
        document.getElementById('add-video').addEventListener('click', function() {
            let index = document.querySelectorAll('#videos-list input[name^="videos"]').length / 2; // Adjust index calculation based on the number of fields per video
            let newVideo = `
                <div class="flex space-x-4 items-center">
                    <input type="text" name="videos[${index}][title]" placeholder="Video Title" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                    <input type="text" name="videos[${index}][url]" placeholder="Video URL" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                    <button type="button" class="remove-item bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Remove</button>
                </div>
            `;
            document.getElementById('videos-list').insertAdjacentHTML('beforeend', newVideo);
        });

        // Remove item functionality
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-item')) {
                e.target.parentElement.remove();
            }
        });
    </script>
</x-cms-layout>
