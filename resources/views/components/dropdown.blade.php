<div x-data="{ open: false }" class="relative" @click.away="open = false">
    <button @click="open = !open; if (open) { $nextTick(() => adjustDropdownPosition($refs.dropdown)); }"
        class="flex items-center text-lg font-medium hover:text-gray-900 transition duration-300">
        {{ $trigger }}
        @if ($showIcon ?? false)
            <i class="fas fa-chevron-down ml-2 transition-transform duration-300" :class="open ? 'rotate-180' : ''"></i>
        @endif
    </button>

    <div x-ref="dropdown" x-show="open" x-transition.opacity
        class="absolute mt-2 w-64 bg-white text-gray-700 shadow-md rounded-lg z-20 py-2"
        style="min-width: 12rem; left: 0;" @click.away="open = false">
        {{ $slot }}
    </div>
</div>

<script>
    function adjustDropdownPosition(dropdown) {
        // Reset right style before recalculating
        dropdown.style.right = 'auto'; // Default right side is not constrained
        dropdown.style.visibility = 'hidden'; // Hide during position calculation
        dropdown.style.display = 'block'; // Force render for position calculation

        const rect = dropdown.getBoundingClientRect();

        // Adjust dropdown position based on viewport width before showing
        if (rect.right > window.innerWidth) {
            dropdown.style.right = '0'; // Align to the right if it exceeds viewport width
            dropdown.style.left = 'auto'; // Clear the left side if aligning to the right
        }

        // Show the dropdown after positioning is adjusted
        dropdown.style.visibility = 'visible';
    }
</script>
