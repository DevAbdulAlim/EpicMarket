<x-admin-layout>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[
        ['name' => 'Dashboard', 'url' => route('admin.index'), 'icon' => 'fa-chart-line'],
        ['name' => 'Settings', 'url' => route('admin.settings.index'), 'icon' => 'fa-cogs'],
    ]" />

    <!-- Dashboard Header -->
    <div class="mb-4 text-center">
        <h2 class="text-2xl font-bold text-gray-800">Settings Dashboard</h2>
        <p class="text-sm text-gray-600">Manage and configure your system settings</p>
    </div>

    <!-- Settings Categories -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-6">
        <!-- General Settings -->
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-gray-200 hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-sm font-semibold text-gray-700 flex items-center">
                <i class="fas fa-cog mr-2"></i> General
            </h3>
            <p class="text-sm text-gray-600 mt-1">Manage general system settings</p>
            <a href="{{ route('admin.settings.general.edit') }}"
                class="inline-block mt-3 px-3 py-1 bg-gray-700 text-white text-sm rounded-md hover:bg-gray-800 transition">
                View General Settings
            </a>
        </div>

        <!-- Business Settings -->
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-blue-200 hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-sm font-semibold text-blue-600 flex items-center">
                <i class="fas fa-briefcase mr-2"></i> Business
            </h3>
            <p class="text-sm text-gray-600 mt-1">Configure business information</p>
            <a href="{{ route('admin.settings.business.edit') }}"
                class="inline-block mt-3 px-3 py-1 bg-blue-600 text-white text-sm rounded-md hover:bg-blue-700 transition">
                View Business Settings
            </a>
        </div>

        <!-- Site Settings -->
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-green-200 hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-sm font-semibold text-green-600 flex items-center">
                <i class="fas fa-globe mr-2"></i> Site
            </h3>
            <p class="text-sm text-gray-600 mt-1">Configure site appearance and behavior</p>
            <a href=""
                class="inline-block mt-3 px-3 py-1 bg-green-600 text-white text-sm rounded-md hover:bg-green-700 transition">
                View Site Settings
            </a>
        </div>

        <!-- Shipping Settings -->
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-yellow-200 hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-sm font-semibold text-yellow-600 flex items-center">
                <i class="fas fa-shipping-fast mr-2"></i> Shipping
            </h3>
            <p class="text-sm text-gray-600 mt-1">Manage shipping methods and rates</p>
            <a href=""
                class="inline-block mt-3 px-3 py-1 bg-yellow-600 text-white text-sm rounded-md hover:bg-yellow-700 transition">
                View Shipping Settings
            </a>
        </div>

        <!-- Payment Settings -->
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-indigo-200 hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-sm font-semibold text-indigo-600 flex items-center">
                <i class="fas fa-credit-card mr-2"></i> Payment
            </h3>
            <p class="text-sm text-gray-600 mt-1">Configure payment methods</p>
            <a href=""
                class="inline-block mt-3 px-3 py-1 bg-indigo-600 text-white text-sm rounded-md hover:bg-indigo-700 transition">
                View Payment Settings
            </a>
        </div>

        <!-- Tax Settings -->
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-red-200 hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-sm font-semibold text-red-600 flex items-center">
                <i class="fas fa-percentage mr-2"></i> Tax
            </h3>
            <p class="text-sm text-gray-600 mt-1">Manage tax rates and policies</p>
            <a href=""
                class="inline-block mt-3 px-3 py-1 bg-red-600 text-white text-sm rounded-md hover:bg-red-700 transition">
                View Tax Settings
            </a>
        </div>

        <!-- Advanced Settings -->
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-gray-200 hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-sm font-semibold text-gray-700 flex items-center">
                <i class="fas fa-tools mr-2"></i> Advanced
            </h3>
            <p class="text-sm text-gray-600 mt-1">Configure advanced system settings</p>
            <a href=""
                class="inline-block mt-3 px-3 py-1 bg-gray-700 text-white text-sm rounded-md hover:bg-gray-800 transition">
                View Advanced Settings
            </a>
        </div>

        <!-- Security Settings -->
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-teal-200 hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-sm font-semibold text-teal-600 flex items-center">
                <i class="fas fa-lock mr-2"></i> Security
            </h3>
            <p class="text-sm text-gray-600 mt-1">Manage security settings</p>
            <a href=""
                class="inline-block mt-3 px-3 py-1 bg-teal-600 text-white text-sm rounded-md hover:bg-teal-700 transition">
                View Security Settings
            </a>
        </div>

        <!-- Notifications Settings -->
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-pink-200 hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-sm font-semibold text-pink-600 flex items-center">
                <i class="fas fa-bell mr-2"></i> Notifications
            </h3>
            <p class="text-sm text-gray-600 mt-1">Configure notifications and alerts</p>
            <a href=""
                class="inline-block mt-3 px-3 py-1 bg-pink-600 text-white text-sm rounded-md hover:bg-pink-700 transition">
                View Notification Settings
            </a>
        </div>

        <!-- Integrations Settings -->
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-purple-200 hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-sm font-semibold text-purple-600 flex items-center">
                <i class="fas fa-plug mr-2"></i> Integrations
            </h3>
            <p class="text-sm text-gray-600 mt-1">Manage third-party integrations</p>
            <a href=""
                class="inline-block mt-3 px-3 py-1 bg-purple-600 text-white text-sm rounded-md hover:bg-purple-700 transition">
                View Integrations
            </a>
        </div>
    </div>
</x-admin-layout>
