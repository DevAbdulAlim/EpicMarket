<x-admin-layout>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[
        ['name' => 'Dashboard', 'url' => route('admin.dashboard'), 'icon' => 'fa-chart-line'],
        ['name' => 'Settings', 'url' => route('admin.settings.index'), 'icon' => 'fa-cogs'],
    ]" />

    <!-- Page Header -->
    <div class="mt-6">
        <h1 class="text-2xl font-semibold text-gray-800">Settings</h1>
        <p class="text-sm text-gray-500">Manage all the settings for your application.</p>
    </div>

    <!-- Settings Categories -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
        <!-- General Settings Card -->
        <a href="{{ route('admin.settings.general.edit') }}"
            class="block p-6 bg-white rounded-lg shadow-md hover:bg-gray-100">
            <div class="flex items-center">
                <i class="fas fa-cog text-xl text-primary"></i>
                <h3 class="ml-4 text-lg font-semibold text-gray-800">General Settings</h3>
            </div>
            <p class="mt-2 text-sm text-gray-500">Configure basic settings such as site name, logo, and maintenance mode.
            </p>
        </a>

        <!-- Business Settings Card -->
        <a href="{{ route('admin.settings.business.edit') }}"
            class="block p-6 bg-white rounded-lg shadow-md hover:bg-gray-100">
            <div class="flex items-center">
                <i class="fas fa-building text-xl text-primary"></i>
                <h3 class="ml-4 text-lg font-semibold text-gray-800">Business Settings</h3>
            </div>
            <p class="mt-2 text-sm text-gray-500">Manage business information such as company name, address, and
                policies.</p>
        </a>

        <!-- Site Settings Card -->
        <a href="{{ route('admin.settings.site.edit') }}"
            class="block p-6 bg-white rounded-lg shadow-md hover:bg-gray-100">
            <div class="flex items-center">
                <i class="fas fa-globe text-xl text-primary"></i>
                <h3 class="ml-4 text-lg font-semibold text-gray-800">Site Settings</h3>
            </div>
            <p class="mt-2 text-sm text-gray-500">Manage site appearance, SEO settings, and content pages.</p>
        </a>

        <!-- Shipping Settings Card -->
        <a href="{{ route('admin.settings.shipping.edit') }}"
            class="block p-6 bg-white rounded-lg shadow-md hover:bg-gray-100">
            <div class="flex items-center">
                <i class="fas fa-shipping-fast text-xl text-primary"></i>
                <h3 class="ml-4 text-lg font-semibold text-gray-800">Shipping Settings</h3>
            </div>
            <p class="mt-2 text-sm text-gray-500">Configure shipping methods, zones, and rates for customer orders.</p>
        </a>

        <!-- Payment Settings Card -->
        <a href="{{ route('admin.settings.payment.edit') }}"
            class="block p-6 bg-white rounded-lg shadow-md hover:bg-gray-100">
            <div class="flex items-center">
                <i class="fas fa-credit-card text-xl text-primary"></i>
                <h3 class="ml-4 text-lg font-semibold text-gray-800">Payment Settings</h3>
            </div>
            <p class="mt-2 text-sm text-gray-500">Set up and manage payment gateways and transaction methods.</p>
        </a>

        <!-- Tax Settings Card -->
        <a href="{{ route('admin.settings.tax.edit') }}"
            class="block p-6 bg-white rounded-lg shadow-md hover:bg-gray-100">
            <div class="flex items-center">
                <i class="fas fa-percentage text-xl text-primary"></i>
                <h3 class="ml-4 text-lg font-semibold text-gray-800">Tax Settings</h3>
            </div>
            <p class="mt-2 text-sm text-gray-500">Configure tax rates, rules, and invoice settings for your business.
            </p>
        </a>

        <!-- Security Settings Card -->
        <a href="{{ route('admin.settings.security.edit') }}"
            class="block p-6 bg-white rounded-lg shadow-md hover:bg-gray-100">
            <div class="flex items-center">
                <i class="fas fa-shield-alt text-xl text-primary"></i>
                <h3 class="ml-4 text-lg font-semibold text-gray-800">Security Settings</h3>
            </div>
            <p class="mt-2 text-sm text-gray-500">Manage security options like user roles, permissions, and 2FA.</p>
        </a>

        <!-- Notifications Settings Card -->
        <a href="{{ route('admin.settings.notifications.edit') }}"
            class="block p-6 bg-white rounded-lg shadow-md hover:bg-gray-100">
            <div class="flex items-center">
                <i class="fas fa-bell text-xl text-primary"></i>
                <h3 class="ml-4 text-lg font-semibold text-gray-800">Notifications Settings</h3>
            </div>
            <p class="mt-2 text-sm text-gray-500">Configure email, SMS, and push notification settings for your site.
            </p>
        </a>

        <!-- Integrations Settings Card -->
        <a href="{{ route('admin.settings.integrations.edit') }}"
            class="block p-6 bg-white rounded-lg shadow-md hover:bg-gray-100">
            <div class="flex items-center">
                <i class="fas fa-plug text-xl text-primary"></i>
                <h3 class="ml-4 text-lg font-semibold text-gray-800">Integrations Settings</h3>
            </div>
            <p class="mt-2 text-sm text-gray-500">Manage integrations with third-party services like CRM and analytics
                tools.</p>
        </a>
    </div>
</x-admin-layout>
