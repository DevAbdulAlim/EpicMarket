<div class="flex items-center justify-between mb-6">
    <div class="text-gray-600">{{ $total }} items found for</div>
    {{-- Sorting --}}
    <div class="flex items-center space-x-2">
        <label for="sort" class="block text-gray-600">Sort by: </label>
        <select id="sort" name="sort" class="text-sm border rounded-full" wire:model="sortValue"
            wire:change="handleSort">
            <option value="price-asc">Price Low to High</option>
            <option value="price-desc">Price High to Low</option>
        </select>
    </div>
</div>
