<x-cms-layout>
    <h2 class="text-2xl font-semibold mb-4 mt-8">Profile Section</h2>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cms.profile.update') }}" method="POST">
        @csrf

        <div class="mb-6">
            <label for="profile_title" class="block text-gray-700 font-semibold">Profile Title</label>
            <input type="text" name="profile_title" value="{{ old('profile_title', $cmsData->profile_title) }}" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
        </div>

        <div class="mb-6">
            <label for="profile_image" class="block text-gray-700 font-semibold">Profile Video URL</label>
            <input type="text" name="profile_image" value="{{ old('profile_image', $cmsData->profile_image) }}" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
        </div>

        <!-- Submit Button -->
        <div class="mt-8">
            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Update Profile</button>
        </div>
    </form>
</x-cms-layout>
