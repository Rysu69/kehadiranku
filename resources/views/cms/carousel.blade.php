<x-cms-layout>
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Manage Carousel Images</h1>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <form action="{{ route('cms.carousel.update') }}" method="POST" enctype="multipart/form-data" class="mb-4">
        @csrf
        <div class="mb-4">
            <label for="carousel_image" class="block text-sm font-medium text-gray-700">Upload Carousel Images</label>
            <input type="file" name="carousel_image[]" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" multiple>
        </div>
        <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Update Carousel</button>
    </form>

    @if ($cmsData && $cmsData->carousel_image)
        <h2 class="text-xl font-semibold mb-2">Current Images</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach (json_decode($cmsData->carousel_image, true) as $index => $image)
                <div class="relative">
                    <img src="{{ asset('storage/' . $image) }}" class="w-full h-48 object-cover rounded-lg shadow-md" alt="Carousel Image">
                    <form action="{{ route('cms.carousel.delete', $index) }}" method="POST" class="absolute bottom-2 right-2">
                        @csrf
                        <button type="submit" class="bg-red-600 text-white py-1 px-2 rounded hover:bg-red-700">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    @else
        <p class="mt-4 text-gray-600">No images available.</p>
    @endif
</div>
</x-cms-layout>
