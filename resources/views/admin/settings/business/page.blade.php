<x-admin-layout>
    <div class="container mx-auto py-6">
        <!-- Breadcrumb Component -->
        <x-breadcrumb :items="[
            ['name' => 'Dashboard', 'url' => route('admin.index'), 'icon' => 'fa-chart-line'],
            ['name' => 'Settings', 'url' => route('admin.settings.index'), 'icon' => 'fa-cogs'],
            ['name' => 'Business', 'url' => route('admin.settings.business.edit'), 'icon' => 'fa-building'],
        ]" />


        <!-- Page Header -->
        <div class="flex justify-between items-center mt-4">
            <h1 class="text-2xl font-semibold text-gray-800">Business Settings</h1>
        </div>

        <!-- Business Settings Form -->
        <form action="{{ route('admin.settings.business.update') }}" method="POST" class="mt-8 space-y-6">
            @csrf

            <!-- Company Information -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium text-gray-900">Company Information</h2>
                <div class="mt-4 space-y-4">
                    <!-- Business Name -->
                    <x-input label="Business Name" name="business_name"
                        value="{{ old('business_name', 'Acme Corporation Ltd.') }}" />

                    <!-- Business Email -->
                    <x-input type="email" label="Business Email" name="business_email"
                        value="{{ old('business_email', 'info@acmecorp.com') }}" />

                    <!-- Business Phone -->
                    <x-input type="text" label="Business Phone" name="business_phone"
                        value="{{ old('business_phone', '+1 234 567 890') }}" />

                    <!-- Business Address -->
                    <x-input type="text" label="Business Address" name="business_address"
                        value="{{ old('business_address', '123 Main St, Springfield, USA') }}" />
                </div>
            </div>

            <!-- Business Policies -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium text-gray-900">Business Policies</h2>
                <div class="mt-4 space-y-4">
                    <!-- Return Policy -->
                    <div>
                        <label for="return_policy" class="block text-sm font-medium text-gray-700">Return Policy</label>
                        <textarea name="return_policy" id="return_policy" rows="4"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-primary focus:border-primary">{{ old('return_policy', 'Customers can return products within 14 days of purchase for a full refund.') }}</textarea>
                    </div>

                    <!-- Terms of Service -->
                    <div>
                        <label for="terms_of_service" class="block text-sm font-medium text-gray-700">Terms of
                            Service</label>
                        <textarea name="terms_of_service" id="terms_of_service" rows="4"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-primary focus:border-primary">{{ old('terms_of_service', 'By using our services, you agree to our terms and conditions. Please read carefully.') }}</textarea>
                    </div>

                    <!-- Privacy Policy -->
                    <div>
                        <label for="privacy_policy" class="block text-sm font-medium text-gray-700">Privacy
                            Policy</label>
                        <textarea name="privacy_policy" id="privacy_policy" rows="4"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-primary focus:border-primary">{{ old('privacy_policy', 'We are committed to protecting your personal data. Your information will not be shared without your consent.') }}</textarea>
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
