<div>
    @if ($paginator->hasPages())
    <ul class="styled-pagination text-center">
        @if ($paginator->onFirstPage())
            {{-- <li><a href="#" class="active">1</a></li> --}}

            <li aria-disabled="true" aria-label="@lang('pagination.previous')">
                <a class="active">
                    <span class="la la-angle-left"></span>
                </a>
            </li>
        @else
            <li>
                <button type="button" wire:click="previousPage" rel="prev" aria-label="@lang('pagination.previous')">
                    <span class="la la-angle-left"></span>
                </button>
            </li>
        @endif
        @if ($paginator->hasMorePages())
            <li class="">
                <button type="button" wire:click="nextPage" rel="next" aria-label="@lang('pagination.next')">
                    <span class="la la-angle-right"></span>
                </button>
            </li>
        @else
            <li aria-disabled="true" aria-label="@lang('pagination.next')">
                <a class="active">
                    <span class="la la-angle-right"></span>
                </a>
            </li>
        @endif
        {{-- <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#"><span class="la la-angle-right"></span></a></li> --}}
    </ul>
    @endif
</div>
