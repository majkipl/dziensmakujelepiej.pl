@extends('layouts.front')

@section('content')

    @include('collection.section.top', [
        'title' => 'Textures Plus',
        'poster' => asset('images/products/textures-plus.png'),
    ])

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Kolekcja Textures plus zachwyca nie tylko swoją funkcjonalnością, ale i nowoczesnym designem. Urządzenia będą doskonale wyglądać w Twojej kuchni dzięki matowo-lśniącemu wykończeniu ze wstawkami z polerowanego chromu. Kolekcja dostępna jest w dwóch kolorach do wyboru – czarnym i szarym.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="kettle" class="product-info product-info-0 product-info--3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="title">Czajnik Textures Plus</h2>
                    <div class="button-div">
                        <a class="button" href="#" data-toggle="modal" data-target="#modal" data-collection="{{ $slug }}" data-models="22591-70" data-url="{{ route('api.collection.links', ['slug' => $slug]) }}">Kup teraz</a>
                    </div>
                    <img id="product-img-0" class="product-img lazy" data-src="{{ asset('images/series/textures-plus/22591-70.png') }}" alt="" />
                </div>
                <div class="col-lg-6">
                    <ul class="features">
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/textures-plus/kettle/0.svg') }}" alt="" /></div>
                            <div class="col-10">Podczas gotowania czajnik <strong>podświetla się na niebiesko</strong>, dzięki czemu zawsze wiesz, kiedy woda będzie zagotowana</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/textures-plus/kettle/1.svg') }}" alt="" /></div>
                            <div class="col-10">Zbiornik o <strong>pojemności 1,7 l</strong> umożliwia jednorazowe przygotowanie do 6 filiżanek herbaty, dzięki czemu czajnik doskonale sprawdza się w rodzinach wieloosobowych</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/textures-plus/kettle/2.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Funkcja szybkiego gotowania</strong> umożliwia przygotowanie filiżanki wrzącej wody w zaledwie 50 sekund. Sprawdza się ona doskonale, gdy w porannym pośpiechu chcesz napić się czegoś ciepłego.</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/textures-plus/kettle/3.svg') }}" alt="" /></div>
                            <div class="col-10">Ten stylowy produkt ma <strong>wyprofilowany dzi&oacute;bek</strong>, dzięki kt&oacute;remu woda zawsze trafia do filiżanki bądź szklanki bez rozlewania</div>
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
                    <h2 class="title">Toster Textures Plus</h2>
                    <div class="button-div">
                        <a class="button" href="#" data-toggle="modal" data-target="#modal" data-collection="{{ $slug }}" data-models="22601-56" data-url="{{ route('api.collection.links', ['slug' => $slug]) }}">Kup teraz</a>
                    </div>
                    <img id="product-img-1" class="product-img lazy" data-src="{{ asset('images/series/textures-plus/22601-56.png') }}" alt="" />
                </div>
                <div class="col-lg-6 order-lg-1">
                    <ul class="features">
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/textures-plus/toaster/0.svg') }}" alt="" /></div>
                            <div class="col-10">Toster posiada bardzo <strong>szerokie otwory</strong> na pieczywo, dzięki kt&oacute;rym możesz szybko opiekać bagietki i grubsze kawałki chleba</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/textures-plus/toaster/1.svg') }}" alt="" /></div>
                            <div class="col-10">Dzięki funkcji <strong>regulacji opiekania</strong> możesz dostosować stopień zarumienienia pieczywa do swoich preferencji &ndash; od lekko złocistego po ciemnobrązowy</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/textures-plus/toaster/2.svg') }}" alt="" /></div>
                            <div class="col-10">Urządzenie posiada także <strong>opcję rozmrażania</strong>, dzięki kt&oacute;rej możesz skorzystać z pieczywa wyjętego właśnie z zamrażalnika. W ten spos&oacute;b oszczędzasz cenny czas w porannym pośpiechu. Toster wyposażono r&oacute;wnież <strong>w funkcje anulowania i ponowienia opiekania</strong>.</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/textures-plus/toaster/3.svg') }}" alt="" /></div>
                            <div class="col-10">W zestawie znajdują się <strong>szczypce do wyjmowania tost&oacute;w</strong></div>
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
                    <h2 class="title">Ekspres Textures Plus</h2>
                    <div class="button-div">
                        <a class="button" href="#" data-toggle="modal" data-target="#modal" data-collection="{{ $slug }}" data-models="22620-56" data-url="{{ route('api.collection.links', ['slug' => $slug]) }}">Kup teraz</a>
                    </div>
                    <img id="product-img-2" class="product-img lazy" data-src="{{ asset('images/series/textures-plus/22620-56.png') }}" alt="" />
                </div>
                <div class="col-lg-6">
                    <ul class="features">
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/textures-plus/express/0.svg') }}" alt="" /></div>
                            <div class="col-10">Oryginalna <strong>technologia WhirlTech</strong> usprawnia proces filtrowania, zapewniając bogatszy smak kawy i mniejsze straty podczas filtrowania. Rozwiązanie to polega na spryskiwaniu wodą wszystkich ziaren kawy, a nie tylko tych, kt&oacute;re znajdują się w środkowej części filtra. W ten spos&oacute;b wszystkie ziarna zostają odpowiednio wykorzystane, a kawa ma bogatszy aromat i smak. Ekspres do kawy Textures Plus zawsze przygotuje kawę taką, jak lubisz. Bez względu na to, czy wolisz smak bardziej intensywny czy łagodny</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/textures-plus/express/1.svg') }}" alt="" /></div>
                            <div class="col-10">Dzbanek o <strong>pojemności 1.25 l</strong> umożliwia przygotowanie 10 filiżanek kawy przy jednym parzeniu</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/textures-plus/express/2.svg') }}" alt="" /></div>
                            <div class="col-10">Funkcja <strong>utrzymywania ciepła</strong> sprawia, że możesz się napić ciepłej kawy zawsze, kiedy masz na to ochotę, bez konieczności ponownego zaparzania</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/textures-plus/express/3.svg') }}" alt="" /></div>
                            <div class="col-10">Dzięki <strong>funkcji Pause &amp; Pour</strong> kawa przestaje być filtrowana do dzbanka, kiedy wysuniesz go z ekspresu, więc możesz swobodnie nalewać kawę do filiżanek, podczas gdy z filtra nie skapnie ani kropla na gorącą płytę pod dzbankiem</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/textures-plus/express/4.svg') }}" alt="" /></div>
                            <div class="col-10">Skorzystaj także z funkcji <strong>24-godzinnego programatora czasowego </strong>i ciesz się świeżo zaparzoną kawą gdy tylko się obudzisz</div>
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
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/textures-plus/0.jpg') }}" alt="" /></div>
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/textures-plus/1.jpg') }}" alt="" /></div>
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/textures-plus/2.jpg') }}" alt="" /></div>
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/textures-plus/3.jpg') }}" alt="" /></div>
            </div>
        </div>
    </section>

    @include('collection.section.brand')
    @include('collection.section.carousel-opinions')
    @include('home.section.steps')
    @include('common.modal')

@endsection
