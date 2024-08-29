@props([
    'level' => 'h1', // default level is h1, can be h2, h3, etc.
    'color' => 'black', // default color, can be 'blue', 'red', 'green', etc.
    'underline' => false, // whether the title should have an underline
    'shadow' => false, // whether the title should have a text shadow
])

@php
    // Base classes for all titles
    $baseClasses = 'font-bold tracking-tight';

    // Define color classes based on the color prop
    $colorClasses = match ($color) {
        'blue' => 'text-blue-500',
        'red' => 'text-red-500',
        'green' => 'text-green-500',
        default => 'text-black',
    };

    // Additional decoration classes
    $underlineClass = $underline ? 'underline' : '';
    $shadowClass = $shadow ? 'shadow-md' : '';

    // Final classes to be applied
    $finalClasses = "$baseClasses $colorClasses $underlineClass $shadowClass";
@endphp

<{{ $level }} {{ $attributes->merge(['class' => $finalClasses]) }}>
    {{ $slot }}
    </{{ $level }}>
