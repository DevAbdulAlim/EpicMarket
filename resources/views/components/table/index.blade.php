@props([
    'columns' => [],
    'actions' => true,
])

<div class="overflow-x-auto bg-white shadow-md rounded">
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                @foreach ($columns as $column)
                    <th class="px-4 py-2 border-b-2 text-left">{{ $column }}</th>
                @endforeach
                @if ($actions)
                    <th class="px-4 py-2 border-b-2 text-left">Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>
