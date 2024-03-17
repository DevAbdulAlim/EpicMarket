<div class="p-4 bg-white border rounded-lg hover:shadow-md">
    <img src="" alt="{{ $product->name }}" class="object-cover w-full h-40 mb-4 rounded-lg">
    <a href="{{ route('product.details', ['product' => $product->id]) }}"
        class="text-lg font-semibold hover:underline">{{ $product->name }}</a>
    <p class="mt-2 text-xl font-semibold text-gray-800">${{ $product->price }}</p>
    <livewire:add-to-cart-button :productId="$product->id" :productName="$product->name" :productImage="''" :productPrice="$product->price"
        :productStock="$product->stock" />
</div>
