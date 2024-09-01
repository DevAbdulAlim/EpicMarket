@props([
    'type' => 'text', // Default input type
    'size' => 'md', // sm, md, lg
    'variant' => 'outline', // outline, solid
    'label' => '', // Optional label text for the input
    'name' => '', // Name attribute for the input
])

@php
    // Base classes for all inputs
    $baseClasses =
        'block w-full rounded-md shadow-sm transition ease-in-out duration-150 focus:outline-none focus:ring-2 focus:ring-offset-2';

    // Predefined classes for the input variants
    $variantClasses =
        $variant === 'solid'
            ? 'bg-gray-50 border border-gray-300 focus:ring-blue-500 focus:border-blue-500'
            : 'bg-white border border-gray-300 focus:ring-blue-500 focus:border-blue-500';

    // Determine size classes
    $sizeClasses = match ($size) {
        'sm' => 'px-3 py-2 text-sm',
        'lg' => 'px-6 py-3 text-lg',
        default => 'px-4 py-2 text-md',
    };

    // Final classes to be applied
    $finalClasses = "$baseClasses $variantClasses $sizeClasses";
@endphp

@if ($label)
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 mb-1">{{ $label }}</label>
@endif
<input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
    {{ $attributes->merge(['class' => $finalClasses]) }}>
