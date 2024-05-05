<div x-data="{sidebarOpen : @entangle('sidebarOpen')}" x-bind:class="{'block': sidebarOpen, 'hidden': !sidebarOpen}"
@open-filter.window="window.alert('hi')"
class="relative lg:block lg:w-1/4 pr-8"   @click.outside="sidebarOpen = false">
    <div wire:loading  class="fixed">
        <div class="fixed top-0 left-0 w-full h-full flex items-center  justify-center z-50">
            <i class="fas fa-spinner fa-3x text-green-500 animate-spin"></i>
        </div>
    </div>

    <div x-bind:class="{'fixed h-full shadow-md z-30 p-4 top-0 left-0 bg-white' : sidebarOpen}">
        <button wire:click="closeFilter" class="absolute top-4 right-4 lg:hidden focus:outline-none">
            <i class="fas fa-times text-gray-600"></i>
        </button>

        {{-- Price Filter --}}
        <div class="mb-8">
            <h3 class="mb-2 text-gray-600">Filter by Price:</h3>
            <form wire:submit.prevent="priceFilter" method="GET">
                <div class="flex items-center mb-4">
                    <x-input type="number" wire:model="minPrice" id="min_price" min="0" placeholder="Min"
                        class="w-16 p-1 text-sm text-center border rounded-md " />
                    <span class="mx-2">-</span>
                    <x-input type="number" wire:model="maxPrice" id="max_price" min="0" placeholder="Max"
                        class="w-16 p-1 text-sm text-center border rounded-md " />
                    <button type="submit" class="p-1 ml-2 text-white bg-green-500 rounded-md">Apply</button>
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
                                class="{{ in_array($category->name, $selectedCategories) ? 'font-bold text-green-500' : '' }}">
                                {{ $category->name }}
                            </span>
                        </label>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
</div>
