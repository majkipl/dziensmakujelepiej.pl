@extends('layouts.front')

@section('content')

    @include('collection.section.top', [
        'title' => 'Impact',
        'poster' => asset('images/products/impact.png'),
    ])

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Wytrzymałość to drugie imię żelazka Impact. Dlatego nie martw się, jeśli w ferworze codziennych obowiązków przypadkiem upuścisz je na podłogę lub jeśli strącą je z deski Twoje dzieci podczas zabawy. Dzięki specjalnej obudowie żelazko wytrzyma każdy upadek.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-0" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/impact/0.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Wytrzymałość</h2><span class="line"></span>
                    <p class="feature-text">Specjalna powłoka dura-coat zabezpiecza żelazko podczas upadków z wysokości do 1,2 m.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-1" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/impact/1.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Automatyczne wyłączanie</h2><span class="line"></span>
                    <p class="feature-text">Nawet jeśli zapomnisz wyłączyć żelazko, ono zrobi to za ciebie. Wbudowana funkcja samowyłączania robi to na 3 sposoby. Śpiesz się bez obaw.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-2" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/impact/2.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Pionowy strumień pary</h2><span class="line"></span>
                    <p class="feature-text">Funkcja pionowego strumienia pary sprawdzi się znakomicie przy wyrównywaniu fałd na firankach czy poduszkach.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-3" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/impact/3.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Łatwe prasowanie</h2><span class="line"></span>
                    <p class="feature-text">Duże uderzenie pary, aż 160 g na minutę, oraz stała dystrybucja pary o wartości 45 g na minutę znacznie ułatwiają prasowanie, a ty masz więcej czasu dla siebie.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-4" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/impact/4.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Potrójna siła czyszcząca</h2><span class="line"></span>
                    <p class="feature-text">Dzięki funkcji samooczyszczenia i systemowi zapobiegającemu tworzeniu się osadu żelazko będzie służyło ci sprawnie przed długi czas.</p>
                </div>
            </div>
        </div>
    </section>

    @include('collection.section.brand')
    @include('collection.section.carousel-irons')
    @include('collection.section.carousel-opinions')
    @include('collection.section.return')
    @include('common.modal')

@endsection
