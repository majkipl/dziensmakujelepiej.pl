@extends('layouts.front')

@section('content')

    <section id="top" class="product" style="background-image:url({{ asset('images/products/shadow.png') }}), url({{ asset('images/products/zestaw-do-raclette-fiesta.png') }})">
        <div class="container">
            <h1 class="title">Zestaw do Raclette Fiesta</h1>
        </div>
        <button class="scroll-button" aria-label="scroll-button"><img class="scroll-icon" src="{{ asset('images/svg/scroll.svg') }}" alt="" /></button>
    </section>

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

    <section id="brands" class="product">
        <div class="container">
            <h2 class="title">Gdzie kupić</h2>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.euro.com.pl/grille/russell-hobbs-raclette-fiesta-21000-56.bhtml" target="_blank" rel="noopener noreferrer" aria-label="euro">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/euro.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.oleole.pl/grille/russell-hobbs-raclette-fiesta-21000-56.bhtml" target="_blank" rel="noopener noreferrer" aria-label="oleole">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/oleole.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.komputronik.pl/product/346656/russell-hobbs-21000-56-raclette-fiesta.html" target="_blank" rel="noopener noreferrer" aria-label="komputronik">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/komputronik.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.electro.pl/agd-male/do-kuchni/grille-kuchenne/grill-russell-hobbs-21000-56-fiesta-raclette" target="_blank" rel="noopener noreferrer" aria-label="electro">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/electro.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.avans.pl/agd-male/do-kuchni/grille-kuchenne/grill-russell-hobbs-21000-56-fiesta-raclette" target="_blank" rel="noopener noreferrer" aria-label="avans">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/avans.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.mediaexpert.pl/agd-male/do-kuchni/grille-kuchenne/grill-russell-hobbs-21000-56-fiesta-raclette" target="_blank" rel="noopener noreferrer" aria-label="mediaexpert">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/mediaexpert.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.neonet.pl/grille-elektryczne/russell-hobbs-21000-56-fiesta.html" target="_blank" rel="noopener noreferrer" aria-label="neonet">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/neonet.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.neo24.pl/russell-hobbs-21000-56-fiesta.html" target="_blank" rel="noopener noreferrer" aria-label="neo24">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/neo24.png') }}" alt="" /></div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('collection.section.carousel-preparation')

{{--    <section id="opinions" class="product">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-sm-10">--}}
{{--                    <h2 class="title">Opinie klientów</h2><span class="line"></span>--}}
{{--                    <div class="owl-carousel">--}}
{{--                        <div class="item">--}}
{{--                            <div class="opinion">--}}
{{--                                <div class="row justify-content-center">--}}
{{--                                    <div class="col-md-10">--}}
{{--                                        <img class="opinion-img lazy" data-src="{{ asset('images/svg/quote.svg') }}" alt="" />--}}
{{--                                        <h3 class="opinion-client">ella</h3>--}}
{{--                                        <p class="opinion-text">Zamówiony produkt spełnił moje oczekiwania, jest funkcjonalny i estetycznie wykonany. Doskonały na prezent. Dostawa błyskawiczna. Polecam.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="opinion">--}}
{{--                                <div class="row justify-content-center">--}}
{{--                                    <div class="col-md-10">--}}
{{--                                        <img class="opinion-img lazy" data-src="{{ asset('images/svg/quote.svg') }}" alt="" />--}}
{{--                                        <h3 class="opinion-client">Kasiac</h3>--}}
{{--                                        <p class="opinion-text">Grill sprawdził się już na wielu imprezach. Jest to super sprawa!</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="opinion">--}}
{{--                                <div class="row justify-content-center">--}}
{{--                                    <div class="col-md-10">--}}
{{--                                        <img class="opinion-img lazy" data-src="{{ asset('images/svg/quote.svg') }}" alt="" />--}}
{{--                                        <h3 class="opinion-client">Andrzej</h3>--}}
{{--                                        <p class="opinion-text">Grill elektryczny w 100% zgodny z opisem. Bardzo ciekawa propozycja na domowe spotkania przy stole. Polecam.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    @include('collection.section.carousel-opinions')
    @include('collection.section.return')
    @include('common.modal')

@endsection
