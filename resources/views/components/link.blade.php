<!-- resources/views/components/link.blade.php -->

<a {{ $attributes->merge(['class' => 'hover:underline']) }}>{{ $slot }}</a>
