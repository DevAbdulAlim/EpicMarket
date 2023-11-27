<x-app-layout>


    {{-- Hero Section --}}
    <section class="bg-gray-800 text-white py-16">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Discover the Latest Trends</h1>
            <p class="text-lg">Shop our curated collection for the season's hottest styles.</p>
            <a href="#" class="mt-4 inline-block px-6 py-3 bg-indigo-500 text-white rounded-full">Explore Now</a>
        </div>
    </section>

    {{-- Featured Categories --}}
    <section class="py-12">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-2xl font-semibold mb-8">Featured Categories</h2>
            {{-- Add your category cards or content here --}}
        </div>
    </section>

    {{-- Featured Products --}}
    <section class="py-8">
        <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            {{-- Displaying Livewire Product Cards --}}
            <livewire:product-card />
        </div>
    </section>

    {{-- Newsletter Section --}}
    <section class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-2xl font-semibold mb-4">Subscribe to Our Newsletter</h2>
            <p class="text-gray-700 mb-6">Stay updated on the latest arrivals and exclusive offers!</p>
            <form action="#" method="post" class="flex justify-center">
                <input type="email" name="email" placeholder="Your Email" class="border rounded-l py-2 px-4 focus:outline-none">
                <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded-r">Subscribe</button>
            </form>
        </div>
    </section>
</x-app-layout>
