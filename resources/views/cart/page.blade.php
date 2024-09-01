<x-app-layout>
    <x-slot name="title">Shopping Cart</x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-3xl font-semibold mb-6">Shopping Cart</h1>

        <!-- Cart Table -->
        <div class="overflow-x-auto bg-white border border-gray-200 rounded-lg shadow-md">
            <table class="min-w-full">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase tracking-wider">
                            Product</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase tracking-wider">Price
                        </th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase tracking-wider">
                            Quantity</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase tracking-wider">
                            Subtotal</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase tracking-wider">
                            Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <!-- Example Cart Item -->
                    <tr>
                        <td class="py-4 px-6">
                            <div class="flex items-center">
                                <img class="h-16 w-16 rounded object-cover mr-4" src="https://via.placeholder.com/100"
                                    alt="Product Image">
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Sample Product Name</div>
                                    <div class="text-sm text-gray-500">Description or details of the product...</div>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6 text-sm text-gray-900">$49.99</td>
                        <td class="py-4 px-6 text-sm text-gray-900">
                            <input type="number" value="1" min="1" class="w-16 px-2 py-1 border rounded">
                        </td>
                        <td class="py-4 px-6 text-sm text-gray-900">$49.99</td>
                        <td class="py-4 px-6 text-sm">
                            <button class="text-red-600 hover:text-red-900">
                                <i class="fas fa-trash-alt"></i>
                                Remove
                            </button>
                        </td>
                    </tr>
                    <!-- Repeat for other cart items -->
                </tbody>
            </table>
        </div>

        <!-- Cart Summary -->
        <div class="mt-8 flex justify-end">
            <div class="w-full sm:w-1/3 bg-white border border-gray-200 rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-4">Cart Summary</h2>
                <div class="flex justify-between mb-3">
                    <span class="text-sm text-gray-600">Subtotal</span>
                    <span class="text-sm font-medium text-gray-900">$49.99</span>
                </div>
                <div class="flex justify-between mb-3">
                    <span class="text-sm text-gray-600">Tax (10%)</span>
                    <span class="text-sm font-medium text-gray-900">$4.99</span>
                </div>
                <div class="flex justify-between mb-4">
                    <span class="text-sm text-gray-600">Shipping</span>
                    <span class="text-sm font-medium text-gray-900">Free</span>
                </div>
                <div class="flex justify-between border-t border-gray-200 pt-4">
                    <span class="text-lg font-semibold text-gray-900">Total</span>
                    <span class="text-lg font-semibold text-gray-900">$54.98</span>
                </div>
                <button class="mt-6 w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">
                    Proceed to Checkout
                </button>
            </div>
        </div>
    </div>
</x-app-layout>
