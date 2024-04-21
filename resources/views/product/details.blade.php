<x-app-layout>
    <section class="py-8">
        <div class="mx-auto max-w-7xl">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                {{-- Product Image --}}
                <div>
                    <img src="/images/product.webp" alt="Product Image" class="w-full h-[550px] border rounded-lg">
                </div>

                {{-- Product Details --}}
                <div>
                    <h1 class="mb-4 text-3xl font-bold">{{ $product->name }}</h1>
                    <p class="mb-4 text-gray-600">{{ $product->description }}</p>

                    <div class="flex items-center mb-4">
                        @if ($product->discount > 0)
                            @php
                                $discountedPrice = number_format(
                                    $product->price - $product->price * ($product->discount / 100),
                                    2,
                                );
                            @endphp
                            <span class="mr-2 text-xl font-bold text-indigo-500">${{ $discountedPrice }}</span>
                        @endif

                        <span class="text-gray-500 line-through">${{ $product->price }}</span>
                    </div>


                    {{-- Add to Cart button --}}
                    <livewire:add-to-cart-button :productId="$product->id" :productName="$product->name" :productImage="''" :productPrice="$product->price"
                        :productStock="$product->stock" />



                </div>
            </div>
        </div>
    </section>

    <section class="py-8">
        <div class="mx-auto max-w-7xl">
            <livewire:product-review :productId="$product->id" />
        </div>
    </section>
</x-app-layout>
