<x-slot name="header">
    <h2 class="font-bold text-2xl text-gray-800 leading-tight">
        {{ __('Your Cart') }}
    </h2>
</x-slot>

<section class="py-8">
    <div class="max-w-7xl mx-auto relative">
        @if(count($cartItems) > 0)
            {{-- Display Cart Items --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($cartItems as $item)
                    <div class="bg-white overflow-hidden rounded-lg shadow-md relative">
                        <button class="absolute top-2 right-2 bg-red-500 text-white px-2 py-1 rounded-full hover:bg-red-600 transition duration-300" wire:click="removeFromCart('{{ $item['id'] }}')">
                            Remove
                        </button>
                        <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-full h-40 object-cover mb-4 rounded-t-md">

                        <div class="p-4">
                            <h2 class="text-lg font-semibold mb-2">{{ $item['name'] }}</h2>
                            <p class="text-gray-600 mb-4">{{ $item['description'] }}</p>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <input type="number" min="1" wire:model="cartItems.{{ $item['id'] }}.quantity" class="w-12 px-2 py-1 border rounded-md text-center">
                                    <span class="ml-2 text-gray-500">Qty</span>
                                </div>
                                <p class="text-indigo-500 font-bold">${{ $item['price'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Cart Summary --}}
            <div class="mt-8 bg-gray-100 p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Cart Summary</h2>
                <div class="flex items-center justify-between">
                    <p class="text-gray-600">Total Items:</p>
                    <p class="text-indigo-500 font-bold">{{ $totalItems }}</p>
                </div>
                <div class="flex items-center justify-between mt-2">
                    <p class="text-gray-600">Total Price:</p>
                    <p class="text-indigo-500 font-bold">${{ $totalPrice }}</p>
                </div>
                <div class="mt-4">
                    <a href="{{ route('checkout')}}" class="bg-indigo-500 text-white px-4 py-2 rounded-full hover:bg-indigo-600 transition duration-300">
                        Proceed to Checkout
                    </a>
                </div>
            </div>
        @else
            {{-- Empty Cart Message --}}
            <div class="text-center mt-8">
                <p class="text-2xl font-semibold text-gray-800">Your cart is empty.</p>
                <p class="text-gray-600">Discover amazing products and add them to your cart!</p>
            </div>
        @endif
    </div>
</section>
