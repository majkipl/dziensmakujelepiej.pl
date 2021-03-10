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

    @include('collection.section.brand')
    @include('collection.section.carousel-irons')
    @include('collection.section.carousel-opinions')
    @include('home.section.steps')
    @include('common.modal')

@endsection
