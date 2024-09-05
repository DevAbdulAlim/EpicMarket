@props([
    'isOpen' => false,
])

<div x-data="{ $isOpen: {{ $isOpen ? 'true' : 'false' }}, isCompact: false }" :class="{ '-translate-x-full md:translate-x-0': !isOpen, 'translate-x-0': isOpen }"
    class="fixed inset-y-0 left-0 transform transition-transform duration-300 bg-gray-800 text-white -translate-x-full md:relative md:translate-x-0">
    <!-- Drawer -->
    <div class="h-full flex flex-col">
        <!-- Drawer Content -->
        <div class="flex-1 flex flex-col space-y-4 p-4">
            <!-- Close Button (Visible only on small screens) -->
            <button @click="isOpen = false" class="lg:hidden text-white mb-4">
                Close Drawer
            </button>

            <!-- Toggle Compact Button (Visible only on large screens) -->
            <button @click="isCompact = !isCompact" class="hidden lg:block text-white mb-4">
                Toggle Compact
            </button>

            <!-- Sidebar Content Area with Compact and Expanded States -->
            <div class="flex-1 w-64" :class="{ 'w-20': isCompact, 'w-64': !isCompact, }">
                <!-- Slot for Sidebar or Other Content -->
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
