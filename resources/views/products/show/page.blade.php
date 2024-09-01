<x-app-layout>
    <x-slot name="title">Product Details</x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Product Details Container -->
        <div class="flex flex-col lg:flex-row lg:space-x-10">
            <!-- Product Images -->
            <div class="flex-1 mb-6 lg:mb-0">
                <img src="https://via.placeholder.com/500x500" alt="Main Product Image"
                    class="w-full h-auto rounded-lg shadow-md mb-4">

                <!-- Thumbnail Images -->
                <div class="flex space-x-4">
                    <img src="https://via.placeholder.com/100" alt="Thumbnail Image"
                        class="w-20 h-20 object-cover rounded-lg shadow-md cursor-pointer">
                    <img src="https://via.placeholder.com/100" alt="Thumbnail Image"
                        class="w-20 h-20 object-cover rounded-lg shadow-md cursor-pointer">
                    <img src="https://via.placeholder.com/100" alt="Thumbnail Image"
                        class="w-20 h-20 object-cover rounded-lg shadow-md cursor-pointer">
                    <img src="https://via.placeholder.com/100" alt="Thumbnail Image"
                        class="w-20 h-20 object-cover rounded-lg shadow-md cursor-pointer">
                </div>
            </div>

            <!-- Product Information -->
            <div class="flex-1">
                <h1 class="text-3xl font-semibold text-gray-900 mb-4">Sample Product Name</h1>
                <p class="text-lg text-gray-700 mb-4">$49.99</p>
                <p class="text-sm text-green-600 mb-4">In Stock</p>

                <p class="text-sm text-gray-600 mb-6">
                    This is a detailed description of the product. It covers all the features, specifications, and other
                    relevant information that the customer might need to make a purchase decision.
                </p>

                <!-- Quantity Selector -->
                <div class="mb-6">
                    <label for="quantity" class="block text-sm font-medium text-gray-700 mb-2">Quantity</label>
                    <input type="number" id="quantity" name="quantity" value="1" min="1"
                        class="w-20 px-2 py-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <!-- Action Buttons -->
                <div class="flex space-x-4">
                    <button class="w-full lg:w-1/2 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                        <i class="fas fa-shopping-cart"></i> Add to Cart
                    </button>
                    <button class="w-full lg:w-1/2 bg-gray-200 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-300">
                        <i class="fas fa-heart"></i> Add to Wishlist
                    </button>
                </div>
            </div>
        </div>

        <!-- Related Products Section -->
        <div class="mt-12">
            <h2 class="text-2xl font-semibold text-gray-900 mb-6">Related Products</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Example Related Product Item -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4">
                    <a href="#" class="block">
                        <img src="https://via.placeholder.com/200" alt="Product Image"
                            class="w-full h-48 object-cover mb-4 rounded-lg">
                    </a>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Related Product Name</h3>
                    <p class="text-sm text-gray-500 mb-4">$29.99</p>
                    <button class="w-full bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                        Add to Cart
                    </button>
                </div>
                <!-- Repeat for other related products -->
            </div>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="title">Product Details</x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Product Details Container -->
        <div class="flex flex-col lg:flex-row lg:space-x-10">
            <!-- Product Images -->
            <div class="flex-1 mb-6 lg:mb-0">
                <img src="https://via.placeholder.com/500x500" alt="Main Product Image"
                    class="w-full h-auto rounded-lg shadow-md mb-4">

                <!-- Thumbnail Images -->
                <div class="flex space-x-4">
                    <img src="https://via.placeholder.com/100" alt="Thumbnail Image"
                        class="w-20 h-20 object-cover rounded-lg shadow-md cursor-pointer">
                    <img src="https://via.placeholder.com/100" alt="Thumbnail Image"
                        class="w-20 h-20 object-cover rounded-lg shadow-md cursor-pointer">
                    <img src="https://via.placeholder.com/100" alt="Thumbnail Image"
                        class="w-20 h-20 object-cover rounded-lg shadow-md cursor-pointer">
                    <img src="https://via.placeholder.com/100" alt="Thumbnail Image"
                        class="w-20 h-20 object-cover rounded-lg shadow-md cursor-pointer">
                </div>
            </div>

            <!-- Product Information -->
            <div class="flex-1">
                <h1 class="text-3xl font-semibold text-gray-900 mb-4">Sample Product Name</h1>
                <p class="text-lg text-gray-700 mb-4">$49.99</p>
                <p class="text-sm text-green-600 mb-4">In Stock</p>

                <p class="text-sm text-gray-600 mb-6">
                    This is a detailed description of the product. It covers all the features, specifications, and other
                    relevant information that the customer might need to make a purchase decision.
                </p>

                <!-- Quantity Selector -->
                <div class="mb-6">
                    <label for="quantity" class="block text-sm font-medium text-gray-700 mb-2">Quantity</label>
                    <input type="number" id="quantity" name="quantity" value="1" min="1"
                        class="w-20 px-2 py-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <!-- Action Buttons -->
                <div class="flex space-x-4">
                    <button class="w-full lg:w-1/2 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                        <i class="fas fa-shopping-cart"></i> Add to Cart
                    </button>
                    <button class="w-full lg:w-1/2 bg-gray-200 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-300">
                        <i class="fas fa-heart"></i> Add to Wishlist
                    </button>
                </div>
            </div>
        </div>

        <!-- Related Products Section -->
        <div class="mt-12">
            <h2 class="text-2xl font-semibold text-gray-900 mb-6">Related Products</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Example Related Product Item -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4">
                    <a href="#" class="block">
                        <img src="https://via.placeholder.com/200" alt="Product Image"
                            class="w-full h-48 object-cover mb-4 rounded-lg">
                    </a>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Related Product Name</h3>
                    <p class="text-sm text-gray-500 mb-4">$29.99</p>
                    <button class="w-full bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                        Add to Cart
                    </button>
                </div>
                <!-- Repeat for other related products -->
            </div>
        </div>
    </div>
</x-app-layout>
