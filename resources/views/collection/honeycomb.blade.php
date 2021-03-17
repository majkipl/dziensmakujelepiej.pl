@extends('layouts.front')

@section('content')

    @include('collection.section.top', [
        'title' => 'Honeycomb',
        'poster' => asset('images/products/honeycomb.jpg'),
        'video' => asset('mp4/honeycomb.mp4')
    ])

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Z zachwycającą kolekcją <strong>produktów śniadaniowych Honeycomb</strong> w mgnieniu oka odmienisz charakter swojej kuchni. Ich przyciągająca spojrzenia <strong>struktura inspirowana plastrami miodu</strong> oraz <strong>wstawki ze stali nierdzewnej</strong> umilą każdy, nawet najbardziej zabiegany poranek. Produkty zostały zaprojektowane w dwóch kolorach do wyboru – białym i czarnym.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="kettle" class="product-info product-info-0 product-info--3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="title">Czajnik Honeycomb</h2>
                    <div class="button-div">
                        <a class="button" href="#" data-toggle="modal" data-target="#modal" data-collection="{{ $slug }}" data-models="26051-70,26050-70" data-url="{{ route('api.collection.links', ['slug' => $slug]) }}">Kup teraz</a>
                    </div>
                    <img id="product-img-0" class="product-img lazy" data-src="{{ asset('images/series/honeycomb/26051-70.png') }}" alt="" />
                    <div class="row color-box">
                        <div class="color-select">
                            <button class="color-option black active" data-img="#product-img-0" data-src="{{ asset('images/series/honeycomb/26051-70.png') }}" aria-label="color-option"></button>
                            <button class="color-option white" data-img="#product-img-0" data-src="{{ asset('images/series/honeycomb/26050-70.png') }}" aria-label="color-option"></button>
                        </div>
                        <div class="color-text">wybierz kolor serii</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features">
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/honeycomb/kettle/0.svg') }}" alt="" /></div>
                            <div class="col-10">Dzięki <strong>wewnętrznym markerom szybkiego zaparzania i mocy 2400W </strong>przygotowanie filiżanki herbaty zajmie Ci niespełna <strong>55 sekund*</strong>, a gotowanie tylko takiej ilości, jaką potrzebujesz, pozwoli <strong>zaoszczędzić do 66% energii**</strong></div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/honeycomb/kettle/1.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Idealnie wyprofilowany dziubek </strong>to łatwiejsze przelewanie wody z czajnika do filiżanki, bez rozlewania choćby kropli</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/honeycomb/kettle/2.svg') }}" alt="" /></div>
                            <div class="col-10">Imponująca <strong>pojemność 1,7 litra</strong> umożliwia przygotowanie aż 6 filiżanek wrzątku za jednym razem, możesz mieć pewność, że nikomu nie zabraknie kawy </div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/honeycomb/kettle/3.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Przezroczysty wskaźnik poziomu wody</strong> ułatwia zagotowanie dokładnie takiej ilości wrzątku, jakiej potrzebujesz. </div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/honeycomb/kettle/4.svg') }}" alt="" /></div>
                            <div class="col-10">Funkcja <strong>ochrony przed gotowaniem pustego czajnika</strong> zapobiega przegrzaniu urządzenia, zatrzymując jego pracę, jeśli w środku nie ma wystarczającej ilości wody</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/honeycomb/kettle/5.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Podstawa 360&deg; z miejscem na przew&oacute;d</strong> pozwala odstawić czajnik z powrotem na podstawę pod dowolnym kątem. Dla większego porządku w kuchni możesz r&oacute;wnież wygodnie schować przew&oacute;d, gdy nie jest używany </div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/honeycomb/kettle/6.svg') }}" alt="" /></div>
                            <div class="col-10">Dzięki <strong>pokrywce otwieranej przyciskiem </strong>napełnianie czajnika jest jeszcze łatwiejsze</div>
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
                    <h2 class="title">Toster Honeycomb</h2>
                    <div class="button-div">
                        <a class="button" href="#" data-toggle="modal" data-target="#modal" data-collection="{{ $slug }}" data-models="26060-56,26061-56" data-url="{{ route('api.collection.links', ['slug' => $slug]) }}">Kup teraz</a>
                    </div>
                    <img id="product-img-1" class="product-img lazy" data-src="{{ asset('images/series/honeycomb/26061-56.png') }}" alt="" />
                    <div class="row color-box">
                        <div class="color-select">
                            <button class="color-option black active" data-img="#product-img-1" data-src="{{ asset('images/series/honeycomb/26061-56.png') }}" aria-label="color-option"></button>
                            <button class="color-option white" data-img="#product-img-1" data-src="{{ asset('images/series/honeycomb/26060-56.png') }}" aria-label="color-option"></button>
                        </div>
                        <div class="color-text">wybierz kolor serii</div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <ul class="features">
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/honeycomb/toaster/0.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Funkcja wysokiego podnoszenia oraz szerokie szczeliny</strong> pozwalają bez wysiłku wyjmować grzanki z tostera. Nie musisz się więc bać o opuszki palc&oacute;w</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/honeycomb/toaster/1.svg') }}" alt="" /></div>
                            <div class="col-10">Specjalny ruszt umożliwia <strong>opiekanie bułek i rogalik&oacute;w</strong></div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/honeycomb/toaster/2.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Regulacja stopnia opiekania pieczywa</strong> oznacza, że możesz cieszyć się takimi tostami, jak lubisz. Jasne i lekko chrupiące czy złociste i mocno chrupiące? Teraz możesz wybrać, jak mocno rumiany ma być Tw&oacute;j tost</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/honeycomb/toaster/3.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Funkcje rozmrażania, anulowania i podgrzewania</strong> pozwalają na przygotowanie tost&oacute;w prosto z zamrażalnika, podgrzewania kromki, o kt&oacute;rej zapomniałeś lub anulowanie przypiekania w dowolnym momencie, aby uchronić tost przed spaleniem</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/honeycomb/toaster/4.svg') }}" alt="" /></div>
                            <div class="col-10">Pożegnaj się z okruchami na całym blacie dzięki <strong>wyjmowanej tacce na okruszki</strong>. Ta poręczna taca zbiera wszystkie okruchy, kt&oacute;re możesz wyrzucić bezpośrednio do kosza </div>
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
                    <h2 class="title">Ekspres Honeycomb</h2>
                    <div class="button-div">
                        <a class="button" href="#" data-toggle="modal" data-target="#modal" data-collection="{{ $slug }}" data-models="27011-56,27010-56" data-url="{{ route('api.collection.links', ['slug' => $slug]) }}">Kup teraz</a>
                    </div>
                    <img id="product-img-2" class="product-img lazy" data-src="{{ asset('images/series/honeycomb/27011-56.png') }}" alt="" />
                    <div class="row color-box">
                        <div class="color-select">
                            <button class="color-option black active" data-img="#product-img-2" data-src="{{ asset('images/series/honeycomb/27011-56.png') }}" aria-label="color-option"></button>
                            <button class="color-option white" data-img="#product-img-2" data-src="{{ asset('images/series/honeycomb/27010-56.png') }}" aria-label="color-option"></button>
                        </div>
                        <div class="color-text">wybierz kolor serii</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features">
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/honeycomb/express/0.svg') }}" alt="" /></div>
                            <div class="col-10">Dzięki zaawansowanej <strong>technologii przelewowej</strong> ekspres rozprowadza wodę r&oacute;wnomiernie po całej porcji zmielonej kawy, by każda filiżanka miała doskonały smak</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/honeycomb/express/1.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Podświetlana obudowa</strong> podkreśla charakter urządzenia i informuje, kiedy ekspres jest włączony i działa w trybie przyrządzania kawy</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/honeycomb/express/2.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Duży dzbanek o pojemności 1,25 l</strong> umożliwia przygotowanie do 10 dużych filiżanek kawy za jednym razem</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/honeycomb/express/3.svg') }}" alt="" /></div>
                            <div class="col-10">Ciesz się odpowiednią temperaturą kawy dłużej, dzięki <strong>funkcji utrzymywania ciepła do 40 minut</strong></div>
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
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/honeycomb/0.jpg') }}" alt="" /></div>
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/honeycomb/1.jpg') }}" alt="" /></div>
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/honeycomb/2.jpg') }}" alt="" /></div>
            </div>
        </div>
    </section>

    @include('collection.section.brand')
    @include('collection.section.carousel-opinions')
    @include('home.section.steps')
    @include('common.modal')

@endsection
