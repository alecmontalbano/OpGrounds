@if ($paginator->hasPages())
    <div class="pagination-wrapper m-t-20">
        <nav class="pagination is-centered">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a class="pagination-previous" disabled>&laquo;</a>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="pagination-previous" rel="prev">&laquo;</a>
            @endif
    
            <ul class="pagination-list">
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li><span class="pagination-ellipsis">&hellip;</span></li>
                    @endif
    
                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li>
                                    <a class="is-current pagination-link">{{ $page }}</a>
                                </li>    
                            @else
                                <li><a class="pagination-link" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </ul>
    
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="pagination-next" href="{{ $paginator->nextPageUrl() }}" rel="next">&rsaquo;</a>
            @else
                <a class="pagination-next" disabled>&rsaquo;</a>
            @endif
        </nav>
    </div>
@endif
