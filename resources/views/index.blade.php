<x-app-layout>


    {{-- Hero Section --}}
    <section class="py-16 text-white bg-gray-800">
        <div class="mx-auto text-center max-w-7xl">
            <h1 class="mb-4 text-4xl font-bold">Discover the Latest Trends</h1>
            <p class="text-lg">Shop our curated collection for the season's hottest styles.</p>
            <a href="#" class="inline-block px-6 py-3 mt-4 text-white bg-indigo-500 rounded-full">Explore Now</a>
        </div>
    </section>

    {{-- Featured Categories --}}
    <section class="py-12">
        <div class="mx-auto max-w-7xl">
            <h2 class="mb-8 text-2xl font-semibold">Featured Categories</h2>
            {{-- Add your category cards or content here --}}
            <div class="grid grid-cols-6 gap-4">
                @foreach ($categories as $category)
                    <div class="p-4 bg-white rounded-md shadow">
                        <h3>{{ $category->name }}</h3>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Featured Products --}}
    <section class="py-8">
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
