<div x-data="{ open: false }" class="flex items-center">
    <!-- Export Icon for Small Screens -->
    <button @click="open = true" class="border rounded p-2 bg-gray-200 text-gray-800 md:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 10l-1.41-1.41L13 13.17V3h-2v10.17l-4.59-4.58L5 10l7 7 7-7z" />
        </svg>
    </button>

    <!-- Export Options for Larger Screens -->
    <div class="hidden md:flex space-x-2">
        <button class="border rounded px-4 py-2 bg-gray-200 text-gray-800">Export as CSV</button>
        <button class="border rounded px-4 py-2 bg-gray-200 text-gray-800">Export as Excel</button>
        <button class="border rounded px-4 py-2 bg-gray-200 text-gray-800">Export as PDF</button>
    </div>

    <!-- Modal for Export Options on Small Screens -->
    <div x-show="open" @click.away="open = false" x-cloak
        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
        <div class="bg-white rounded-lg p-6 w-11/12 max-w-md">
            <h2 class="text-xl font-bold mb-4">Export Options</h2>
            <!-- Export Buttons -->
            <div class="space-y-4">
                <button class="w-full border rounded px-4 py-2 bg-gray-200 text-gray-800">Export as CSV</button>
                <button class="w-full border rounded px-4 py-2 bg-gray-200 text-gray-800">Export as Excel</button>
                <button class="w-full border rounded px-4 py-2 bg-gray-200 text-gray-800">Export as PDF</button>
            </div>
            <!-- Close Button -->
            <div class="mt-6 flex justify-end">
                <button @click="open = false" class="px-4 py-2 bg-blue-500 text-white rounded">Close</button>
            </div>
        </div>
    </div>
</div>
