@props(['items' => []])

<nav class="flex mb-4" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        @foreach ($items as $index => $item)
            @if ($index < count($items) - 1)
                <li class="inline-flex items-center">
                    <a href="{{ $item['url'] }}"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        @isset($item['icon'])
                            <i class="fa {{ $item['icon'] }} mr-2"></i>
                        @endisset
                        {{ $item['name'] }}
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L11.586 9 7.293 4.707a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </li>
            @else
                <li aria-current="page">
                    <div class="flex items-center">
                        @isset($item['icon'])
                            <i class="fa {{ $item['icon'] }} mr-2"></i>
                        @endisset
                        <span class="text-sm font-medium text-gray-500">{{ $item['name'] }}</span>
                    </div>
                </li>
            @endif
        @endforeach
    </ol>
</nav>
