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
                        <p class="text-indigo-500 font-bold">John Doe</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Email:</p>
                        <p class="text-indigo-500 font-bold">john.doe@example.com</p>
                    </div>
                </div>
            </div>

            {{-- Order History --}}
            <div class="bg-white rounded-lg shadow-md">
                <h2 class="text-2xl font-bold p-6 border-b">Order History</h2>

                <!-- Order Items -->
                <div class="p-6">
                    <!-- Example: Display a list of orders with details -->
                    <div class="mb-4">
                        <p class="text-gray-600">Order Date:</p>
                        <p class="text-indigo-500 font-bold">June 15, 2023</p>
                    </div>
                    <div class="mb-4">
                        <p class="text-gray-600">Order ID:</p>
                        <p class="text-indigo-500 font-bold">ODR123456</p>
                    </div>
                    <div class="mb-4">
                        <p class="text-gray-600">Total Items:</p>
                        <p class="text-indigo-500 font-bold">3</p>
                    </div>
                    <div class="mb-4">
                        <p class="text-gray-600">Total Price:</p>
                        <p class="text-indigo-500 font-bold">$150.00</p>
                    </div>

                    <!-- Order Items List -->
                    <div>
                        <h3 class="text-xl font-bold mb-2">Order Items</h3>
                        <ul class="list-disc pl-4">
                            <li class="flex justify-between">
                                <span>Product 1</span>
                                <span class="text-indigo-500">x2</span>
                                <span class="text-indigo-500">$50.00</span>
                            </li>
                            <li class="flex justify-between">
                                <span>Product 2</span>
                                <span class="text-indigo-500">x1</span>
                                <span class="text-indigo-500">$40.00</span>
                            </li>
                            <!-- Add more items as needed -->
                        </ul>
                    </div>
                </div>

                <!-- Repeat similar order details for each order -->

            </div>
        </div>
    </section>


</x-user-dashboard>
