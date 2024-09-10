{{-- Attributes & Variants Section --}}
<fieldset class="border border-gray-300 p-6 rounded-md mb-6" x-data="{ variantsEnabled: false }">
    <legend class="text-lg font-semibold text-gray-700 px-2">Attributes & Variants</legend>

    {{-- Attributes Section --}}
    <div class="bg-gray-50 p-4 mb-6 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Product Attributes</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Attributes --}}
            <div class="mb-4">
                <label for="attributes" class="block text-sm font-medium text-gray-700">Attributes (e.g., color, size,
                    material)</label>
                <input type="text" name="attributes" id="attributes"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md"
                    placeholder="Enter product attributes">
            </div>

            {{-- Custom Attributes --}}
            <div class="mb-4">
                <label for="custom_attributes" class="block text-sm font-medium text-gray-700">Custom Attributes</label>
                <input type="text" name="custom_attributes" id="custom_attributes"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md"
                    placeholder="Enter custom attributes (e.g., warranty, packaging)">
            </div>
        </div>
    </div>

    {{-- Variants Section --}}
    <div class="bg-gray-50 p-4 mb-6 rounded-md border border-gray-200 shadow-sm" x-show="variantsEnabled">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Variants</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Variant Name --}}
            <div class="mb-4">
                <label for="variant_name" class="block text-sm font-medium text-gray-700">Variant Name (e.g., color,
                    size)</label>
                <input type="text" name="variant_name" id="variant_name"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md" placeholder="Enter variant name">
            </div>

            {{-- Variant-specific Pricing --}}
            <div class="mb-4">
                <label for="variant_price" class="block text-sm font-medium text-gray-700">Variant-specific
                    Pricing</label>
                <input type="number" name="variant_price" id="variant_price"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md"
                    placeholder="Enter price for this variant">
            </div>

            {{-- Variant-specific Inventory --}}
            <div class="mb-4">
                <label for="variant_inventory" class="block text-sm font-medium text-gray-700">Variant-specific
                    Inventory</label>
                <input type="number" name="variant_inventory" id="variant_inventory"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md"
                    placeholder="Enter inventory for this variant">
            </div>

            {{-- Variant-specific Media --}}
            <div class="mb-4">
                <label for="variant_media" class="block text-sm font-medium text-gray-700">Variant-specific
                    Media</label>
                <input type="file" name="variant_media" id="variant_media" multiple
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md">
            </div>
        </div>
    </div>

    {{-- Dynamic Variant Display --}}
    <div class="bg-gray-50 p-4 mb-6 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Dynamic Variant Display</h2>
        <div class="flex items-center mb-4">
            <input type="checkbox" name="dynamic_display" id="dynamic_display" x-model="variantsEnabled"
                class="h-4 w-4 text-blue-600 border-gray-300 rounded">
            <label for="dynamic_display" class="ml-2 block text-sm font-medium text-gray-700">Enable dynamic variant
                display based on customer selection</label>
        </div>
    </div>

</fieldset>
