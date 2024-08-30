<!-- resources/views/components/filter.blade.php -->
@props(['fields'])

<div x-data="{
    open: false,
    filters: {},
    init() {
        @foreach ($fields as $field)
                @if ($field['type'] === 'select' && $field['multiple'])
                    this.filters['{{ $field['name'] }}'] = [];
                @else
                    this.filters['{{ $field['name'] }}'] = '';
                @endif @endforeach
    },
    applyFilters() {
        let params = new URLSearchParams(window.location.search);

        for (const [key, value] of Object.entries(this.filters)) {
            if (Array.isArray(value) && value.length > 0) {
                params.set(key, value.join(','));
            } else if (value) {
                params.set(key, value);
            } else {
                params.delete(key);
            }
        }

        window.history.pushState({}, '', `${window.location.pathname}?${params.toString()}`);
    }
}" x-init="init()" x-cloak class="filter-section">

    <!-- Filter Button -->
    <button @click="open = true" class="flex items-center border rounded p-2 bg-gray-200 text-gray-800">
        <!-- Filter Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707L14 12.414V18a1 1 0 01-.553.894l-4 2A1 1 0 018 20v-7.586L3.293 6.707A1 1 0 013 6V4z" />
        </svg>
        <!-- Filter Label (Visible Only on Large Screens) -->
        <span class="hidden md:inline ml-2">Filter</span>
    </button>

    <!-- Modal for Filter Options -->
    <x-modal id="filterModal" title="Filter Options" size="md" open="open">
        <form x-ref="form">
            <div class="space-y-4">
                @foreach ($fields as $field)
                    <div class="flex flex-col space-y-2">
                        <label for="{{ $field['name'] }}"
                            class="font-medium text-gray-700">{{ $field['label'] }}</label>
                        @if ($field['type'] === 'select' && !$field['multiple'])
                            <!-- Single Select -->
                            <select id="{{ $field['name'] }}" x-model="filters['{{ $field['name'] }}']"
                                class="border rounded px-4 py-2 w-full">
                                @foreach ($field['options'] as $option)
                                    <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
                                @endforeach
                            </select>
                        @elseif ($field['type'] === 'select' && $field['multiple'])
                            <!-- Multi-Select -->
                            <select id="{{ $field['name'] }}" x-model="filters['{{ $field['name'] }}']" multiple
                                class="border rounded px-4 py-2 w-full">
                                @foreach ($field['options'] as $option)
                                    <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
                                @endforeach
                            </select>
                        @elseif ($field['type'] === 'text')
                            <!-- Text Input -->
                            <input type="text" id="{{ $field['name'] }}" x-model="filters['{{ $field['name'] }}']"
                                class="border rounded px-4 py-2 w-full">
                        @elseif ($field['type'] === 'date')
                            <!-- Date Input -->
                            <input type="date" id="{{ $field['name'] }}" x-model="filters['{{ $field['name'] }}']"
                                class="border rounded px-4 py-2 w-full">
                        @elseif ($field['type'] === 'number')
                            <!-- Number Input -->
                            <input type="number" id="{{ $field['name'] }}" x-model="filters['{{ $field['name'] }}']"
                                class="border rounded px-4 py-2 w-full">
                        @endif
                    </div>
                @endforeach
            </div>
            <!-- Apply Filters Button -->
            <div class="mt-6 flex justify-end">
                <button type="button" @click="applyFilters(); open = false;"
                    class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    Apply Filters
                </button>
            </div>
        </form>
    </x-modal>
</div>
