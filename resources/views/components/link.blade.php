@props([
    'href' => '#', // Default link target
    'variant' => 'primary', // Variants like 'primary', 'ghost', 'underline', 'outline', 'link', 'disabled'
    'size' => 'md', // Sizes like 'sm', 'md', 'lg'
])

@php
    // Base classes for all links
    $baseClasses =
        'inline-flex items-center justify-center rounded-md font-medium focus:outline-none transition ease-in-out duration-150';

    // Determine variant classes using match
    $variantClasses = match ($variant) {
        'primary' => 'text-blue-500 hover:text-blue-700 focus:ring-blue-500',
        'ghost' => 'text-blue-500 hover:bg-blue-50 focus:ring-blue-500',
        'underline' => 'text-blue-500 hover:text-blue-700 underline focus:ring-blue-500',
        'outline' => 'text-blue-500 border border-blue-500 hover:bg-blue-500 hover:text-white focus:ring-blue-500',
        'link' => 'text-blue-500 hover:text-blue-700 focus:ring-blue-500 no-underline',
        'disabled' => 'text-blue-300 cursor-not-allowed', // Disabled state with lower opacity
        default => 'text-blue-500 hover:text-blue-700 focus:ring-blue-500',
    };

    // Determine size classes using match
    $sizeClasses = match ($size) {
        'sm' => 'px-3 py-2 text-sm',
        'lg' => 'px-6 py-3 text-lg',
        default => 'px-4 py-2 text-md',
    };

    // Final classes to be applied
    $finalClasses = "$baseClasses $variantClasses $sizeClasses";
@endphp

<a href="{{ $variant === 'disabled' ? 'javascript:void(0);' : $href }}"
    {{ $attributes->merge(['class' => $finalClasses]) }}>
    {{ $slot }}
</a>
