<x-app-layout>


    {{-- Hero Section --}}
    <section class="pt-20 px-4 text-gray-800 bg-green-100">
        <div class="container mx-auto space-x-8 flex flex-col lg:flex-row items-center justify-between px-4">
            <div class="lg:w-1/2 flex justify-center mb-6 lg:mb-0">
                <img src="images/hero-image.webp" alt="hero image" class="rounded-lg max-h-96">
            </div>
            <div class="lg:w-1/2 lg:text-left py-5 md:py-0 text-center">
                <h1 class="mb-4 text-4xl lg:text-5xl font-bold leading-tight"><span class="text-green-500">Fresh</span> &
                    Flavorful Groceries Await</h1>
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
        <div class="text-center mb-8">
            <h2 class="text-3xl font-semibold mb-2">Featured Categories</h2>
            <p class="text-gray-600">Explore our curated selection</p>
        </div>
        <!-- Add your category cards or content here -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
            @foreach ($categories as $category)
            <div class="relative group">
                <div class="overflow-hidden text-center bg-white rounded-xl">
                    <a href="{{ route('product.search', ['category' => $category->name]) }}" class="block relative overflow-hidden">
                        <div class="h-40 bg-cover bg-center rounded-md" style="background-image: url('{{ asset('/images/categories/' . $category->image) }}');" aria-label="{{ $category->name }}">
                            <div class="absolute inset-0 bg-green-500 opacity-10 group-hover:opacity-80"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="text-white text-lg font-semibold hidden group-hover:block">{{ $category->name }}</span>
                            </div>
                        </div>
                    </a>
                    <span class="text-lg font-semibold group-hover:hidden">{{ $category->name }}</span>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-8">
            <a href="#" class="inline-block px-6 py-3 bg-green-500 text-white rounded-md hover:bg-green-600 transition duration-300">See More</a>
        </div>
    </div>
</section>



    {{-- Featured Products --}}
    <section class="py-8 px-4">
        <div class="mx-auto max-w-7xl">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-semibold mb-2">Featured Products</h2>
                <p class="text-gray-600">Check out our top picks</p>
            </div>
            <div class="grid grid-cols-1 gap-8 mx-auto max-w-7xl sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                {{-- Displaying Livewire Product Cards --}}
                @foreach ($products as $product)
                    <x-product-card :product=$product />
                @endforeach
            </div>
            <div class="text-center mt-8">
                <a href="#"
                    class="inline-block px-6 py-3 bg-green-500 text-white rounded-md hover:bg-green-600 transition duration-300">See
                    More</a>
            </div>
        </div>
    </section>


    @include('partials.why-us');

    @include('partials.recent-post')




</x-app-layout>
