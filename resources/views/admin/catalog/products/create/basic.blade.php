{{-- Basic Information Section with Complex Layout --}}
<fieldset class="border border-gray-300 p-6 rounded-md mb-6">
    <legend class="text-lg font-semibold text-gray-700 px-2">Basic Information</legend>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        {{-- Product Name --}}
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
            <input type="text" name="name" id="name"
                class="mt-1 block w-full border border-gray-300 p-2 rounded-md" placeholder="Enter product name"
                required>
        </div>

        {{-- Product Slug --}}
        <div class="mb-4">
            <label for="slug" class="block text-sm font-medium text-gray-700">Product Slug</label>
            <input type="text" name="slug" id="slug"
                class="mt-1 block w-full border border-gray-300 p-2 rounded-md" placeholder="Enter product slug">
        </div>

        {{-- SKU --}}
        <div class="mb-4">
            <label for="sku" class="block text-sm font-medium text-gray-700">SKU</label>
            <input type="text" name="sku" id="sku"
                class="mt-1 block w-full border border-gray-300 p-2 rounded-md" placeholder="Enter product SKU">
        </div>
        {{-- Tags --}}
        <div class="mb-4">
            <label for="tags" class="block text-sm font-medium text-gray-700">Tags (comma-separated)</label>
            <input type="text" name="tags" id="tags"
                class="mt-1 block w-full border border-gray-300 p-2 rounded-md" placeholder="Enter tags">
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
        {{-- Category --}}
        <div class="mb-4">
            <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
            <select id="category" name="category" class="mt-1 block w-full border border-gray-300 p-2 rounded-md">
                <option>Select Category</option>
                <option>Category 1</option>
                <option>Category 2</option>
                <option>Category 3</option>
            </select>
        </div>

        {{-- Brand --}}
        <div class="mb-4">
            <label for="brand" class="block text-sm font-medium text-gray-700">Brand</label>
            <select id="brand" name="brand" class="mt-1 block w-full border border-gray-300 p-2 rounded-md">
                <option>Select Brand</option>
                <option>Brand 1</option>
                <option>Brand 2</option>
                <option>Brand 3</option>
            </select>
        </div>


    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
        {{-- Primary Image --}}
        <div class="mb-4">
            <label for="primary_image" class="block text-sm font-medium text-gray-700">Primary Image</label>
            <input type="file" name="primary_image" id="primary_image"
                class="mt-1 block w-full border border-gray-300 p-2 rounded-md">
        </div>

        {{-- Gallery Images --}}
        <div class="mb-4">
            <label for="gallery_images" class="block text-sm font-medium text-gray-700">Gallery Images</label>
            <input type="file" name="gallery_images[]" id="gallery_images" multiple
                class="mt-1 block w-full border border-gray-300 p-2 rounded-md">
        </div>
    </div>

    <div class="grid grid-cols-1  gap-6 mt-4">
        {{-- Product Video URL --}}
        <div class="mb-4">
            <label for="video_url" class="block text-sm font-medium text-gray-700">Product Video URL</label>
            <input type="url" name="video_url" id="video_url"
                class="mt-1 block w-full border border-gray-300 p-2 rounded-md" placeholder="Enter video URL">
        </div>
    </div>

    <div class="grid grid-cols-1 gap-6 mt-4">
        {{-- Short Description --}}
        <div class="mb-4">
            <label for="short_description" class="block text-sm font-medium text-gray-700">Short Description</label>
            <textarea name="short_description" id="short_description" rows="4"
                class="mt-1 block w-full border border-gray-300 p-2 rounded-md" placeholder="Enter short description"></textarea>
        </div>
        {{-- Long Description --}}
        <div class="mb-4">
            <label for="long_description" class="block text-sm font-medium text-gray-700">Long Description</label>
            <textarea name="long_description" id="long_description" rows="6"
                class="mt-1 block w-full border border-gray-300 p-2 rounded-md" placeholder="Enter detailed product description"></textarea>
        </div>
    </div>
</fieldset>
