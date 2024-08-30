@props([
    'href' => '#', // Default link target
    'variant' => 'primary', // Variants like 'primary', 'ghost', 'underline', 'outline', 'link', 'disabled'
    'color' => 'blue', // Predefined colors like 'blue', 'red', 'green', etc.
    'size' => 'md', // Sizes like 'sm', 'md', 'lg'
])

@php
    // Base classes for all links
    $baseClasses =
        'inline-flex items-center justify-center rounded-md font-medium focus:outline-none transition ease-in-out duration-150';

    // Determine color classes based on props using match
    $colorClasses = match ($color) {
        'blue' => match ($variant) {
            'primary' => 'text-blue-500 hover:text-blue-700 focus:ring-blue-500',
            'ghost' => 'text-blue-500 hover:bg-blue-50 focus:ring-blue-500',
            'underline' => 'text-blue-500 hover:text-blue-700 underline focus:ring-blue-500',
            'outline' => 'text-blue-500 border border-blue-500 hover:bg-blue-500 hover:text-white focus:ring-blue-500',
            'link' => 'text-blue-500 hover:text-blue-700 focus:ring-blue-500 no-underline',
            'disabled' => 'text-blue-300 cursor-not-allowed', // Disabled state with lower opacity
            default => 'text-blue-500 hover:text-blue-700 focus:ring-blue-500',
        },
        'red' => match ($variant) {
            'primary' => 'text-red-500 hover:text-red-700 focus:ring-red-500',
            'ghost' => 'text-red-500 hover:bg-red-50 focus:ring-red-500',
            'underline' => 'text-red-500 hover:text-red-700 underline focus:ring-red-500',
            'outline' => 'text-red-500 border border-red-500 hover:bg-red-500 hover:text-white focus:ring-red-500',
            'link' => 'text-red-500 hover:text-red-700 focus:ring-red-500 no-underline',
            'disabled' => 'text-red-300 cursor-not-allowed', // Disabled state with lower opacity
            default => 'text-red-500 hover:text-red-700 focus:ring-red-500',
        },
        'green' => match ($variant) {
            'primary' => 'text-green-500 hover:text-green-700 focus:ring-green-500',
            'ghost' => 'text-green-500 hover:bg-green-50 focus:ring-green-500',
            'underline' => 'text-green-500 hover:text-green-700 underline focus:ring-green-500',
            'outline'
                => 'text-green-500 border border-green-500 hover:bg-green-500 hover:text-white focus:ring-green-500',
            'link' => 'text-green-500 hover:text-green-700 focus:ring-green-500 no-underline',
            'disabled' => 'text-green-300 cursor-not-allowed', // Disabled state with lower opacity
            default => 'text-green-500 hover:text-green-700 focus:ring-green-500',
        },
        default => match ($variant) {
            'primary' => 'text-gray-500 hover:text-gray-700 focus:ring-gray-500',
            'ghost' => 'text-gray-500 hover:bg-gray-50 focus:ring-gray-500',
            'underline' => 'text-gray-500 hover:text-gray-700 underline focus:ring-gray-500',
            'outline' => 'text-gray-500 border border-gray-500 hover:bg-gray-500 hover:text-white focus:ring-gray-500',
            'link' => 'text-gray-500 hover:text-gray-700 focus:ring-gray-500 no-underline',
            'disabled' => 'text-gray-300 cursor-not-allowed', // Disabled state with lower opacity
            default => 'text-gray-500 hover:text-gray-700 focus:ring-gray-500',
        },
    };

    // Determine size classes based on props using match
    $sizeClasses = match ($size) {
        'sm' => 'px-3 py-2 text-sm',
        'lg' => 'px-6 py-3 text-lg',
        default => 'px-4 py-2 text-md',
    };

    // Final classes to be applied
    $finalClasses = "$baseClasses $colorClasses $sizeClasses";
@endphp

<a href="{{ $variant === 'disabled' ? 'javascript:void(0);' : $href }}"
    {{ $attributes->merge(['class' => $finalClasses]) }}>
    {{ $slot }}
</a>
