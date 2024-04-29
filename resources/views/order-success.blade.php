<x-app-layout>
    <section class="bg-gray-100 min-h-screen flex items-center justify-center">
        <div class="max-w-lg bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-3xl font-bold text-green-600 mb-4">Order Successful</h2>
            <p class="text-lg text-gray-700 mb-8">Thank you for your purchase! Your order has been successfully placed.</p>
            <div class="flex justify-between">
                <a href="{{route('user.orders')}}" class="inline-block bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded">View All Orders</a>
                <a href="{{route('home')}}" class="inline-block bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded">Continue Shopping</a>
            </div>
        </div>
    </section>
</x-app-layout>