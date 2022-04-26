@if ($paginator->hasPages())
{{-- <ul class="custom-pagination"> --}}
    <ul class="pagination mx-auto">

        @if ($paginator->onFirstPage())
        <li class="page-item mx-2 disabled"><span>← Previous</span></li>
        @else
        <li class="page-item mx-2"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a></li>
        @endif


        @foreach ($elements as $element)

        @if (is_string($element))
        <li class="page-item mx-2 disabled"><span>{{ $element }}</span></li>
        @endif


        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="page-item mx-2 active"><span>{{ $page }}</span></li>
        @else
        <li class="page-item mx-2"><a href="{{ $url }}">{{ $page }}</a></li>
        @endif
        @endforeach
        @endif
        @endforeach


        @if ($paginator->hasMorePages())
        <li class="page-item mx-2"><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li>
        @else
        <li class="page-item mx-2 disabled"><span>Next →</span></li>
        @endif
    </ul>
    @endif
