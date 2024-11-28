@if($animes->hasPages())
    <ul class="pagination separate">
        @if(!$paginator->onFirstPage())
            <li>
                <a href="{{ $animes->previousPageUrl() }}">
                    <i class="fa fa-thin fa-arrow-left"></i>
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li>
                    <span>...</span>
                </li>
            @endif
            {{-- Array Of Links --}}
            @if(is_array($element))
                @foreach($element as $page => $url)
                    <li class="{{ $page == $paginator->currentPage() ? 'current' : '' }}">
                        <a href="{{ $url }}">
                            {{ $page }}
                        </a>
                    </li>
                @endforeach
            @endif
        @endforeach

        @if($animes->hasMorePages())
            <li>
                <a href="{{ $animes->nextPageUrl() }}">
                    <i class="fa fa-thin fa-arrow-right"></i>
                </a>
            </li>
        @endif
    </ul>
@endif
