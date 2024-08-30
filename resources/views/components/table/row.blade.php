@props([
    'rows' => [],
    'actions' => [],
])

<tr>
    @foreach ($rows as $key => $cell)
        @if ($key !== 'id')
            <!-- Skip the ID field if not needed -->
            <td class="px-4 py-2">{{ $cell }}</td>
        @endif
    @endforeach
    @if (!empty($actions))
        <td class="px-4 py-2 flex space-x-2">
            @foreach ($actions as $action)
                @if ($action['type'] === 'edit')
                    <x-link href="{{ $action['route'] }}" :variant="$action['variant'] ?? 'outline'" :color="$action['color'] ?? 'red'" :size="$action['size'] ?? 'sm'">
                        {{ $action['label'] }}
                    </x-link>
                @elseif($action['type'] === 'delete')
                    <form action="{{ $action['route'] }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <x-button type="submit" :variant="$action['variant'] ?? 'outline'" :color="$action['color'] ?? 'red'" :size="$action['size'] ?? 'sm'"
                            onclick="return confirm('Are you sure you want to delete this category?');">
                            {{ $action['label'] }}
                        </x-button>
                    </form>
                @endif
            @endforeach
        </td>
    @endif
</tr>
