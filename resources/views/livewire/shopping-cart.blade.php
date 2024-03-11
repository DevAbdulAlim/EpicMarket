<div class="fixed top-0 right-0 h-full overflow-y-auto bg-white shadow-lg w-96">
    <div class="p-4">
        <h2 class="pb-2 mb-4 text-xl font-semibold border-b">Shopping Cart</h2>

        @if (count($cart) > 0)
            <ul>
                @foreach ($cart as $productId => $item)
                    <li class="flex items-center justify-between py-2 border-b">
                        <div class="flex items-center space-x-2">
                            <div class="flex-shrink-0 w-16 h-16 overflow-hidden bg-gray-200 rounded-md">
                                <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="object-cover w-full h-full">
                            </div>
                            <div>
                                <p class="text-lg font-semibold">{{ $item['name'] }}</p>
                                <p class="text-sm">${{$item['price']}} x {{ $item['quantity'] }} = ${{ $item['price'] * $item['quantity'] }}</p>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <button wire:click="increaseQuantity({{ $productId }})" class="px-3 py-1 text-white bg-green-500 rounded hover:bg-green-600">+</button>
                            <button wire:click="decreaseQuantity({{ $productId }})" class="px-3 py-1 text-white bg-yellow-500 rounded hover:bg-yellow-600">-</button>
                            <button wire:click="removeFromCart({{ $productId }})" class="px-3 py-1 text-white bg-red-500 rounded hover:bg-red-600">x</button>
                        </div>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-lg">Your cart is empty.</p>
        @endif
    </div>
</div>
