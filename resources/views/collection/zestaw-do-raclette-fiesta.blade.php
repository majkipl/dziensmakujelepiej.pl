@extends('layouts.front')

@section('content')

    @include('collection.section.top', [
        'title' => 'Zestaw do Raclette Fiesta',
        'poster' => asset('images/products/zestaw-do-raclette-fiesta.png'),
    ])

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Od teraz wspólne spożywanie posiłków staje się prawdziwą ucztą! Zestaw do Raclette umożliwia przygotowanie różnych drobnych dań dla 8 osób – od topionego sera po przepyszne naleśniki. Stylowy wygląd i funkcjonalny design sprawiają, że wspólne gotowanie staje się ciekawą rozrywką w gronie znajomych.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-0" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/zestaw-do-raclette-fiesta/0.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Różnorodność funkcji</h2><span class="line"></span>
                    <p class="feature-text">Urządzenie zostało wyposażone w szereg przydatnych funkcji. Posiada płytę do grillowania z wydzielonym miejscem do przygotowywania naleśników, płytę kamienną idealną do smażenia oraz mini-płytę do pancakes'ow.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-1" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/zestaw-do-raclette-fiesta/1.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Bezpieczne uchwyty</h2><span class="line"></span>
                    <p class="feature-text">Oprócz idealnych smakołyków, warto także zadbać o bezpieczeństwo – termoizolacyjne uchwyty patelni zapobiegają oparzeniom.</p>
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
