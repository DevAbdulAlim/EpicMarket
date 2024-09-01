<x-app-layout>
    <x-slot name="title">Product Search</x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <!-- Filters and Sorting -->
        <div class="mb-8 flex items-center justify-between">
            <!-- Filters -->
            <div class="flex space-x-4">
                <!-- Category Filter -->
                <select
                    class="px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option>All Categories</option>
                    <option>Category 1</option>
                    <option>Category 2</option>
                    <option>Category 3</option>
                </select>

                <!-- Price Filter -->
                <select
                    class="px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option>All Prices</option>
                    <option>$0 - $50</option>
                    <option>$50 - $100</option>
                    <option>$100 - $200</option>
                </select>
            </div>

            <!-- Sorting Options -->
            <div class="flex space-x-4">
                <label for="sort" class="text-sm font-medium text-gray-700">Sort by:</label>
                <select id="sort"
                    class="px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option>Relevance</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                    <option>Newest Arrivals</option>
                </select>
            </div>
        </div>

        <!-- Product List -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <!-- Example Product Item -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4">
                <a href="{{ route('products.show', ['id' => 1]) }}" class="block">
                    <img src="https://via.placeholder.com/200" alt="Product Image"
                        class="w-full h-48 object-cover mb-4 rounded-lg">
                </a>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Sample Product Name</h3>
                <p class="text-sm text-gray-500 mb-4">$49.99</p>
                <button class="w-full bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                    Add to Cart
                </button>
            </div>
            <!-- Repeat for other products -->
        </div>

        <!-- Pagination -->
        <div class="mt-8 flex justify-center">
            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                <a href="#"
                    class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Previous</span>
                    <i class="fas fa-chevron-left"></i>
                </a>
                <!-- Example Pagination Numbers -->
                <a href="#"
                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">1</a>
                <a href="#"
                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">2</a>
                <a href="#"
                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">3</a>
                <span
                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">...</span>
                <a href="#"
                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">8</a>
                <a href="#"
                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">9</a>
                <a href="#"
                    class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Next</span>
                    <i class="fas fa-chevron-right"></i>
                </a>
            </nav>
        </div>
    </div>
</x-app-layout>
