<x-app-layout>
    <section class="py-8 px-4">
        <div class="flex mx-auto max-w-7xl">
            {{-- Filters Section --}}
                <livewire:product-filters />
            {{-- Search Results Section --}}
            <div class="w-full lg:w-3/4">
                <livewire:product-sort :total="$products->total()" />

                {{-- Search Results --}}
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 ">
                    <!-- Product Cards -->
                    @foreach ($products as $product)
                        <x-product-card :product=$product />
                    @endforeach
                </div>

                {{-- Pagination --}}
                <div class="mt-8">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
