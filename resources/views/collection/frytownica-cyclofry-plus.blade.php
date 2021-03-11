@extends('layouts.front')

@section('content')

    @include('collection.section.top', [
        'title' => 'Frytownica Cyclofry Plus',
        'poster' => asset('images/products/frytownica-cyclofry-plus.jpg'),
    ])

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Gotuj, smaż, grilluj i piecz bez dodatku oleju dzięki innowacyjnej i wszechstronnej frytownicy Cyclofry! W urządzeniu z łatwością przygotujesz swoje ulubione smakołyki. To na co masz dziś ochotę? Smażone frytki? Grillowane warzywa? A może kebab? Gotuj z fantazją i bez ograniczeń, by dzień smakował lepiej!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-0" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/frytownica-cyclofry-plus/0.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Kosz obrotowy</h2><span class="line"></span>
                    <p class="feature-text">Kosz obrotowy frytownicy Cyclofry Plus to idealne rozwiązanie dla uzyskania równomiernego gotowania. Nie musisz potrząsać smażonymi ziemniakami co dziesięć minut, by zredukować przypalenia, ponieważ obracający się kosz zrobi to za Ciebie.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-1" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/frytownica-cyclofry-plus/1.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Dodatkowe akcesoria</h2><span class="line"></span>
                    <p class="feature-text">Rozwiń swoją kulinarną kreatywność, dzięki dodatkowym akcesoriom, które pozwalają gotować różnorodne posiłki. Możesz użyć rusztu do szaszłyków lub skorzystać z rusztu do mini kebabów, żeby stworzyć alternatywę dla codziennych obiadów.</p>
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
