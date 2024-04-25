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
            <div class="bg-white rounded-lg shadow-md">
                <h2 class="text-2xl font-bold p-6 border-b">Order Listings</h2>

                <!-- Order Items -->
                <div class="p-6">
                    <!-- Example: Display a list of orders with details -->
                    <div class="mb-4 border-b pb-4">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-gray-600">Order Date:</p>
                                <p class="text-indigo-500 font-bold">June 15, 2023</p>
                            </div>
                            <div>
                                <p class="text-gray-600">Order ID:</p>
                                <p class="text-indigo-500 font-bold">ODR123456</p>
                            </div>
                            <div>
                                <p class="text-gray-600">Status:</p>
                                <p class="text-indigo-500 font-bold">Pending</p>
                            </div>
                            <div>
                                <p class="text-gray-600">Total Price:</p>
                                <p class="text-indigo-500 font-bold">$150.00</p>
                            </div>
                            <div>
                                <a href="{{route('user.order.details', ['order' => 1])}}" class="text-indigo-500 hover:text-indigo-700">View Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Repeat similar order details for each order -->

                </div>

                <!-- Pagination -->
                <div class="mt-8 flex justify-center">
                    <nav class="flex items-center justify-between">
                        <a href="#" class="text-indigo-500 hover:text-indigo-700">1</a>
                        <a href="#" class="ml-4 text-gray-500 hover:text-indigo-700">2</a>
                        <a href="#" class="ml-4 text-gray-500 hover:text-indigo-700">3</a>
                        <!-- Add more pages as needed -->
                    </nav>
                </div>
            </div>
        </div>
    </section>

</x-user-dashboard>
