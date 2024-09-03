@props([
    'position' => 'right', // Position of the drawer: 'left', 'right', 'top', 'bottom'
    'width' => '64', // Width of the drawer when position is left or right
    'height' => 'full', // Height of the drawer when position is top or bottom
    'title' => 'Drawer Title', // Optional title for the drawer
])

<div x-data="{ open: false, show: false }" class="relative">
    <!-- Trigger Slot -->
    <div @click="show = true; setTimeout(() => open = true, 10);">
        {{ $trigger }}
    </div>

    <!-- Drawer Overlay and Panel -->
    <div x-show="show" x-cloak>
        <!-- Drawer Overlay -->
        <div class="fixed inset-0 z-40 bg-white bg-opacity-50 transition-opacity duration-500" x-show="open"
            x-transition:enter="transition-opacity ease-out duration-500" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in-out duration-500"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            @click="open = false; setTimeout(() => show = false, 500)">
        </div>

        <!-- Drawer Panel -->
        <div x-show="show"
            :class="{
                'translate-x-full': !open && '{{ $position }}'
                === 'right',
                '-translate-x-full': !open && '{{ $position }}'
                === 'left',
                'translate-y-full': !open && '{{ $position }}'
                === 'top',
                '-translate-y-full': !open && '{{ $position }}'
                === 'bottom',
                'translate-x-0': open && ('{{ $position }}'
                    === 'right' || '{{ $position }}'
                    === 'left'),
                'translate-y-0': open && ('{{ $position }}'
                    === 'top' || '{{ $position }}'
                    === 'bottom')
            }"
            x-transition:enter="transition ease-out duration-500 transform"
            x-transition:enter-start="opacity-0 {{ $position === 'right' ? 'translate-x-full' : ($position === 'left' ? '-translate-x-full' : ($position === 'top' ? '-translate-y-full' : 'translate-y-full')) }}"
            x-transition:enter-end="opacity-100 translate-x-0"
            x-transition:leave="transition ease-in-out duration-500 transform"
            x-transition:leave-start="opacity-100 translate-x-0"
            x-transition:leave-end="opacity-0 {{ $position === 'right' ? '-translate-x-full' : ($position === 'left' ? 'translate-x-full' : ($position === 'top' ? 'translate-y-full' : '-translate-y-full')) }}"
            class="fixed z-50 {{ $position === 'left' || $position === 'right' ? 'top-0 bottom-0' : 'left-0 right-0' }} {{ $position === 'left' ? 'left-0' : ($position === 'right' ? 'right-0' : ($position === 'top' ? 'top-0' : 'bottom-0')) }} {{ $position === 'left' || $position === 'right' ? 'w-' . $width : 'h-' . $height }} max-w-full bg-white shadow-xl overflow-auto transform transition-transform"
            @click.stop>
            <div class="p-6 h-full flex flex-col">
                <!-- Drawer Header -->
                <div class="flex justify-between items-center">
                    <h2 class="text-lg font-semibold">{{ $title }}</h2>
                    <button @click="open = false; setTimeout(() => show = false, 500);"
                        class="text-gray-600 hover:text-gray-900 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <!-- Drawer Content -->
                <div class="mt-4 flex-1 overflow-auto">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
