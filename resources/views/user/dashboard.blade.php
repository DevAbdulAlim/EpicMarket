<x-user-dashboard>
    <section class="py-8">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            {{-- Pending Orders Card --}}
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="font-semibold text-gray-800 text-lg">Pending Orders</h3>
                <p class="text-green-500 text-2xl font-bold mt-2">{{ $orderCounts['pending'] ?? 0 }}</p>
            </div>

            {{-- Canceled Orders Card --}}
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="font-semibold text-gray-800 text-lg">Canceled Orders</h3>
                <p class="text-green-500 text-2xl font-bold mt-2">{{ $orderCounts['canceled'] ?? 0 }}</p>
            </div>

            {{-- Completed Orders Card --}}
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="font-semibold text-gray-800 text-lg">Completed Orders</h3>
                <p class="text-green-500 text-2xl font-bold mt-2">{{ $orderCounts['completed'] ?? 0 }}</p>
            </div>

            {{-- Total Orders Card --}}
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="font-semibold text-gray-800 text-lg">Total Orders</h3>
                <p class="text-green-500 text-2xl font-bold mt-2">{{ $orderCounts ? $orderCounts->sum() : 0 }}</p>
            </div>

        </div>

      {{-- Recent Order List --}}
@if(isset($recentOrders) && count($recentOrders) > 0)
<div class="max-w-7xl mx-auto mt-8">
    <div class="bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold p-6 border-b">Recent Orders</h2>
        <div class="p-6">
            {{-- Loop through recent orders --}}
            @foreach ($recentOrders as $order)
            <div class="mb-4 border-b pb-4">
                <div class="flex flex-wrap md:flex-no-wrap justify-between items-center">
                    <div class="mb-2 md:mr-6">
                        <p class="text-gray-600">Order Date:</p>
                        <p class="text-green-500 font-bold">{{ $order->created_at->format('F d, Y') }}</p>
                    </div>
                    <div class="mb-2 md:mr-6">
                        <p class="text-gray-600">Order ID:</p>
                        <p class="text-green-500 font-bold">{{ $order->id }}</p>
                    </div>
                    <div class="mb-2 md:mr-6">
                        <p class="text-gray-600">Status:</p>
                        <p class="text-green-500 font-bold">{{ $order->status }}</p>
                    </div>
                    <div class="mb-2 md:mr-6">
                        <p class="text-gray-600">Total Price:</p>
                        <p class="text-green-500 font-bold">${{ number_format($order->total, 2) }}</p>
                    </div>
                    <div>
                        <a href="{{ route('user.order.details', ['order' => $order->id]) }}" class="text-green-500 hover:text-green-700">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif

    </section>
</x-user-dashboard>
