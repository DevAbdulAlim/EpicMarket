{{-- Basic Information Section with Complex Layout --}}
<fieldset class="border border-gray-300 p-6 rounded-md mb-6">
    <legend class="text-lg font-semibold text-gray-700 px-2">Basic Information</legend>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        {{-- Product Name --}}
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
            <input type="text" wire:model.defer="basicInfo.name" id="name" @class([
                'mt-1 block w-full border p-2 rounded-md',
                'border-red-500' => $errors->has('basicInfo.name'),
                'border-gray-300' => !$errors->has('basicInfo.name'),
            ])
                placeholder="Enter product name" required>
            @error('basicInfo.name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        {{-- Product Slug --}}
        <div class="mb-4">
            <label for="slug" class="block text-sm font-medium text-gray-700">Product Slug</label>
            <input type="text" wire:model.defer="basicInfo.slug" id="slug" @class([
                'mt-1 block w-full border p-2 rounded-md',
                'border-red-500' => $errors->has('basicInfo.slug'),
                'border-gray-300' => !$errors->has('basicInfo.slug'),
            ])
                placeholder="Enter product slug">
            @error('basicInfo.slug')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        {{-- SKU --}}
        <div class="mb-4">
            <label for="sku" class="block text-sm font-medium text-gray-700">SKU</label>
            <input type="text" wire:model.defer="basicInfo.sku" id="sku" @class([
                'mt-1 block w-full border p-2 rounded-md',
                'border-red-500' => $errors->has('basicInfo.sku'),
                'border-gray-300' => !$errors->has('basicInfo.sku'),
            ])
                placeholder="Enter product SKU">
            @error('basicInfo.sku')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        {{-- Tags --}}
        <div class="mb-4">
            <label for="tags" class="block text-sm font-medium text-gray-700">Tags (comma-separated)</label>
            <input type="text" wire:model.defer="basicInfo.tags" id="tags" @class([
                'mt-1 block w-full border p-2 rounded-md',
                'border-red-500' => $errors->has('basicInfo.tags'),
                'border-gray-300' => !$errors->has('basicInfo.tags'),
            ])
                placeholder="Enter tags">
            @error('basicInfo.tags')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
        {{-- Category --}}
        <div class="mb-4">
            <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
            <select wire:model.defer="basicInfo.category" id="category" @class([
                'mt-1 block w-full border p-2 rounded-md',
                'border-red-500' => $errors->has('basicInfo.category'),
                'border-gray-300' => !$errors->has('basicInfo.category'),
            ])>
                <option value="">Select Category</option>
                <option value="Category 1">Category 1</option>
                <option value="Category 2">Category 2</option>
                <option value="Category 3">Category 3</option>
            </select>
            @error('basicInfo.category')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        {{-- Brand --}}
        <div class="mb-4">
            <label for="brand" class="block text-sm font-medium text-gray-700">Brand</label>
            <select wire:model.defer="basicInfo.brand" id="brand" @class([
                'mt-1 block w-full border p-2 rounded-md',
                'border-red-500' => $errors->has('basicInfo.brand'),
                'border-gray-300' => !$errors->has('basicInfo.brand'),
            ])>
                <option value="">Select Brand</option>
                <option value="Brand 1">Brand 1</option>
                <option value="Brand 2">Brand 2</option>
                <option value="Brand 3">Brand 3</option>
            </select>
            @error('basicInfo.brand')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
        {{-- Primary Image --}}
        <div class="mb-4">
            <label for="primary_image" class="block text-sm font-medium text-gray-700">Primary Image</label>
            <input type="file" wire:model="basicInfo.primary_image" id="primary_image" @class([
                'mt-1 block w-full border p-2 rounded-md',
                'border-red-500' => $errors->has('basicInfo.primary_image'),
                'border-gray-300' => !$errors->has('basicInfo.primary_image'),
            ])>
            @error('basicInfo.primary_image')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        {{-- Gallery Images --}}
        <div class="mb-4">
            <label for="gallery_images" class="block text-sm font-medium text-gray-700">Gallery Images</label>
            <input type="file" wire:model="basicInfo.gallery_images" multiple id="gallery_images"
                @class([
                    'mt-1 block w-full border p-2 rounded-md',
                    'border-red-500' => $errors->has('basicInfo.gallery_images.*'),
                    'border-gray-300' => !$errors->has('basicInfo.gallery_images.*'),
                ])>
            @error('basicInfo.gallery_images.*')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="grid grid-cols-1 gap-6 mt-4">
        {{-- Short Description --}}
        <div class="mb-4">
            <label for="short_description" class="block text-sm font-medium text-gray-700">Short Description</label>
            <textarea wire:model.defer="basicInfo.short_description" id="short_description" rows="4"
                @class([
                    'mt-1 block w-full border p-2 rounded-md',
                    'border-red-500' => $errors->has('basicInfo.short_description'),
                    'border-gray-300' => !$errors->has('basicInfo.short_description'),
                ]) placeholder="Enter short description"></textarea>
            @error('basicInfo.short_description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        {{-- Long Description --}}
        <div class="mb-4">
            <label for="long_description" class="block text-sm font-medium text-gray-700">Long Description</label>
            <textarea wire:model.defer="basicInfo.long_description" id="long_description" rows="6"
                @class([
                    'mt-1 block w-full border p-2 rounded-md',
                    'border-red-500' => $errors->has('basicInfo.long_description'),
                    'border-gray-300' => !$errors->has('basicInfo.long_description'),
                ]) placeholder="Enter detailed product description"></textarea>
            @error('basicInfo.long_description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>
</fieldset>
