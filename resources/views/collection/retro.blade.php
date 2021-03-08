@extends('layouts.front')

@section('content')

    <section id="top" class="product" style="background-image:url({{ asset('images/products/shadow.png') }}), url({{ asset('images/products/retro.jpg') }})">
        <video class="video lazy" data-src="{{ asset('mp4/retro.mp4') }}" autoplay="" loop="" muted=""></video>
        <div class="container">
            <h1 class="title">Retro</h1>
        </div>
        <button class="scroll-button" aria-label="scroll-button"><img class="scroll-icon" src="{{ asset('images/svg/scroll.svg') }}" alt="" /></button>
    </section>

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Ta przyciągająca wzrok kolekcja produkt&oacute;w śniadaniowych <strong>swoim designem nawiązuje do kultowego stylu retro</strong>. Dostępna jest <strong>aż w czterech kolorach: głębokiej czerwieni, eleganckiej czerni, klasycznego beżu oraz bieli</strong> dla idealnego dopasowania do kuchni w Twoim stylu.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="kettle" class="product-info product-info-0 product-info--3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="title">Czajnik Retro</h2>
                    <div class="button-div">
                        <a class="button" href="#" data-toggle="modal" data-target="#modal" data-series="retro-kettle">Kup teraz</a>
                    </div>
                    <img id="product-img-0" class="product-img lazy" data-src="{{ asset('images/series/retro/kettle/black.png') }}" alt="" />
                    <div class="row color-box">
                        <div class="color-select">
                            <button class="color-option black active" data-img="#product-img-0" data-src="{{ asset('images/series/retro/kettle/black.png') }}" aria-label="color-option"></button>
                            <button class="color-option white" data-img="#product-img-0" data-src="{{ asset('images/series/retro/kettle/white.png') }}" aria-label="color-option"></button>
                            <button class="color-option red" data-img="#product-img-0" data-src="{{ asset('images/series/retro/kettle/red.png') }}" aria-label="color-option"></button>
                            <button class="color-option yellow" data-img="#product-img-0" data-src="{{ asset('images/series/retro/kettle/yellow.png') }}" aria-label="color-option"></button>
                        </div>
                        <div class="color-text">wybierz kolor serii</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features">
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/retro/kettle/0.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Funkcja szybkiego gotowania</strong>, dzięki kt&oacute;rej przygotujesz <strong>filiżankę wrzącej wody w niespełna 55 sekund</strong>*.</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/retro/kettle/1.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Wskaźnik temperatury</strong> pozwala na odpowiednie zaparzenie r&oacute;żnych rodzaj&oacute;w herbaty</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/retro/kettle/2.svg') }}" alt="" /></div>
                            <div class="col-10">Idealnie <strong>wyprofilowany dziubek</strong>, dzięki kt&oacute;remu nie rozlejesz wody</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/retro/kettle/3.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Zdejmowana pokrywa</strong> ułatwiająca czyszczenie czajnika i uzupełnienie wody</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/retro/kettle/4.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Pojemność 1,7 l</strong> umożliwia przygotowanie aż 6 filiżanek herbaty za jednym razem*</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/retro/kettle/5.svg') }}" alt="" /></div>
                            <div class="col-10">Możliwość <strong>szybkiego gotowania</strong>, dzięki strefom wskazującym poziom wody dla od 1 do 3 filiżanek</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/retro/kettle/6.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Moc 2400 W</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="toaster" class="product-info product-info-1 product-info--2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <h2 class="title">Toster Retro</h2>
                    <div class="button-div">
                        <a class="button" href="#" data-toggle="modal" data-target="#modal" data-series="retro-toaster">Kup teraz</a>
                    </div>
                    <img id="product-img-1" class="product-img lazy" data-src="{{ asset('images/series/retro/toaster/black.png') }}" alt="" />
                    <div class="row color-box">
                        <div class="color-select">
                            <button class="color-option black active" data-img="#product-img-1" data-src="{{ asset('images/series/retro/toaster/black.png') }}" aria-label="color-option"></button>
                            <button class="color-option white" data-img="#product-img-1" data-src="{{ asset('images/series/retro/toaster/white.png') }}" aria-label="color-option"></button>
                            <button class="color-option red" data-img="#product-img-1" data-src="{{ asset('images/series/retro/toaster/red.png') }}" aria-label="color-option"></button>
                            <button class="color-option yellow" data-img="#product-img-1" data-src="{{ asset('images/series/retro/toaster/yellow.png') }}" aria-label="color-option"></button>
                        </div>
                        <div class="color-text">wybierz kolor serii</div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <ul class="features">
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/retro/toaster/0.svg') }}" alt="" /></div>
                            <div class="col-10">Lekko zarumienione czy mocno złociste &ndash; przygotuj swoje ulubione tosty, dzięki precyzyjnej <strong>regulacji stopnia opiekania</strong></div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/retro/toaster/1.svg') }}" alt="" /></div>
                            <div class="col-10">Stylowy <strong>wskaźnik odliczający pozostały czas opiekania</strong></div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/retro/toaster/2.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Funkcja "Lift &amp; Look</strong>", dzięki kt&oacute;rej sprawdzisz poziom przyrumienienia pieczywa bez konieczności przerywania pracy urządzenia</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/retro/toaster/3.svg') }}" alt="" /></div>
                            <div class="col-10">Nie tylko grzanki &ndash; dzięki specjalnemu rusztowi z łatwością <strong>podgrzejesz r&oacute;wnież bułki czy croissanty</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="express" class="product-info product-info-0 product-info--1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="title">Ekspres Retro</h2>
                    <div class="button-div">
                        <a class="button" href="#" data-toggle="modal" data-target="#modal" data-series="retro-express">Kup teraz</a>
                    </div>
                    <img id="product-img-2" class="product-img lazy" data-src="{{ asset('images/series/retro/express/black.png') }}" alt="" />
                    <div class="row color-box">
                        <div class="color-select">
                            <button class="color-option black active" data-img="#product-img-2" data-src="{{ asset('images/series/retro/express/black.png') }}" aria-label="color-option"></button>
                            <button class="color-option white" data-img="#product-img-2" data-src="{{ asset('images/series/retro/express/white.png') }}" aria-label="color-option"></button>
                            <button class="color-option red" data-img="#product-img-2" data-src="{{ asset('images/series/retro/express/red.png') }}" aria-label="color-option"></button>
                            <button class="color-option yellow" data-img="#product-img-2" data-src="{{ asset('images/series/retro/express/yellow.png') }}" aria-label="color-option"></button>
                        </div>
                        <div class="color-text">wybierz kolor serii</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features">
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/retro/express/0.svg') }}" alt="" /></div>
                            <div class="col-10">Wydobądź jeszcze głębszy smak kawy, dzięki <strong>zaawanasowanej technologii dozowania wody</strong>, umożliwiającej maksymalne wykorzystanie znajdujących się w filtrze ziaren</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/retro/express/1.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Funkcja utrzymywania ciepła</strong> sprawia, że każda z kolei filiżanka będzie r&oacute;wnie gorąca, jak ta pierwsza zaraz po zaparzeniu</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/retro/express/2.svg') }}" alt="" /></div>
                            <div class="col-10">Szklany dzbanek o <strong>pojemności 1.25 l</strong> pozwala na przygotowanie aż <strong>10 dużych kaw</strong></div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/retro/express/3.svg') }}" alt="" /></div>
                            <div class="col-10">Ekspres wyposażono r&oacute;wnież w duży, stylowy <strong>wskaźnik procesu zaparzania</strong>. Zawsze będziesz wiedzieć, ile czasu pozostało do końca przygotowania kawy oraz jak długo włączona jest funkcja utrzymywania ciepła</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/retro/express/4.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Funkcja "Pause &amp; Pour" </strong>pozwala na zatrzymanie parzenia, aby nalać pierwszą filiżankę kawy, a następnie kontynuować zaparzanie</div>
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
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/retro/0.jpg') }}" alt="" /></div>
            </div>
        </div>
    </section>

    @include('home.section.steps')
    @include('common.modal')

@endsection
