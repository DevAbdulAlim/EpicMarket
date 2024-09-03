@props([
    'id' => '', // Unique identifier for the radio button
    'name' => '', // Name attribute for the radio group
    'value' => '', // Value of the radio button
    'checked' => false, // Whether the radio button should be checked
    'label' => '', // Label text for the radio button
])

@php
    // Base classes for all radio inputs
    $baseClasses = 'h-4 w-4 text-blue-600 border-gray-300 focus:ring-blue-500';
@endphp

<div class="flex items-center">
    <input id="{{ $id }}" name="{{ $name }}" type="radio" value="{{ $value }}"
        {{ $checked ? 'checked' : '' }} {{ $attributes->merge(['class' => $baseClasses]) }}>
    <label for="{{ $id }}" class="ml-2 text-sm font-medium text-gray-700">{{ $label }}</label>
</div>
