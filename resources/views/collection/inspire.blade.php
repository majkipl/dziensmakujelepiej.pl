@extends('layouts.front')

@section('content')

    @include('collection.section.top', [
        'title' => 'Inspire',
        'poster' => asset('images/products/inspire.jpg'),
        'video' => asset('mp4/inspire.mp4')
    ])

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Pozw&oacute;l się zainspirować <strong>nowoczesną kolekcją produkt&oacute;w śniadaniowych Inspire</strong>, kt&oacute;ra łączy w sobie elementy tworzywa sztucznego o <strong>teksturowanej fakturze z metalicznymi detalami ze stali nierdzewnej</strong>. To połączenie funkcjonalności i designu zachwyci każdego gościa!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="kettle" class="product-info product-info-0 product-info--3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="title">Czajnik Inspire</h2>
                    <div class="button-div">
                        <a class="button" href="#" data-toggle="modal" data-target="#modal" data-collection="{{ $slug }}" data-models="24360-70,24361-70" data-url="{{ route('api.collection.links', ['slug' => $slug]) }}">Kup teraz</a>
                    </div>
                    <img id="product-img-0" class="product-img lazy" data-src="{{ asset('images/series/inspire/24361-70.png') }}" alt="" />
                    <div class="row color-box">
                        <div class="color-select">
                            <button class="color-option black active" data-img="#product-img-0" data-src="{{ asset('images/series/inspire/24361-70.png') }}" aria-label="color-option"></button>
                            <button class="color-option white" data-img="#product-img-0" data-src="{{ asset('images/series/inspire/24360-70.png') }}" aria-label="color-option"></button>
                        </div>
                        <div class="color-text">wybierz kolor serii</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features">
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/inspire/kettle/0.svg') }}" alt="" /></div>
                            <div class="col-10">Dzięki <strong>mocy 2400 W</strong> czajnik Inspire zapewnia szybką filiżankę ciepłego napoju w ciągu kilku minut &ndash; to oszczędność czasu i energii!</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/inspire/kettle/1.svg') }}" alt="" /></div>
                            <div class="col-10">Idealnie <strong>wyprofilowany dziubek</strong>, zaprojektowano tak, aby podczas nalewania gorącej wody nie rozlała się ani kropla</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/inspire/kettle/2.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Pojemność 1,7 l</strong> umożliwia przygotowanie aż 6 filiżanek herbaty za jednym razem*</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/inspire/kettle/3.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Wyraziste podświetlenie</strong> dna wskazuje, kiedy czajnik jest w trakcie gotowania</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/inspire/kettle/4.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Funkcja szybkiego gotowania</strong>, dzięki kt&oacute;rej przygotujesz <strong>filiżankę wrzącej wody w niespełna 55 sekund</strong>*.</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/inspire/kettle/5.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Zdejmowana pokrywa</strong> ułatwia czyszczenie czajnika i uzupełnianie wody</div>
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
                    <h2 class="title">Toster Inspire</h2>
                    <div class="button-div">
                        <a class="button" href="#" data-toggle="modal" data-target="#modal" data-collection="{{ $slug }}" data-models="24370-56,24371-56" data-url="{{ route('api.collection.links', ['slug' => $slug]) }}">Kup teraz</a>
                    </div>
                    <img id="product-img-1" class="product-img lazy" data-src="{{ asset('images/series/inspire/24371-56.png') }}" alt="" />
                    <div class="row color-box">
                        <div class="color-select">
                            <button class="color-option black active" data-img="#product-img-1" data-src="{{ asset('images/series/inspire/24371-56.png') }}" aria-label="color-option"></button>
                            <button class="color-option white" data-img="#product-img-1" data-src="{{ asset('images/series/inspire/24370-56.png') }}" aria-label="color-option"></button>
                        </div>
                        <div class="color-text">wybierz kolor serii</div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <ul class="features">
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/inspire/toaster/0.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Wysoki podnośnik pieczywa</strong> &ndash; dzięki dźwigni, kt&oacute;rą można bez trudu podnieść do g&oacute;ry, wyjmiesz tosta z urządzenia bez ryzyka oparzenia się</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/inspire/toaster/1.svg') }}" alt="" /></div>
                            <div class="col-10">Lekko zarumienione czy mocno złociste &ndash; przygotuj swoje ulubione tosty, dzięki precyzyjnej <strong>regulacji stopnia opiekania</strong></div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/inspire/toaster/2.svg') }}" alt="" /></div>
                            <div class="col-10">Praktyczna funkcja <strong>rozmrażania, anulowania opiekania i podgrzania</strong> z niebieskimi wskaźnikami LED</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/inspire/toaster/3.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Ruszt do podgrzewania</strong> rogalik&oacute;w i bułek w zestawie</div>
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
                    <h2 class="title">Ekspres Inspire</h2>
                    <div class="button-div">
                        <a class="button" href="#" data-toggle="modal" data-target="#modal" data-collection="{{ $slug }}" data-models="24390-56,24391-56" data-url="{{ route('api.collection.links', ['slug' => $slug]) }}">Kup teraz</a>
                    </div>
                    <img id="product-img-2" class="product-img lazy" data-src="{{ asset('images/series/inspire/24391-56.png') }}" alt="" />
                    <div class="row color-box">
                        <div class="color-select">
                            <button class="color-option black active" data-img="#product-img-2" data-src="{{ asset('images/series/inspire/24391-56.png') }}" aria-label="color-option"></button>
                            <button class="color-option white" data-img="#product-img-2" data-src="{{ asset('images/series/inspire/24390-56.png') }}" aria-label="color-option"></button>
                        </div>
                        <div class="color-text">wybierz kolor serii</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features">
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('/images/svg/series/inspire/express/0.svg') }}" alt="" /></div>
                            <div class="col-10">Jeszcze intensywniejszy i lepszy smak kawy, dzięki nowej, <strong>rotacyjnej technologii dozowania wody WhirlTech </strong></div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('/images/svg/series/inspire/express/1.svg') }}" alt="" /></div>
                            <div class="col-10">Przyjemna i łatwa obsługa dzięki <strong>cyfrowemu sterowaniu z wyświetlaczem LCD</strong></div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('/images/svg/series/inspire/express/2.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>24-godzinny programator czasowy</strong>, dzięki kt&oacute;remu możesz ustawić parzenie kawy na dowolną godzinę</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('/images/svg/series/inspire/express/3.svg') }}" alt="" /></div>
                            <div class="col-10">Szklany dzbanek o <strong>pojemności 1.25 l</strong> pozwala na przygotowanie aż <strong>10 dużych kaw</strong></div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('/images/svg/series/inspire/express/4.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Funkcja utrzymywania ciepła</strong> sprawia, że każda z kolei filiżanka będzie r&oacute;wnie gorąca, jak ta pierwsza zaraz po zaparzeniu</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('/images/svg/series/inspire/express/5.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Funkcja "Pause &amp; Pour" </strong>pozwala na zatrzymanie parzenia, aby nalać pierwszą filiżankę kawy, a następnie kontynuować proces zaparzania</div>
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
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/inspire/0.jpg') }}" alt="" /></div>
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/inspire/1.jpg') }}" alt="" /></div>
            </div>
        </div>
    </section>

    @include('collection.section.brand')
    @include('collection.section.carousel-opinions')
    @include('home.section.steps')
    @include('common.modal')

@endsection
