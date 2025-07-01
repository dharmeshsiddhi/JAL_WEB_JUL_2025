@if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <ul class="pagination hand-pointer">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item"><a class="page-link">«</a></li>
            @else
                <li class="page-item" style="cursor:pointer"><a class="page-link" onclick="ajaxPagination('{{ $paginator->previousPageUrl() }}');" rel="prev">«</a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item" style="cursor:pointer"><a class="page-link">{{ $element }}</a></li>
                @endif


                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active"><a class="page-link">{{ $page }}</a></li>
                        @else
                            <li class="page-item" style="cursor:pointer"><a class="page-link" onclick="ajaxPagination('{{ $url }}');">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach


            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item" style="cursor:pointer"><a class="page-link" onclick="ajaxPagination('{{ $paginator->nextPageUrl() }}');" rel="next">»</a></li>
            @else
                <li class="page-item"><a class="page-link">»</a></li>
            @endif
        </ul>
    </nav>
@endif