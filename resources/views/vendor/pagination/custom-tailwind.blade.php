@if ($paginator->hasPages())
<div class="flex justify-center mt-8">
    <div class="flex items-center space-x-1 bg-white rounded-lg shadow-sm border border-gray-200 p-2">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="flex items-center justify-center w-10 h-10 rounded-lg text-gray-400 cursor-not-allowed">
                <i class="fas fa-chevron-left"></i>
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="flex items-center justify-center w-10 h-10 rounded-lg text-gray-600 hover:bg-blue-50 hover:text-blue-600 transition-colors duration-200">
                <i class="fas fa-chevron-left"></i>
            </a>
        @endif

        {{-- Pagination Elements --}}
        @php
            // Logika untuk membuat elemen pagination dengan ellipsis
            $current = $paginator->currentPage();
            $last = $paginator->lastPage();
            $elements = [];
            
            // Selalu tampilkan halaman pertama
            $elements[] = 1;
            
            // Tentukan rentang halaman yang akan ditampilkan
            if ($current > 3) {
                $elements[] = '...';
            }
            
            for ($i = max(2, $current - 1); $i <= min($last - 1, $current + 1); $i++) {
                $elements[] = $i;
            }
            
            if ($current < $last - 2) {
                $elements[] = '...';
            }
            
            // Selalu tampilkan halaman terakhir jika lebih dari 1
            if ($last > 1) {
                $elements[] = $last;
            }
        @endphp
        
        @foreach ($elements as $element)
            @if (is_string($element))
                <span class="flex items-center justify-center w-10 h-10 text-gray-500">...</span>
            @else
                @if ($element == $paginator->currentPage())
                    <span class="flex items-center justify-center w-10 h-10 bg-blue-600 text-white rounded-lg font-medium shadow-sm">{{ $element }}</span>
                @else
                    <a href="{{ $paginator->url($element) }}" class="flex items-center justify-center w-10 h-10 text-gray-700 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-colors duration-200">{{ $element }}</a>
                @endif
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="flex items-center justify-center w-10 h-10 rounded-lg text-gray-600 hover:bg-blue-50 hover:text-blue-600 transition-colors duration-200">
                <i class="fas fa-chevron-right"></i>
            </a>
        @else
            <span class="flex items-center justify-center w-10 h-10 rounded-lg text-gray-400 cursor-not-allowed">
                <i class="fas fa-chevron-right"></i>
            </span>
        @endif
    </div>
</div>
@endif