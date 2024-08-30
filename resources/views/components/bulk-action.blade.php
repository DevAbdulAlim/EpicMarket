<div x-data="{ open: false }" class="flex items-center">
    <!-- Bulk Action Icon for Small Screens -->
    <button @click="open = true" class="border rounded p-2 bg-gray-200 text-gray-800 md:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
    </button>

    <!-- Bulk Actions for Larger Screens -->
    <div class="hidden md:flex space-x-2">
        <button class="border rounded px-4 py-2 bg-gray-200 text-gray-800">Delete Selected</button>
        <button class="border rounded px-4 py-2 bg-gray-200 text-gray-800">Mark as Featured</button>
        <button class="border rounded px-4 py-2 bg-gray-200 text-gray-800">Move to Archive</button>
    </div>

    <!-- Modal for Bulk Actions on Small Screens -->
    <div x-show="open" @click.away="open = false" x-cloak
        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
        <div class="bg-white rounded-lg p-6 w-11/12 max-w-md">
            <h2 class="text-xl font-bold mb-4">Bulk Actions</h2>
            <!-- Bulk Action Buttons -->
            <div class="space-y-4">
                <button class="w-full border rounded px-4 py-2 bg-gray-200 text-gray-800">Delete Selected</button>
                <button class="w-full border rounded px-4 py-2 bg-gray-200 text-gray-800">Mark as Featured</button>
                <button class="w-full border rounded px-4 py-2 bg-gray-200 text-gray-800">Move to Archive</button>
            </div>
            <!-- Close Button -->
            <div class="mt-6 flex justify-end">
                <button @click="open = false" class="px-4 py-2 bg-blue-500 text-white rounded">Close</button>
            </div>
        </div>
    </div>
</div>
