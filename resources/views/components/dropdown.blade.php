<div x-data="{ open: false }" class="relative" @click.away="open = false">
    <button @click="open = !open; if (open) { $nextTick(() => adjustDropdownPosition($refs.dropdown)); }"
        class="flex items-center text-gray-800 bg-gray-50 hover:bg-indigo-100 px-4 py-2 rounded-lg transition duration-300">
        {{ $trigger }}
        @if ($showIcon ?? false)
            <i class="fas fa-chevron-down ml-2 transition-transform duration-300" :class="open ? 'rotate-180' : ''"></i>
        @endif
    </button>

    <div x-ref="dropdown" x-show="open" x-transition.opacity
        class="absolute mt-2 min-w-36 bg-white text-gray-700 shadow-md rounded-lg z-20" style="min-width: 12rem; left: 0;"
        @click.away="open = false">
        {{ $slot }}
    </div>
</div>

<script>
    function adjustDropdownPosition(dropdown) {
        dropdown.style.right = 'auto';
        dropdown.style.visibility = 'hidden';
        dropdown.style.display = 'block';

        const rect = dropdown.getBoundingClientRect();

        if (rect.right > window.innerWidth) {
            dropdown.style.right = '0';
            dropdown.style.left = 'auto';
        }

        dropdown.style.visibility = 'visible';
    }
</script>
