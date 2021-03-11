@extends('layouts.front')

@section('content')

    @include('collection.section.top', [
        'title' => 'Parowar cyfrowy MaxiCook',
        'poster' => asset('images/products/parowar-cyfrowy-maxicook.jpg'),
    ])

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Ciesz się pysznymi i pełnymi witamin posiłkami każdego dnia i oszczędzaj swój czas! Dzięki trzypoziomowemu parowarowi w mgnieniu oka przygotujesz jedocześnie danie główne, na przykład pierś kurczaka lub rybę oraz dodatki takie jak ziemniaki, brokuły i inne warzywa. W zestawie znajduje się również pojemnik do gotowania ryżu.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-0" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/parowar-cyfrowy-maxicook/0.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Praktyczne funkcje</h2><span class="line"></span>
                    <p class="feature-text">Cyfrowy zegar pozwala opóźnić rozpoczęcie gotowania, natomiast funkcja turbo zapewnia szybsze generowanie pary, przyspieszając cały proces – dlatego też urządzenie świetnie sprawdza się w porze lunchu lub kiedy chcesz szybko przygotować jedzenie na wynos.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-1" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/parowar-cyfrowy-maxicook/1.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Duża pojemność</h2><span class="line"></span>
                    <p class="feature-text">Łączna pojemność trzech poziomów urządzenia wynosi aż 10,5 l. Dzięki temu, możesz przygotować jednocześnie obiad dla całej rodziny. W zestawie znajduje się również pojemnik do gotowania ryżu.</p>
                </div>
            </div>
        </div>
    </section>

    @include('collection.section.brand')
    @include('collection.section.carousel-preparation')
    @include('collection.section.carousel-opinions')
    @include('collection.section.return')
    @include('common.modal')

@endsection
