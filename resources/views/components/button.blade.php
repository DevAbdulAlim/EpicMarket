@props([
    'type' => 'button',
    'variant' => 'primary', // default variant
    'size' => 'base', // default size
    'shape' => 'solid', // default shape
    'isDisabled' => false, // default disabled state
])

@php
    $baseClasses =
        'inline-flex items-center justify-center font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-150';

    // Define variant classes using match
    $variantClasses = match ($variant) {
        'secondary' => 'bg-secondary text-white hover:bg-secondary-dark focus:ring-secondary',
        'accent' => 'bg-accent text-white hover:bg-accent-dark focus:ring-accent',
        'success' => 'bg-success text-white hover:bg-success-dark focus:ring-success',
        'warning' => 'bg-warning text-black hover:bg-warning-dark focus:ring-warning',
        'danger' => 'bg-danger text-white hover:bg-danger-dark focus:ring-danger',
        'info' => 'bg-info text-white hover:bg-info-dark focus:ring-info',
        'dark' => 'bg-dark text-white hover:bg-dark-dark focus:ring-dark',
        default => 'bg-primary text-white hover:bg-primary-dark focus:ring-primary',
    };

    // Define shape classes using match
    $shapeClasses = match ($shape) {
        'outline' => match ($variant) {
            'secondary'
                => 'bg-transparent border-2 border-secondary text-secondary hover:bg-secondary hover:text-white focus:ring-secondary',
            'accent'
                => 'bg-transparent border-2 border-accent text-accent hover:bg-accent hover:text-white focus:ring-accent',
            'success'
                => 'bg-transparent border-2 border-success text-success hover:bg-success hover:text-white focus:ring-success',
            'warning'
                => 'bg-transparent border-2 border-warning text-warning hover:bg-warning hover:text-black focus:ring-warning',
            'danger'
                => 'bg-transparent border-2 border-danger text-danger hover:bg-danger hover:text-white focus:ring-danger',
            'info' => 'bg-transparent border-2 border-info text-info hover:bg-info hover:text-white focus:ring-info',
            'dark' => 'bg-transparent border-2 border-dark text-dark hover:bg-dark hover:text-white focus:ring-dark',
            default
                => 'bg-transparent border-2 border-primary text-primary hover:bg-primary hover:text-white focus:ring-primary',
        },
        'ghost' => match ($variant) {
            'secondary' => 'bg-transparent text-secondary hover:bg-secondary hover:text-white focus:ring-secondary',
            'accent' => 'bg-transparent text-accent hover:bg-accent hover:text-white focus:ring-accent',
            'success' => 'bg-transparent text-success hover:bg-success hover:text-white focus:ring-success',
            'warning' => 'bg-transparent text-warning hover:bg-warning hover:text-black focus:ring-warning',
            'danger' => 'bg-transparent text-danger hover:bg-danger hover:text-white focus:ring-danger',
            'info' => 'bg-transparent text-info hover:bg-info hover:text-white focus:ring-info',
            'dark' => 'bg-transparent text-dark hover:bg-dark hover:text-white focus:ring-dark',
            default => 'bg-transparent text-primary hover:bg-primary hover:text-white focus:ring-primary',
        },
        default => $variantClasses,
    };

    // Define size classes using match
    $sizeClasses = match ($size) {
        'sm' => 'px-2 py-1 text-sm',
        'lg' => 'px-4 py-2 text-lg',
        'xl' => 'px-6 py-3 text-xl',
        default => 'px-3 py-2 text-base',
    };

    // Define disabled classes
    $disabledClasses = $isDisabled ? 'opacity-50 cursor-not-allowed' : '';
@endphp

<button type="{{ $type }}"
    {{ $attributes->merge(['class' => "$baseClasses $shapeClasses $sizeClasses $disabledClasses"]) }}
    {{ $isDisabled ? 'disabled' : '' }}>
    {{ $slot }}
</button>
