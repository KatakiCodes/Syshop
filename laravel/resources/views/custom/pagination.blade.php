@if ($paginator->hasPages())
<nav aria-label="Page navigation example">
    <ul class="pagination">
        {{-- previous page --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><a class="page-link">Anterior</a><li> 
            @else
            <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">Anterior</a><li> 
        @endif

        {{-- Separate ... from numeric options --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled"><a class="page-link">{{ $element }}</a></li> 
            @endif

        @if (is_array($element))
            @foreach ($element as $page=>$url)
                @if ($page == $paginator->currentPage())
                <li class="page-item active"><a class="page-link">{{ $page }}</a></li> 
                @else
                <li class="page-item"><a class="page-link">{{ $page }}</a></li> 
                @endif
            @endforeach
        @endif
        @endforeach
        {{-- Next page --}}
        @if($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link" href=" {{ $paginator->nextPageUrl() }} ">Próximo</a>
        </li>  
        @else
        <li class="page-item disabled"><a class="page-link">Próximo</a></li>
        @endif
    </ul>
  </nav>
@endif

