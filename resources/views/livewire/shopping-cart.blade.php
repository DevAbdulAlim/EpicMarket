<div>

    <button wire:click="openCart" class="relative">
        <span
            class="absolute inline-flex items-center justify-center w-6 h-6 -mt-2 -mr-2 text-white bg-red-500 rounded-full -top-1 -right-1">{{ count($cart) }}</span>
        <i class="fas fa-shopping-cart"></i>
    </button>

    <div wire:loading class="fixed">
        <div class="fixed top-0 left-0 w-full h-full flex items-center  justify-center z-50">
            <i class="fas fa-spinner fa-3x text-green-500 animate-spin"></i>
        </div>
    </div>


    @if ($cartOpen)
        <div class="fixed top-0 right-0 z-50 h-full overflow-y-auto bg-white shadow-lg w-96">
            <div class="p-4 relative h-full">
                <div class="flex justify-between pb-2 mb-4 text-xl font-semibold border-b">
                    <h2>Shopping Cart ({{ count($cart) }} items)</h2>
                    <button wire:click="closeCart">X</button>
                </div>

                @if (count($cart) > 0)
                    <ul>
                        @foreach ($cart as $productId => $item)
                            <li class="flex items-center justify-between py-2 border-b">
                                <div class="flex items-center space-x-2">
                                    <div class="flex-shrink-0 w-16 h-16 overflow-hidden bg-gray-200 rounded-md">
                                        <img src="{{asset('/images/product.webp')}}" alt="{{ $item['name'] }}"
                                            class="object-cover w-full h-full">
                                    </div>
                                    <div>
                                        <p class="text-lg font-semibold">{{ $item['name'] }}</p>
                                        <p class="text-sm">${{ $item['price'] }} x {{ $item['quantity'] }} =
                                            ${{ $item['price'] * $item['quantity'] }}</p>
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <button wire:click="increaseQuantity({{ $productId }})"
                                        class="px-3 py-1 text-white bg-green-500 rounded hover:bg-green-600">+</button>
                                    <button wire:click="decreaseQuantity({{ $productId }})"
                                        class="px-3 py-1 text-white bg-yellow-500 rounded hover:bg-yellow-600">-</button>
                                    <button wire:click="removeFromCart({{ $productId }})"
                                        class="px-3 py-1 text-white bg-red-500 rounded hover:bg-red-600">x</button>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-lg">Your cart is empty.</p>
                @endif

                <div class="flex justify-center text-center p-4">
                    <a href="{{ $totalPrice > 0 ? route('checkout') : '#' }}" class="bg-green-800 left-2 right-2 text-white absolute bottom-2 hover:bg-green-900 font-bold py-2 px-4 rounded">
                        Checkout{{ $totalPrice > 0 ? ' (Total $'.$totalPrice.')' : '' }}
                    </a>
                </div>

            </div>
        </div>
    @endif


</div>
