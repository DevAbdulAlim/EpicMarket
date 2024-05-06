<x-slot name="header">
    <h2 class="font-bold text-2xl text-gray-800 leading-tight">
        {{ __('Your Cart') }}
    </h2>
</x-slot>

<section class="py-8">
    <div class="max-w-7xl mx-auto relative">
        @if(count($cartItems) > 0)
            {{-- Display Cart Items --}}
            <div class="overflow-x-auto">
                <table class="min-w-full border-collapse table-auto">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-4 py-2">Product</th>
                            <th class="px-4 py-2">Price</th>
                            <th class="px-4 py-2">Quantity</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($cartItems as $item)
                            <tr>
                                <td class="px-4 py-2">{{ $item['name'] }}</td>
                                <td class="px-4 py-2">${{ $item['price'] }}</td>
                                <td class="px-4 py-2">
                                    <form wire:submit.prevent="updateQuantity('{{ $item['id'] }}')">
                                        <div class="flex items-center">
                                            <button type="submit" class="text-gray-500 hover:text-gray-600 focus:outline-none">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <input type="number" min="1" wire:model="cartItems.{{ $item['id'] }}.quantity" class="w-12 px-2 py-1 border rounded-md text-center">
                                            <button type="submit" class="text-gray-500 hover:text-gray-600 focus:outline-none">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </form>
                                </td>
                                <td class="px-4 py-2">
                                    <form wire:submit.prevent="removeFromCart('{{ $item['id'] }}')">
                                        <button type="submit" class="text-red-500 hover:text-red-600 focus:outline-none">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
