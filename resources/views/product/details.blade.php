<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Details') }}
        </h2>
    </x-slot>

    <section class="py-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Product Image --}}
                <div>
                    <img src="product-image.jpg" alt="Product Image" class="w-full h-auto rounded-lg">
                </div>

                {{-- Product Details --}}
                <div>
                    <h1 class="text-3xl font-bold mb-4">Gorgeous Product Name</h1>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                    <div class="flex items-center mb-4">
                        <p class="text-xl font-bold text-indigo-500 mr-2">$49.99</p>
                        <span class="text-gray-500 line-through">$69.99</span>
                    </div>

                    {{-- Product Variants, Add to Cart, etc. --}}
                    <div class="flex items-center space-x-4 mb-4">
                        {{-- Product Variants dropdown or options --}}
                        <select class="border rounded py-2 px-4 focus:outline-none">
                            <option selected>Size: Medium</option>
                            <option>Size: Large</option>
                            <option>Size: XL</option>
                        </select>

                        {{-- Add to Cart button --}}
                        <button class="bg-indigo-500 text-white py-2 px-4 rounded-full">Add to Cart</button>
                    </div>

                    {{-- Product Description --}}
                    <h2 class="text-xl font-semibold mb-2">Product Description</h2>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
