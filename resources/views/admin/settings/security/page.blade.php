<x-admin-layout>
    <div class="container mx-auto py-6">
        <!-- Breadcrumb Component -->
        <x-breadcrumb :items="[
            ['name' => 'Dashboard', 'url' => route('admin.index'), 'icon' => 'fa-chart-line'],
            ['name' => 'Settings', 'url' => route('admin.settings.index'), 'icon' => 'fa-cogs'],
            ['name' => 'Security', 'url' => route('admin.settings.security.edit'), 'icon' => 'fa-lock'],
        ]" />

        <!-- Page Header -->
        <div class="flex justify-between items-center mt-4">
            <h1 class="text-2xl font-semibold text-gray-800">Security Settings</h1>
        </div>

        <!-- Security Settings Form -->
        <form action="{{ route('admin.settings.security.update') }}" method="POST" class="mt-8 space-y-6">
            @csrf

            <!-- Password Policy -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium text-gray-900">Password Policy</h2>
                <div class="mt-4 space-y-4">
                    <!-- Minimum Password Length -->
                    <x-input type="number" label="Minimum Password Length" name="min_password_length"
                        value="{{ old('min_password_length', 8) }}" />

                    <!-- Password Complexity -->
                    <div class="flex items-center">
                        <input id="require_uppercase" name="require_uppercase" type="checkbox"
                            {{ old('require_uppercase', true) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="require_uppercase" class="ml-2 block text-sm text-gray-900">
                            Require Uppercase Letters
                        </label>
                    </div>

                    <div class="flex items-center">
                        <input id="require_special_characters" name="require_special_characters" type="checkbox"
                            {{ old('require_special_characters', true) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="require_special_characters" class="ml-2 block text-sm text-gray-900">
                            Require Special Characters
                        </label>
                    </div>
                </div>
            </div>

            <!-- Two-Factor Authentication -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium text-gray-900">Two-Factor Authentication (2FA)</h2>
                <div class="mt-4 space-y-4">
                    <div class="flex items-center">
                        <input id="enable_2fa" name="enable_2fa" type="checkbox"
                            {{ old('enable_2fa', false) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="enable_2fa" class="ml-2 block text-sm text-gray-900">
                            Enable Two-Factor Authentication
                        </label>
                    </div>

                    <!-- 2FA Methods -->
                    <div class="mt-4 space-y-2">
                        <label class="block text-sm font-medium text-gray-900">Available 2FA Methods:</label>

                        <div class="flex items-center">
                            <input id="2fa_sms" name="2fa_methods[]" type="checkbox"
                                {{ in_array('sms', old('2fa_methods', [])) ? 'checked' : '' }} value="sms"
                                class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                            <label for="2fa_sms" class="ml-2 block text-sm text-gray-900">SMS</label>
                        </div>

                        <div class="flex items-center">
                            <input id="2fa_email" name="2fa_methods[]" type="checkbox"
                                {{ in_array('email', old('2fa_methods', [])) ? 'checked' : '' }} value="email"
                                class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                            <label for="2fa_email" class="ml-2 block text-sm text-gray-900">Email</label>
                        </div>

                        <div class="flex items-center">
                            <input id="2fa_app" name="2fa_methods[]" type="checkbox"
                                {{ in_array('auth_app', old('2fa_methods', [])) ? 'checked' : '' }} value="auth_app"
                                class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                            <label for="2fa_app" class="ml-2 block text-sm text-gray-900">Authentication App</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- IP Whitelisting -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium text-gray-900">IP Whitelisting</h2>
                <div class="mt-4 space-y-4">
                    <label for="whitelisted_ips" class="block text-sm font-medium text-gray-900">Whitelisted IPs</label>
                    <textarea name="whitelisted_ips" id="whitelisted_ips" rows="4"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-primary focus:border-primary">{{ old('whitelisted_ips', '192.168.1.1, 192.168.1.2') }}</textarea>
                    <p class="text-sm text-gray-500">Add multiple IPs separated by commas.</p>
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
