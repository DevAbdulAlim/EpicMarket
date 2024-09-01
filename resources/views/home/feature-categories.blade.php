<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h2 class="text-3xl font-semibold mb-6 text-center">Featured Categories</h2>

    <!-- Featured Categories Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Example Featured Category Item -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6 flex items-center justify-center">
            <a href="{{ route('products.index') }}" class="block text-center">
                <img src="https://via.placeholder.com/100" alt="Category Image" class="mx-auto mb-4">
                <h3 class="text-lg font-semibold text-gray-900">Category Name</h3>
            </a>
        </div>
        <!-- Repeat for other featured categories -->
    </div>
</div>
