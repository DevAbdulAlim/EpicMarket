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
                <input type="number" wire:model.defer="inventory.regular_price" id="regular_price"
                    @class([
                        'mt-1 block w-full border p-2 rounded-md',
                        'border-red-500' => $errors->has('inventory.regular_price'),
                        'border-gray-300' => !$errors->has('inventory.regular_price'),
                    ]) placeholder="Enter regular price">
                @error('inventory.regular_price')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Sale Price --}}
            <div class="mb-4">
                <label for="sale_price" class="block text-sm font-medium text-gray-700">Sale Price</label>
                <input type="number" wire:model.defer="inventory.sale_price" id="sale_price"
                    @class([
                        'mt-1 block w-full border p-2 rounded-md',
                        'border-red-500' => $errors->has('inventory.sale_price'),
                        'border-gray-300' => !$errors->has('inventory.sale_price'),
                    ]) placeholder="Enter sale price">
                @error('inventory.sale_price')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Discount Price --}}
            <div class="mb-4">
                <label for="discount_price" class="block text-sm font-medium text-gray-700">Discount Price</label>
                <input type="number" wire:model.defer="inventory.discount_price" id="discount_price"
                    @class([
                        'mt-1 block w-full border p-2 rounded-md',
                        'border-red-500' => $errors->has('inventory.discount_price'),
                        'border-gray-300' => !$errors->has('inventory.discount_price'),
                    ]) placeholder="Enter discount price">
                @error('inventory.discount_price')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Cost Price --}}
            <div class="mb-4">
                <label for="cost_price" class="block text-sm font-medium text-gray-700">Cost Price</label>
                <input type="number" wire:model.defer="inventory.cost_price" id="cost_price"
                    @class([
                        'mt-1 block w-full border p-2 rounded-md',
                        'border-red-500' => $errors->has('inventory.cost_price'),
                        'border-gray-300' => !$errors->has('inventory.cost_price'),
                    ]) placeholder="Enter cost price">
                @error('inventory.cost_price')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    {{-- Tax Section --}}
    <div class="bg-gray-50 p-4 mb-6 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Tax Settings</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Tax Status --}}
            <div class="mb-4 flex items-center">
                <input type="checkbox" wire:model="inventory.taxable" name="tax_status" id="tax_status"
                    x-model="taxable" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label for="tax_status" class="ml-2 block text-sm font-medium text-gray-700">Taxable</label>
            </div>

            {{-- Tax Class (Only show if Taxable) --}}
            <div class="mb-4" x-show="taxable">
                <label for="tax_class" class="block text-sm font-medium text-gray-700">Tax Class</label>
                <select wire:model.defer="inventory.tax_class" id="tax_class" @class([
                    'mt-1 block w-full border p-2 rounded-md',
                    'border-red-500' => $errors->has('inventory.tax_class'),
                    'border-gray-300' => !$errors->has('inventory.tax_class'),
                ])>
                    <option value="standard">Standard</option>
                    <option value="reduced">Reduced</option>
                    <option value="zero">Zero</option>
                </select>
                @error('inventory.tax_class')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    {{-- Stock Management Section --}}
    <div class="bg-gray-50 p-4 mb-6 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Stock Management</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Manage Stock Checkbox --}}
            <div class="mb-4 flex items-center">
                <input type="checkbox" wire:model="inventory.manage_stock" id="manage_stock" x-model="manageStock"
                    class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label for="manage_stock" class="ml-2 block text-sm font-medium text-gray-700">Manage Stock</label>
            </div>

            {{-- Allow Backorders Checkbox (Show when manage stock is enabled) --}}
            <div class="mb-4 flex items-center" x-show="manageStock">
                <input type="checkbox" wire:model.defer="inventory.allow_backorders" id="allow_backorders"
                    class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label for="allow_backorders" class="ml-2 block text-sm font-medium text-gray-700">Allow
                    Backorders</label>
            </div>

            {{-- Stock Status (Show when manage stock is enabled) --}}
            <div class="mb-4" x-show="manageStock">
                <label for="stock_status" class="block text-sm font-medium text-gray-700">Stock Status</label>
                <select wire:model.defer="inventory.stock_status" id="stock_status" @class([
                    'mt-1 block w-full border p-2 rounded-md',
                    'border-red-500' => $errors->has('inventory.stock_status'),
                    'border-gray-300' => !$errors->has('inventory.stock_status'),
                ])>
                    <option value="in_stock">In Stock</option>
                    <option value="out_of_stock">Out of Stock</option>
                    <option value="backorder">Backorder</option>
                </select>
                @error('inventory.stock_status')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Stock Quantity (Show when manage stock is enabled) --}}
            <div class="mb-4" x-show="manageStock">
                <label for="stock_quantity" class="block text-sm font-medium text-gray-700">Stock Quantity</label>
                <input type="number" wire:model.defer="inventory.stock_quantity" id="stock_quantity"
                    @class([
                        'mt-1 block w-full border p-2 rounded-md',
                        'border-red-500' => $errors->has('inventory.stock_quantity'),
                        'border-gray-300' => !$errors->has('inventory.stock_quantity'),
                    ]) placeholder="Enter stock quantity">
                @error('inventory.stock_quantity')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Low Stock Threshold (Show when manage stock is enabled) --}}
            <div class="mb-4" x-show="manageStock">
                <label for="low_stock_threshold" class="block text-sm font-medium text-gray-700">Low Stock
                    Threshold</label>
                <input type="number" wire:model.defer="inventory.low_stock_threshold" id="low_stock_threshold"
                    @class([
                        'mt-1 block w-full border p-2 rounded-md',
                        'border-red-500' => $errors->has('inventory.low_stock_threshold'),
                        'border-gray-300' => !$errors->has('inventory.low_stock_threshold'),
                    ]) placeholder="Enter low stock threshold">
                @error('inventory.low_stock_threshold')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Stock Reservation (Show when manage stock is enabled) --}}
            <div class="mb-4" x-show="manageStock">
                <label for="stock_reservation" class="block text-sm font-medium text-gray-700">Stock Reservation
                    (minutes)</label>
                <input type="number" wire:model.defer="inventory.stock_reservation" id="stock_reservation"
                    @class([
                        'mt-1 block w-full border p-2 rounded-md',
                        'border-red-500' => $errors->has('inventory.stock_reservation'),
                        'border-gray-300' => !$errors->has('inventory.stock_reservation'),
                    ]) placeholder="Enter reservation time">
                @error('inventory.stock_reservation')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    {{-- Downloadable Products Section --}}
    <div class="bg-gray-50 p-4 mb-6 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Downloadable Products</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Downloadable Product Checkbox --}}
            <div class="mb-4 flex items-center">
                <input type="checkbox" wire:model="inventory.downloadable" id="downloadable_product"
                    x-model="downloadable" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label for="downloadable_product" class="ml-2 block text-sm font-medium text-gray-700">Downloadable
                    Product</label>
            </div>

            {{-- Downloadable Files (Show when downloadable is enabled) --}}
            <div class="mb-4" x-show="downloadable">
                <label for="downloadable_files" class="block text-sm font-medium text-gray-700">Downloadable
                    Files</label>
                <input type="file" wire:model="inventory.downloadable_files" multiple id="downloadable_files"
                    @class([
                        'mt-1 block w-full border p-2 rounded-md',
                        'border-red-500' => $errors->has('inventory.downloadable_files.*'),
                        'border-gray-300' => !$errors->has('inventory.downloadable_files.*'),
                    ])>
                @error('inventory.downloadable_files.*')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Expiration Date for Download --}}
            <div class="mb-4" x-show="downloadable">
                <label for="download_expiration" class="block text-sm font-medium text-gray-700">Download Expiration
                    (days)</label>
                <input type="number" wire:model.defer="inventory.download_expiration" id="download_expiration"
                    @class([
                        'mt-1 block w-full border p-2 rounded-md',
                        'border-red-500' => $errors->has('inventory.download_expiration'),
                        'border-gray-300' => !$errors->has('inventory.download_expiration'),
                    ]) placeholder="Enter expiration period">
                @error('inventory.download_expiration')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Download Limit --}}
            <div class="mb-4" x-show="downloadable">
                <label for="download_limit" class="block text-sm font-medium text-gray-700">Download Limit</label>
                <input type="number" wire:model.defer="inventory.download_limit" id="download_limit"
                    @class([
                        'mt-1 block w-full border p-2 rounded-md',
                        'border-red-500' => $errors->has('inventory.download_limit'),
                        'border-gray-300' => !$errors->has('inventory.download_limit'),
                    ]) placeholder="Enter download limit">
                @error('inventory.download_limit')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    {{-- Virtual Products Section --}}
    <div class="bg-gray-50 p-4 rounded-md border border-gray-200 shadow-sm">
        <h2 class="text-md font-semibold text-gray-600 mb-3">Virtual Product</h2>
        <div class="flex items-center">
            <input type="checkbox" wire:model="inventory.virtual_product" id="virtual_product"
                class="h-4 w-4 text-blue-600 border-gray-300 rounded">
            <label for="virtual_product" class="ml-2 block text-sm font-medium text-gray-700">This is a virtual
                product</label>
        </div>
    </div>
</fieldset>
