@if ($paginator->hasPages())
    <div class="row mx-2">
        <div class="col-sm-12 col-md-6">
            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                {!! __('Showing') !!}
                <span>{{ $paginator->firstItem() }}</span>
                {!! __('to') !!}
                <span>{{ $paginator->lastItem() }}</span>
                {!! __('of') !!}
                <span>{{ $paginator->total() }}</span>
                {!! __('results') !!}
            </div>
        </div>

        <div class="col-sm-12 col-md-6">
            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                            <a href="" aria-controls="DataTables_Table_0" data-dt-idx="previous" tabindex="0"
                                class="page-link">Previous</a>
                        </li>
                    @else
                        <li class="paginate_button page-item previous" id="DataTables_Table_0_previous">
                            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                                aria-label="Previous" aria-controls="DataTables_Table_0" data-dt-idx="previous"
                                tabindex="0" class="page-link">Previous</a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="paginate_button page-item" aria-disabled="true">
                                <a href="" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0"
                                    class="page-link">{{ $element }}</a>
                            </li>
                        @endif
                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="paginate_button page-item active" aria-current="page">
                                        <a href="" aria-controls="DataTables_Table_0" data-dt-idx="1"
                                            tabindex="0" class="page-link">{{ $page }}</a>
                                    </li>
                                @else
                                    <li class="paginate_button page-item" aria-current="page">
                                        <a href="{{ $url }}" aria-controls="DataTables_Table_0" data-dt-idx="1"
                                            tabindex="0" class="page-link">{{ $page }}</a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="paginate_button page-item next" id="DataTables_Table_0_next">
                            <a href="{{ $paginator->nextPageUrl() }}" aria-controls="DataTables_Table_0" data-dt-idx="next" tabindex="0"
                                class="page-link">Next</a>
                        </li>
                    @else
                        <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next">
                            <a href="" aria-controls="DataTables_Table_0" data-dt-idx="next" tabindex="0"
                                class="page-link" aria-hidden="true">Next</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endif
