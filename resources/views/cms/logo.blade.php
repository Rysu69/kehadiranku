<x-cms-layout>
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Update Application Logo</h1>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <form action="{{ route('cms.logo.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="logo" class="block text-sm font-medium text-gray-700">Upload Logo</label>
            <input type="file" name="logo" id="logo" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
        </div>

        <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Update Logo</button>
    </form>

    @if ($cmsData && $cmsData->logo)
        <h2 class="text-xl font-semibold mb-2 mt-6">Current Logo</h2>
        <img src="{{ asset('storage/' . $cmsData->logo) }}" alt="Application Logo" class="w-32 h-32 object-cover rounded-md">
    @endif
</div>

</x-cms-layout>
