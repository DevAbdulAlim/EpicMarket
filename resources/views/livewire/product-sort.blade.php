<div class="flex items-center justify-between mb-6">
    <div class="text-gray-600">{{ $total }} items found for</div>


    <div wire:loading>
        <div class="fixed top-0 left-0 w-full h-full flex items-center  justify-center z-50">
            <i class="fas fa-spinner fa-3x text-blue-500 animate-spin"></i>
        </div>
    </div>

    {{-- Sorting --}}
    <div class="flex items-center space-x-2">
        <label for="sort" class="block text-gray-600">Sort by: </label>
        <select id="sort" name="sort" class="text-sm border rounded-full" wire:model="sortValue"
            wire:change="handleSort">
            <option value="price-asc">Price Low to High</option>
            <option value="price-desc" selected>Price High to Low</option>
        </select>

    </div>

</div>
