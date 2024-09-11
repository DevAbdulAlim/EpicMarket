<div x-data="{ open: false, dropdownPosition: '' }" class="relative" @click.away="open = false">
    <button @click="open = !open; if (open) { $nextTick(() => adjustDropdownPosition($el)); }"
        class="flex items-center text-lg font-medium hover:text-gray-900 transition duration-300">
        {{ $trigger }}
        @if ($showIcon ?? false)
            <i class="fas fa-chevron-down ml-2 transition-transform duration-300" :class="open ? 'rotate-180' : ''"></i>
        @endif
    </button>

    <div x-show="open" x-transition :class="dropdownPosition"
        class="absolute mt-2 w-64 bg-white text-gray-700 shadow-md rounded-lg z-20 py-2" style="min-width: 12rem;"
        x-cloak>
        {{ $slot }}
    </div>
</div>

<script>
    function adjustDropdownPosition(buttonEl) {
        const dropdown = buttonEl.nextElementSibling;
        const rect = dropdown.getBoundingClientRect();

        // Adjust dropdown position based on viewport width before showing
        if (rect.right > window.innerWidth) {
            dropdown.style.right = '0';
            dropdown.style.left = 'auto'; // Clear the left side
        } else {
            dropdown.style.left = '0';
            dropdown.style.right = 'auto'; // Clear the right side
        }
    }
</script>
