<x-admin-layout>
    <div class="container mx-auto py-6">
        <!-- Breadcrumb Component -->
        <x-breadcrumb :items="[
            ['name' => 'Dashboard', 'url' => route('admin.index'), 'icon' => 'fa-chart-line'],
            ['name' => 'Settings', 'url' => route('admin.settings.index'), 'icon' => 'fa-cogs'],
            ['name' => 'Payment', 'url' => route('admin.settings.payment.edit'), 'icon' => 'fa-credit-card'],
        ]" />

        <!-- Page Header -->
        <div class="flex justify-between items-center mt-4">
            <h1 class="text-2xl font-semibold text-gray-800">Payment Settings</h1>
        </div>

        <!-- Payment Settings Form -->
        <form action="{{ route('admin.settings.payment.update') }}" method="POST" class="mt-8 space-y-6">
            @csrf

            <!-- Payment Gateways -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium text-gray-900">Payment Gateways</h2>
                <div class="mt-4 space-y-4">
                    <!-- Enable PayPal -->
                    <div class="flex items-center">
                        <input id="enable_paypal" name="enable_paypal" type="checkbox"
                            {{ old('enable_paypal', true) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="enable_paypal" class="ml-2 block text-sm text-gray-900">Enable PayPal</label>
                    </div>

                    <!-- Enable Stripe -->
                    <div class="flex items-center">
                        <input id="enable_stripe" name="enable_stripe" type="checkbox"
                            {{ old('enable_stripe', true) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="enable_stripe" class="ml-2 block text-sm text-gray-900">Enable Stripe</label>
                    </div>

                    <!-- Enable Local Payments (Bkash, Nagad, Rocket, Bank) -->
                    <h3 class="text-md font-medium text-gray-900 mt-4">Local Payments</h3>
                    <div class="flex items-center">
                        <input id="enable_bkash" name="enable_bkash" type="checkbox"
                            {{ old('enable_bkash', false) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="enable_bkash" class="ml-2 block text-sm text-gray-900">Enable Bkash</label>
                    </div>

                    <div class="flex items-center">
                        <input id="enable_nagad" name="enable_nagad" type="checkbox"
                            {{ old('enable_nagad', false) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="enable_nagad" class="ml-2 block text-sm text-gray-900">Enable Nagad</label>
                    </div>

                    <div class="flex items-center">
                        <input id="enable_rocket" name="enable_rocket" type="checkbox"
                            {{ old('enable_rocket', false) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="enable_rocket" class="ml-2 block text-sm text-gray-900">Enable Rocket</label>
                    </div>

                    <div class="flex items-center">
                        <input id="enable_bank" name="enable_bank" type="checkbox"
                            {{ old('enable_bank', false) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="enable_bank" class="ml-2 block text-sm text-gray-900">Enable Bank Transfer</label>
                    </div>
                </div>
            </div>

            <!-- Currency Settings -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium text-gray-900">Currency Settings</h2>
                <div class="mt-4 space-y-4">
                    <!-- Default Currency -->
                    <x-input label="Default Currency" name="default_currency"
                        value="{{ old('default_currency', 'USD') }}" />

                    <!-- Currency Symbol -->
                    <x-input label="Currency Symbol" name="currency_symbol" value="{{ old('currency_symbol', '$') }}" />
                </div>
            </div>

            <!-- Payment Policies -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium text-gray-900">Payment Policies</h2>
                <div class="mt-4 space-y-4">
                    <!-- Refund Policy -->
                    <div>
                        <label for="refund_policy" class="block text-sm font-medium text-gray-700">Refund Policy</label>
                        <textarea name="refund_policy" id="refund_policy" rows="4"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-primary focus:border-primary">{{ old('refund_policy', 'Refunds are allowed within 14 days of purchase.') }}</textarea>
                    </div>

                    <!-- Payment Terms -->
                    <div>
                        <label for="payment_terms" class="block text-sm font-medium text-gray-700">Payment Terms</label>
                        <textarea name="payment_terms" id="payment_terms" rows="4"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-primary focus:border-primary">{{ old('payment_terms', 'All payments must be made within 7 days of invoice generation.') }}</textarea>
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
