@extends('layouts.front')

@section('content')

    @include('collection.section.top', [
        'title' => 'Geo Steel',
        'poster' => asset('images/products/geo-steel.jpg'),
        'video' => asset('mp4/geo-steel.mp4')
    ])

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Kolekcja śniadaniowa <strong>Geo Steel</strong> została zaprojektowana z myślą o właścicielach kuchni wykończonych w surowym, <strong>industrialnym stylu</strong>. Jej cechą charakterystyczną jest <strong>metalowa faktura, </strong>inspirowana najświeższymi, geometrycznymi trendami w wystroju wnętrz. Gustowne, stworzone w kolorze <strong>chłodnej szarości</strong> produkty z serii Geo Steel to najwyższej klasy, designerski dodatek do wnętrz, w kt&oacute;rych dominują materiały o surowym wyglądzie, takie jak: beton, stal i drewno.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="kettle" class="product-info product-info-0 product-info--3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="title">Czajnik Geo Steel</h2>
                    <div class="button-div">
                        <a class="button" href="#" data-toggle="modal" data-target="#modal" data-series="geo-steel-kettle">Kup teraz</a>
                    </div>
                    <img id="product-img-0" class="product-img lazy" data-src="{{ asset('images/series/geo-steel/kettle/gray.png') }}" alt="" />
                </div>
                <div class="col-lg-6">
                    <ul class="features">
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/geo-steel/kettle/0.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Wyraźne podświetlenie</strong> wok&oacute;ł dna wskazuje, kiedy czajnik jest w trakcie gotowania</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/geo-steel/kettle/1.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Wewnętrzne markery szybkiego zaparzania dla 1/2/3 filiżanek</strong> pozwalają napełnić czajnik dokładnie taką ilością wody, jakiej potrzebujesz. Dzięki temu oszczędzasz czas i energię elektryczną</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/geo-steel/kettle/2.svg') }}" alt="" /></div>
                            <div class="col-10">Dzięki systemowi szybkiego gotowania możesz przygotować <strong>1 f</strong><strong>iliżankę wrzątku w niespełna 55 sekund*</strong></div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/geo-steel/kettle/3.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Pojemność 1,7 l</strong> umożliwia przygotowanie aż 6 filiżanek herbaty za jednym razem*</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/geo-steel/kettle/4.svg') }}" alt="" /></div>
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
                    <h2 class="title">Toster Geo Steel</h2>
                    <div class="button-div">
                        <a class="button" href="#" data-toggle="modal" data-target="#modal" data-series="geo-steel-toaster">Kup teraz</a>
                    </div>
                    <img id="product-img-1" class="product-img lazy" data-src="{{ asset('images/series/geo-steel/toaster/gray.png') }}" alt="" />
                </div>
                <div class="col-lg-6 order-lg-1">
                    <ul class="features">
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/geo-steel/toaster/0.svg') }}" alt="" /></div>
                            <div class="col-10">Zawsze wiesz, kiedy toster jest włączony i działa w trybie opiekania, dzięki <strong>wyraźnemu podświetleniu obudowy</strong></div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/geo-steel/toaster/1.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Szeroka rama</strong> tostera pozwala opiekać większe i grubsze kromki</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/geo-steel/toaster/2.svg') }}" alt="" /></div>
                            <div class="col-10">Technologia <strong>szybszego opiekania </strong>pozwala znacznie przyspieszyć przygotowanie tost&oacute;w &ndash; będziesz mieć więcej czasu, aby usiąść i spokojnie zjeść śniadanie</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/geo-steel/toaster/3.svg') }}" alt="" /></div>
                            <div class="col-10">Teraz możesz zdecydować, jak bardzo przypieczony ma być Tw&oacute;j tost, dzięki<strong> regulacji przyrumienienia pieczywa</strong></div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/geo-steel/toaster/4.svg') }}" alt="" /></div>
                            <div class="col-10">Opiekaj kromki chleba wyjęte <strong>prosto z zamrażarki</strong>, <strong>podgrzej plasterek</strong>, kt&oacute;ry zostawiłeś wcześniej w tosterze, zatrzymaj cykl opiekania dokładnie wtedy, kiedy zechcesz dzięki przyciskowi natychmiastowego anulowania</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/geo-steel/toaster/5.svg') }}" alt="" /></div>
                            <div class="col-10">Z pewnością spodoba Ci się też funkcja <strong>opiekacza bułek</strong></div>
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
                    <h2 class="title">Ekspres Geo Steel</h2>
                    <div class="button-div">
                        <a class="button" href="#" data-toggle="modal" data-target="#modal" data-series="geo-steel-express">Kup teraz</a>
                    </div>
                    <img id="product-img-2" class="product-img lazy" data-src="{{ asset('images/series/geo-steel/express/gray.png') }}" alt="" />
                </div>
                <div class="col-lg-6">
                    <ul class="features">
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/geo-steel/express/0.svg') }}" alt="" /></div>
                            <div class="col-10">Twoja kawa będzie na Ciebie czekać już po obudzeniu, dzięki <strong>24-godzinnemu programatorowi czasowemu</strong></div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/geo-steel/express/1.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Podświetlana obudowa</strong> podkreśla nowoczesny charakter urządzenia i informuje, kiedy ekspres jest włączony i działa w trybie przyrządzania kawy</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/geo-steel/express/2.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Duży dzbanek o pojemności 1,5 l</strong> umożliwia przygotowanie do <strong>12 dużych lub 18 małych filiżanek</strong> kawy za jednym razem</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/geo-steel/express/3.svg') }}" alt="" /></div>
                            <div class="col-10">Dzięki <strong>zaawansowanej technologii przelewowej</strong> ekspres rozprowadza wodę r&oacute;wnomiernie po całej porcji zmielonej kawy, dzięki czemu każda filiżanka ma doskonały smak</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/geo-steel/express/4.svg') }}" alt="" /></div>
                            <div class="col-10">Ciesz się odpowiednią temperaturą kawy dłużej, dzięki <strong>funkcji utrzymywania ciepła</strong></div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/geo-steel/express/5.svg') }}" alt="" /></div>
                            <div class="col-10">Dzięki funkcji<strong> wyboru mocy kawy</strong> sam decydujesz, czy kawa ma być czarna i mocna na dobry początek dnia, czy potrzebujesz słabszej filiżanki aromatycznego naparu dla smaku pod wiecz&oacute;r</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/geo-steel/express/6.svg') }}" alt="" /></div>
                            <div class="col-10">Dzięki <strong>funkcji przerwania parzenia</strong> możesz napić się kawy, bez czekania na zapełnienie całego dzbanka</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/geo-steel/express/7.svg') }}" alt="" /></div>
                            <div class="col-10">Moc 1000 V</div>
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
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/geo-steel/0.jpg') }}" alt="" /></div>
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/geo-steel/1.jpg') }}" alt="" /></div>
            </div>
        </div>
    </section>

    @include('collection.section.brand')
    @include('collection.section.carousel-opinions')
    @include('home.section.steps')
    @include('common.modal')

@endsection
