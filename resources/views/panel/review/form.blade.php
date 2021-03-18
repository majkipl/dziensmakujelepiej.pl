@extends('layouts.panel')

@section('content')
    <div class="container">
        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Opinia</h1>
                </div>
            </div><!--/.row-->
            <form class="form row save" id="saveForm" method="{{ isset($review) ? 'put' : 'post' }}"
                  action="{{ route(isset($review) ? 'api.review.update' : 'api.review.add') }}">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                        <x-panel.form.input.text
                            name="customer"
                            placeholder="Klient"
                            required
                            max="128"
                            :value="isset($review) ? $review->customer : ''"
                        />
                    </div>
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                        <x-panel.form.textarea
                            name="content"
                            placeholder="Opinia"
                            required
                        >
                            {{ isset($review) ? $review->content : '' }}
                        </x-panel.form.textarea>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                        <x-form.select
                            name="collection_id"
                            placeholder="Kolekcja"
                            required
                            :items="$collections"
                            :selected="isset($review) ? $review->collection->id : 0"
                        />
                    </div>

                    <div class="col-12 col-lg-10 col-lg-offset-1 text-center">
                        <button class="button button-red mx-auto submit" type="submit">ZAPISZ</button>
                        @if(isset($review) && $review->id)
                            <x-panel.form.input.hidden
                                name="id"
                                :value="$review->id"
                            />
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
