<x-cms-layout>
    <div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">Edit Contact Section</h1>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cms.updateContactSection') }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Contact Section Title -->
        <div class="mb-4">
            <label for="contact_section_title" class="block text-gray-700">Contact Section Title</label>
            <input type="text" name="contact_section_title" id="contact_section_title" value="{{ $cmsData->contact_section_title ?? '' }}" class="w-full border-gray-300 rounded-lg">
        </div>

        <!-- Contact Section Description -->
        <div class="mb-4">
            <label for="contact_section_description" class="block text-gray-700">Contact Section Description</label>
            <textarea name="contact_section_description" id="contact_section_description" rows="4" class="w-full border-gray-300 rounded-lg">{{ $cmsData->contact_section_description ?? '' }}</textarea>
        </div>

        <!-- Phone Number -->
        <div class="mb-4">
            <label for="no_telp" class="block text-gray-700">Phone Number (Telp)</label>
            <input type="text" name="no_telp" id="no_telp" value="{{ $cmsData->no_telp ?? '' }}" class="w-full border-gray-300 rounded-lg">
        </div>

        <!-- WhatsApp Number -->
        <div class="mb-4">
            <label for="no_wa" class="block text-gray-700">WhatsApp Number (WA)</label>
            <input type="text" name="no_wa" id="no_wa" value="{{ $cmsData->no_wa ?? '' }}" class="w-full border-gray-300 rounded-lg">
        </div>

        <!-- Address 1 -->
        <div class="mb-4">
            <label for="alamat_1" class="block text-gray-700">Address 1</label>
            <input type="text" name="alamat_1" id="alamat_1" value="{{ $cmsData->alamat_1 ?? '' }}" class="w-full border-gray-300 rounded-lg">
        </div>

        <!-- Address 2 -->
        <div class="mb-4">
            <label for="alamat_2" class="block text-gray-700">Address 2</label>
            <input type="text" name="alamat_2" id="alamat_2" value="{{ $cmsData->alamat_2 ?? '' }}" class="w-full border-gray-300 rounded-lg">
        </div>

        <!-- Socials (Dynamic) -->
        <div class="mb-4">
            <label class="block text-gray-700">Social Media Links</label>

            <div id="socials-wrapper">

                @foreach ($cmsData->socials as $index => $social)
                <div class="social-item mb-2 flex items-center">
                    <input type="text" name="socials[{{ $index }}][icon]" value="{{ $social['icon'] ?? '' }}" placeholder="FontAwesome Icon" class="w-1/3 border-gray-300 rounded-lg mr-2">
                    <input type="url" name="socials[{{ $index }}][url]" value="{{ $social['url'] ?? '' }}" placeholder="Social Media URL" class="w-1/3 border-gray-300 rounded-lg mr-2">

                    <!-- Delete Button -->
                    <button type="button" class="px-4 py-2 bg-red-500 text-white rounded-lg" onclick="removeSocial({{ $index }})">Delete</button>
                </div>
                @endforeach
            </div>

            <!-- Add Social Media Button -->
            <button type="button" id="add-social" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded-lg">Add Social Media</button>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded-lg">Save</button>

    </form>
</div>

<script>
document.getElementById('add-social').addEventListener('click', function () {
    var wrapper = document.getElementById('socials-wrapper');
    var index = wrapper.children.length;

    var newSocial = `
        <div class="social-item mb-2 flex items-center">
            <input type="text" name="socials[${index}][icon]" placeholder="FontAwesome Icon" class="w-1/3 border-gray-300 rounded-lg mr-2">
            <input type="url" name="socials[${index}][url]" placeholder="Social Media URL" class="w-1/3 border-gray-300 rounded-lg mr-2">

            <button type="button" class="px-4 py-2 bg-yellow-500 text-white rounded-lg mr-2" onclick="editSocial(${index})">Edit</button>
            <button type="button" class="px-4 py-2 bg-red-500 text-white rounded-lg" onclick="removeSocial(${index})">Delete</button>
        </div>
    `;

    wrapper.insertAdjacentHTML('beforeend', newSocial);
});

// Remove Social Media Entry
function removeSocial(index) {
    var wrapper = document.getElementById('socials-wrapper');
    var item = wrapper.children[index];
    if (item) {
        item.remove();
    }
}

// Edit Social Media Entry (can be customized if needed)
function editSocial(index) {
    var iconInput = document.querySelector(`input[name="socials[${index}][icon]"]`);
    var urlInput = document.querySelector(`input[name="socials[${index}][url]"]`);

    // Customize how you want to handle the edit
    // For example, enabling/disabling or showing an alert for further editing
    alert('You can now edit this social media entry.');
}
</script>
</x-cms-layout>
