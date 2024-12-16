<?php
// Dynamic Category Data (example: fetched from a database or another source)
$categories = [['name' => 'Electronics', 'subcategories' => [['name' => 'Mobile Phones', 'nested' => [['name' => 'Smartphones'], ['name' => 'Feature Phones']]], ['name' => 'Laptops', 'nested' => [['name' => 'Gaming Laptops'], ['name' => 'Business Laptops']]]]], ['name' => 'Fashion', 'subcategories' => [['name' => 'Men\'s Clothing', 'nested' => [['name' => 'Shirts'], ['name' => 'Pants']]], ['name' => 'Women\'s Clothing', 'nested' => [['name' => 'Dresses'], ['name' => 'Skirts']]]]], ['name' => 'Groceries', 'subcategories' => [['name' => 'Fruits', 'nested' => [['name' => 'Apples'], ['name' => 'Bananas']]], ['name' => 'Vegetables', 'nested' => [['name' => 'Carrots'], ['name' => 'Potatoes']]]]]];
?>

<div x-data="{ activeDropdown: null, selectedCategory: null, showSubcategoriesFor: null }">
    <div class="relative">
        <!-- Categories Button -->
        <div @click="activeDropdown = activeDropdown === null ? 'categories' : null"
            class="cursor-pointer py-2 px-4 w-52 bg-blue-50 text-gray-700 rounded-tl-md rounded-tr-md hover:bg-blue-100">
            Categories
        </div>

        <!-- Categories Dropdown -->
        <div x-show="activeDropdown === 'categories'" class="absolute top-full left-0 z-10 bg-white flex"
            @click.away="activeDropdown = null">
            <!-- Main Categories (on the left) -->
            <div class="flex flex-col shadow-lg w-52 min-h-[70vh]">
                @foreach ($categories as $item)
                    <div @mouseover="showSubcategoriesFor = '{{ strtolower($item['name']) }}'"
                        @click="selectedCategory = selectedCategory === '{{ strtolower($item['name']) }}' ? null : '{{ strtolower($item['name']) }}'"
                        class="group relative">
                        <div
                            :class="{
                                'flex items-center p-2 cursor-pointer': true,
                                'border-l-2 border-primary': selectedCategory === '{{ strtolower($item['name']) }}' ||
                                    showSubcategoriesFor === '{{ strtolower($item['name']) }}',
                                'hover:border-l-2 hover:border-primary': showSubcategoriesFor === '{{ strtolower($item['name']) }}'
                            }">
                            <span>{{ $item['name'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Subcategories Box (on the right) -->
            <div class="absolute left-full top-0 min-w-[40vw] ml-1 min-h-[70vh] rounded-md bg-white shadow-lg p-4"
                x-show="selectedCategory !== null || showSubcategoriesFor !== null">
                <!-- Display Subcategories based on the hovered or selected Category -->
                <template x-if="showSubcategoriesFor || selectedCategory">
                    <div>
                        @foreach ($categories as $item)
                            <div
                                x-show="showSubcategoriesFor === '{{ strtolower($item['name']) }}' || selectedCategory === '{{ strtolower($item['name']) }}'">
                                <div class="space-y-2">
                                    @foreach ($item['subcategories'] as $subItem)
                                        <div class="p-2 pl-4 text-gray-700 hover:text-blue-500 cursor-pointer">
                                            <a class="font-semibold" href="#">{{ $subItem['name'] }}</a>

                                            <!-- Nested Categories -->
                                            <div class="mt-2 grid grid-cols-2 gap-2">
                                                @foreach ($subItem['nested'] as $nestedItem)
                                                    <div
                                                        class="p-2 text-gray-700 rounded-md hover:underline cursor-pointer">
                                                        <a href="#">{{ $nestedItem['name'] }}</a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </template>
            </div>
        </div>
    </div>
</div>
