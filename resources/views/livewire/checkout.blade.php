<x-slot name="header">
    <h2 class="text-2xl font-bold leading-tight text-gray-800">
        {{ __('Checkout') }}
    </h2>
</x-slot>

<section class="py-8">
    <div class="mx-auto max-w-7xl">
        {{-- Shipping Address --}}
        <div class="p-6 mb-8 bg-white rounded-lg shadow-md">
            <h2 class="mb-4 text-xl font-semibold">Shipping Address</h2>
            <!-- Add your form fields for shipping address here -->
            <form>
                <div class="grid grid-cols-2 gap-4">
                    <!-- First Name -->
                    <div class="mb-4">
                        <label for="firstName" class="block text-sm font-medium text-gray-600">First Name</label>
                        <input type="text" id="firstName" name="firstName" class="w-full p-2 mt-1 border rounded-md">
                    </div>

                    <!-- Last Name -->
                    <div class="mb-4">
                        <label for="lastName" class="block text-sm font-medium text-gray-600">Last Name</label>
                        <input type="text" id="lastName" name="lastName" class="w-full p-2 mt-1 border rounded-md">
                    </div>

                    <!-- Address Line 1 -->
                    <div class="col-span-2 mb-4">
                        <label for="address1" class="block text-sm font-medium text-gray-600">Address Line 1</label>
                        <input type="text" id="address1" name="address1" class="w-full p-2 mt-1 border rounded-md">
                    </div>

                    <!-- Address Line 2 -->
                    <div class="col-span-2 mb-4">
                        <label for="address2" class="block text-sm font-medium text-gray-600">Address Line 2</label>
                        <input type="text" id="address2" name="address2" class="w-full p-2 mt-1 border rounded-md">
                    </div>

                    <!-- City -->
                    <div class="mb-4">
                        <label for="city" class="block text-sm font-medium text-gray-600">City</label>
                        <input type="text" id="city" name="city" class="w-full p-2 mt-1 border rounded-md">
                    </div>

                    <!-- State -->
                    <div class="mb-4">
                        <label for="state" class="block text-sm font-medium text-gray-600">State</label>
                        <input type="text" id="state" name="state" class="w-full p-2 mt-1 border rounded-md">
                    </div>

                    <!-- ZIP Code -->
                    <div class="mb-4">
                        <label for="zipCode" class="block text-sm font-medium text-gray-600">ZIP Code</label>
                        <input type="text" id="zipCode" name="zipCode" class="w-full p-2 mt-1 border rounded-md">
                    </div>

                    <!-- Country -->
                    <div class="mb-4">
                        <label for="country" class="block text-sm font-medium text-gray-600">Country</label>
                        <input type="text" id="country" name="country" class="w-full p-2 mt-1 border rounded-md">
                    </div>

                    <!-- Phone Number -->
                    <div class="col-span-2 mb-4">
                        <label for="phoneNumber" class="block text-sm font-medium text-gray-600">Phone Number</label>
                        <input type="tel" id="phoneNumber" name="phoneNumber"
                            class="w-full p-2 mt-1 border rounded-md">
                    </div>
                </div>
            </form>
        </div>


        {{-- Payment Methods --}}
        <div class="p-6 mb-8 bg-white rounded-lg shadow-md">
            <h2 class="mb-4 text-xl font-semibold">Payment Method</h2>
            <!-- Add your payment method options here -->
            <div class="flex items-center mb-4 space-x-4">
                <!-- Cash on Delivery -->
                <input type="radio" id="cash" name="paymentMethod" value="cash"
                    class="w-4 h-4 text-indigo-500 focus:ring-indigo-500">
                <label for="cash" class="ml-2 text-gray-600">Cash on Delivery</label>
                <!-- Credit Card -->
                <input type="radio" id="creditCard" name="paymentMethod" value="creditCard"
                    class="w-4 h-4 text-indigo-500 focus:ring-indigo-500">
                <label for="creditCard" class="ml-2 text-gray-600">Credit Card</label>

                <!-- PayPal -->
                <input type="radio" id="paypal" name="paymentMethod" value="paypal"
                    class="w-4 h-4 text-indigo-500 focus:ring-indigo-500">
                <label for="paypal" class="ml-2 text-gray-600">PayPal</label>

                <!-- Stripe -->
                <input type="radio" id="stripe" name="paymentMethod" value="stripe"
                    class="w-4 h-4 text-indigo-500 focus:ring-indigo-500">
                <label for="stripe" class="ml-2 text-gray-600">Stripe</label>

                <!-- Apple Pay -->
                <input type="radio" id="applePay" name="paymentMethod" value="applePay"
                    class="w-4 h-4 text-indigo-500 focus:ring-indigo-500">
                <label for="applePay" class="ml-2 text-gray-600">Apple Pay</label>
            </div>
            <!-- Add more payment options as needed -->
        </div>



        {{-- Payment Summary --}}
        <div class="p-6 bg-white rounded-lg shadow-md">
            <h2 class="mb-4 text-xl font-semibold">Payment Summary</h2>

            <!-- Itemized List -->
            <div class="mb-4">
                <h3 class="mb-2 text-lg font-semibold">Items</h3>
                <!-- Example: Display a list of items with quantities and prices -->
                <ul class="pl-4 list-disc">
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

            <!-- Additional Charges -->
            <div class="mb-4">
                <h3 class="mb-2 text-lg font-semibold">Additional Charges</h3>
                <!-- Example: Display additional charges like taxes or shipping -->
                <ul class="pl-4 list-disc">
                    <li class="flex justify-between">
                        <span>Taxes</span>
                        <span class="text-indigo-500">$10.00</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Shipping</span>
                        <span class="text-indigo-500">$10.00</span>
                    </li>
                    <!-- Add more charges as needed -->
                </ul>
            </div>

            <!-- Subtotal, Shipping, and Total -->
            <div class="flex items-center justify-between mb-2">
                <p class="text-gray-600">Subtotal:</p>
                <!-- Replace with dynamic data -->
                <p class="text-indigo-500">$90.00</p>
            </div>

            <div class="flex items-center justify-between mb-2">
                <p class="text-gray-600">Total:</p>
                <!-- Replace with dynamic data -->
                <p class="font-bold text-indigo-500">$95.00</p>
            </div>

            <!-- Place Order Button -->
            <div class="mt-4">
                <button
                    class="px-4 py-2 text-white transition duration-300 bg-indigo-500 rounded-full hover:bg-indigo-600">
                    Place Order
                </button>
            </div>
        </div>




    </div>
</section>
