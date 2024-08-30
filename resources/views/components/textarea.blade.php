@props([
    'rows' => 3, // Default number of rows
    'cols' => '', // Default column size (empty means full width)
    'size' => 'md', // sm, md, lg
    'variant' => 'outline', // outline, solid
    'color' => 'blue', // predefined colors like 'blue', 'red', 'green', etc.
    'placeholder' => '', // Textarea placeholder text
])

@php
    // Base classes for all textareas
    $baseClasses =
        'block w-full rounded-md shadow-sm transition ease-in-out duration-150 focus:outline-none focus:ring-2 focus:ring-offset-2';

    // Predefined color sets with focus states
    $colorSets = [
        'blue' => [
            'solid' => 'bg-blue-50 text-blue-700 border border-blue-300 focus:ring-blue-500 focus:border-blue-500',
            'outline' => 'bg-white text-blue-700 border border-blue-300 focus:ring-blue-500 focus:border-blue-500',
        ],
        'red' => [
            'solid' => 'bg-red-50 text-red-700 border border-red-300 focus:ring-red-500 focus:border-red-500',
            'outline' => 'bg-white text-red-700 border border-red-300 focus:ring-red-500 focus:border-red-500',
        ],
        'green' => [
            'solid' => 'bg-green-50 text-green-700 border border-green-300 focus:ring-green-500 focus:border-green-500',
            'outline' => 'bg-white text-green-700 border border-green-300 focus:ring-green-500 focus:border-green-500',
        ],
        // Add more colors as needed...
    ];

    // Choose color classes based on props
    $colorClasses = $colorSets[$color][$variant] ?? $colorSets['blue']['outline']; // Default to blue outline if color/variant is not found

    // Determine size classes
    $sizeClasses = match ($size) {
        'sm' => 'px-3 py-2 text-sm',
        'lg' => 'px-6 py-3 text-lg',
        default => 'px-4 py-2 text-md',
    };

    // Final classes to be applied
    $finalClasses = "$baseClasses $colorClasses $sizeClasses";
@endphp

<textarea rows="{{ $rows }}" cols="{{ $cols }}" placeholder="{{ $placeholder }}"
    {{ $attributes->merge(['class' => $finalClasses]) }}>
    {{ $slot }}
</textarea>
