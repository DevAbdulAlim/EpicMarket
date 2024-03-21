<div>
    {{-- Price Filter --}}
    <Button>Filter</Button>
    <div class="mb-8">
        <h3 class="mb-2 text-gray-600">Filter by Price:</h3>
        <form wire:submit="priceFilter" method="GET">
            <div class="flex items-center mb-4">
                <input type="number" wire:model="minPrice" id="min_price" min="0" placeholder="Min"
                    class="w-16 p-1 text-sm text-center border rounded-md ">
                <span class="mx-2">-</span>
                <input type="number" wire:model="maxPrice" id="max_price" min="0" placeholder="Max"
                    class="w-16 p-1 text-sm text-center border rounded-md ">
                <button type="submit" class="p-1 ml-2 text-white bg-blue-500 rounded-md">Apply</button>
            </div>
        </form>
    </div>

    {{-- Category Filter --}}
    <div class="mb-8">
        <h3 class="mb-2 text-gray-600">Filter by Category:</h3>
        <ul>
            @foreach ($categories as $category)
                <li>
                    <label class="flex items-center space-x-2">
                        <!-- Use the provided Blade component -->
                        <x-checkbox wire:click="updateSelectedCategories('{{ $category->name }}')" :checked="in_array($category->name, $selectedCategories)" />
                        <span
                            class="{{ in_array($category->name, $selectedCategories) ? 'font-bold text-blue-500' : '' }}">
                            {{ $category->name }}
                        </span>
                    </label>
                </li>
            @endforeach

        </ul>
    </div>
</div>
