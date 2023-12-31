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
                        data-url="{{ route('api.application') }}"
                        data-ajax="btAjax"
                >
                    <thead>
                    <tr>
                        <th
                            data-field="id"
                            data-sortable="true"
                            data-search-highlight-formatter="customSearchFormatter"
                            rowspan="2"
                            data-valign="middle"
                            data-filter-control="input"
                        >
                            ID
                        </th>
                        <th
                            data-field="name"
                            data-sortable="true"
                            data-search-highlight-formatter="customSearchFormatter"
                            rowspan="2"
                            data-valign="middle"
                            data-filter-control="input"
                        >
                            Imię i nazwisko
                        </th>
                        <th
                            data-field="email"
                            data-sortable="true"
                            data-search-highlight-formatter="customSearchFormatter"
                            rowspan="2"
                            data-valign="middle"
                            data-filter-control="input"
                        >
                            E-mail
                        </th>
                        <th
                            data-field="phone"
                            data-sortable="true"
                            data-search-highlight-formatter="customSearchFormatter"
                            rowspan="2"
                            data-valign="middle"
                            data-filter-control="input"
                            data-visible="false"
                        >
                            Telefon
                        </th>
                        <th
                            data-field="street"
                            data-sortable="true"
                            data-search-highlight-formatter="customSearchFormatter"
                            rowspan="2"
                            data-valign="middle"
                            data-filter-control="input"
                            data-visible="false"
                        >
                            Ulica
                        </th>
                        <th
                            data-field="flat"
                            data-sortable="true"
                            data-search-highlight-formatter="customSearchFormatter"
                            rowspan="2"
                            data-valign="middle"
                            data-filter-control="input"
                            data-visible="false"
                        >
                            Numer mieszkania
                        </th>
                        <th
                            data-field="zip"
                            data-sortable="true"
                            data-search-highlight-formatter="customSearchFormatter"
                            rowspan="2"
                            data-valign="middle"
                            data-filter-control="input"
                            data-visible="false"
                        >
                            Kod pocztowy
                        </th>
                        <th
                            data-field="city"
                            data-sortable="true"
                            data-search-highlight-formatter="customSearchFormatter"
                            rowspan="2"
                            data-valign="middle"
                            data-filter-control="input"
                            data-visible="false"
                        >
                            Miasto
                        </th>
                        <th
                            data-field="purchase"
                            data-sortable="true"
                            data-search-highlight-formatter="customSearchFormatter"
                            rowspan="2"
                            data-valign="middle"
                            data-filter-control="input"
                            data-visible="false"
                        >
                            Gdzie kupiono?
                        </th>
                        <th
                            data-field="whence"
                            data-sortable="true"
                            data-search-highlight-formatter="customSearchFormatter"
                            rowspan="2"
                            data-valign="middle"
                            data-filter-control="input"
                            data-visible="false"
                        >
                            Skąd wiadomo?
                        </th>
                        <th
                            data-field="whence_other"
                            data-sortable="true"
                            data-search-highlight-formatter="customSearchFormatter"
                            rowspan="2"
                            data-valign="middle"
                            data-filter-control="input"
                            data-visible="false"
                        >
                            Inna odpowiedź
                        </th>
                        <th
                            data-field="img_receipt"
                            data-sortable="true"
                            data-search-highlight-formatter="customSearchFormatter"
                            rowspan="2"
                            data-visible="false"
                            data-valign="middle"
                            data-filter-control="input"
                        >
                            Zdjęcie paragonu
                        </th>
                        <th
                            data-field="img_ean"
                            data-sortable="true"
                            data-search-highlight-formatter="customSearchFormatter"
                            rowspan="2"
                            data-visible="false"
                            data-valign="middle"
                            data-filter-control="input"
                        >
                            Zdjęcie kodu EAN
                        </th>
                        <th
                            data-field="img_box"
                            data-sortable="true"
                            data-search-highlight-formatter="customSearchFormatter"
                            rowspan="2"
                            data-visible="false"
                            data-valign="middle"
                            data-filter-control="input"
                        >
                            Zdjęcie pudełka
                        </th>
                        <th
                            data-field="created_at"
                            data-sortable="true"
                            data-search-highlight-formatter="customSearchFormatter"
                            rowspan="2"
                            data-valign="middle"
                            data-filter-control="input"
                            data-formatter="dateFormatter"
                        >
                            Dodano
                        </th>
                        <th
                            colspan="4"
                            class="text-center"
                            data-valign="middle"
                        >Zgody
                        </th>

                        <th
                            data-field="actions"
                            class="text-center"
                            rowspan="2"
                            data-valign="middle"
                            data-searchable="false"
                            data-formatter="actionsFormatter"
                        ></th>
                    </tr>
                    <tr>
                        <th
                            data-field="legal_1"
                            data-sortable="true"
                            data-search-highlight-formatter="customSearchFormatter"
                            data-visible="false"
                            data-filter-control="select"
                            data-formatter="legalFormatter"
                        >
                            Legal 1?
                        </th>
                        <th
                            data-field="legal_2"
                            data-sortable="true"
                            data-search-highlight-formatter="customSearchFormatter"
                            data-visible="false"
                            data-filter-control="select"
                            data-formatter="legalFormatter"
                        >
                            Legal 2?
                        </th>
                        <th
                            data-field="legal_3"
                            data-sortable="true"
                            data-search-highlight-formatter="customSearchFormatter"
                            data-visible="false"
                            data-filter-control="select"
                            data-formatter="legalFormatter"
                        >
                            Legal 3?
                        </th>
                        <th
                            data-field="legal_4"
                            data-sortable="true"
                            data-search-highlight-formatter="customSearchFormatter"
                            data-visible="false"
                            data-filter-control="select"
                            data-formatter="legalFormatter"
                        >
                            Legal 4?
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

                @include('panel.common.btajax')

                <script>
                    window.actionsFormatter = function (value, row, index) {
                        const view_button = [
                            '<a href="{{ route('back.application') }}/' + row.id + '" title="Zobacz" class="show icon">',
                            '   <i class="bi bi-eye-fill"></i>',
                            '</a>'].join('');
                        return view_button;
                    }
                </script>
            </div>
        </div>
    </div>
@endsection
