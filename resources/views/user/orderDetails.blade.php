<x-user-dashboard>

    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-800 leading-tight">
            {{ __('Order Details') }}
        </h2>
    </x-slot>

    <section class="py-8">
        <div class="max-w-7xl mx-auto">

            {{-- Order Details --}}
            <div class="bg-white rounded-lg shadow-md">
                <h2 class="text-2xl font-bold p-6 border-b">Order Details</h2>

                <!-- Order Date -->
                <div class="p-6 border-b">
                    <p class="text-gray-600">Order Date:</p>
                    <p class="text-green-500 font-bold">{{ $order->created_at->format('F d, Y') }}</p>
                </div>

                <!-- Order ID -->
                <div class="p-6 border-b">
                    <p class="text-gray-600">Order ID:</p>
                    <p class="text-green-500 font-bold">{{ $order->id }}</p>
                </div>

                <!-- Total Price -->
                <div class="p-6 border-b">
                    <p class="text-gray-600">Total Price:</p>
                    <p class="text-green-500 font-bold">${{ number_format($order->total_price, 2) }}</p>
                </div>

                <!-- Order Items List -->
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Order Items</h3>
                    <ul class="list-disc pl-4">
                        <!-- Loop through order items -->
                        @foreach ($order->orderItems as $item)
                        <li class="flex justify-between">
                            <span>{{ $item->product_name }}</span>
                            <span class="text-green-500">x{{ $item->quantity }}</span>
                            <span class="text-green-500">${{ number_format($item->price, 2) }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

</x-user-dashboard>
