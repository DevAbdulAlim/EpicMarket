<x-slot name="header">
    <h2 class="font-bold text-2xl text-gray-800 leading-tight">
        {{ __('Checkout') }}
    </h2>
</x-slot>

<section class="py-8">
    <div class="max-w-7xl mx-auto">
        {{-- Shipping Address --}}
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-xl font-semibold mb-4">Shipping Address</h2>
            <!-- Add your form fields for shipping address here -->
            <form>
                <div class="grid grid-cols-2 gap-4">
                    <!-- First Name -->
                    <div class="mb-4">
                        <label for="firstName" class="block text-sm font-medium text-gray-600">First Name</label>
                        <input type="text" id="firstName" name="firstName" class="mt-1 p-2 border rounded-md w-full">
                    </div>

                    <!-- Last Name -->
                    <div class="mb-4">
                        <label for="lastName" class="block text-sm font-medium text-gray-600">Last Name</label>
                        <input type="text" id="lastName" name="lastName" class="mt-1 p-2 border rounded-md w-full">
                    </div>

                    <!-- Address Line 1 -->
                    <div class="mb-4 col-span-2">
                        <label for="address1" class="block text-sm font-medium text-gray-600">Address Line 1</label>
                        <input type="text" id="address1" name="address1" class="mt-1 p-2 border rounded-md w-full">
                    </div>

                    <!-- Address Line 2 -->
                    <div class="mb-4 col-span-2">
                        <label for="address2" class="block text-sm font-medium text-gray-600">Address Line 2</label>
                        <input type="text" id="address2" name="address2" class="mt-1 p-2 border rounded-md w-full">
                    </div>

                    <!-- City -->
                    <div class="mb-4">
                        <label for="city" class="block text-sm font-medium text-gray-600">City</label>
                        <input type="text" id="city" name="city" class="mt-1 p-2 border rounded-md w-full">
                    </div>

                    <!-- State -->
                    <div class="mb-4">
                        <label for="state" class="block text-sm font-medium text-gray-600">State</label>
                        <input type="text" id="state" name="state" class="mt-1 p-2 border rounded-md w-full">
                    </div>

                    <!-- ZIP Code -->
                    <div class="mb-4">
                        <label for="zipCode" class="block text-sm font-medium text-gray-600">ZIP Code</label>
                        <input type="text" id="zipCode" name="zipCode" class="mt-1 p-2 border rounded-md w-full">
                    </div>

                    <!-- Country -->
                    <div class="mb-4">
                        <label for="country" class="block text-sm font-medium text-gray-600">Country</label>
                        <input type="text" id="country" name="country" class="mt-1 p-2 border rounded-md w-full">
                    </div>

                    <!-- Phone Number -->
                    <div class="mb-4 col-span-2">
                        <label for="phoneNumber" class="block text-sm font-medium text-gray-600">Phone Number</label>
                        <input type="tel" id="phoneNumber" name="phoneNumber"
                            class="mt-1 p-2 border rounded-md w-full">
                    </div>
                </div>
            </form>
        </div>


        {{-- Payment Methods --}}
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-xl font-semibold mb-4">Payment Method</h2>
            <!-- Add your payment method options here -->
            <div class="flex items-center space-x-4 mb-4">
                <!-- Credit Card -->
                <input type="radio" id="creditCard" name="paymentMethod" value="creditCard"
                    class="text-indigo-500 focus:ring-indigo-500 h-4 w-4">
                <label for="creditCard" class="ml-2 text-gray-600">Credit Card</label>

                <!-- PayPal -->
                <input type="radio" id="paypal" name="paymentMethod" value="paypal"
                    class="text-indigo-500 focus:ring-indigo-500 h-4 w-4">
                <label for="paypal" class="ml-2 text-gray-600">PayPal</label>

                <!-- Stripe -->
                <input type="radio" id="stripe" name="paymentMethod" value="stripe"
                    class="text-indigo-500 focus:ring-indigo-500 h-4 w-4">
                <label for="stripe" class="ml-2 text-gray-600">Stripe</label>

                <!-- Apple Pay -->
                <input type="radio" id="applePay" name="paymentMethod" value="applePay"
                    class="text-indigo-500 focus:ring-indigo-500 h-4 w-4">
                <label for="applePay" class="ml-2 text-gray-600">Apple Pay</label>
            </div>
            <!-- Add more payment options as needed -->
        </div>



        {{-- Payment Summary --}}
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">Payment Summary</h2>

            <!-- Itemized List -->
            <div class="mb-4">
                <h3 class="text-lg font-semibold mb-2">Items</h3>
                <!-- Example: Display a list of items with quantities and prices -->
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

            <!-- Additional Charges -->
            <div class="mb-4">
                <h3 class="text-lg font-semibold mb-2">Additional Charges</h3>
                <!-- Example: Display additional charges like taxes or shipping -->
                <ul class="list-disc pl-4">
                    <li class="flex justify-between">
                        <span>Taxes</span>
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
                <p class="text-gray-600">Shipping:</p>
                <!-- Replace with dynamic data -->
                <p class="text-indigo-500">$5.00</p>
            </div>
            <div class="flex items-center justify-between mb-2">
                <p class="text-gray-600">Total:</p>
                <!-- Replace with dynamic data -->
                <p class="text-indigo-500 font-bold">$95.00</p>
            </div>

            <!-- Place Order Button -->
            <div class="mt-4">
                <button
                    class="bg-indigo-500 text-white px-4 py-2 rounded-full hover:bg-indigo-600 transition duration-300">
                    Place Order
                </button>
            </div>
        </div>




    </div>
</section>
