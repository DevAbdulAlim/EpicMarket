<div class="p-4 bg-white rounded-lg shadow-md">
    <img src="" alt="{{ $product->name }}" class="object-cover w-full h-40 mb-4 rounded-lg">
    <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
    <p class="text-gray-600">{{ $product->description }}</p>
    <p class="mt-2 text-xl font-semibold text-gray-800">${{ $product->price }}</p>
    <livewire:add-to-cart-button :productId="$product->id" />
</div>
