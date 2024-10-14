<x-cms-layout>
    <div class="container mx-auto py-12">
        <h1 class="text-2xl font-bold mb-6">Edit Colors</h1>

        <!-- Color Edit Form -->
        <form action="{{ route('cms.colors.update') }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Background Color -->
            <div class="mb-4">
                <label for="bg_color" class="block text-sm font-medium text-gray-700">Background Color</label>
                <input type="color" id="bg_color" name="bg_color" value="{{ $cmsData->bg_color ?? '#FFFFFF' }}" class="mt-1 block w-1/5 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <!-- Primary Color -->
            <div class="mb-4">
                <label for="primary_color" class="block text-sm font-medium text-gray-700">Primary Color</label>
                <input type="color" id="primary_color" name="primary_color" value="{{ $cmsData->primary_color ?? '#FFFFFF' }}" class="mt-1 block w-1/5 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <!-- Secondary Color -->
            <div class="mb-4">
                <label for="secondary_color" class="block text-sm font-medium text-gray-700">Secondary Color</label>
                <input type="color" id="secondary_color" name="secondary_color" value="{{ $cmsData->secondary_color ?? '#FFFFFF' }}" class="mt-1 block w-1/5 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="light_color" class="block text-sm font-medium text-gray-700">Light Color</label>
                <input type="color" id="light_color" name="light_color" value="{{ $cmsData->light_color ?? '#FFFFFF' }}" class="mt-1 block w-1/5 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="dark_color" class="block text-sm font-medium text-gray-700">Dark Color</label>
                <input type="color" id="dark_color" name="dark_color" value="{{ $cmsData->dark_color ?? '#FFFFFF' }}" class="mt-1 block w-1/5 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="gradient_from" class="block text-sm font-medium text-gray-700">Gradient from</label>
                <input type="color" id="gradient_from" name="gradient_from" value="{{ $cmsData->gradient_from ?? '#FFFFFF' }}" class="mt-1 block w-1/5 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="gradient_to" class="block text-sm font-medium text-gray-700">Gradient to</label>
                <input type="color" id="gradient_to" name="gradient_to" value="{{ $cmsData->gradient_to ?? '#FFFFFF' }}" class="mt-1 block w-1/5 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md shadow-md hover:bg-blue-700 focus:outline-none">
                    Save Changes
                </button>
            </div>
        </form>
    </div>
    <script>
window.addEventListener('Tally.FormPageView', () => {
  document
    .querySelectorAll('input[placeholder="Hex code"]')
    .forEach((el) => (el.type = 'color'));
});
</script>
</x-cms-layout>
