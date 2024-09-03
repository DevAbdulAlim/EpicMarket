<x-app-layout>
    <div class="container mx-auto py-10" x-data="{ step: 1, sameAsBilling: false }">
        <div class=" bg-white relative p-8 grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Form Section -->
            <div class="col-span-2">
                <!-- Checkout Header -->
                <h2 class="text-2xl text-center font-semibold mb-6">Checkout</h2>

                <!-- Step Indicator -->
                <div class="flex justify-between mb-6">
                    <div class="flex-1">
                        <div class="text-center">
                            <div :class="{ 'bg-blue-600 text-white': step === 1, 'bg-gray-200 text-gray-600': step !== 1 }"
                                class="w-8 h-8 rounded-full mx-auto flex items-center justify-center">1</div>
                            <p class="mt-2 text-sm text-gray-600">Billing Info</p>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="text-center">
                            <div :class="{ 'bg-blue-600 text-white': step === 2, 'bg-gray-200 text-gray-600': step !== 2 }"
                                class="w-8 h-8 rounded-full mx-auto flex items-center justify-center">2</div>
                            <p class="mt-2 text-sm text-gray-600">Shipping Info</p>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="text-center">
                            <div :class="{ 'bg-blue-600 text-white': step === 3, 'bg-gray-200 text-gray-600': step !== 3 }"
                                class="w-8 h-8 rounded-full mx-auto flex items-center justify-center">3</div>
                            <p class="mt-2 text-sm text-gray-600">Payment</p>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="text-center">
                            <div :class="{ 'bg-blue-600 text-white': step === 4, 'bg-gray-200 text-gray-600': step !== 4 }"
                                class="w-8 h-8 rounded-full mx-auto flex items-center justify-center">4</div>
                            <p class="mt-2 text-sm text-gray-600">Review</p>
                        </div>
                    </div>
                </div>

                <!-- Multi-Step Form -->
                <form method="POST" action="{{ route('checkout.process') }}">
                    @csrf

                    <!-- Step 1: Billing Information -->
                    <div x-show="step === 1" class="checkout-step">
                        <h3 class="text-lg font-semibold mb-4">Billing Information</h3>
                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <x-input label="First Name" name="billing_first_name" type="text" />
                            </div>
                            <div>
                                <x-input label="Last Name" name="billing_last_name" type="text" />
                            </div>
                            <div>
                                <x-input label="Email Address" name="billing_email" type="email" />
                            </div>
                            <div>
                                <x-input label="Phone Number" name="billing_phone" type="text" />
                            </div>
                            <div class="col-span-2">
                                <x-input label="Address" name="billing_address" type="text" />
                            </div>
                            <div>
                                <x-input label="City" name="billing_city" type="text" />
                            </div>
                            <div>
                                <x-input label="State/Province" name="billing_state" type="text" />
                            </div>
                            <div>
                                <x-input label="ZIP/Postal Code" name="billing_zip" type="text" />
                            </div>
                            <div>
                                <x-input label="Country" name="billing_country" type="text" />
                            </div>
                        </div>
                        <div class="flex justify-end mt-6">
                            <x-button type="button" variant="primary" size="lg" @click="step = 2">Next</x-button>
                        </div>
                    </div>

                    <!-- Step 2: Shipping Information -->
                    <div x-show="step === 2" class="checkout-step">
                        <h3 class="text-lg font-semibold mb-4">Shipping Information</h3>
                        <div class="flex items-center mb-4">
                            <input id="same_as_billing" type="checkbox" x-model="sameAsBilling"
                                class="h-4 w-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                            <label for="same_as_billing" class="ml-2 text-sm font-medium text-gray-700">Same as billing
                                address</label>
                        </div>

                        <!-- Conditional Shipping Form -->
                        <div x-show="!sameAsBilling" class="grid grid-cols-2 gap-6">
                            <div>
                                <x-input label="Recipient's Name" name="shipping_name" type="text" />
                            </div>
                            <div>
                                <x-input label="Recipient's Phone" name="shipping_phone" type="text" />
                            </div>
                            <div class="col-span-2">
                                <x-input label="Shipping Address" name="shipping_address" type="text" />
                            </div>
                            <div>
                                <x-input label="City" name="shipping_city" type="text" />
                            </div>
                            <div>
                                <x-input label="State/Province" name="shipping_state" type="text" />
                            </div>
                            <div>
                                <x-input label="ZIP/Postal Code" name="shipping_zip" type="text" />
                            </div>
                            <div>
                                <x-input label="Country" name="shipping_country" type="text" />
                            </div>
                        </div>

                        <div class="flex justify-between mt-6">
                            <x-button type="button" variant="secondary" size="lg"
                                @click="step = 1">Previous</x-button>
                            <x-button type="button" variant="primary" size="lg"
                                @click="step = 3">Next</x-button>
                        </div>
                    </div>

                    <!-- Step 3: Payment Method -->
                    <div x-show="step === 3" class="checkout-step">
                        <h3 class="text-lg font-semibold mb-4">Payment Method</h3>
                        <div class="space-y-4">
                            <x-radio id="credit_card" name="payment_method" value="credit_card" label="Credit Card"
                                checked />
                            <x-radio id="paypal" name="payment_method" value="paypal" label="PayPal" />
                        </div>
                        <div class="flex justify-between mt-6">
                            <x-button type="button" variant="secondary" size="lg"
                                @click="step = 2">Previous</x-button>
                            <x-button type="button" variant="primary" size="lg"
                                @click="step = 4">Next</x-button>
                        </div>
                    </div>

                    <!-- Step 4: Review Order -->
                    <div x-show="step === 4" class="checkout-step">
                        <h3 class="text-lg font-semibold mb-4">Review Order</h3>
                        <!-- Example review content -->
                        <div class="border-t border-b py-4 mb-4">
                            <p class="text-gray-600">Product 1: $20.00</p>
                            <p class="text-gray-600">Product 2: $15.00</p>
                            <p class="text-gray-600">Shipping: $5.00</p>
                            <p class="font-bold text-gray-800 mt-2">Total: $40.00</p>
                        </div>
                        <div class="flex justify-between mt-6">
                            <x-button type="button" variant="secondary" size="lg"
                                @click="step = 3">Previous</x-button>
                            <x-button type="submit" variant="primary" size="lg">Place Order</x-button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Summary Section -->
            <div class="col-span-1  right-0">
                <div class="bg-gray-100  p-6 rounded-lg">
                    <h3 class="text-lg font-semibold mb-4">Order Summary</h3>
                    <!-- Example summary content -->
                    <div class="border-b pb-4 mb-4">
                        <p class="text-gray-600">Product 1: $20.00</p>
                        <p class="text-gray-600">Product 2: $15.00</p>
                        <p class="text-gray-600">Shipping: $5.00</p>
                    </div>
                    <div class="flex justify-between font-bold text-gray-800">
                        <p>Total:</p>
                        <p>$40.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
