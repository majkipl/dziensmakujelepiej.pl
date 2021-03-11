@extends('layouts.front')

@section('content')

    @include('collection.section.top', [
        'title' => 'Wyciskarka do cytrusów',
        'poster' => asset('images/products/wyciskarka-do-cytrusow.png'),
    ])

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Nic tak nie orzeźwia, jak szklanka świeżo wyciśniętego soku o poranku. Dzięki elektronicznej wyciskarce do cytrusów przygotujesz swój ulubiony napój szybko, łatwo i bez bałaganu. Urządzenie jest bajecznie łatwe w obsłudze i myciu. Więcej smaku, więcej witamin i więcej frajdy każdego dnia!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-0" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/wyciskarka-do-cytrusow/0.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Obracające się stożki</h2><span class="line"></span>
                    <p class="feature-text">Dzięki obracającym się w dwóch kierunkach stożkom z łatwością wydobędziesz sok zarówno z małych jak i dużych owoców do ostatniej kropli. Stożki zaczynają poruszać się automatycznie, gdy umieścisz owoc w odpowiednim miejscu. W zestawie znajdują się dwie nakładki – mniejsza dla cytryn i limonek, a większa dla pomarańczy i grejpfrutów.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-1" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/wyciskarka-do-cytrusow/1.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Wygodne przelewanie soku</h2><span class="line"></span>
                    <p class="feature-text">Dzióbek ze stali nierdzewnej posiada funkcję blokady kapania i został umieszczony na wysokości 13 cm, dzięki temu z łatwością przelejesz sok nawet do wyższych szklanek.</p>
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
