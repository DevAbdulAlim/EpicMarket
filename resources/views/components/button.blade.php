@props([
    'type' => 'button',
    'variant' => 'solid', // solid, outline, ghost
    'color' => 'blue', // predefined colors like 'blue', 'red', 'green', etc.
    'size' => 'md', // sm, md, lg
])

@php
    // Base classes for all buttons
    $baseClasses =
        'inline-flex items-center justify-center font-medium rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-150';

    // Predefined color sets with hover and active states
    $colorSets = [
        'blue' => [
            'solid' =>
                'bg-blue-500 text-white hover:bg-blue-600 focus:ring-blue-500 active:bg-blue-700 active:scale-95',
            'outline' =>
                'border border-blue-500 text-blue-500 bg-transparent hover:bg-blue-500 hover:text-white focus:ring-blue-500 active:bg-blue-600 active:text-white active:border-blue-600 active:scale-95',
            'ghost' =>
                'bg-transparent text-blue-500 hover:bg-blue-50 focus:ring-blue-500 active:bg-blue-100 active:scale-95',
        ],
        'red' => [
            'solid' => 'bg-red-500 text-white hover:bg-red-600 focus:ring-red-500 active:bg-red-700 active:scale-95',
            'outline' =>
                'border border-red-500 text-red-500 bg-transparent hover:bg-red-500 hover:text-white focus:ring-red-500 active:bg-red-600 active:text-white active:border-red-600 active:scale-95',
            'ghost' =>
                'bg-transparent text-red-500 hover:bg-red-50 focus:ring-red-500 active:bg-red-100 active:scale-95',
        ],
        'green' => [
            'solid' =>
                'bg-green-500 text-white hover:bg-green-600 focus:ring-green-500 active:bg-green-700 active:scale-95',
            'outline' =>
                'border border-green-500 text-green-500 bg-transparent hover:bg-green-500 hover:text-white focus:ring-green-500 active:bg-green-600 active:text-white active:border-green-600 active:scale-95',
            'ghost' =>
                'bg-transparent text-green-500 hover:bg-green-50 focus:ring-green-500 active:bg-green-100 active:scale-95',
        ],
        // Add more colors as needed...
    ];

    // Choose color classes based on props
    $colorClasses = $colorSets[$color][$variant] ?? $colorSets['blue']['solid']; // Default to blue solid if color/variant is not found

    // Determine size classes
    $sizeClasses = match ($size) {
        'sm' => 'px-3 py-2 text-sm',
        'lg' => 'px-6 py-3 text-lg',
        default => 'px-4 py-2 text-md',
    };

    // Final classes to be applied
    $finalClasses = "$baseClasses $colorClasses $sizeClasses";
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => $finalClasses]) }}>
    {{ $slot }}
</button>
