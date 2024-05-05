<div class="flex items-center justify-between mb-6">
    <div class="flex items-center space-x-2">
        <!-- Filter Icon -->
       <div class="lg:hidden"> <i class="fas fa-filter text-gray-600" @click="$dispatch('open-filter')"></i></div>


        <!-- Total Items Found -->
        <div class="text-gray-600">{{ $total }} items found for</div>

        <!-- Loading Spinner -->
        <div wire:loading>
            <div class="fixed top-0 left-0 w-full h-full flex items-center justify-center z-50">
                <i class="fas fa-spinner fa-3x text-blue-500 animate-spin"></i>
            </div>
        </div>
    </div>

    <!-- Sorting Dropdown -->
    <div class="flex items-center space-x-2">
        <label for="sort" class="block text-gray-600">Sort by: </label>
        <select id="sort" name="sort" class="text-sm border rounded-full focus:outline-none focus:ring-0 px-4 py-2" wire:model="sortValue" wire:change="handleSort">
            <option value="price-asc">Price Low to High</option>
            <option value="price-desc" selected>Price High to Low</option>
        </select>
    </div>
</div>
