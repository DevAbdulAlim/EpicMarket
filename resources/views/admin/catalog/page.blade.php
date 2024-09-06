<x-admin-layout>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[
        ['name' => 'Dashboard', 'url' => route('admin.index'), 'icon' => 'fa-chart-line'],
        ['name' => 'Catalog', 'url' => route('admin.catalog.index'), 'icon' => 'fa-boxes'],
    ]" />

    <!-- Statistics Overview -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <!-- Total Categories -->
        <div
            class="bg-gradient-to-r from-blue-500 to-blue-700 text-white p-4 rounded-md shadow-md hover:shadow-lg flex items-center justify-between">
            <div>
                <h3 class="text-md font-semibold">Total Categories</h3>
                <p class="text-2xl font-bold">45</p>
                <span class="text-sm text-gray-200">+10% from last month</span>
            </div>
            <i class="fas fa-list fa-2x"></i>
        </div>

        <!-- Total Products -->
        <div
            class="bg-gradient-to-r from-green-500 to-green-700 text-white p-4 rounded-md shadow-md hover:shadow-lg flex items-center justify-between">
            <div>
                <h3 class="text-md font-semibold">Total Products</h3>
                <p class="text-2xl font-bold">567</p>
                <span class="text-sm text-gray-200">+8% from last month</span>
            </div>
            <i class="fas fa-box-open fa-2x"></i>
        </div>

        <!-- Total Brands -->
        <div
            class="bg-gradient-to-r from-red-500 to-red-700 text-white p-4 rounded-md shadow-md hover:shadow-lg flex items-center justify-between">
            <div>
                <h3 class="text-md font-semibold">Total Brands</h3>
                <p class="text-2xl font-bold">32</p>
                <span class="text-sm text-gray-200">+3% from last month</span>
            </div>
            <i class="fas fa-tags fa-2x"></i>
        </div>

        <!-- Total Tags -->
        <div
            class="bg-gradient-to-r from-purple-500 to-purple-700 text-white p-4 rounded-md shadow-md hover:shadow-lg flex items-center justify-between">
            <div>
                <h3 class="text-md font-semibold">Total Tags</h3>
                <p class="text-2xl font-bold">78</p>
                <span class="text-sm text-gray-200">+5% from last month</span>
            </div>
            <i class="fas fa-tag fa-2x"></i>
        </div>
    </div>

    <!-- Detailed Sections -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-6">
        <!-- Categories Section -->
        <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition duration-300">
            <h3 class="text-sm font-semibold text-blue-600 flex items-center">
                <i class="fas fa-list mr-2"></i> Categories
            </h3>
            <p class="text-sm text-gray-600 mt-1">Manage and organize categories</p>
            <a href="{{ route('admin.catalog.categories.index') }}"
                class="inline-block mt-3 px-3 py-1 bg-blue-600 text-white text-sm rounded-md hover:bg-blue-700 transition">
                View Categories
            </a>
        </div>

        <!-- Products Section -->
        <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition duration-300">
            <h3 class="text-sm font-semibold text-green-600 flex items-center">
                <i class="fas fa-box-open mr-2"></i> Products
            </h3>
            <p class="text-sm text-gray-600 mt-1">Manage and track products</p>
            <a href=""
                class="inline-block mt-3 px-3 py-1 bg-green-600 text-white text-sm rounded-md hover:bg-green-700 transition">
                View Products
            </a>
        </div>

        <!-- Brands Section -->
        <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition duration-300">
            <h3 class="text-sm font-semibold text-red-600 flex items-center">
                <i class="fas fa-tags mr-2"></i> Brands
            </h3>
            <p class="text-sm text-gray-600 mt-1">Manage brand relationships</p>
            <a href=""
                class="inline-block mt-3 px-3 py-1 bg-red-600 text-white text-sm rounded-md hover:bg-red-700 transition">
                View Brands
            </a>
        </div>

        <!-- Tags Section -->
        <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition duration-300">
            <h3 class="text-sm font-semibold text-purple-600 flex items-center">
                <i class="fas fa-tag mr-2"></i> Tags
            </h3>
            <p class="text-sm text-gray-600 mt-1">Manage and assign product tags</p>
            <a href=""
                class="inline-block mt-3 px-3 py-1 bg-purple-600 text-white text-sm rounded-md hover:bg-purple-700 transition">
                View Tags
            </a>
        </div>

        <!-- Attributes Section -->
        <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition duration-300">
            <h3 class="text-sm font-semibold text-yellow-600 flex items-center">
                <i class="fas fa-sliders-h mr-2"></i> Attributes
            </h3>
            <p class="text-sm text-gray-600 mt-1">Manage product attributes</p>
            <a href=""
                class="inline-block mt-3 px-3 py-1 bg-yellow-600 text-white text-sm rounded-md hover:bg-yellow-700 transition">
                View Attributes
            </a>
        </div>

        <!-- Dummy Section: Inventory -->
        <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition duration-300">
            <h3 class="text-sm font-semibold text-sky-600 flex items-center">
                <i class="fas fa-warehouse mr-2"></i> Inventory
            </h3>
            <p class="text-sm text-sky-600 mt-1">Track and manage inventory levels</p>
            <a href="#"
                class="inline-block mt-3 px-3 py-1 bg-sky-600 text-white text-sm rounded-md hover:bg-sky-700 transition">
                Manage Inventory
            </a>
        </div>
    </div>


    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-6">

        <!-- Activity Section -->
        @include('admin.catalog.top-selling-products')

        <!-- Notifications Section -->
        @include('admin.catalog.low-stock-products')
    </div>
</x-admin-layout>
