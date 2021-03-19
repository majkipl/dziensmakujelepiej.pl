@extends('layouts.panel')

@section('content')
    <div class="container">
        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Link</h1>
                </div>
            </div><!--/.row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Link {{ $link->id }}</div>
                        <div class="panel-body">
                            <table class="item show data">
                                <tbody>
                                <tr>
                                    <td>Url:</td>
                                    <td>{{ $link->url }}</td>
                                </tr>
                                <tr>
                                    <td>Produkt:</td>
                                    <td>{{ $link->product->code }}</td>
                                </tr>
                                <tr>
                                    <td>Kolekcja:</td>
                                    <td>{{ $link->product->collection->name }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.main-->
    </div>
@endsection
