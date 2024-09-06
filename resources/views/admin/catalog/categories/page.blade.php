<x-admin-layout>
    <div class="container mx-auto py-6 px-4 md:px-6">
        <!-- Breadcrumb Component -->
        <x-breadcrumb :items="[
            ['name' => 'Dashboard', 'url' => route('admin.index'), 'icon' => 'fa-chart-line'],
            ['name' => 'Catalog', 'url' => route('admin.catalog.index'), 'icon' => 'fa-list'],
            ['name' => 'Categories', 'url' => route('admin.catalog.categories.index'), 'icon' => 'fa-list'],
        ]" />



        <!-- Header and Title -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-6 space-y-4 md:space-y-0">
            <h1 class="text-2xl md:text-3xl font-extrabold text-gray-800">Category Listing</h1>
            <!-- Add New Category Button -->
            <x-button type="button" variant="solid" color="blue" size="md"
                onclick="window.location='{{ route('admin.catalog.categories.create') }}'">
                Add New Category
            </x-button>
        </div>

        <!-- Search Bar and Actions -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-6 space-y-4 md:space-y-0">
            <div class="flex flex-col md:flex-row md:items-center w-full md:w-auto space-y-4 md:space-y-0 md:space-x-4">
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

                <!-- Sorting Component -->
                <div class="w-full md:w-auto">
                    <x-sorting />
                </div>
            </div>
        </div>

        <!-- Table Component -->
        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <x-table :columns="['Name', 'Slug', 'Description']">
                @foreach ($categories as $category)
                    <x-table.row :rows="[
                        'id' => $category->id,
                        'name' => $category->name,
                        'slug' => $category->slug,
                        'description' => $category->description,
                    ]" :actions="[
                        [
                            'type' => 'edit',
                            'label' => 'Edit',
                            'variant' => 'outline',
                            'color' => 'green',
                            'route' => route('admin.catalog.categories.edit', ['id' => $category->id]),
                        ],
                        [
                            'type' => 'delete',
                            'label' => 'Delete',
                            'variant' => 'outline',
                            'color' => 'red',
                            'route' => route('admin.catalog.categories.destroy', ['id' => $category->id]),
                        ],
                    ]" />
                @endforeach
            </x-table>
        </div>

        <!-- Pagination Component -->
        <div class="mt-6">
            {{ $categories->links('vendor.pagination.tailwind') }}
        </div>
    </div>
</x-admin-layout>
