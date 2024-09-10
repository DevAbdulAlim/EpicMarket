{{-- Advanced Product Settings Section --}}
<fieldset class="border border-gray-300 p-6 rounded-md mb-6" x-data="{ published: true, reviewsEnabled: true }">
    <legend class="text-lg font-semibold text-gray-700 px-2">Advanced Product Settings</legend>

    {{-- Product Visibility & Status --}}
    <div class="bg-gray-50 p-4 mb-6 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Product Visibility & Status</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Product Visibility --}}
            <div class="mb-4">
                <label for="visibility" class="block text-sm font-medium text-gray-700">Product Visibility</label>
                <select id="visibility" name="visibility"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md">
                    <option value="public">Public</option>
                    <option value="private">Private</option>
                    <option value="password_protected">Password Protected</option>
                </select>
            </div>

            {{-- Published/Unpublished --}}
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="published" id="published" x-model="published"
                    class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label for="published" class="ml-2 block text-sm font-medium text-gray-700">Published</label>
            </div>

            {{-- Featured Product --}}
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="featured" id="featured"
                    class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label for="featured" class="ml-2 block text-sm font-medium text-gray-700">Featured Product</label>
            </div>

            {{-- New Product --}}
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="new_product" id="new_product"
                    class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label for="new_product" class="ml-2 block text-sm font-medium text-gray-700">Mark as New
                    Product</label>
            </div>

            {{-- Best Selling --}}
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="best_selling" id="best_selling"
                    class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label for="best_selling" class="ml-2 block text-sm font-medium text-gray-700">Best Selling</label>
            </div>

            {{-- Custom Product Status --}}
            <div class="mb-4">
                <label for="custom_status" class="block text-sm font-medium text-gray-700">Custom Product Status</label>
                <input type="text" name="custom_status" id="custom_status"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md"
                    placeholder="e.g., Pre-order, Limited Edition">
            </div>
        </div>
    </div>

    {{-- Product Reviews & Ratings --}}
    <div class="bg-gray-50 p-4 mb-6 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Product Reviews & Ratings</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Enable Reviews --}}
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="enable_reviews" id="enable_reviews" x-model="reviewsEnabled"
                    class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label for="enable_reviews" class="ml-2 block text-sm font-medium text-gray-700">Enable Reviews</label>
            </div>

            {{-- Enable Star Ratings --}}
            <div class="mb-4 flex items-center" x-show="reviewsEnabled">
                <input type="checkbox" name="enable_ratings" id="enable_ratings"
                    class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label for="enable_ratings" class="ml-2 block text-sm font-medium text-gray-700">Enable Star
                    Ratings</label>
            </div>
        </div>
    </div>

    {{-- Product Condition --}}
    <div class="bg-gray-50 p-4 mb-6 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Product Condition</h2>
        <div class="mb-4">
            <label for="product_condition" class="block text-sm font-medium text-gray-700">Product Condition</label>
            <select id="product_condition" name="product_condition"
                class="mt-1 block w-full border border-gray-300 p-2 rounded-md">
                <option value="new">New</option>
                <option value="refurbished">Refurbished</option>
                <option value="used">Used</option>
            </select>
        </div>
    </div>

    {{-- Warranty & Return Policy --}}
    <div class="bg-gray-50 p-4 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Warranty & Return Policy</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Warranty Information --}}
            <div class="mb-4">
                <label for="warranty_info" class="block text-sm font-medium text-gray-700">Warranty Information</label>
                <textarea name="warranty_info" id="warranty_info" rows="3"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md" placeholder="Enter warranty details or documents"></textarea>
            </div>

            {{-- Return Policy --}}
            <div class="mb-4">
                <label for="return_policy" class="block text-sm font-medium text-gray-700">Return Policy</label>
                <textarea name="return_policy" id="return_policy" rows="3"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md" placeholder="Enter return policy for the product"></textarea>
            </div>
        </div>
    </div>

</fieldset>
