@props([
    'label' => '', // Optional label text for the checkbox
    'name' => '', // Name attribute for the checkbox
    'checked' => false, // Whether the checkbox is checked by default
    'value' => '1', // Value attribute for the checkbox
])

@php
    $baseClasses = 'h-4 w-4 text-blue-600 bg-white border-gray-300 rounded focus:ring-blue-500';
    $id = $attributes->get('id') ?? $name; // Use provided ID or fallback to name
@endphp

<div class="flex items-center">
    <input type="checkbox" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}"
        {{ $checked ? 'checked' : '' }} {{ $attributes->merge(['class' => $baseClasses]) }}>
    @if ($label)
        <label for="{{ $id }}"
            class="ml-2 text-sm font-medium text-gray-700 cursor-pointer hover:text-blue-600">{{ $label }}</label>
    @endif
</div>
