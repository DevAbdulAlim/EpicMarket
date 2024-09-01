<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h2 class="text-3xl font-semibold mb-6 text-center">Featured Products</h2>

    <!-- Featured Products Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Example Featured Product Item -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4">
            <a href="{{ route('products.show', ['id' => 1]) }}" class="block">
                <img src="https://via.placeholder.com/200" alt="Product Image"
                    class="w-full h-48 object-cover mb-4 rounded-lg">
            </a>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Product Name</h3>
            <p class="text-sm text-gray-500 mb-4">$49.99</p>
            <button class="w-full bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                Add to Cart
            </button>
        </div>
        <!-- Repeat for other featured products -->
    </div>
</div>
