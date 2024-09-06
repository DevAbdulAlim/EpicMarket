<x-admin-layout>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[
        ['name' => 'Dashboard', 'url' => route('admin.index'), 'icon' => 'fa-chart-line'],
        ['name' => 'Engagement', 'url' => route('admin.engagements.index'), 'icon' => 'fa-users'],
    ]" />

    <!-- Statistics Overview -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <!-- Total Customers -->
        <div
            class="bg-gradient-to-r from-blue-500 to-blue-700 text-white p-4 rounded-md shadow-md hover:shadow-lg flex items-center justify-between">
            <div>
                <h3 class="text-md font-semibold">Total Customers</h3>
                <p class="text-2xl font-bold">1,500</p>
                <span class="text-sm text-gray-200">+8% from last month</span>
            </div>
            <i class="fas fa-user fa-2x"></i>
        </div>

        <!-- Total Reviews -->
        <div
            class="bg-gradient-to-r from-red-500 to-red-700 text-white p-4 rounded-md shadow-md hover:shadow-lg flex items-center justify-between">
            <div>
                <h3 class="text-md font-semibold">Total Reviews</h3>
                <p class="text-2xl font-bold">234</p>
                <span class="text-sm text-gray-200">+12% from last month</span>
            </div>
            <i class="fas fa-star fa-2x"></i>
        </div>

        <!-- Total Surveys -->
        <div
            class="bg-gradient-to-r from-green-500 to-green-700 text-white p-4 rounded-md shadow-md hover:shadow-lg flex items-center justify-between">
            <div>
                <h3 class="text-md font-semibold">Total Surveys</h3>
                <p class="text-2xl font-bold">76</p>
                <span class="text-sm text-gray-200">+3% from last month</span>
            </div>
            <i class="fas fa-poll fa-2x"></i>
        </div>

        <!-- Total Wishlists -->
        <div
            class="bg-gradient-to-r from-yellow-500 to-yellow-700 text-white p-4 rounded-md shadow-md hover:shadow-lg flex items-center justify-between">
            <div>
                <h3 class="text-md font-semibold">Total Wishlists</h3>
                <p class="text-2xl font-bold">120</p>
                <span class="text-sm text-gray-200">+5% from last month</span>
            </div>
            <i class="fas fa-heart fa-2x"></i>
        </div>
    </div>


    <!-- Detailed Sections -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-6">
        <!-- Customers Section -->
        <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transform transition">
            <h3 class="text-sm font-semibold text-blue-600 flex items-center">
                <i class="fas fa-user mr-2"></i> Customers
            </h3>
            <p class="text-sm text-gray-600 mt-1">Manage and engage with customers</p>
            <a href="{{ route('admin.engagements.customers.index') }}"
                class="inline-block mt-3 px-3 py-1 bg-blue-600 text-white text-sm rounded-md hover:bg-blue-700 transition">
                View Customers
            </a>
        </div>

        <!-- Reviews Section -->
        <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transform transition">
            <h3 class="text-sm font-semibold text-red-600 flex items-center">
                <i class="fas fa-star mr-2"></i> Reviews
            </h3>
            <p class="text-sm text-gray-600 mt-1">View and manage customer reviews</p>
            <a href="{{ route('admin.engagements.reviews.index') }}"
                class="inline-block mt-3 px-3 py-1 bg-red-600 text-white text-sm rounded-md hover:bg-red-700 transition">
                View Reviews
            </a>
        </div>

        <!-- Surveys Section -->
        <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transform transition">
            <h3 class="text-sm font-semibold text-green-600 flex items-center">
                <i class="fas fa-poll mr-2"></i> Surveys
            </h3>
            <p class="text-sm text-gray-600 mt-1">Create and manage surveys</p>
            <a href=""
                class="inline-block mt-3 px-3 py-1 bg-green-600 text-white text-sm rounded-md hover:bg-green-700
                transition">
                View Surveys
            </a>
        </div>

        <!-- Community Forums Section -->
        <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transform transition">
            <h3 class="text-sm font-semibold text-indigo-600 flex items-center">
                <i class="fas fa-comments mr-2"></i> Community Forums
            </h3>
            <p class="text-sm text-gray-600 mt-1">Engage with customers via forums</p>
            <a href=""
                class="inline-block mt-3 px-3 py-1 bg-indigo-600 text-white text-sm rounded-md hover:bg-indigo-700 transition">
                View Forums
            </a>
        </div>

        <!-- Chat & Support Section -->
        <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transform transition">
            <h3 class="text-sm font-semibold text-purple-600 flex items-center">
                <i class="fas fa-headset mr-2"></i> Chat & Support
            </h3>
            <p class="text-sm text-gray-600 mt-1">Provide live chat and support</p>
            <a href=""
                class="inline-block mt-3 px-3 py-1 bg-purple-600 text-white text-sm rounded-md hover:bg-purple-700 transition">
                View Chat & Support
            </a>
        </div>

        <!-- Wishlists Section -->
        <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transform transition">
            <h3 class="text-sm font-semibold text-yellow-600 flex items-center">
                <i class="fas fa-heart mr-2"></i> Wishlists
            </h3>
            <p class="text-sm text-gray-600 mt-1">Track and manage customer wishlists</p>
            <a href=""
                class="inline-block mt-3 px-3 py-1 bg-yellow-600 text-white text-sm rounded-md hover:bg-yellow-700 transition">
                View Wishlists
            </a>
        </div>
    </div>
</x-admin-layout>
