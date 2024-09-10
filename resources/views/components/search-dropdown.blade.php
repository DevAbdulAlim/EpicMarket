<!-- resources/views/components/search-dropdown.blade.php -->
<div x-data="searchDropdown({{ json_encode($options) }})" class="relative w-full">
    <!-- Search Input -->
    <input type="text" x-model="search" @input="filterOptions" @focus="showDropdown = true" @blur="hideDropdown"
        placeholder="Search..."
        class="w-full p-2 mb-2 rounded-lg border border-gray-300 focus:border-blue-500 dark:border-gray-700 dark:bg-gray-800 dark:text-white focus:outline-none" />

    <!-- Dropdown -->
    <div x-show="showDropdown && filteredOptions.length" class="absolute z-10 bg-white shadow-lg rounded-lg mt-1 w-full">
        <ul>
            <template x-for="(option, index) in filteredOptions" :key="option.id">
                <li @click="selectOption(option)" @mousedown.prevent
                    class="px-4 py-2 hover:bg-gray-100 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 cursor-pointer">
                    <span x-text="option.name"></span>
                </li>
            </template>
        </ul>
    </div>

    <!-- Hidden input to pass the selected value -->
    <input type="hidden" name="{{ $name }}" :value="selected">
</div>

<script>
    function searchDropdown(options) {
        return {
            search: '', // Search query
            options: options, // Original list of options
            filteredOptions: [], // Filtered list of options
            showDropdown: false, // Toggle for showing the dropdown
            selected: '', // Selected option

            // Filter options based on the search query
            filterOptions() {
                this.filteredOptions = this.options.filter(option => option.name.toLowerCase().includes(this.search
                    .toLowerCase()));
            },

            // Select an option and set the search text to the selected option's name
            selectOption(option) {
                this.selected = option.id;
                this.search = option.name;
                this.showDropdown = false; // Close the dropdown after selecting
            },

            // Hide dropdown when the input loses focus
            hideDropdown() {
                setTimeout(() => this.showDropdown = false, 200); // Small delay to allow clicking
            }
        };
    }
</script>
