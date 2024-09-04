@props([
    'isOpen' => false,
])

<div x-data="{ $isOpen }" x-cloak
    :class="{
        'hidden -translate-x-full': !isOpen,
        'block translate-x-0': isOpen,
    }"
    class="relative hidden lg:block transform transition-transform duration-300">
    <!-- Drawer -->
    <div
        class="h-full bg-gray-800 text-white transform transition-transform duration-300 ease-in-out lg:transition-width lg:duration-300">

        <!-- Drawer Content -->
        <div x-data="{ isCompact: false }" x-cloak class="flex flex-col space-y-4">
            <!-- Close Button (Visible only on small screens) -->
            <button @click="isOpen = false" class="lg:hidden text-white mb-4">
                Close Drawer
            </button>

            <!-- Toggle Compact Button (Visible only on large screens) -->
            <button @click="isCompact = !isCompact" class="hidden lg:block text-white mb-4">
                Toggle Compact
            </button>

            <div :class="{
                'lg:w-64': !isCompact,
                'lg:w-20': isCompact
            }">
                <!-- Slot for Sidebar or Other Content -->
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
