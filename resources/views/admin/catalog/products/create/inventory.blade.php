{{-- Pricing & Inventory Section with Complex Layout and Alpine.js --}}
<fieldset class="border border-gray-300 p-6 rounded-md mb-6" x-data="{ downloadable: false, manageStock: false, taxable: true }">
    <legend class="text-lg font-semibold text-gray-700 px-2">Pricing & Inventory</legend>

    {{-- Pricing Section --}}
    <div class="bg-gray-50 p-4 mb-6 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Pricing</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Regular Price --}}
            <div class="mb-4">
                <label for="regular_price" class="block text-sm font-medium text-gray-700">Regular Price</label>
                <input type="number" name="regular_price" id="regular_price"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md" placeholder="Enter regular price">
            </div>

            {{-- Sale Price --}}
            <div class="mb-4">
                <label for="sale_price" class="block text-sm font-medium text-gray-700">Sale Price</label>
                <input type="number" name="sale_price" id="sale_price"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md" placeholder="Enter sale price">
            </div>

            {{-- Discount Price --}}
            <div class="mb-4">
                <label for="discount_price" class="block text-sm font-medium text-gray-700">Discount Price</label>
                <input type="number" name="discount_price" id="discount_price"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md" placeholder="Enter discount price">
            </div>

            {{-- Cost Price --}}
            <div class="mb-4">
                <label for="cost_price" class="block text-sm font-medium text-gray-700">Cost Price</label>
                <input type="number" name="cost_price" id="cost_price"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md" placeholder="Enter cost price">
            </div>
        </div>
    </div>

    {{-- Tax Section --}}
    <div class="bg-gray-50 p-4 mb-6 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Tax Settings</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Tax Status --}}
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="tax_status" id="tax_status" x-model="taxable"
                    class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label for="tax_status" class="ml-2 block text-sm font-medium text-gray-700">Taxable</label>
            </div>

            {{-- Tax Class (Only show if Taxable) --}}
            <div class="mb-4" x-show="taxable">
                <label for="tax_class" class="block text-sm font-medium text-gray-700">Tax Class</label>
                <select id="tax_class" name="tax_class" class="mt-1 block w-full border border-gray-300 p-2 rounded-md">
                    <option value="standard">Standard</option>
                    <option value="reduced">Reduced</option>
                    <option value="zero">Zero</option>
                </select>
            </div>
        </div>
    </div>

    {{-- Stock Management Section --}}
    <div class="bg-gray-50 p-4 mb-6 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Stock Management</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Manage Stock Checkbox --}}
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="manage_stock" id="manage_stock" x-model="manageStock"
                    class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label for="manage_stock" class="ml-2 block text-sm font-medium text-gray-700">Manage Stock</label>
            </div>

            {{-- Allow Backorders Checkbox (Show when manage stock is enabled) --}}
            <div class="mb-4 flex items-center" x-show="manageStock">
                <input type="checkbox" name="allow_backorders" id="allow_backorders"
                    class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label for="allow_backorders" class="ml-2 block text-sm font-medium text-gray-700">Allow
                    Backorders</label>
            </div>

            {{-- Stock Status (Show when manage stock is enabled) --}}
            <div class="mb-4" x-show="manageStock">
                <label for="stock_status" class="block text-sm font-medium text-gray-700">Stock Status</label>
                <select id="stock_status" name="stock_status"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md">
                    <option value="in_stock">In Stock</option>
                    <option value="out_of_stock">Out of Stock</option>
                    <option value="backorder">Backorder</option>
                </select>
            </div>

            {{-- Stock Quantity (Show when manage stock is enabled) --}}
            <div class="mb-4" x-show="manageStock">
                <label for="stock_quantity" class="block text-sm font-medium text-gray-700">Stock Quantity</label>
                <input type="number" name="stock_quantity" id="stock_quantity"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md" placeholder="Enter stock quantity">
            </div>

            {{-- Low Stock Threshold (Show when manage stock is enabled) --}}
            <div class="mb-4" x-show="manageStock">
                <label for="low_stock_threshold" class="block text-sm font-medium text-gray-700">Low Stock
                    Threshold</label>
                <input type="number" name="low_stock_threshold" id="low_stock_threshold"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md"
                    placeholder="Enter low stock threshold">
            </div>

            {{-- Stock Reservation (Show when manage stock is enabled) --}}
            <div class="mb-4" x-show="manageStock">
                <label for="stock_reservation" class="block text-sm font-medium text-gray-700">Stock Reservation
                    (minutes)</label>
                <input type="number" name="stock_reservation" id="stock_reservation"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md"
                    placeholder="Enter reservation time">
            </div>
        </div>
    </div>

    {{-- Downloadable Products Section --}}
    <div class="bg-gray-50 p-4 mb-6 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Downloadable Products</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Downloadable Product Checkbox --}}
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="downloadable_product" id="downloadable_product" x-model="downloadable"
                    class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label for="downloadable_product" class="ml-2 block text-sm font-medium text-gray-700">Downloadable
                    Product</label>
            </div>

            {{-- Downloadable Files (Show when downloadable is enabled) --}}
            <div class="mb-4" x-show="downloadable">
                <label for="downloadable_files" class="block text-sm font-medium text-gray-700">Downloadable
                    Files</label>
                <input type="file" name="downloadable_files[]" id="downloadable_files" multiple
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md">
            </div>

            {{-- Expiration Date for Download --}}
            <div class="mb-4" x-show="downloadable">
                <label for="download_expiration" class="block text-sm font-medium text-gray-700">Download Expiration
                    (days)</label>
                <input type="number" name="download_expiration" id="download_expiration"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md"
                    placeholder="Enter expiration period">
            </div>

            {{-- Download Limit --}}
            <div class="mb-4" x-show="downloadable">
                <label for="download_limit" class="block text-sm font-medium text-gray-700">Download Limit</label>
                <input type="number" name="download_limit" id="download_limit"
                    class="mt-1 block w-full border border-gray-300 p-2 rounded-md"
                    placeholder="Enter download limit">
            </div>
        </div>
    </div>

    {{-- Virtual Products Section --}}
    <div class="bg-gray-50 p-4 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Virtual Product</h2>
        <div class="flex items-center">
            <input type="checkbox" name="virtual_product" id="virtual_product"
                class="h-4 w-4 text-blue-600 border-gray-300 rounded">
            <label for="virtual_product" class="ml-2 block text-sm font-medium text-gray-700">This is a virtual
                product</label>
        </div>
    </div>
</fieldset>
