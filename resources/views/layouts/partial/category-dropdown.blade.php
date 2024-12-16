<div class="relative" @mouseleave="closeDropdown">
    <!-- Categories Button -->
    <div @mouseenter="openDropdown('categories')"
        class="cursor-pointer py-2 -mb-2 px-4 w-72 bg-gray-50 text-gray-700 rounded-tl-md rounded-tr-md hover:bg-gray-100">
        Categories
    </div>

    <!-- Categories Dropdown -->
    <div x-show="activeDropdown === 'categories'" class="absolute top-full left-0 z-10 flex">
        <!-- Main Categories (on the left) -->
        <div class="relative flex flex-col top-0 w-72 min-h-[71vh] bg-white">
            @foreach ($categories as $item)
                <div @mouseover="showSubcategoriesFor = '{{ strtolower($item['name']) }}'" class="group relative">
                    <div
                        :class="{
                            'flex items-center p-4 cursor-pointer': true,
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
        <div class="absolute left-full top-0 min-w-[40vw] min-h-[71vh] bg-white p-4 border-l"
            x-show="selectedCategory !== null || showSubcategoriesFor !== null" x-cloak>
            <!-- Display Subcategories based on the hovered or selected Category -->
            <template x-if="showSubcategoriesFor || selectedCategory">
                <div>
                    @foreach ($categories as $item)
                        <div x-show="showSubcategoriesFor === '{{ strtolower($item['name']) }}' || selectedCategory === '{{ strtolower($item['name']) }}'"
                            x-cloak>
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
