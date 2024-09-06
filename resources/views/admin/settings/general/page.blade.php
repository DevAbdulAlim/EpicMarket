<!-- resources/views/admin/settings/general.blade.php -->
<x-admin-layout>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[
        ['name' => 'Dashboard', 'url' => route('admin.index'), 'icon' => 'fa-chart-line'],
        ['name' => 'Settings', 'url' => route('admin.settings.index'), 'icon' => 'fa-cogs'],
        ['name' => 'General Settings', 'url' => route('admin.settings.general.edit'), 'icon' => 'fa-cog'],
    ]" />

    <div class="container mx-auto py-6">
        <!-- Page Header -->
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-semibold text-gray-800">General Settings</h1>
        </div>

        <!-- General Settings Form -->
        <form action="{{ route('admin.settings.general.update') }}" method="POST" class="mt-8 space-y-6"
            enctype="multipart/form-data">
            @csrf

            <!-- Site Information -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium text-gray-900">Site Information</h2>
                <div class="mt-4 space-y-4">
                    <!-- Site Name -->
                    <x-input label="Site Name" name="site_name" value="{{ old('site_name', 'My Awesome Site') }}" />

                    <!-- Site Logo -->
                    <div>
                        <label for="site_logo" class="block text-sm font-medium text-gray-700">Site Logo</label>
                        <input type="file" name="site_logo" id="site_logo"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-primary focus:border-primary">
                    </div>

                    <!-- Contact Email -->
                    <x-input type="email" label="Contact Email" name="contact_email"
                        value="{{ old('contact_email', 'info@example.com') }}" />
                </div>
            </div>

            <!-- Localization Settings -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium text-gray-900">Localization</h2>
                <div class="mt-4 space-y-4">
                    <!-- Default Language -->
                    <div>
                        <label for="default_language" class="block text-sm font-medium text-gray-700">Default
                            Language</label>
                        <select name="default_language" id="default_language"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-primary focus:border-primary">
                            <option value="en" selected>English</option>
                            <option value="fr">French</option>
                        </select>
                    </div>

                    <!-- Currency -->
                    <div>
                        <label for="currency" class="block text-sm font-medium text-gray-700">Default Currency</label>
                        <select name="currency" id="currency"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-primary focus:border-primary">
                            <option value="USD" selected>USD</option>
                            <option value="EUR">EUR</option>
                        </select>
                    </div>

                    <!-- Time Zone -->
                    <div>
                        <label for="time_zone" class="block text-sm font-medium text-gray-700">Time Zone</label>
                        <select name="time_zone" id="time_zone"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-primary focus:border-primary">
                            @foreach (timezone_identifiers_list() as $timezone)
                                <option value="{{ $timezone }}" {{ $timezone == 'UTC' ? 'selected' : '' }}>
                                    {{ $timezone }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <!-- Maintenance Mode -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium text-gray-900">Maintenance Mode</h2>
                <div class="mt-4">
                    <label for="maintenance_mode" class="flex items-center space-x-2">
                        <input type="checkbox" name="maintenance_mode" id="maintenance_mode"
                            {{ old('maintenance_mode', 'checked') }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <span class="text-sm text-gray-700">Enable Maintenance Mode</span>
                    </label>
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
