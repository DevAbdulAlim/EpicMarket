<x-app-layout>
    <x-slot name="title">Wishlist</x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-3xl font-semibold mb-6">My Wishlist</h1>

        <!-- Wishlist Table -->
        <div class="overflow-x-auto bg-white border border-gray-200 rounded-lg shadow-md">
            <table class="min-w-full">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase tracking-wider">
                            Product</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase tracking-wider">Price
                        </th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase tracking-wider">Action
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <!-- Example Wishlist Item -->
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
                        <td class="py-4 px-6 text-sm text-gray-900">$29.99</td>
                        <td class="py-4 px-6 text-sm">
                            <button class="bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600 mr-2">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                            </button>
                            <button class="text-red-600 hover:text-red-900">
                                <i class="fas fa-trash-alt"></i> Remove
                            </button>
                        </td>
                    </tr>
                    <!-- Repeat for other wishlist items -->
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
