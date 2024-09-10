{{-- Shipping & Dimensions Section --}}
<fieldset class="border border-gray-300 p-6 rounded-md mb-6" x-data="{ requiresShipping: true, freeShipping: false }">
    <legend class="text-lg font-semibold text-gray-700 px-2">Shipping & Dimensions</legend>

    <div class="bg-gray-50 p-4 mb-6 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Dimensions & Weight</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Weight --}}
            <div class="mb-4">
                <label for="weight" class="block text-sm font-medium text-gray-700">Weight (kg)</label>
                <input type="number" step="0.01" name="weight" id="weight"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md"
                    placeholder="Enter product weight in kilograms">
            </div>

            {{-- Dimensions (Length, Width, Height) --}}
            <div class="mb-4">
                <label for="dimensions" class="block text-sm font-medium text-gray-700">Dimensions (cm)</label>
                <div class="flex space-x-2">
                    <input type="number" step="0.01" name="length" id="length"
                        class="mt-1 block w-full border border-gray-300 p-2 rounded-md" placeholder="Length (cm)">
                    <input type="number" step="0.01" name="width" id="width"
                        class="mt-1 block w-full border border-gray-300 p-2 rounded-md" placeholder="Width (cm)">
                    <input type="number" step="0.01" name="height" id="height"
                        class="mt-1 block w-full border border-gray-300 p-2 rounded-md" placeholder="Height (cm)">
                </div>
            </div>
        </div>
    </div>

    {{-- Shipping Options Section --}}
    <div class="bg-gray-50 p-4 mb-6 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Shipping Options</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Requires Shipping Checkbox --}}
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="requires_shipping" id="requires_shipping" x-model="requiresShipping"
                    class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label for="requires_shipping" class="ml-2 block text-sm font-medium text-gray-700">Requires
                    Shipping</label>
            </div>

            {{-- Free Shipping Checkbox --}}
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="free_shipping" id="free_shipping" x-model="freeShipping"
                    class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label for="free_shipping" class="ml-2 block text-sm font-medium text-gray-700">Free Shipping</label>
            </div>

            {{-- Shipping Class --}}
            <div class="mb-4" x-show="requiresShipping && !freeShipping">
                <label for="shipping_class" class="block text-sm font-medium text-gray-700">Shipping Class</label>
                <select id="shipping_class" name="shipping_class"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md">
                    <option value="standard">Standard</option>
                    <option value="express">Express</option>
                    <option value="freight">Freight</option>
                </select>
            </div>

            {{-- Shipping Zones --}}
            <div class="mb-4" x-show="requiresShipping && !freeShipping">
                <label for="shipping_zones" class="block text-sm font-medium text-gray-700">Shipping Zones</label>
                <select id="shipping_zones" name="shipping_zones" multiple
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md">
                    <option value="zone_1">Zone 1 (Local)</option>
                    <option value="zone_2">Zone 2 (National)</option>
                    <option value="zone_3">Zone 3 (International)</option>
                </select>
            </div>

            {{-- Shipping Methods --}}
            <div class="mb-4" x-show="requiresShipping && !freeShipping">
                <label for="shipping_methods" class="block text-sm font-medium text-gray-700">Shipping Methods</label>
                <select id="shipping_methods" name="shipping_methods" multiple
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md">
                    <option value="standard">Standard Shipping</option>
                    <option value="expedited">Expedited Shipping</option>
                    <option value="overnight">Overnight Shipping</option>
                </select>
            </div>
        </div>
    </div>

    {{-- Additional Shipping Options Section --}}
    <div class="bg-gray-50 p-4 mb-6 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Additional Shipping Options</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Lead Time --}}
            <div class="mb-4">
                <label for="lead_time" class="block text-sm font-medium text-gray-700">Lead Time</label>
                <input type="number" name="lead_time" id="lead_time"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md"
                    placeholder="Enter lead time (days)">
            </div>

            {{-- Handling Fees --}}
            <div class="mb-4">
                <label for="handling_fees" class="block text-sm font-medium text-gray-700">Handling Fees</label>
                <input type="number" name="handling_fees" id="handling_fees"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md"
                    placeholder="Enter handling fees (if any)">
            </div>

            {{-- Drop Shipping --}}
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="drop_shipping" id="drop_shipping"
                    class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label for="drop_shipping" class="ml-2 block text-sm font-medium text-gray-700">Drop Shipping
                    (external fulfillment)</label>
            </div>

            {{-- Carrier Options --}}
            <div class="mb-4">
                <label for="carrier_options" class="block text-sm font-medium text-gray-700">Carrier Options</label>
                <select id="carrier_options" name="carrier_options" multiple
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md">
                    <option value="fedex">FedEx</option>
                    <option value="dhl">DHL</option>
                    <option value="ups">UPS</option>
                </select>
            </div>
        </div>
    </div>
</fieldset>
