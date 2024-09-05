@props([
    'isOpen' => false,
    'isCompact' => false,
])

<div x-data="{ $isOpen: {{ $isOpen ? 'true' : 'false' }}, $isCompact }" :class="{ '-translate-x-full md:translate-x-0': !isOpen, 'translate-x-0': isOpen }"
    class="fixed inset-y-0 left-0 z-30 transition-all duration-500 ease-in-out  -translate-x-full md:relative md:translate-x-0">

    <div class="relative h-full w-screen md:w-full">
        <div @click="isOpen = false" class="absolute w-full h-full"></div>

        <!-- Sidebar Content Area with Compact and Expanded States -->
        <div class="relative h-full bg-gray-800 text-white  flex-1 w-64 transition-all duration-500 ease-in-out"
            :class="{ 'w-10': isCompact, 'w-64': !isCompact, }">
            <!-- Sidebar Header -->
            <div class="flex items-center border-b justify-between">
                <div x-show="!isCompact" class="text-lg p-2 font-bold whitespace-nowrap">Admin Panel</div>
                <div x-show="isCompact" class="text-lg font-bold p-2 hidden md:block">AP</div>
                <button @click="isOpen = false"
                    class="text-primary rounded-full p-2 m-2 bg-light focus:outline-none md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <!-- Sidebar items -->
            <nav class="flex flex-col mt-4 space-y-2">
                <a href="/admin/dashboard"
                    class="flex items-center p-2 hover:border-l-2 border-primary text-sm text-white hover:bg-gray-700">
                    <i class="fas fa-chart-line"></i><span :class="{ 'opacity-0': isCompact }" class="ml-2">
                        Dashboard</span>
                </a>
                <a href="/admin/categories"
                    class="flex items-center p-2 hover:border-l-2 border-primary text-sm text-white hover:bg-gray-700">
                    <i class="fas fa-list"></i><span :class="{ 'opacity-0': isCompact }" class="ml-2">
                        Categories</span>
                </a>
                <a href="/admin/users"
                    class="flex items-center p-2 hover:border-l-2 border-primary text-sm text-white hover:bg-gray-700">
                    <i class="fas fa-users"></i><span :class="{ 'opacity-0': isCompact }" class="ml-2"> Users</span>
                </a>
                <a href="/admin/settings"
                    class="flex items-center p-2 hover:border-l-2 border-primary text-sm text-white hover:bg-gray-700">
                    <i class="fas fa-cogs"></i><span :class="{ 'opacity-0': isCompact }" class="ml-2">
                        Settings</span>
                </a>
                <a href="/admin/reports"
                    class="flex items-center p-2 hover:border-l-2 border-primary text-sm text-white hover:bg-gray-700">
                    <i class="fas fa-chart-bar"></i><span :class="{ 'opacity-0': isCompact }" class="ml-2">
                        Reports</span>
                </a>
            </nav>
        </div>

    </div>

</div>
