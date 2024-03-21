<x-app-layout>
    <section class="py-8">
        <div class="flex mx-auto max-w-7xl">
            {{-- Filters Section --}}
            <div class="w-1/4 pr-8">
                <livewire:product-filters />
            </div>
            {{-- Search Results Section --}}
            <div class="w-3/4">
                <livewire:product-sort :total="$products->total()" />

                {{-- Search Results --}}
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
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
