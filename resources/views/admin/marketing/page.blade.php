<x-admin-layout>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[
        ['name' => 'Dashboard', 'url' => route('admin.index'), 'icon' => 'fa-chart-line'],
        ['name' => 'Marketing', 'url' => route('admin.marketing.index'), 'icon' => 'fa-bullhorn'],
    ]" />

    <!-- Dashboard Header -->
    <div class="mb-4 text-center">
        <h2 class="text-2xl font-bold text-gray-800">Marketing Dashboard</h2>
        <p class="text-sm text-gray-600">An overview of your marketing performance</p>
    </div>

    <!-- Statistics Overview -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- Total Coupons -->
        <div
            class="bg-gradient-to-r from-blue-500 to-blue-700 text-white p-4 rounded-lg shadow-md flex items-center justify-between">
            <div>
                <h3 class="text-lg font-semibold">Coupons</h3>
                <p class="text-2xl font-bold">89</p>
                <span class="text-sm text-gray-200">+5% from last month</span>
            </div>
            <i class="fas fa-tags fa-3x"></i>
        </div>

        <!-- Total Discounts -->
        <div
            class="bg-gradient-to-r from-red-500 to-red-700 text-white p-4 rounded-lg shadow-md flex items-center justify-between">
            <div>
                <h3 class="text-lg font-semibold">Discounts</h3>
                <p class="text-2xl font-bold">45</p>
                <span class="text-sm text-gray-200">+3% from last month</span>
            </div>
            <i class="fas fa-percentage fa-3x"></i>
        </div>

        <!-- Total Email Campaigns -->
        <div
            class="bg-gradient-to-r from-green-500 to-green-700 text-white p-4 rounded-lg shadow-md flex items-center justify-between">
            <div>
                <h3 class="text-lg font-semibold">Email Campaigns</h3>
                <p class="text-2xl font-bold">12</p>
                <span class="text-sm text-gray-200">+2% from last month</span>
            </div>
            <i class="fas fa-envelope fa-3x"></i>
        </div>

        <!-- Total Promotions -->
        <div
            class="bg-gradient-to-r from-yellow-500 to-yellow-700 text-white p-4 rounded-lg shadow-md flex items-center justify-between">
            <div>
                <h3 class="text-lg font-semibold">Promotions</h3>
                <p class="text-2xl font-bold">27</p>
                <span class="text-sm text-gray-200">+4% from last month</span>
            </div>
            <i class="fas fa-bullhorn fa-3x"></i>
        </div>
    </div>

    <!-- Detailed Sections -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-6">
        <!-- Coupons Section -->
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-blue-200 hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-sm font-semibold text-blue-600 flex items-center">
                <i class="fas fa-tags mr-2"></i> Coupons
            </h3>
            <p class="text-sm text-gray-600 mt-1">Manage and create coupons</p>
            <a href="{{ route('admin.marketing.coupons.index') }}"
                class="inline-block mt-3 px-3 py-1 bg-blue-600 text-white text-sm rounded-md hover:bg-blue-700 transition">
                View Coupons
            </a>
        </div>

        <!-- Discounts Section -->
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-red-200 hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-sm font-semibold text-red-600 flex items-center">
                <i class="fas fa-percentage mr-2"></i> Discounts
            </h3>
            <p class="text-sm text-gray-600 mt-1">Create and manage discounts</p>
            <a href="{{ route('admin.marketing.discounts.index') }}"
                class="inline-block mt-3 px-3 py-1 bg-red-600 text-white text-sm rounded-md hover:bg-red-700 transition">
                View Discounts
            </a>
        </div>

        <!-- Email Campaigns Section -->
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-green-200 hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-sm font-semibold text-green-600 flex items-center">
                <i class="fas fa-envelope mr-2"></i> Email Campaigns
            </h3>
            <p class="text-sm text-gray-600 mt-1">Manage email marketing campaigns</p>
            <a href=""
                class="inline-block mt-3 px-3 py-1 bg-green-600 text-white text-sm rounded-md hover:bg-green-700 transition">
                View Campaigns
            </a>
        </div>

        <!-- Affiliate Programs Section -->
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-indigo-200 hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-sm font-semibold text-indigo-600 flex items-center">
                <i class="fas fa-users mr-2"></i> Affiliate Programs
            </h3>
            <p class="text-sm text-gray-600 mt-1">Manage affiliate programs</p>
            <a href=""
                class="inline-block mt-3 px-3 py-1 bg-indigo-600 text-white text-sm rounded-md hover:bg-indigo-700 transition">
                View Affiliates
            </a>
        </div>

        <!-- Loyalty Programs Section -->
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-purple-200 hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-sm font-semibold text-purple-600 flex items-center">
                <i class="fas fa-gift mr-2"></i> Loyalty Programs
            </h3>
            <p class="text-sm text-gray-600 mt-1">Create and track loyalty programs</p>
            <a href=""
                class="inline-block mt-3 px-3 py-1 bg-purple-600 text-white text-sm rounded-md hover:bg-purple-700 transition">
                View Loyalty Programs
            </a>
        </div>

        <!-- Promotions Section -->
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-yellow-200 hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-sm font-semibold text-yellow-600 flex items-center">
                <i class="fas fa-bullhorn mr-2"></i> Promotions
            </h3>
            <p class="text-sm text-gray-600 mt-1">Manage and run promotions</p>
            <a href=""
                class="inline-block mt-3 px-3 py-1 bg-yellow-600 text-white text-sm rounded-md hover:bg-yellow-700 transition">
                View Promotions
            </a>
        </div>
    </div>
</x-admin-layout>
