<x-slot name="header">
    <h2 class="font-bold text-2xl text-gray-800 leading-tight">
        {{ __('Product Search') }}
    </h2>
</x-slot>

<section class="py-8">
    <div class="max-w-7xl mx-auto">
        {{-- Search Bar --}}
        <div class="mb-8">
            <label for="search" class="text-gray-600 block mb-2">Search for Products:</label>
            <div class="flex items-center">
                <input type="text" id="search" name="search" class="p-2 border rounded-l-md w-full" placeholder="Type here...">
                <button class="bg-indigo-500 text-white px-4 py-2 rounded-r-md hover:bg-indigo-600 transition duration-300">
                    Search
                </button>
            </div>
        </div>

        {{-- Filters and Sorting --}}
        <div class="flex items-center justify-between mb-6">
            {{-- Filters --}}
            <div>
                <label for="category" class="text-gray-600 block mb-2">Filter by Category:</label>
                <select id="category" name="category" class="p-2 border rounded-md">
                    <option value="all">All Categories</option>
                    <option value="electronics">Electronics</option>
                    <option value="clothing">Clothing</option>
                    <!-- Add more categories as needed -->
                </select>
            </div>

            {{-- Sorting --}}
            <div>
                <label for="sort" class="text-gray-600 block mb-2">Sort by:</label>
                <select id="sort" name="sort" class="p-2 border rounded-md">
                    <option value="price-asc">Price: Low to High</option>
                    <option value="price-desc">Price: High to Low</option>
                    <!-- Add more sorting options as needed -->
                </select>
            </div>
        </div>

        {{-- Search Results --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <!-- Product Cards -->
            <div class="bg-white overflow-hidden rounded-lg shadow-md">
                <img src="product1.jpg" alt="Product 1" class="w-full h-40 object-cover mb-4 rounded-t-md">
                <div class="p-4">
                    <h2 class="text-lg font-semibold mb-2">Product 1</h2>
                    <p class="text-gray-600 mb-4">Description of Product 1.</p>
                    <div class="flex items-center justify-between">
                        <p class="text-indigo-500 font-bold">$50.00</p>
                        <button class="bg-indigo-500 text-white px-4 py-2 rounded-full hover:bg-indigo-600 transition duration-300">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Repeat similar product cards as needed -->

        </div>

        {{-- Pagination --}}
        <div class="mt-8 flex justify-center">
            <nav class="flex items-center justify-between">
                <a href="#" class="text-indigo-500 hover:text-indigo-700">1</a>
                <a href="#" class="ml-4 text-gray-500 hover:text-indigo-700">2</a>
                <a href="#" class="ml-4 text-gray-500 hover:text-indigo-700">3</a>
                <!-- Add more pages as needed -->
            </nav>
        </div>
    </div>
</section>
