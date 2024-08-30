<div x-data="{ open: false }" class="flex items-center">
    <!-- Sorting Icon for Small Screens -->
    <button @click="open = true" class="border rounded p-2 bg-gray-200 text-gray-800 md:hidden">
        <!-- Sorting Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke="currentColor" fill="none">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18M3 10h13m-13 7h8" />
        </svg>
    </button>

    <!-- Sorting Options for Larger Screens -->
    <div class="hidden md:flex space-x-4">
        <!-- Sort by Options -->
        <select class="border rounded px-4 py-2">
            <option>Sort by Name</option>
            <option>Sort by Slug</option>
            <option>Sort by Description</option>
        </select>
    </div>

    <!-- Modal for Sorting Options on Small Screens -->
    <x-modal id="sortingModal" title="Sorting Options" size="md" open="open">
        <!-- Sorting Form -->
        <div class="space-y-4">
            <!-- Sort by Options -->
            <select class="w-full border rounded px-4 py-2">
                <option>Sort by Name</option>
                <option>Sort by Slug</option>
                <option>Sort by Description</option>
            </select>
        </div>
        <!-- Close Button -->
        <div class="mt-6 flex justify-end">
            <button @click="open = false" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                Close
            </button>
        </div>
    </x-modal>
</div>
