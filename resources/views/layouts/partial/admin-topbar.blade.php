<header :class="{ 'md:ml-10': isCompact, 'md:ml-64': !isCompact }"
    class="sticky top-0 z-10 md:ml-64 flex items-center justify-between transition-all duration-500 ease-in-out bg-white shadow-md p-6">
    <!-- Hamburger Button for Small Screens -->
    <button @click="isOpen = !isOpen, isCompact = false" class="text-gray-800 bg-gray-200 rounded-md p-2 md:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
    </button>

    <button @click="isCompact = !isCompact"
        class="text-gray-800 bg-gray-200 rounded-md items-center justify-center h-10 w-10 p-2 hidden md:flex">
        <i class="fa-solid fa-bars"></i>
    </button>


    {{-- Searchbar --}}
    <div x-data="{
        isSearchOpen: false,
        query: '',
        activeIndex: -1, // Track the active item in the dropdown
        pages: [
            { name: 'Dashboard', url: '{{ route('admin.index') }}' },
            { name: 'Categories', url: '{{ route('admin.catalog.categories.index') }}' },
            // Add more routes here
        ],
        filteredPages() {
            return this.pages.filter(page => page.name.toLowerCase().includes(this.query.toLowerCase()));
        },
        selectFirstMatch() {
            // If the activeIndex is still -1, select the first item
            if (this.filteredPages().length > 0 && this.activeIndex === -1) {
                this.activeIndex = 0;
            }
            this.selectActiveMatch(); // Call the function to redirect to the active match
        },
        selectActiveMatch() {
            // Ensure the active index is within bounds
            if (this.activeIndex !== -1 && this.activeIndex < this.filteredPages().length) {
                window.location.href = this.filteredPages()[this.activeIndex].url;
            }
        },
        moveUp() {
            if (this.activeIndex > 0) {
                this.activeIndex--;
            } else {
                this.activeIndex = this.filteredPages().length - 1; // Wrap to last item if at the top
            }
        },
        moveDown() {
            if (this.activeIndex < this.filteredPages().length - 1) {
                this.activeIndex++;
            } else {
                this.activeIndex = 0; // Wrap to first item if at the bottom
            }
        }
    }" class="relative w-full md:max-w-xs mx-4">

        <!-- Search Input Wrapper -->
        <div class="relative">
            <!-- Search Input -->
            <input type="text" x-model="query" @focus="isSearchOpen = true"
                @focusout="setTimeout(() => isSearchOpen = false, 150)" {{-- Delays dropdown closing to allow clicks --}}
                @keydown.enter.prevent="selectFirstMatch" {{-- Auto-select the first match on Enter --}} @keydown.arrow-up.prevent="moveUp"
                {{-- Move selection up on Arrow Up --}} @keydown.arrow-down.prevent="moveDown" {{-- Move selection down on Arrow Down --}}
                placeholder="Search pages..."
                class="w-full p-2 pr-10 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                @keydown.escape="isSearchOpen = false">

            <!-- Search Icon -->
            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                <i class="fas fa-search text-gray-400"></i> {{-- FontAwesome search icon --}}
            </div>
        </div>

        <!-- Dropdown -->
        <ul x-show="isSearchOpen && filteredPages().length > 0"
            class="absolute left-0 right-0 mt-2 bg-white shadow-lg rounded-md overflow-hidden z-50" x-transition>

            <!-- Show filtered list -->
            <template x-for="(page, index) in filteredPages()" :key="page.url">
                <li class="p-2 hover:bg-gray-100 cursor-pointer" :class="{ 'bg-blue-100': index === activeIndex }"
                    @mousedown.prevent="window.location.href = page.url" @mouseenter="activeIndex = index">
                    {{-- Set active item on mouse hover --}}
                    <span x-text="page.name"></span>
                </li>
            </template>
        </ul>
    </div>







    <div class="flex items-center justify-between p-2 space-x-6 text-gray-800">

        <!-- Language Selector -->
        <x-dropdown>
            <x-slot:trigger>
                <i class="fas fa-globe text-xl"></i>
                <span class="ml-2 text-sm">Language</span>
            </x-slot:trigger>
            <div class="p-2 hover:bg-gray-100 cursor-pointer text-sm">English</div>
            <div class="p-2 hover:bg-gray-100 cursor-pointer text-sm">Bangla</div>
            <div class="p-2 hover:bg-gray-100 cursor-pointer text-sm">Spanish</div>
        </x-dropdown>

        <!-- Theme Toggle -->
        <div x-data="{ darkMode: false }">
            <button @click="darkMode = !darkMode; document.documentElement.classList.toggle('dark')"
                class="flex items-center text-sm font-medium hover:text-gray-900 transition duration-300">
                <i :class="darkMode ? 'fas fa-sun text-xl' : 'fas fa-moon text-xl'"></i>
                <span class="ml-2" x-text="darkMode ? 'Light' : 'Dark'"></span>
            </button>
        </div>

        <!-- Notification Dropdown -->
        <x-dropdown>
            <x-slot:trigger>
                <div class="relative">
                    <i class="fas fa-bell text-xl"></i>
                    <span
                        class="absolute -top-2 -right-2 bg-red-500 text-xs text-white rounded-full w-5 h-5 flex items-center justify-center">3</span>
                </div>
            </x-slot:trigger>
            <!-- Realistic Notification Design -->
            <div class="p-4 bg-white shadow-lg rounded-lg w-72">
                <h4 class="font-semibold text-base mb-2">Notifications</h4>
                <ul>
                    <!-- Notification 1 -->
                    <li
                        class="flex items-start p-2 hover:bg-gray-100 cursor-pointer transition duration-200 ease-in-out rounded-lg">
                        <img src="https://via.placeholder.com/40" alt="Avatar"
                            class="rounded-full w-8 h-8 flex-shrink-0">
                        <div class="ml-3">
                            <p class="text-sm font-semibold">New Message</p>
                            <p class="text-xs text-gray-500">You have a new message from John Doe.</p>
                            <p class="text-xs text-gray-400">2 mins ago</p>
                        </div>
                    </li>

                    <!-- Notification 2 -->
                    <li
                        class="flex items-start p-2 hover:bg-gray-100 cursor-pointer transition duration-200 ease-in-out rounded-lg">
                        <img src="https://via.placeholder.com/40" alt="Avatar"
                            class="rounded-full w-8 h-8 flex-shrink-0">
                        <div class="ml-3">
                            <p class="text-sm font-semibold">Server Update</p>
                            <p class="text-xs text-gray-500">Scheduled maintenance at 11:00 PM.</p>
                            <p class="text-xs text-gray-400">1 hour ago</p>
                        </div>
                    </li>

                    <!-- Notification 3 -->
                    <li
                        class="flex items-start p-2 hover:bg-gray-100 cursor-pointer transition duration-200 ease-in-out rounded-lg">
                        <img src="https://via.placeholder.com/40" alt="Avatar"
                            class="rounded-full w-8 h-8 flex-shrink-0">
                        <div class="ml-3">
                            <p class="text-sm font-semibold">New Follower</p>
                            <p class="text-xs text-gray-500">Alice started following you.</p>
                            <p class="text-xs text-gray-400">3 hours ago</p>
                        </div>
                    </li>
                </ul>
                <div class="text-center text-sm text-blue-500 mt-2 cursor-pointer hover:underline">View All</div>
            </div>
        </x-dropdown>

        <!-- Profile Icon -->
        <x-dropdown>
            <x-slot:trigger>
                <i class="fas fa-user-circle text-xl"></i>
            </x-slot:trigger>
            <div class="p-2 hover:bg-gray-100 cursor-pointer text-sm">My Profile</div>
            <div class="p-2 hover:bg-gray-100 cursor-pointer text-sm">Settings</div>
            <div class="p-2 hover:bg-gray-100 cursor-pointer text-sm">Logout</div>
        </x-dropdown>

    </div>

</header>
