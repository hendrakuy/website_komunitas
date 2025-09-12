@if ($paginator->hasPages())
<div class="flex justify-center mt-6 space-x-1">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <span class="px-4 py-2 rounded bg-gray-200 text-gray-500 cursor-not-allowed">&laquo;</span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="px-4 py-2 rounded bg-blue-500 text-white hover:bg-blue-600">&laquo;</a>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
        @if (is_string($element))
            <span class="px-4 py-2 bg-gray-200 rounded">{{ $element }}</span>
        @endif

        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <span class="px-4 py-2 bg-blue-600 text-white rounded">{{ $page }}</span>
                @else
                    <a href="{{ $url }}" class="px-4 py-2 bg-gray-100 rounded hover:bg-blue-500 hover:text-white">{{ $page }}</a>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="px-4 py-2 rounded bg-blue-500 text-white hover:bg-blue-600">&raquo;</a>
    @else
        <span class="px-4 py-2 rounded bg-gray-200 text-gray-500 cursor-not-allowed">&raquo;</span>
    @endif
</div>
@endif
