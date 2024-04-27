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

                <!-- Order Status -->
                <div class="p-6 border-b">
                    <p class="text-gray-600">Order Status:</p>
                    <p class="text-green-500 font-bold">{{ $order->status }}</p>
                </div>

                <!-- Order Subtotal -->
                <div class="p-6 border-b">
                    <p class="text-gray-600">Subtotal:</p>
                    <p class="text-green-500 font-bold">${{ number_format($order->subtotal, 2) }}</p>
                </div>

                <!-- Tax -->
                <div class="p-6 border-b">
                    <p class="text-gray-600">Tax:</p>
                    <p class="text-green-500 font-bold">${{ number_format($order->tax, 2) }}</p>
                </div>

                <!-- Shipping -->
                <div class="p-6 border-b">
                    <p class="text-gray-600">Shipping:</p>
                    <p class="text-green-500 font-bold">${{ number_format($order->shipping, 2) }}</p>
                </div>

                <!-- Total Price -->
                <div class="p-6 border-b">
                    <p class="text-gray-600">Total Price:</p>
                    <p class="text-green-500 font-bold">${{ number_format($order->total, 2) }}</p>
                </div>

            </div>
        </div>
    </section>

  {{-- Order Items List --}}
<section class="py-8">
    <div class="max-w-7xl mx-auto">
        <div class="bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-bold p-6 border-b">Order Items</h2>
            <div class="p-6">
                <ul class="divide-y divide-gray-200">
                    <!-- Column Headers -->
                    <li class="flex justify-between py-2">
                        <div class="text-gray-600">Product</div>
                        <div class="flex items-center">
                            <div class="text-gray-600">Price</div>
                            <div class="text-gray-600 mx-2">Quantity</div>
                            <div class="text-gray-600">Subtotal</div>
                        </div>
                    </li>
                    <!-- Loop through order items -->
                    @foreach ($order->orderItems as $item)
                    <li class="flex justify-between py-4">
                        <div>{{ $item->product->name }}</div>
                        <div class="flex items-center">
                            <div class="text-green-500">${{ number_format($item->price, 2) }}</div>
                            <div class="text-gray-400 mx-2">x{{ $item->quantity }}</div>
                            <div class="text-green-500">${{ number_format($item->price * $item->quantity, 2) }}</div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>


@php
function getStatusProgress($status) {
    switch ($status) {
        case 'pending':
            return '0%'; // No progress for 'pending' status
        case 'initiated':
            return '20%'; // 20% progress for 'initiated' status
        case 'processing':
            return '40%'; // 40% progress for 'processing' status
        case 'shipped':
            return '60%'; // 60% progress for 'shipped' status
        case 'delivered':
            return '80%'; // 80% progress for 'delivered' status
        case 'canceled':
            return '100%'; // 100% progress for 'canceled' status
        default:
            return '0%'; // Default to 0% progress
    }
}
@endphp



</x-user-dashboard>
