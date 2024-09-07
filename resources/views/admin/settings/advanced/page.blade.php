<x-admin-layout>
    <div class="container mx-auto py-6">
        <!-- Breadcrumb Component -->
        <x-breadcrumb :items="[
            ['name' => 'Dashboard', 'url' => route('admin.index'), 'icon' => 'fa-chart-line'],
            ['name' => 'Settings', 'url' => route('admin.settings.index'), 'icon' => 'fa-cogs'],
            ['name' => 'Advanced', 'url' => route('admin.settings.advanced.edit'), 'icon' => 'fa-cogs'],
        ]" />

        <!-- Page Header -->
        <div class="flex justify-between items-center mt-4">
            <h1 class="text-2xl font-semibold text-gray-800">Advanced Settings</h1>
        </div>

        <!-- Advanced Settings Form -->
        <form action="{{ route('admin.settings.advanced.update') }}" method="POST" class="mt-8 space-y-6">
            @csrf

            <!-- Cache Settings -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium text-gray-900">Cache Settings</h2>
                <div class="mt-4 space-y-4">
                    <!-- Clear Cache -->
                    <div class="flex items-center">
                        <input id="clear_cache" name="clear_cache" type="checkbox"
                            {{ old('clear_cache', false) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="clear_cache" class="ml-2 block text-sm text-gray-900">Clear Cache on Update</label>
                    </div>

                    <!-- Cache Expiry Time -->
                    <x-input type="number" label="Cache Expiry Time (in minutes)" name="cache_expiry_time"
                        value="{{ old('cache_expiry_time', '60') }}" />
                </div>
            </div>

            <!-- Performance Optimization -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium text-gray-900">Performance Optimization</h2>
                <div class="mt-4 space-y-4">
                    <!-- Enable Lazy Loading -->
                    <div class="flex items-center">
                        <input id="enable_lazy_loading" name="enable_lazy_loading" type="checkbox"
                            {{ old('enable_lazy_loading', true) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="enable_lazy_loading" class="ml-2 block text-sm text-gray-900">Enable Lazy Loading of
                            Images</label>
                    </div>

                    <!-- Enable Minification -->
                    <div class="flex items-center">
                        <input id="enable_minification" name="enable_minification" type="checkbox"
                            {{ old('enable_minification', true) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="enable_minification" class="ml-2 block text-sm text-gray-900">Enable CSS & JS
                            Minification</label>
                    </div>
                </div>
            </div>

            <!-- Database Maintenance -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium text-gray-900">Database Maintenance</h2>
                <div class="mt-4 space-y-4">
                    <!-- Enable Database Backups -->
                    <div class="flex items-center">
                        <input id="enable_database_backups" name="enable_database_backups" type="checkbox"
                            {{ old('enable_database_backups', true) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="enable_database_backups" class="ml-2 block text-sm text-gray-900">Enable Automated
                            Database Backups</label>
                    </div>

                    <!-- Backup Frequency -->
                    <x-input type="number" label="Backup Frequency (in days)" name="backup_frequency"
                        value="{{ old('backup_frequency', '7') }}" />
                </div>
            </div>

            <!-- Debug Mode -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium text-gray-900">Debug Mode</h2>
                <div class="mt-4 space-y-4">
                    <!-- Enable Debug Mode -->
                    <div class="flex items-center">
                        <input id="enable_debug_mode" name="enable_debug_mode" type="checkbox"
                            {{ old('enable_debug_mode', false) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="enable_debug_mode" class="ml-2 block text-sm text-gray-900">Enable Debug
                            Mode</label>
                    </div>

                    <!-- Log Level -->
                    <label for="log_level" class="block text-sm font-medium text-gray-700">Log Level</label>
                    <select id="log_level" name="log_level"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-primary focus:border-primary">
                        <option value="error" {{ old('log_level', 'error') == 'error' ? 'selected' : '' }}>Error
                        </option>
                        <option value="warning" {{ old('log_level', 'error') == 'warning' ? 'selected' : '' }}>Warning
                        </option>
                        <option value="info" {{ old('log_level', 'error') == 'info' ? 'selected' : '' }}>Info
                        </option>
                        <option value="debug" {{ old('log_level', 'error') == 'debug' ? 'selected' : '' }}>Debug
                        </option>
                    </select>
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
