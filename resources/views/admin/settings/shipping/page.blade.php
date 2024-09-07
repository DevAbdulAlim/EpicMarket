<x-admin-layout>
    <div class="container mx-auto py-6">
        <!-- Breadcrumb Component -->
        <x-breadcrumb :items="[
            ['name' => 'Dashboard', 'url' => route('admin.index'), 'icon' => 'fa-chart-line'],
            ['name' => 'Settings', 'url' => route('admin.settings.index'), 'icon' => 'fa-cogs'],
            ['name' => 'Shipping', 'url' => route('admin.settings.shipping.edit'), 'icon' => 'fa-shipping-fast'],
        ]" />

        <!-- Page Header -->
        <div class="flex justify-between items-center mt-4">
            <h1 class="text-2xl font-semibold text-gray-800">Shipping Settings</h1>
        </div>

        <!-- Shipping Settings Form -->
        <form action="{{ route('admin.settings.shipping.update') }}" method="POST" class="mt-8 space-y-6">
            @csrf

            <!-- Shipping Configuration -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium text-gray-900">Shipping Configuration</h2>
                <div class="mt-4 space-y-4">
                    <!-- Shipping Method Name -->
                    <x-input label="Shipping Method Name" name="shipping_method_name"
                        value="{{ old('shipping_method_name', 'Standard Shipping') }}" />

                    <!-- Shipping Rate -->
                    <x-input type="number" label="Shipping Rate ($)" name="shipping_rate"
                        value="{{ old('shipping_rate', '10') }}" step="0.01" />

                    <!-- Free Shipping Threshold -->
                    <x-input type="number" label="Free Shipping Threshold ($)" name="free_shipping_threshold"
                        value="{{ old('free_shipping_threshold', '100') }}" step="0.01" />

                    <!-- Enable/Disable Free Shipping -->
                    <div class="flex items-center">
                        <input id="enable_free_shipping" name="enable_free_shipping" type="checkbox"
                            {{ old('enable_free_shipping', false) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="enable_free_shipping" class="ml-2 block text-sm text-gray-900">
                            Enable Free Shipping
                        </label>
                    </div>
                </div>
            </div>

            <!-- Shipping Carriers -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium text-gray-900">Shipping Carriers</h2>
                <div class="mt-4 space-y-4">
                    <!-- Carrier 1 -->
                    <div class="flex items-center">
                        <input id="carrier_1" name="carriers[]" type="checkbox"
                            {{ in_array('DHL', old('carriers', [])) ? 'checked' : '' }} value="DHL"
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="carrier_1" class="ml-2 block text-sm text-gray-900">DHL</label>
                    </div>

                    <!-- Carrier 2 -->
                    <div class="flex items-center">
                        <input id="carrier_2" name="carriers[]" type="checkbox"
                            {{ in_array('FedEx', old('carriers', [])) ? 'checked' : '' }} value="FedEx"
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for "carrier_2" class="ml-2 block text-sm text-gray-900">FedEx</label>
                    </div>

                    <!-- Carrier 3 -->
                    <div class="flex items-center">
                        <input id="carrier_3" name="carriers[]" type="checkbox"
                            {{ in_array('Bangladesh Post', old('carriers', [])) ? 'checked' : '' }}
                            value="Bangladesh Post"
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="carrier_3" class="ml-2 block text-sm text-gray-900">Bangladesh Post</label>
                    </div>

                    <!-- Carrier 4 -->
                    <div class="flex items-center">
                        <input id="carrier_4" name="carriers[]" type="checkbox"
                            {{ in_array('Aramex', old('carriers', [])) ? 'checked' : '' }} value="Aramex"
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="carrier_4" class="ml-2 block text-sm text-gray-900">Aramex</label>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-primary text-white px-4 py-2 rounded-lg shadow hover:bg-primary-dark focus:outline-none">Save
                    Changes</button>
            </div>
        </form>
    </div>
</x-admin-layout>
