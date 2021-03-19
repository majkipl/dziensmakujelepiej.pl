@extends('layouts.panel')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <table
                        class="bt-table"
                        data-buttons-align="right"
                        data-filter-control="true"
                        data-locale="pl-PL"
                        data-pagination="true"
                        data-remember-order="true"
                        data-search="true"
                        data-search-align="left"
                        data-search-highlight="true"
                        data-searchable="true"
                        data-side-pagination="server"
                        data-show-columns="true"
                        data-show-columns-search="true"
                        data-show-columns-toggle-all="true"
                        data-show-export="true"
                        data-show-pagination-switch="true"
                        data-show-refresh="true"
                        data-show-search-clear-button="true"
                        data-show-toggle="true"
                        data-show-fullscreen="true"
                        data-sort-class="table-active"
                        data-sortable="true"
                        data-toggle="table"
                        data-url="{{ route('api.product') }}"
                        data-ajax="btAjax"
                >
                    <thead>
                    <tr>
                        <th
                            data-field="id"
                            data-sortable="true"
                            data-search-highlight-formatter="customSearchFormatter"
                            data-valign="middle"
                            data-filter-control="input"
                        >
                            ID
                        </th>
                        <th
                            data-field="code"
                            data-sortable="true"
                            data-search-highlight-formatter="customSearchFormatter"
                            data-valign="middle"
                            data-filter-control="input"
                        >
                            Kod producenta
                        </th>
                        <th
                            data-field="collection_id"
                            data-sortable="true"
                            data-search-highlight-formatter="customSearchFormatter"
                            data-valign="middle"
                            data-filter-control="input"
                            data-visible="false"
                        >
                            ID kolekcji
                        </th>
                        <th
                            data-field="collection.name"
                            data-sortable="true"
                            data-search-highlight-formatter="customSearchFormatter"
                            data-valign="middle"
                            data-filter-control="input"
                        >
                            Nazwa kolekcji
                        </th>
                        <th
                            data-field="actions"
                            class="text-center"
                            data-valign="middle"
                            data-searchable="false"
                            data-formatter="actionsFormatter"
                        ></th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

                @include('panel.common.btajax')

                <script>
                    window.actionsFormatter = function (value, row, index) {
                        const view_button = [
                            '<a href="{{ route('back.product') }}/' + row.id + '" title="Zobacz" class="show icon">',
                            '   <i class="bi bi-eye-fill"></i>',
                            '</a>'].join('');
                        return view_button;
                    }
                </script>
            </div>
        </div>
    </div>
@endsection
