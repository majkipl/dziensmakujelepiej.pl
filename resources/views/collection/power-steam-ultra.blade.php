@extends('layouts.front')

@section('content')

    <section id="top" class="product" style="background-image:url({{ asset('images/products/shadow.png') }}), url({{ asset('images/products/power-steam-ultra.png') }})">
        <div class="container">
            <h1 class="title">Power Steam Ultra</h1>
        </div>
        <button class="scroll-button" aria-label="scroll-button"><img class="scroll-icon" src="{{ asset('images/svg/scroll.svg') }}" alt="" /></button>
    </section>

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Wiemy, że nie masz czasu na prasowanie. Może nawet go nie lubisz. Dlatego stworzyliśmy żelazko o dużej mocy, które pozwoli Ci szybko i sprawnie rozprawić się z górą prania. I to w bardzo dobrej cenie. Dzięki niemu wszystko staje się prostsze.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-0" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/power-steam-ultra/0.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Szybkie prasowanie</h2><span class="line"></span>
                    <p class="feature-text">3100 W mocy to gwarancja szybkiego prasowania i błyskawiczna gotowość do użycia. Dzięki temu masz więcej czasu dla siebie.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-1" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/power-steam-ultra/1.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Ceramiczna stopa</h2><span class="line"></span>
                    <p class="feature-text">Dzięki idealnie gładkiej, ceramicznej stopie żelazko gładko sunie przez największe zagięcia. Prasowanie nigdy nie było przyjemniejsze.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-2" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/power-steam-ultra/2.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Łatwe prasowanie trudno dostępnych miejsc</h2><span class="line"></span>
                    <p class="feature-text">Specjalnie zaprojektowana końcówka umożliwia bezproblemowe prasowanie przestrzeni pomiędzy guzikami i zapięciami. Nawet męska koszula nie będzie wyzwaniem.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-3" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/power-steam-ultra/3.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Idealne dla trudnych materiałów</h2><span class="line"></span>
                    <p class="feature-text">Duże uderzenie pary, aż 210 g na minutę, oraz stała dystrybucja pary o wartości 45 g na minutę, znacznie ułatwi Ci prasowanie grubych materiałów, jak len czy dżins.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-4" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/power-steam-ultra/4.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Pionowy strumień pary</h2><span class="line"></span>
                    <p class="feature-text">Funkcja pionowego strumienia pary sprawdza się znakomicie przy wyrównywaniu fałd na wiszących ubraniach, firankach czy tapicerce.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-5" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/power-steam-ultra/5.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Duża pojemność</h2><span class="line"></span>
                    <p class="feature-text">Zbiornik, który mieści 350ml wody, zapewnia dłuższe korzystanie bez potrzeby częstego napełniania.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-6" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/power-steam-ultra/6.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Potrójna siła czyszcząca</h2><span class="line"></span>
                    <p class="feature-text">Dzięki funkcji samooczyszczenia i systemowi zapobiegającemu tworzeniu się osadu żelazko będzie służyło Ci sprawnie przed długi czas.</p>
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
                        <div class="col-6 col-md-4">
                            <a class="product-link" href="https://www.euro.com.pl/zelazka/russell-hobbs-power-steam-ultra-20630-56.bhtml" target="_blank" rel="noopener noreferrer" aria-label="euro">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/euro.png') }}" alt="" /></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4">
                            <a class="product-link" href="https://www.oleole.pl/zelazka/russell-hobbs-power-steam-ultra-20630-56.bhtml" target="_blank" rel="noopener noreferrer" aria-label="oleole">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/oleole.png') }}" alt="" /></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4">
                            <a class="product-link" href="https://www.komputronik.pl/product/386017/russell-hobbs-20630-56-power-steam-ultra.html" target="_blank" rel="noopener noreferrer" aria-label="komputronik">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/komputronik.png') }}" alt="" /></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4">
                            <a class="product-link" href="https://www.electro.pl/agd-male/agd-male-do-domu/zelazka/zelazko-russell-hobbs-20630-56-power-steam" target="_blank" rel="noopener noreferrer" aria-label="electro">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/electro.png') }}" alt="" /></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4">
                            <a class="product-link" href="https://www.mediaexpert.pl/agd-male/prasowanie-i-pielegnacja-ubran/zelazka/zelazko-russell-hobbs-20630-56-power-steam" target="_blank" rel="noopener noreferrer" aria-label="mediaexpert">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/mediaexpert.png') }}" alt="" /></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4">
                            <a class="product-link" href="https://www.avans.pl/agd-male/agd-male-do-domu/zelazka/zelazko-russell-hobbs-20630-56-power-steam" target="_blank" rel="noopener noreferrer" aria-label="avans">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/avans.png') }}" alt="" /></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4">
                            <a class="product-link" href="https://mediamarkt.pl/agd-male/zelazko-russell-hobbs-power-steam-ultra-20630-56" target="_blank" rel="noopener noreferrer" aria-label="mediamarkt">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/mediamarkt.png') }}" alt="" /></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4">
                            <a class="product-link" href="https://sklep.payback.pl/nagrody/zelazko-powersteam-ultra-russell-hobbs-20630-56" target="_blank" rel="noopener noreferrer" aria-label="payback">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/payback.png') }}" alt="" /></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4">
                            <a class="product-link" href="https://www.empik.com/zelazko-parowe-russell-hobbs-power-steam-3100-w-0-35-l,p1102859105,agd-p" target="_blank" rel="noopener noreferrer" aria-label="empik">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/empik.png') }}" alt="" /></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4">
                            <a class="product-link" href="https://www.morele.net/zelazko-russell-hobbs-powersteam-ultra-20630-56-666549/" target="_blank" rel="noopener noreferrer" aria-label="morele">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/morele.png') }}" alt="" /></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4">
                            <a class="product-link" href="https://maxelektro.pl/sklep/karta-produktu/zelazko-russell-hobbs-20630-56-power-steam-ultra,36566.html" target="_blank" rel="noopener noreferrer" aria-label="maxelektro">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/maxelektro.png') }}" alt="" /></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4">
                            <a class="product-link" href="https://www.mycenter.pl/zelazko-russell-hobbs-20630-56,id-152915" target="_blank" rel="noopener noreferrer" aria-label="mycenter">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/mycenter.png') }}" alt="" /></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4">
                            <a class="product-link" href="https://mediadomek.pl/product-pol-13425-Russell-Hobbs-20630-56-ZELAZKO-POWERSTEAM-WROCLAW.html" target="_blank" rel="noopener noreferrer" aria-label="mediadomek">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/mediadomek.png') }}" alt="" /></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('collection.section.carousel-irons')
    @include('collection.section.carousel-opinions')
    @include('home.section.steps')
    @include('common.modal')

@endsection
