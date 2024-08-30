<!-- resources/views/components/modal.blade.php -->
@props([
    'id' => 'modal', // Unique ID for the modal
    'title' => '', // Title of the modal
    'size' => 'md', // Size of the modal: sm, md, lg
    'open' => false, // Boolean to control modal visibility
])

<div x-data="$open" x-show="open" x-cloak id="{{ $id }}"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 transition-opacity duration-300"
    style="display: none;">
    <div @click.away="open = false"
        class="bg-white rounded-lg shadow-lg w-full max-w-{{ $size }} md:max-w-xl lg:max-w-2xl p-6 mx-4 md:mx-auto overflow-y-auto">
        <!-- Modal Header -->
        <div class="flex justify-between items-center border-b pb-2 mb-4">
            <h2 class="text-xl font-semibold text-gray-800">{{ $title }}</h2>
            <x-button @click="open = false" variant="ghost" color="red">X</x-button>
        </div>
        <!-- Modal Body -->
        <div class="modal-body max-h-80 md:max-h-96 lg:max-h-[500px] overflow-y-auto">
            {{ $slot }}
        </div>
    </div>
</div>
