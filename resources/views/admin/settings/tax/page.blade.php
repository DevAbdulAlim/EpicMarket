<x-admin-layout>
    <div class="container mx-auto py-6">
        <!-- Breadcrumb Component -->
        <x-breadcrumb :items="[
            ['name' => 'Dashboard', 'url' => route('admin.index'), 'icon' => 'fa-chart-line'],
            ['name' => 'Settings', 'url' => route('admin.settings.index'), 'icon' => 'fa-cogs'],
            ['name' => 'Tax', 'url' => route('admin.settings.tax.edit'), 'icon' => 'fa-money-bill'],
        ]" />

        <!-- Page Header -->
        <div class="flex justify-between items-center mt-4">
            <h1 class="text-2xl font-semibold text-gray-800">Tax Settings</h1>
        </div>

        <!-- Tax Settings Form -->
        <form action="{{ route('admin.settings.tax.update') }}" method="POST" class="mt-8 space-y-6">
            @csrf

            <!-- Tax Configuration -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium text-gray-900">Tax Configuration</h2>
                <div class="mt-4 space-y-4">
                    <!-- Tax Name -->
                    <x-input label="Tax Name" name="tax_name" value="{{ old('tax_name', 'VAT') }}" />

                    <!-- Tax Rate -->
                    <x-input type="number" label="Tax Rate (%)" name="tax_rate" value="{{ old('tax_rate', '15') }}"
                        step="0.01" />

                    <!-- Enable/Disable Tax -->
                    <div class="flex items-center">
                        <input id="enable_tax" name="enable_tax" type="checkbox"
                            {{ old('enable_tax', true) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="enable_tax" class="ml-2 block text-sm text-gray-900">
                            Enable Tax
                        </label>
                    </div>
                </div>
            </div>

            <!-- Tax Policies -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium text-gray-900">Tax Policies</h2>
                <div class="mt-4 space-y-4">
                    <!-- Tax Included in Price -->
                    <div class="flex items-center">
                        <input id="tax_included" name="tax_included" type="checkbox"
                            {{ old('tax_included', true) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="tax_included" class="ml-2 block text-sm text-gray-900">
                            Include Tax in Product Prices
                        </label>
                    </div>

                    <!-- Apply Tax on Shipping -->
                    <div class="flex items-center">
                        <input id="tax_on_shipping" name="tax_on_shipping" type="checkbox"
                            {{ old('tax_on_shipping', false) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="tax_on_shipping" class="ml-2 block text-sm text-gray-900">
                            Apply Tax to Shipping Costs
                        </label>
                    </div>

                    <!-- Tax Rounding Policy -->
                    <div>
                        <label for="rounding_policy" class="block text-sm font-medium text-gray-700">Tax Rounding
                            Policy</label>
                        <select id="rounding_policy" name="rounding_policy"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-primary focus:border-primary">
                            <option value="round" {{ old('rounding_policy', 'round') == 'round' ? 'selected' : '' }}>
                                Round</option>
                            <option value="ceil" {{ old('rounding_policy', 'round') == 'ceil' ? 'selected' : '' }}>
                                Ceil</option>
                            <option value="floor" {{ old('rounding_policy', 'round') == 'floor' ? 'selected' : '' }}>
                                Floor</option>
                        </select>
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
