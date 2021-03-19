@extends('layouts.panel')

@section('content')
    <div class="container">
        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Link</h1>
                </div>
            </div><!--/.row-->
            <form class="form row save" id="saveForm" method="{{ isset($link) ? 'put' : 'post' }}"
                  action="{{ route(isset($link) ? 'api.link.update' : 'api.link.add') }}">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                        <x-panel.form.input.text
                            name="url"
                            placeholder="URL"
                            required
                            max="512"
                            :value="isset($link) ? $link->url : ''"
                        />
                    </div>
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                        <x-panel.form.select
                            name="product_id"
                            placeholder="Produkt"
                            required
                            :items="$products"
                            :selected="isset($link) ? $link->product_id : 0"
                        />
                    </div>

                    <div class="col-12 col-lg-10 col-lg-offset-1 text-center">
                        <button class="button button-red mx-auto submit" type="submit">ZAPISZ</button>
                        @if(isset($link) && $link->id)
                            <x-panel.form.input.hidden
                                name="id"
                                :value="$link->id"
                            />
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
