<x-admin-layout>
    <div class="container mx-auto py-6">
        <!-- Breadcrumb Component -->
        <x-breadcrumb :items="[
            ['name' => 'Dashboard', 'url' => route('admin.index'), 'icon' => 'fa-chart-line'],
            ['name' => 'Catalog', 'url' => route('admin.catalog.index'), 'icon' => 'fa-list'],
        ]" />
        <!-- Page Header -->
        <h1 class="text-3xl font-bold text-gray-800">Catalog Management Dashboard</h1>
        <p class="text-gray-600 mt-2">Manage and view statistics related to products, categories, brands, and attributes.
        </p>

        <!-- Catalog Stats Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
            <!-- Categories Count -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="fas fa-list-alt text-3xl text-primary"></i>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-lg font-semibold text-gray-800">Total Categories</h2>
                        <p class="text-gray-600 text-xl font-bold">15</p> <!-- This can be dynamic -->
                    </div>
                </div>
            </div>

            <!-- Products Count -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="fas fa-box text-3xl text-primary"></i>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-lg font-semibold text-gray-800">Total Products</h2>
                        <p class="text-gray-600 text-xl font-bold">350</p> <!-- This can be dynamic -->
                    </div>
                </div>
            </div>

            <!-- Brands Count -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="fas fa-tags text-3xl text-primary"></i>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-lg font-semibold text-gray-800">Total Brands</h2>
                        <p class="text-gray-600 text-xl font-bold">12</p> <!-- This can be dynamic -->
                    </div>
                </div>
            </div>

            <!-- Attributes Count -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="fas fa-cogs text-3xl text-primary"></i>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-lg font-semibold text-gray-800">Total Attributes</h2>
                        <p class="text-gray-600 text-xl font-bold">8</p> <!-- This can be dynamic -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Links Section -->
        <div class="bg-white shadow-md rounded-lg p-6 mt-6">
            <h2 class="text-lg font-semibold text-gray-800">Catalog Management Links</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-4">
                <!-- Categories -->
                <a href="{{ route('admin.catalog.categories.index') }}"
                    class="block p-4 bg-gray-100 rounded-lg hover:bg-gray-200">
                    <div class="flex items-center">
                        <i class="fas fa-list-alt text-2xl text-primary"></i>
                        <span class="ml-4 text-lg text-gray-800 font-semibold">Manage Categories</span>
                    </div>
                </a>

                <!-- Products -->
                <a href="" class="block p-4 bg-gray-100 rounded-lg hover:bg-gray-200">
                    <div class="flex items-center">
                        <i class="fas fa-box text-2xl text-primary"></i>
                        <span class="ml-4 text-lg text-gray-800 font-semibold">Manage Products</span>
                    </div>
                </a>

                <!-- Brands -->
                <a href="" class="block p-4 bg-gray-100 rounded-lg hover:bg-gray-200">
                    <div class="flex items-center">
                        <i class="fas fa-tags text-2xl text-primary"></i>
                        <span class="ml-4 text-lg text-gray-800 font-semibold">Manage Brands</span>
                    </div>
                </a>

                <!-- Attributes -->
                <a href="" class="block p-4 bg-gray-100 rounded-lg hover:bg-gray-200">
                    <div class="flex items-center">
                        <i class="fas fa-cogs text-2xl text-primary"></i>
                        <span class="ml-4 text-lg text-gray-800 font-semibold">Manage Attributes</span>
                    </div>
                </a>
            </div>
        </div>

        <!-- Recent Catalog Activity & Chart Placeholder -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">
            <!-- Recent Catalog Activity -->
            <div class="bg-white shadow-md rounded-lg p-6 lg:col-span-2">
                <h2 class="text-lg font-semibold text-gray-800">Recent Catalog Activity</h2>
                <ul class="mt-4 space-y-3">
                    <li class="flex items-center">
                        <i class="fas fa-list-alt text-primary text-xl"></i>
                        <p class="ml-4 text-gray-600">New category <strong>Electronics</strong> added.</p>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-box text-primary text-xl"></i>
                        <p class="ml-4 text-gray-600">Product <strong>Smartphone</strong> has been added.</p>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-tags text-primary text-xl"></i>
                        <p class="ml-4 text-gray-600">Brand <strong>Samsung</strong> has been updated.</p>
                    </li>
                </ul>
            </div>

            <!-- Placeholder for Sales Overview Chart -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-lg font-semibold text-gray-800">Product Sales Overview</h2>
                <div class="mt-4 h-40 bg-gray-100 flex items-center justify-center">
                    <p class="text-gray-500">Chart Placeholder</p>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
