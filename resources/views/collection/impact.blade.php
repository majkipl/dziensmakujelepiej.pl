@extends('layouts.front')

@section('content')

    <section id="top" class="product" style="background-image:url({{ asset('images/products/shadow.png') }}), url({{ asset('images/products/impact.png') }})">
        <div class="container">
            <h1 class="title">Impact</h1>
        </div>
        <button class="scroll-button" aria-label="scroll-button"><img class="scroll-icon" src="{{ asset('images/svg/scroll.svg') }}" alt="" /></button>
    </section>

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

    <section id="brands" class="product">
        <div class="container">
            <h2 class="title">Gdzie kupić</h2>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.mediaexpert.pl/agd-male/prasowanie-i-pielegnacja-ubran/zelazka/zelazko-russell-hobbs-impact-24650-56" target="_blank" rel="noopener noreferrer" aria-label="mediaexpert">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/mediaexpert.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.avans.pl/agd-male/agd-male-do-domu/zelazka/zelazko-russell-hobbs-impact-24650-56" target="_blank" rel="noopener noreferrer" aria-label="avans">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/avans.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.electro.pl/agd-male/agd-male-do-domu/zelazka/zelazko-russell-hobbs-impact-24650-56" target="_blank" rel="noopener noreferrer" aria-label="electro">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/electro.png') }}" alt="" /></div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('collection.section.carousel-irons')
    @include('collection.section.carousel-opinions')
    @include('collection.section.return')
    @include('common.modal')

@endsection
