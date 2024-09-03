<div class="container mx-auto py-10">
    <!-- Cart Drawer with Custom Trigger -->
    <x-drawer position="right" width="96" title="Your Cart">
        <!-- Trigger Slot Content -->
        <x-slot name="trigger">
            <button class="relative px-4 py-2 bg-blue-600 text-white rounded-md focus:outline-none">
                <!-- Cart Icon -->
                <svg class="w-6 h-6 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 7.5a1 1 0 001 1.5h11a1 1 0 001-1.5L17 13M7 13L5.4 5M13 17h-2M13 21h-2">
                    </path>
                </svg>

                <!-- Badge for Cart Item Count -->
                <span
                    class="absolute top-0 right-0 -mt-2 -mr-2 px-2 py-1 text-xs leading-none text-white bg-red-600 rounded-full">
                    3 <!-- Example cart item count -->
                </span>
            </button>
        </x-slot>

        <!-- Drawer Content: Cart Items -->
        <div class="space-y-4">
            <!-- Example Cart Item -->
            <div class="flex items-center justify-between p-4 border-b border-gray-200">
                <div class="flex items-center">
                    <img src="https://via.placeholder.com/50" alt="Product Image" class="w-12 h-12 rounded mr-4">
                    <div>
                        <p class="text-sm font-medium text-gray-800">Product Name</p>
                        <p class="text-xs text-gray-500">Quantity: 1</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <p class="text-sm font-medium text-gray-800 mr-4">$20.00</p>
                    <button class="text-red-500 hover:text-red-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Cart Total -->
            <div class="flex justify-between items-center p-4 mt-4 border-t border-gray-200">
                <p class="text-lg font-semibold text-gray-800">Total:</p>
                <p class="text-lg font-semibold text-gray-800">$40.00</p>
            </div>

            <!-- Checkout Button -->
            <div class="p-4">
                <a href="{{ route('checkout.index') }}"
                    class="w-full inline-block px-4 py-2 bg-blue-600 text-white font-medium rounded-md text-center hover:bg-blue-700 transition duration-150">
                    Proceed to Checkout
                </a>
            </div>
        </div>
    </x-drawer>
</div>
