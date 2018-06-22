


<div class="pagination">
    @if ($paginator->onFirstPage())
        <a class="arrow-left" disabled href="#"></a>
    @else
       <a  class="arrow-left" href="{{ $paginator->previousPageUrl() }}" rel="prev"></a>
    @endif

<!-- Pagination Elements -->
    @foreach ($elements as $element)
    <!-- "Three Dots" Separator -->
        @if (is_string($element))
            <a href="#" class="more">{{ $element }}</a>
            <li class="disabled"><span>{{ $element }}</span></li>
        @endif

    <!-- Array Of Links -->
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="active number">{{ $page }}</li>
                @else
                   <a class="number" href="{{ $url }}">{{ $page }}</a>
                @endif
            @endforeach
        @endif
    @endforeach

<!-- Next Page Link -->
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="arrow-right" rel="next"></a>
    @else
            <a class="arrow-right" disabled href="#"></a>
    @endif

</div>
