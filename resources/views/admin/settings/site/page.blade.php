<x-admin-layout>
    <div class="container mx-auto py-6">
        <!-- Breadcrumb Component -->
        <x-breadcrumb :items="[
            ['name' => 'Dashboard', 'url' => route('admin.index'), 'icon' => 'fa-chart-line'],
            ['name' => 'Settings', 'url' => route('admin.settings.index'), 'icon' => 'fa-cogs'],
            ['name' => 'Site', 'url' => route('admin.settings.site.edit'), 'icon' => 'fa-globe'],
        ]" />

        <!-- Page Header -->
        <div class="flex justify-between items-center mt-4">
            <h1 class="text-2xl font-semibold text-gray-800">Site Settings</h1>
        </div>

        <!-- Site Settings Form -->
        <form action="{{ route('admin.settings.site.update') }}" method="POST" class="mt-8 space-y-6"
            enctype="multipart/form-data">
            @csrf

            <!-- Site Information -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium text-gray-900">Site Information</h2>
                <div class="mt-4 space-y-4">
                    <!-- Site Name -->
                    <x-input label="Site Name" name="site_name" value="{{ old('site_name', 'Acme Corporation') }}" />

                    <!-- Site Email -->
                    <x-input type="email" label="Site Email" name="site_email"
                        value="{{ old('site_email', 'info@acmecorp.com') }}" />

                    <!-- Site Logo -->
                    <x-input type="file" label="Site Logo" name="site_logo" />

                    <!-- Favicon -->
                    <x-input type="file" label="Site Favicon" name="site_favicon" />
                </div>
            </div>

            <!-- Site Policies -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium text-gray-900">Site Policies</h2>
                <div class="mt-4 space-y-4">
                    <!-- Terms of Service -->
                    <div>
                        <label for="terms_of_service" class="block text-sm font-medium text-gray-700">Terms of
                            Service</label>
                        <textarea name="terms_of_service" id="terms_of_service" rows="4"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-primary focus:border-primary">{{ old('terms_of_service', 'By using our website, you agree to our terms and conditions.') }}</textarea>
                    </div>

                    <!-- Privacy Policy -->
                    <div>
                        <label for="privacy_policy" class="block text-sm font-medium text-gray-700">Privacy
                            Policy</label>
                        <textarea name="privacy_policy" id="privacy_policy" rows="4"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-primary focus:border-primary">{{ old('privacy_policy', 'Your privacy is important to us. We do not share your information with third parties without your consent.') }}</textarea>
                    </div>

                    <!-- Cookie Policy -->
                    <div>
                        <label for="cookie_policy" class="block text-sm font-medium text-gray-700">Cookie
                            Policy</label>
                        <textarea name="cookie_policy" id="cookie_policy" rows="4"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-primary focus:border-primary">{{ old('cookie_policy', 'Our website uses cookies to ensure you get the best experience.') }}</textarea>
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
