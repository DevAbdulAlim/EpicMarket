<x-app-layout>


    {{-- Hero Section --}}
    <section class="pt-20 px-4 text-gray-800 bg-green-100">
        <div class="container mx-auto space-x-8 flex flex-col lg:flex-row items-center justify-between px-4">
            <div class="lg:w-1/2 flex justify-center mb-6 lg:mb-0">
                <img src="images/hero-image.webp" alt="hero image" class="rounded-lg max-h-96">
            </div>
            <div class="lg:w-1/2 lg:text-left text-center">
                <h1 class="mb-4 text-4xl lg:text-5xl font-bold leading-tight">Fresh & Flavorful Groceries Await</h1>
                <p class="text-lg lg:text-xl mb-6">Explore our handpicked selection of the finest produce and essentials.
                </p>
                <a href="#"
                    class="inline-block px-8 py-4 mt-4 text-white bg-green-500 rounded-full hover:bg-green-600 transition duration-300">Start
                    Shopping</a>
            </div>
        </div>
    </section>


    {{-- Featured Categories --}}
    <section class="py-12 px-4">
        <div class="mx-auto max-w-7xl">
            <h2 class="mb-8 text-2xl font-semibold">Featured Categories</h2>
            {{-- Add your category cards or content here --}}
            <div class="grid grid-cols-6 gap-4">
                @foreach ($categories as $category)
                    <div class="p-4 bg-white rounded-md shadow">
                        <a href="{{ route('product.search', ['category' => $category->name]) }}"
                            class="hover:underline">{{ $category->name }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Featured Products --}}
    <section class="py-8 px-4">
        <div class="mx-auto max-w-7xl">
            <h2 class="mb-8 text-2xl font-semibold">Featured Products</h2>
            <div class="grid grid-cols-1 gap-8 mx-auto max-w-7xl sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                {{-- Displaying Livewire Product Cards --}}
                @foreach ($products as $product)
                    <x-product-card :product=$product />
                @endforeach

            </div>
        </div>
    </section>



    {{-- Newsletter Section --}}
    <section class="py-12 bg-gray-100">
        <div class="mx-auto text-center max-w-7xl">
            <h2 class="mb-4 text-2xl font-semibold">Subscribe to Our Newsletter</h2>
            <p class="mb-6 text-gray-700">Stay updated on the latest arrivals and exclusive offers!</p>
            <form action="#" method="post" class="flex justify-center">
                <input type="email" name="email" placeholder="Your Email"
                    class="px-4 py-2 border rounded-l focus:outline-none">
                <button type="submit" class="px-4 py-2 text-white bg-indigo-500 rounded-r">Subscribe</button>
            </form>
        </div>
    </section>
</x-app-layout>
