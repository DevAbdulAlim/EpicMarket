<x-user-dashboard>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-800 leading-tight">
            {{ __('Order Listings') }}
        </h2>
    </x-slot>

    <section class="py-8">
        <div class="max-w-7xl mx-auto">
            {{-- Order Filters --}}
            <div class="mb-8">
                <label for="status" class="text-gray-600 block mb-2">Filter by Status:</label>
                <select id="status" name="status" class="p-2 border rounded-md">
                    <option value="all">All Orders</option>
                    <option value="pending">Pending</option>
                    <option value="shipped">Shipped</option>
                    <option value="delivered">Delivered</option>
                </select>
            </div>

            {{-- Order Listings --}}
            <div class="bg-white rounded-lg">
                <h2 class="text-2xl font-bold p-6 border-b">Order Listings</h2>

                <!-- Order Items -->
                <div class="p-6">
                    <!-- Loop through orders -->
                    @foreach ($orders as $order)
                    <div class="mb-4 border-b pb-4">
                        <div class="flex flex-wrap justify-between items-center">
                            <div class="mb-2 md:mr-6 w-full md:w-auto">
                                <p class="text-gray-600">Order Date:</p>
                                <p class="text-green-500 font-bold">{{ $order->created_at->format('F d, Y') }}</p>
                            </div>
                            <div class="mb-2 md:mr-6 w-full md:w-auto">
                                <p class="text-gray-600">Order ID:</p>
                                <p class="text-green-500 font-bold">{{ $order->id }}</p>
                            </div>
                            <div class="mb-2 md:mr-6 w-full md:w-auto">
                                <p class="text-gray-600">Status:</p>
                                <p class="text-green-500 font-bold">{{ $order->status }}</p>
                            </div>
                            <div class="mb-2 md:mr-6 w-full md:w-auto">
                                <p class="text-gray-600">Total Price:</p>
                                <p class="text-green-500 font-bold">${{ number_format($order->total_price, 2) }}</p>
                            </div>
                            <div class="w-full md:w-auto">
                                <a href="{{ route('user.order.details', ['order' => $order->id]) }}" class="text-green-500 hover:text-green-700">View Details</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- Pagination -->
                    <div class="mt-8 flex justify-center">
                        {{ $orders->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-user-dashboard>
