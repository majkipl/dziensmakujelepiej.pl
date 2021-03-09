@extends('layouts.front')

@section('content')

    <section id="top" class="product" style="background-image:url({{ asset('images/products/shadow.png') }}), url({{ asset('images/products/colour-control-supreme.png') }})">
        <div class="container">
            <h1 class="title">Colour Control Supreme</h1>
        </div>
        <button class="scroll-button" aria-label="scroll-button"><img class="scroll-icon" src="{{ asset('images/svg/scroll.svg') }}" alt="" /></button>
    </section>

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Czy prasowanie może być jeszcze przyjemniejsze? TAK! Pozbądź się zagnieceń i jednocześnie chroń intensywne kolory swoich ulubionych ubrań z innowacyjnym żelazkiem Colour Control Supreme. Pozwól, by Twoja codzienność była pełna barw!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-0" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/colour-control-supreme/0.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Ochrona koloru ubrań</h2><span class="line"></span>
                    <p class="feature-text">Nasze najnowsze żelazko wyposażyliśmy w ceramiczną stopę z ochroną uv, która podczas prasowania dba o kolory twoich ulubionych tkanin!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-1" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/colour-control-supreme/1.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Temperatura sterowana kolorami</h2><span class="line"></span>
                    <p class="feature-text">Kolorowy przewodnik pozwoli ci z łatwością dopasować temperaturę prasowania do każdego materiału. Od teraz koniec ze zgadywaniem!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-2" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/colour-control-supreme/2.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Szybsze i łatwiejsze prasowanie</h2><span class="line"></span>
                    <p class="feature-text">Pokonaj nawet najtrudniejsze zagniecenia dzięki imponującej mocy 3100w. Zapewnia ona szybsze i stałe nagrzewanie, możesz się więc cieszyć skuteczniejszym i wygodniejszym prasowaniem.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-3" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/colour-control-supreme/3.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Mocna para</h2><span class="line"></span>
                    <p class="feature-text">Nasze żelazko zapewnia ciągłą parę 50g, która w bezpieczny sposób zmiękcza tkaninę, zapewniając najwyższą skuteczność w walce z uporczywymi zagnieceniami. Masz problem z wyprasowaniem swoich ulubionych dżinsów? Użyj funkcji mocnego uderzenia pary 180g – jej mocny strumień zmiękczy gruby materiał, dzięki czemu bez wysiłku wygładzisz każde zagniecenie.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-4" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/colour-control-supreme/4.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Duży zbiornik na wodę</h2><span class="line"></span>
                    <p class="feature-text">Dzięki jego dużej pojemności (380 ml) szybko uporasz się z dużym stosem prania. Od teraz nie musisz przerywać pracy, by co chwilę uzupełniać brak wody.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-5" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/colour-control-supreme/5.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Stylowy wygląd</h2><span class="line"></span>
                    <p class="feature-text">Urządzenie wygląda tak stylowo, że nie trzeba go chować w szafie. Dzięki chromowanym wstawkom i ceramicznej stopie, która zmienia kolor pod wpływem światła podczas ruchu żelazka, aż chce się je podziwiać!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-6" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/colour-control-supreme/6.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Przewód zasilający</h2><span class="line"></span>
                    <p class="feature-text">Ciesz się swobodą prasowania bez ograniczeń, dzięki 3-metrowemu przewodowi zasilającemu.</p>
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
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.euro.com.pl/zelazka/russell-hobbs-colour-control-supreme-25400-56.bhtml" target="_blank" rel="noopener noreferrer" aria-label="euro">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/euro.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.oleole.pl/zelazka/russell-hobbs-colour-control-supreme-25400-56.bhtml" target="_blank" rel="noopener noreferrer" aria-label="oleole">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/oleole.png') }}" alt="" /></div>
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
