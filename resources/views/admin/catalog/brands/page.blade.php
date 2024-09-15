<x-admin-layout>
    <?php
    // Define dummy data in PHP
    $users = [['id' => 1, 'name' => 'John Doe', 'email' => 'john.doe@example.com'], ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane.smith@example.com'], ['id' => 3, 'name' => 'Alice Johnson', 'email' => 'alice.johnson@example.com'], ['id' => 4, 'name' => 'Michael Brown', 'email' => 'michael.brown@example.com'], ['id' => 5, 'name' => 'Emily Davis', 'email' => 'emily.davis@example.com']];
    ?>

    <div x-data="{
        selectedRows: [],
        toggleSelection(id) {
            if (this.selectedRows.includes(id)) {
                this.selectedRows = this.selectedRows.filter(rowId => rowId !== id);
            } else {
                this.selectedRows.push(id);
            }
        },
        isSelected(id) {
            return this.selectedRows.includes(id);
        },
        toggleSelectAll() {
            const allIds = [<?php echo implode(',', array_column($users, 'id')); ?>];
            if (this.selectedRows.length === allIds.length) {
                this.selectedRows = [];
            } else {
                this.selectedRows = allIds;
            }
        },
        exportRows(format) {
            if (this.selectedRows.length === 0) {
                alert('No rows selected for export.');
                return;
            }
            alert('Exporting ' + this.selectedRows.length + ' rows as ' + format);
        }
    }" class="max-w-7xl mx-auto">

        <!-- Breadcrumb Component -->
        <x-breadcrumb :items="[
            ['name' => 'Dashboard', 'url' => route('admin.index'), 'icon' => 'fa-chart-line'],
            ['name' => 'Catalog', 'url' => route('admin.catalog.index'), 'icon' => 'fa-list'],
            ['name' => 'Brands', 'url' => route('admin.catalog.brands.index'), 'icon' => 'fa-tags'],
        ]" />



        <!-- Header and Title -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl md:text-3xl font-extrabold text-gray-800">Brands</h1>
            <!-- Add New Category Button -->
            <x-button type="button" variant="solid" color="blue" size="md"
                onclick="window.location='{{ route('admin.catalog.categories.create') }}'">
                <i class="fas fa-plus-circle mr-2"></i> New
            </x-button>
        </div>


        <!-- Bulk Actions and Export Options -->
        <div class="flex flex-col xl:flex-row space-y-4 xl:space-y-0 justify-between xl:items-center mb-4">
            <div class="flex flex-col md:flex-row md:items-center space-y-4 md:space-y-0 md:space-x-4">
                <!-- Search Bar -->
                <div class="w-full md:w-auto">
                    <input type="text" class="border border-gray-300 rounded-lg px-4 py-2 w-full md:w-80"
                        placeholder="Search categories...">
                </div>

                <!-- Filter Component -->
                <div class="w-full md:w-auto">
                    <x-filter :fields="[
                        [
                            'name' => 'category',
                            'label' => 'Category',
                            'type' => 'select',
                            'multiple' => false,
                            'options' => [
                                ['value' => '', 'label' => 'All Categories'],
                                ['value' => 'electronics', 'label' => 'Electronics'],
                                ['value' => 'clothing', 'label' => 'Clothing'],
                                ['value' => 'books', 'label' => 'Books'],
                            ],
                        ],
                        [
                            'name' => 'tags',
                            'label' => 'Tags',
                            'type' => 'select',
                            'multiple' => true,
                            'options' => [
                                ['value' => 'sale', 'label' => 'Sale'],
                                ['value' => 'new-arrival', 'label' => 'New Arrival'],
                                ['value' => 'discount', 'label' => 'Discount'],
                            ],
                        ],
                        ['name' => 'startDate', 'label' => 'Start Date', 'type' => 'date'],
                        ['name' => 'endDate', 'label' => 'End Date', 'type' => 'date'],
                    ]" />
                </div>


            </div>
            <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4 xl:justify-end">


                <!-- Sorting Dropdown using x-dropdown component -->
                <x-dropdown :show-icon="true">
                    <x-slot:trigger>
                        <i class="fas fa-sort mr-2 text-gray-600"></i>Sort
                        By
                    </x-slot:trigger>
                    <ul class="text-sm">
                        <li @click="sortRows('name_asc')"
                            class="px-4 py-2 hover:bg-gray-100 cursor-pointer flex items-center space-x-2">
                            <i class="fas fa-sort-alpha-down text-blue-600"></i>
                            <span>Name (A-Z)</span>
                        </li>
                        <li @click="sortRows('name_desc')"
                            class="px-4 py-2 hover:bg-gray-100 cursor-pointer flex items-center space-x-2">
                            <i class="fas fa-sort-alpha-up text-blue-600"></i>
                            <span>Name (Z-A)</span>
                        </li>
                        <li @click="sortRows('date_asc')"
                            class="px-4 py-2 hover:bg-gray-100 cursor-pointer flex items-center space-x-2">
                            <i class="fas fa-calendar-alt text-yellow-600"></i>
                            <span>Date (Oldest)</span>
                        </li>
                        <li @click="sortRows('date_desc')"
                            class="px-4 py-2 hover:bg-gray-100 cursor-pointer flex items-center space-x-2">
                            <i class="fas fa-calendar-alt text-yellow-600"></i>
                            <span>Date (Newest)</span>
                        </li>
                    </ul>
                </x-dropdown>


                <!-- Export Dropdown using x-dropdown component -->
                <x-dropdown :show-icon="true">
                    <x-slot:trigger>
                        <i class="fas fa-file-export mr-2 text-green-600"></i>(<span
                            x-text="selectedRows.length"></span>)
                        Export
                    </x-slot:trigger>

                    <ul class="text-sm">
                        <li @click="exportRows('CSV')"
                            class="px-4 py-2 hover:bg-gray-100 cursor-pointer flex items-center space-x-2">
                            <i class="fas fa-file-csv text-green-600"></i>
                            <span>Export to CSV</span>
                        </li>
                        <li @click="exportRows('Excel')"
                            class="px-4 py-2 hover:bg-gray-100 cursor-pointer flex items-center space-x-2">
                            <i class="fas fa-file-excel text-green-700"></i>
                            <span>Export to Excel</span>
                        </li>
                        <li @click="exportRows('PDF')"
                            class="px-4 py-2 rounedd-md hover:bg-gray-100 cursor-pointer flex items-center space-x-2">
                            <i class="fas fa-file-pdf text-red-600"></i>
                            <span>Export to PDF</span>
                        </li>
                    </ul>
                </x-dropdown>


                <!-- Bulk Action Dropdown -->
                <x-dropdown :show-icon="true">
                    <x-slot:trigger>
                        <i class="fas fa-tasks mr-2 text-blue-600"></i> (<span x-text="selectedRows.length"></span>)
                        Bulk
                        Actions
                    </x-slot:trigger>
                    <ul class="text-sm">
                        <li @click="bulkAction('delete')"
                            class="px-4 py-2 hover:bg-gray-100 cursor-pointer flex items-center space-x-2">
                            <i class="fas fa-trash-alt text-red-600"></i>
                            <span>Delete Selected</span>
                        </li>
                        <li @click="bulkAction('archive')"
                            class="px-4 py-2 hover:bg-gray-100 cursor-pointer flex items-center space-x-2">
                            <i class="fas fa-archive text-yellow-600"></i>
                            <span>Archive Selected</span>
                        </li>
                    </ul>
                </x-dropdown>


            </div>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <!-- Select All Checkbox -->
                            <div class="flex items-center">
                                <input type="checkbox" @click="toggleSelectAll()"
                                    :checked="selectedRows.length === < ? = count($users) ? >"
                                    class="h-4 w-4 text-blue-600 border-gray-300 rounded mr-2">

                            </div>
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($users as $user)
                        <tr @click="toggleSelection({{ $user['id'] }})"
                            :class="isSelected({{ $user['id'] }}) ? 'bg-blue-50' : ''"
                            class="hover:bg-gray-50 cursor-pointer transition-colors duration-200">

                            <!-- Checkbox for each row -->
                            <td class="px-6 py-4 whitespace-nowrap text-left" @click.stop>
                                <input type="checkbox" @click="toggleSelection({{ $user['id'] }})"
                                    x-bind:checked="isSelected({{ $user['id'] }})"
                                    class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                            </td>

                            <!-- Name -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="text-sm font-medium text-gray-900">{{ $user['name'] }}</div>
                                </div>
                            </td>

                            <!-- Email -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">{{ $user['email'] }}</div>
                            </td>

                            <!-- Actions -->
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button
                                    class="text-indigo-600 hover:text-white px-3 py-2 border border-indigo-600 rounded-lg transition-all duration-150 hover:bg-indigo-600 ">
                                    <i class="fas fa-eye"></i> View
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination Component -->
        <div class="mt-6">
            {{-- {{ $brands->links('vendor.pagination.tailwind') }} --}}
        </div>
    </div>
</x-admin-layout>
