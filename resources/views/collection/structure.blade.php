@extends('layouts.front')

@section('content')

    <section id="top" class="product" style="background-image:url({{ asset('images/products/shadow.png') }}), url({{ asset('images/products/structure.jpg') }})">
        <div class="container">
            <h1 class="title">Structure</h1>
        </div>
        <button class="scroll-button" aria-label="scroll-button"><img class="scroll-icon" src="{{ asset('images/svg/scroll.svg') }}" alt="" /></button>
    </section>

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Czajnik i toster z najnowszej kolekcji śniadaniowej Structure to wysokiej jakości wzornictwo na lata. Teksturowana powierzchnia w kolorze białym lub czarnym i przyciągające spojrzenia akcenty ze stali nierdzewnej podkreślą styl Twojej kuchni.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="kettle" class="product-info product-info-0 product-info--2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="title">Czajnik Structure</h2>
                    <div class="button-div">
                        <a class="button" href="#" data-toggle="modal" data-target="#modal" data-series="structure-kettle">Kup teraz</a>
                    </div>
                    <img id="product-img-0" class="product-img lazy" data-src="{{ asset('images/series/structure/kettle/black.png') }}" alt="" />
                    <div class="row color-box">
                        <div class="color-select">
                            <button class="color-option black active" data-img="#product-img-0" data-src="{{ asset('images/series/structure/kettle/black.png') }}" aria-label="color-option"></button>
                            <button class="color-option white" data-img="#product-img-0" data-src="{{ asset('images/series/structure/kettle/white.png') }}" aria-label="color-option"></button>
                        </div>
                        <div class="color-text">wybierz kolor serii</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features">
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/structure/kettle/0.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Funkcja szybkiego gotowania</strong>, dzięki kt&oacute;rej przygotujesz&nbsp;<strong>filiżankę wrzącej wody w niespełna 55 sekund</strong></div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/structure/kettle/1.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Niebieskie podświetlenie</strong> wewnętrzne wskazuje, kiedy czajnik jest w trakcie gotowania</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/structure/kettle/2.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Zdejmowana pokrywa</strong> ułatwia czyszczenie czajnika i uzupełnianie wody</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/structure/kettle/3.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Pojemność 1,7 l</strong> umożliwia przygotowanie aż 6 filiżanek herbaty za jednym razem</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/structure/kettle/4.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Moc 2400 W</strong> pozwala na przygotowanie filiżanki ciepłego napoju w niespełna minutę &ndash; to oszczędność czasu i energii</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/structure/kettle/5.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Idealnie wyprofilowany dzi&oacute;bek</strong>, zaprojektowano tak, aby podczas nalewania gorącej wody nie rozlała się ani kropla</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="toaster" class="product-info product-info-1 product-info--1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <h2 class="title">Toster Structure</h2>
                    <div class="button-div">
                        <a class="button" href="#" data-toggle="modal" data-target="#modal" data-series="structure-toaster">Kup teraz</a>
                    </div>
                    <img id="product-img-1" class="product-img lazy" data-src="{{ asset('images/series/structure/toaster/black.png') }}" alt="" />
                    <div class="row color-box">
                        <div class="color-select">
                            <button class="color-option black active" data-img="#product-img-1" data-src="{{ asset('images/series/structure/toaster/black.png') }}" aria-label="color-option"></button>
                            <button class="color-option white" data-img="#product-img-1" data-src="{{ asset('images/series/structure/toaster/white.png') }}" aria-label="color-option"></button>
                        </div>
                        <div class="color-text">wybierz kolor serii</div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <ul class="features">
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/structure/toaster/0.svg') }}" alt="" /></div>
                            <div class="col-10">Dzięki <strong>funkcji Lift&amp;Look</strong> z łatwością sprawdzisz stopień zarumienienia pieczywa bez potrzeby anulowania opiekania</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/structure/toaster/1.svg') }}" alt="" /></div>
                            <div class="col-10">Lekko zarumienione czy mocno chrupiące? Przygotuj swoje idealne grzanki dzięki <strong>regulacji stopnia opiekania</strong></div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/structure/toaster/2.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Niebieskie podświetlenie</strong> wskazuje, kiedy toster jest w trakcie opiekania</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/structure/toaster/3.svg') }}" alt="" /></div>
                            <div class="col-10">Dodatkowe <strong>funkcje rozmrażania, podgrzewania oraz anulowania</strong> opiekania</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/structure/toaster/4.svg') }}" alt="" /></div>
                            <div class="col-10">W zestawie znajdziesz r&oacute;wnież <strong>ruszt do opiekania bułek i rogalik&oacute;w</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="product">
        <div class="container-xxl">
            <h2 class="title">Zainspiruj się</h2>
            <div class="owl-carousel">
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/structure/0.jpg') }}" alt="" /></div>
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/structure/1.jpg') }}" alt="" /></div>
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/structure/2.jpg') }}" alt="" /></div>
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/structure/3.jpg') }}" alt="" /></div>
            </div>
        </div>
    </section>

    @include('collection.section.carousel-opinions')
    @include('home.section.steps')
    @include('common.modal')

@endsection
