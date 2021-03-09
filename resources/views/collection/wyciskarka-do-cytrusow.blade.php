@extends('layouts.front')

@section('content')

    <section id="top" class="product" style="background-image:url({{ asset('images/products/shadow.png') }}), url({{ asset('images/products/wyciskarka-do-cytrusow.png') }})">
        <div class="container">
            <h1 class="title">Wyciskarka do cytrusów</h1>
        </div><button class="scroll-button" aria-label="scroll-button"><img class="scroll-icon" src="{{ asset('images/svg/scroll.svg') }}" alt="" /></button>
    </section>

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

    <section id="brands" class="product">
        <div class="container">
            <h2 class="title">Gdzie kupić</h2>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.mediaexpert.pl/agd-male/do-kuchni/wyciskarki-do-cytrusow/wyciskarka-do-cytrusow-russell-hobbs-22760-56" target="_blank" rel="noopener noreferrer" aria-label="mediaexpert">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/mediaexpert.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.avans.pl/agd-male/do-kuchni/wyciskarki-do-cytrusow/wyciskarka-do-cytrusow-russell-hobbs-22760-56" target="_blank" rel="noopener noreferrer" aria-label="avans">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/avans.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.zadowolenie.pl/male-agd/do-kuchni/wyciskarki/russell-hobbs-wyciskarka-do-cytrusow-classics-22760-56" target="_blank" rel="noopener noreferrer" aria-label="zadowolenie">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/zadowolenie.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.electro.pl/agd-male/do-kuchni/wyciskarki-do-cytrusow/wyciskarka-do-cytrusow-russell-hobbs-22760-56" target="_blank" rel="noopener noreferrer" aria-label="electro">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/electro.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.neonet.pl/wyciskarki-do-cytrusow/russell-hobbs-russell-hobbs-22760-56-classics.html" target="_blank" rel="noopener noreferrer" aria-label="neonet">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/neonet.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://mediamarkt.pl/agd-male/wyciskarka-russell-hobbs-22760-56-classics" target="_blank" rel="noopener noreferrer" aria-label="mediamarkt">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/mediamarkt.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.neo24.pl/russell-hobbs-russell-hobbs-22760-56-classics.html" target="_blank" rel="noopener noreferrer" aria-label="neo24">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/neo24.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://sklep.payback.pl/nagrody/wyciskarka-do-cytrusow-russell-hobbs-22760-56" target="_blank" rel="noopener noreferrer" aria-label="payback">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/payback.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.morele.net/wyciskarka-do-cytrusow-russell-hobbs-classics-czarno-srebrna-22760-56-706802/" target="_blank" rel="noopener noreferrer" aria-label="morele">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/morele.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.empik.com/wyciskarka-do-cytrusow-russell-hobbs-classics-22760-56-60-w,p1116142923,agd-p" target="_blank" rel="noopener noreferrer" aria-label="empik">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/empik.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.kakto.pl/male-agd-do-kuchni/wyciskarki/russell-hobbs-wyciskarka-do-cytrusow-classics-22760-56" target="_blank" rel="noopener noreferrer" aria-label="kakto">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/kakto.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://agdperfekt.pl/5356-wyciskarka-do-cytrusow-russell-hobbs-classics-22760-56.html" target="_blank" rel="noopener noreferrer" aria-label="agdperfekt">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/agdperfekt.png') }}" alt="" /></div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('collection.section.carousel-preparation')
    @include('collection.section.carousel-opinions')
    @include('collection.section.return')
    @include('common.modal')

@endsection
