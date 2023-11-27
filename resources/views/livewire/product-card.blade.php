<div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-lg">
    <a href="{{ route('product.details', ['product' => 1]) }}">
        <img class="w-full h-64 object-cover object-center" src="product-image.jpg" alt="Product Image">
    </a>

    <div class="p-4">
        <a href="{{ route('product.details', ['product' => 1]) }}" class="text-2xl font-bold text-gray-800 mb-2 hover:underline">Gorgeous Product Name</a>
        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

        <div class="flex items-center justify-between">
            <p class="text-xl font-bold text-indigo-500">$49.99</p>
            <button class="bg-indigo-500 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition duration-300">Add to Cart</button>
        </div>
    </div>
</div>
