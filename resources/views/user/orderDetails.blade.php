<x-user-dashboard>

    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-800 leading-tight">
            {{ __('Order History') }}
        </h2>
    </x-slot>

    <section class="py-8">
        <div class="max-w-7xl mx-auto">
            {{-- User Info --}}
            <div class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h2 class="text-xl font-semibold mb-4">User Information</h2>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-gray-600">Name:</p>
                        <p class="text-indigo-500 font-bold">{{ auth()->user()->name }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Email:</p>
                        <p class="text-indigo-500 font-bold">{{ auth()->user()->email }}</p>
                    </div>
                </div>
            </div>

            {{-- Order History --}}
            <div class="bg-white rounded-lg shadow-md">
                <h2 class="text-2xl font-bold p-6 border-b">Order History</h2>

                <!-- Loop through orders -->
                @foreach ($orders as $order)
                <div class="p-6 border-b">
                    <!-- Order Date -->
                    <div class="mb-4">
                        <p class="text-gray-600">Order Date:</p>
                        <p class="text-indigo-500 font-bold">{{ $order->created_at->format('F d, Y') }}</p>
                    </div>

                    <!-- Order ID -->
                    <div class="mb-4">
                        <p class="text-gray-600">Order ID:</p>
                        <p class="text-indigo-500 font-bold">{{ $order->id }}</p>
                    </div>

                    <!-- Total Items -->
                    <div class="mb-4">
                        <p class="text-gray-600">Total Items:</p>
                        <p class="text-indigo-500 font-bold">{{ $order->items()->count() }}</p>
                    </div>

                    <!-- Total Price -->
                    <div class="mb-4">
                        <p class="text-gray-600">Total Price:</p>
                        <p class="text-indigo-500 font-bold">${{ number_format($order->total_price, 2) }}</p>
                    </div>

                    <!-- Order Items List -->
                    <div>
                        <h3 class="text-xl font-bold mb-2">Order Items</h3>
                        <ul class="list-disc pl-4">
                            <!-- Loop through order items -->
                            @foreach ($order->items as $item)
                            <li class="flex justify-between">
                                <span>{{ $item->product_name }}</span>
                                <span class="text-indigo-500">x{{ $item->quantity }}</span>
                                <span class="text-indigo-500">${{ number_format($item->price, 2) }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach

                <!-- Pagination Links -->
                <div class="p-6">
                    {{ $orders->links() }}
                </div>

            </div>
        </div>
    </section>

</x-user-dashboard>
