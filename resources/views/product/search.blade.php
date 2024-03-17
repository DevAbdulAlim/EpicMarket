<x-app-layout>
    <section class="py-8">
        <div class="flex mx-auto max-w-7xl">
            {{-- Filters Section --}}
            <div class="w-1/4 pr-8">
                {{-- Price Filter --}}
                <div class="mb-8">
                    <h3 class="mb-2 text-gray-600">Filter by Price:</h3>
                    <form action="{{ route('product.search') }}" method="GET">
                        <div class="flex items-center mb-4">
                            <input type="number" name="min_price" id="min_price" placeholder="Min"
                                class="w-16 p-1 text-sm text-center border rounded-md ">
                            <span class="mx-2">-</span>
                            <input type="number" name="max_price" id="max_price" placeholder="Max"
                                class="w-16 p-1 text-sm text-center border rounded-md ">
                            <button type="submit" class="p-1 ml-2 text-white bg-blue-500 rounded-md p">Apply</button>
                        </div>
                    </form>
                </div>

                {{-- Category Filter --}}
                <div class="mb-8">
                    <h3 class="mb-2 text-gray-600">Filter by Category:</h3>
                    <ul>
                        @foreach ($categories as $category)
                            <li>
                                <x-link
                                    href="{{ route('product.search', ['category' => $category->name]) }}">{{ $category->name }}</x-link>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            {{-- Search Results Section --}}
            <div class="w-3/4">
                <div class="flex items-center justify-between mb-6">
                    <div class="text-gray-600">{{ $products->total() }} items found</div>
                    {{-- Sorting --}}
                    <div class="flex items-center space-x-2">
                        <label for="sort" class="block text-gray-600">Sort by: </label>
                        <select id="sort" name="sort" class="text-sm border rounded-full ">
                            <option value="price-asc">Price Low to High</option>
                            <option value="price-desc">Price High to Low</option>
                            <!-- Add more sorting options as needed -->
                        </select>
                    </div>
                </div>

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
