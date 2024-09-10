<div x-data="categoryDropdown({{ json_encode($categories) }})" class="relative w-full">
    <!-- Search Input -->
    <input type="text" x-model="search" @input="filterCategories" @focus="showDropdown = true" @blur="hideDropdown"
        placeholder="Search categories..."
        class="w-full p-2 mb-2 rounded-lg border border-gray-300 focus:border-blue-500 dark:border-gray-700 dark:bg-gray-800 dark:text-white focus:outline-none" />

    <!-- Dropdown for categories -->
    <div x-show="showDropdown" class="absolute z-10 bg-white shadow-lg rounded-lg mt-1 w-full max-h-60 overflow-auto">
        <ul>
            <!-- Loop through filtered categories and display them hierarchically -->
            <template x-for="category in filteredCategories" :key="category.id">
                <li class="p-2 cursor-pointer hover:bg-gray-100" @click="selectCategory(category)" @mousedown.prevent>
                    <div x-text="getCategoryName(category)"></div>
                    <!-- Show nested categories if any -->
                    <template x-if="category.children && category.children.length > 0">
                        <ul class="pl-4 mt-2">
                            <template x-for="subCategory in category.children" :key="subCategory.id">
                                <li class="p-2 cursor-pointer hover:bg-gray-200" @click="selectCategory(subCategory)"
                                    @mousedown.prevent>
                                    <div x-text="getCategoryName(subCategory)"></div>
                                    <!-- Show further nested categories -->
                                    <template x-if="subCategory.children && subCategory.children.length > 0">
                                        <ul class="pl-4 mt-2">
                                            <template x-for="nestedCategory in subCategory.children"
                                                :key="nestedCategory.id">
                                                <li class="p-2 cursor-pointer hover:bg-gray-300"
                                                    @click="selectCategory(nestedCategory)" @mousedown.prevent>
                                                    <div x-text="getCategoryName(nestedCategory)"></div>
                                                </li>
                                            </template>
                                        </ul>
                                    </template>
                                </li>
                            </template>
                        </ul>
                    </template>
                </li>
            </template>
        </ul>
    </div>

    <!-- Hidden input to pass the selected category ID -->
    <input type="hidden" name="{{ $name }}" :value="selectedCategory.id">

    <!-- Display selected category -->
    <div class="mt-4">
        <p x-show="selectedCategory.name" class="text-sm font-semibold text-gray-700 dark:text-gray-300">
            Selected Category:
            <span x-text="selectedCategory.name" class="font-bold"></span>
        </p>
    </div>
</div>

<script>
    function categoryDropdown(categories) {
        return {
            search: '', // The search query
            categories: categories, // Original category data
            filteredCategories: categories, // Filtered categories
            showDropdown: false, // Whether the dropdown is open
            selectedCategory: {
                id: '',
                name: ''
            }, // Selected category

            // Filter categories based on the search query
            filterCategories() {
                if (this.search === '') {
                    this.filteredCategories = this.categories;
                } else {
                    const query = this.search.toLowerCase();
                    this.filteredCategories = this.categories.filter(category => this.filterCategoryRecursively(
                        category, query));
                }
            },

            // Recursive function to filter categories
            filterCategoryRecursively(category, query) {
                // Check if the category or its children match the query
                const nameMatches = category.name.toLowerCase().includes(query);
                if (category.children && category.children.length > 0) {
                    const childMatches = category.children.some(subCategory => this.filterCategoryRecursively(
                        subCategory, query));
                    return nameMatches || childMatches;
                }
                return nameMatches;
            },

            // Get the name of the category (including indent for hierarchy)
            getCategoryName(category) {
                return category.name;
            },

            // Select a category
            selectCategory(category) {
                this.selectedCategory = category; // Set the selected category
                this.search = category.name; // Set the search input to the selected category name
                this.showDropdown = false; // Close the dropdown
            },

            // Hide the dropdown
            hideDropdown() {
                setTimeout(() => this.showDropdown = false, 200);
            }
        };
    }
</script>
