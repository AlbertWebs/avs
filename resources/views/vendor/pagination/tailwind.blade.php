@if ($paginator->hasPages())
<ul class="pagination justify-content-center">
{{-- <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
    <span aria-hidden="true">&lsaquo;</span>
</li> --}}
<li class="page-item">
    <a class="page-link page-link-prev" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous" tabindex="-1" aria-disabled="true">
        <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
    </a>
</li>
@else
<li class="page-item">
    <a class="page-link page-link-prev" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous" tabindex="-1" aria-disabled="true">
        <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
    </a>
</li>
@endif

{{-- Pagination Elements --}}
@foreach ($elements as $element)
{{-- "Three Dots" Separator --}}
@if (is_string($element))
    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
@endif

{{-- Array Of Links --}}
@if (is_array($element))
    @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
            {{-- <li class="active" aria-current="page"><span>{{ $page }}</span></li> --}}
            <li class="page-item" aria-current="page"><a class="page-link" href="#">{{ $page }}</a></li>
        @else
            <li class="page-item active" aria-current="page"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
            {{-- <li><a href="{{ $url }}">{{ $page }}</a></li> --}}
        @endif
    @endforeach
@endif
@endforeach

{{-- Next Page Link --}}
@if ($paginator->hasMorePages())
{{-- <li>
    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
</li> --}}
<li class="page-item">
    <a class="page-link page-link-next" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
        Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
    </a>
</li>

@else
<li class="page-item disabled">
    <a class="page-link page-link-next" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
        Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
    </a>
</li>

</ul>
@endif
{{--  --}}


{{--  
<ul class="pagination justify-content-center">
    <li class="page-item disabled">
        <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
            <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
        </a>
    </li>
    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item-total">of 6</li>
    <li class="page-item">
        <a class="page-link page-link-next" href="#" aria-label="Next">
            Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
        </a>
    </li>
</ul>

--}}

