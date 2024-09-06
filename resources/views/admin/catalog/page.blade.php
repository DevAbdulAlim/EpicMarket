<x-admin-layout>
    <!-- Breadcrumb Component -->
    <x-breadcrumb :items="[
        ['name' => 'Dashboard', 'url' => route('admin.index'), 'icon' => 'fa-chart-line'],
        ['name' => 'Catalog', 'url' => route('admin.catalog.index'), 'icon' => 'fa-boxes'],
    ]" />

    <!-- Dashboard Header -->
    <div class="mb-4 text-center">
        <h2 class="text-2xl font-bold text-gray-800">Catalog Dashboard</h2>
        <p class="text-sm text-gray-600">Manage your catalog efficiently</p>
    </div>

    <!-- Statistics Overview -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- Total Categories -->
        <div
            class="bg-gradient-to-r from-blue-500 to-blue-700 text-white p-4 rounded-lg shadow-md flex items-center justify-between">
            <div>
                <h3 class="text-lg font-semibold">Categories</h3>
                <p class="text-2xl font-bold">45</p>
                <span class="text-sm text-gray-200">+10% from last month</span>
            </div>
            <i class="fas fa-list fa-3x"></i>
        </div>

        <!-- Total Products -->
        <div
            class="bg-gradient-to-r from-green-500 to-green-700 text-white p-4 rounded-lg shadow-md flex items-center justify-between">
            <div>
                <h3 class="text-lg font-semibold">Products</h3>
                <p class="text-2xl font-bold">567</p>
                <span class="text-sm text-gray-200">+8% from last month</span>
            </div>
            <i class="fas fa-box-open fa-3x"></i>
        </div>

        <!-- Total Brands -->
        <div
            class="bg-gradient-to-r from-red-500 to-red-700 text-white p-4 rounded-lg shadow-md flex items-center justify-between">
            <div>
                <h3 class="text-lg font-semibold">Brands</h3>
                <p class="text-2xl font-bold">32</p>
                <span class="text-sm text-gray-200">+3% from last month</span>
            </div>
            <i class="fas fa-tags fa-3x"></i>
        </div>

        <!-- Total Tags -->
        <div
            class="bg-gradient-to-r from-purple-500 to-purple-700 text-white p-4 rounded-lg shadow-md flex items-center justify-between">
            <div>
                <h3 class="text-lg font-semibold">Tags</h3>
                <p class="text-2xl font-bold">78</p>
                <span class="text-sm text-gray-200">+5% from last month</span>
            </div>
            <i class="fas fa-tag fa-3x"></i>
        </div>
    </div>

    <!-- Detailed Sections -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-6">
        <!-- Categories Section -->
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-blue-200 hover:shadow-lg transform transition hover:scale-105">
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
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-green-200 hover:shadow-lg transform transition hover:scale-105">
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
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-red-200 hover:shadow-lg transform transition hover:scale-105">
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
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-purple-200 hover:shadow-lg transform transition hover:scale-105">
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
        <div
            class="bg-white p-4 rounded-lg shadow-md border border-yellow-200 hover:shadow-lg transform transition hover:scale-105">
            <h3 class="text-sm font-semibold text-yellow-600 flex items-center">
                <i class="fas fa-sliders-h mr-2"></i> Attributes
            </h3>
            <p class="text-sm text-gray-600 mt-1">Manage product attributes</p>
            <a href=""
                class="inline-block mt-3 px-3 py-1 bg-yellow-600 text-white text-sm rounded-md hover:bg-yellow-700 transition">
                View Attributes
            </a>
        </div>
    </div>
</x-admin-layout>
