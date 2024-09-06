<div x-data="{ open: false }" class="relative" @click.away="open = false">
    <button @click="open = !open"
        class="flex items-center text-lg font-medium hover:text-gray-900 transition duration-300">
        <!-- Trigger slot for icon and label -->
        {{ $trigger }}
        @if ($showIcon ?? false)
            <i class="fas fa-chevron-down ml-2 transition-transform duration-300" :class="open ? 'rotate-180' : ''"></i>
        @endif
    </button>
    <div x-show="open" x-transition class="absolute mt-2 w-64 bg-white text-gray-700 shadow-md rounded-lg z-20 py-2"
        :class="{ 'right-0': ($el.getBoundingClientRect().right > window.innerWidth), 'left-0': ($el.getBoundingClientRect()
                .right <= window.innerWidth) }"
        style="min-width: 12rem;">
        <!-- Flexible slot for any content inside the dropdown (e.g., notifications, lists) -->
        {{ $slot }}
    </div>
</div>
