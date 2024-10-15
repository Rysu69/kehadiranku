<x-cms-layout>
    <h2 class="text-2xl font-semibold mb-4 mt-8">Pricing Section</h2>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cms.pricing.update') }}" method="POST">
        @csrf

        <!-- Pricing Section Title -->
        <div class="mb-6">
            <label for="pricing_section_title" class="block text-gray-700 font-semibold">Pricing Section Title</label>
            <input type="text" name="pricing_section_title" value="{{ old('pricing_section_title', $cmsData->pricing_section_title) }}" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
        </div>

        <!-- Pricing Section Description -->
        <div class="mb-6">
            <label for="pricing_section_description" class="block text-gray-700 font-semibold">Pricing Section Description</label>
            <textarea name="pricing_section_description" class="form-textarea mt-1 block w-full border border-gray-300 p-2 rounded-lg">{{ old('pricing_section_description', $cmsData->pricing_section_description) }}</textarea>
        </div>

        <!-- Pricing Plans -->
        <div id="pricing-plans-list" class="space-y-4">
            @foreach($cmsData->pricingPlans as $index => $plan)
                <div class="flex space-x-4 items-center">
                    <input type="text" name="pricingPlans[{{ $index }}][name]" value="{{ old("pricingPlans.$index.name", $plan['name']) }}" placeholder="Plan Name" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                    <input type="text" name="pricingPlans[{{ $index }}][price]" value="{{ old("pricingPlans.$index.price", $plan['price']) }}" placeholder="Plan Price" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                    <input type="text" name="pricingPlans[{{ $index }}][description]" value="{{ old("pricingPlans.$index.description", $plan['description']) }}" placeholder="Plan Description" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                    <button type="button" class="remove-item bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Remove</button>
                </div>
            @endforeach
        </div>

        <!-- Add New Pricing Plan Button -->
        <button type="button" id="add-pricing-plan" class="mt-4 bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Add Pricing Plan</button>

        <!-- Submit Button -->
        <div class="mt-8">
            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Update Pricing Section</button>
        </div>
    </form>

    <script>
        document.getElementById('add-pricing-plan').addEventListener('click', function() {
            let index = document.querySelectorAll('#pricing-plans-list input[name^="pricingPlans"]').length / 3;
            let newPlan = `
                <div class="flex space-x-4 items-center">
                    <input type="text" name="pricingPlans[${index}][name]" placeholder="Plan Name" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                    <input type="text" name="pricingPlans[${index}][price]" placeholder="Plan Price" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
                    <input type="text" name="pricingPlans[${index}][description]" placeholder="Plan Description" class="form-input mt-1 block w-full border border-gray-300 p-2 rounded-lg">
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
