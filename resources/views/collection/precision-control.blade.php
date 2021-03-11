@extends('layouts.front')

@section('content')

    @include('collection.section.top', [
        'title' => 'Precision Control',
        'poster' => asset('images/products/precision-control.png'),
    ])

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Przygotuj idealną herbatę, kawę lub gorącą czekoladę dzięki czajnikowi z funkcją precyzyjnego mierzenia temperatury wody. Przygotowanie ciepłych napojów jeszcze nigdy nie było tak łatwe! Wystarczy ustawić na cyfrowym wyświetlaczu odpowiednią temperaturę w zakresie od 25°C do 100°C.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="kettle" class="product-info product-info-0 product-info--1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="title">Czajnik Precision Control</h2>
                    <div class="button-div">
                        <a class="button" href="#" data-toggle="modal" data-target="#modal" data-series="precision-control-kettle">Kup teraz</a>
                    </div>
                    <img id="product-img-0" class="product-img lazy" data-src="{{ asset('images/series/precision-control/kettle/white.png') }}" alt="" />
                </div>
                <div class="col-lg-6">
                    <ul class="features">
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/precision-control/kettle/0.svg') }}" alt="" /></div>
                            <div class="col-10">Dzięki <strong>panelowi sterowania temperaturą z wyświetlaczem LCD </strong>z łatwością ustawisz właściwą temperaturę do przygotowania swojego ulubionego napoju - w zakresie od 25&deg;C do 100&deg;C</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/precision-control/kettle/1.svg') }}" alt="" /></div>
                            <div class="col-10">Czajnik ma <strong>pojemność 1,7 l</strong>, dzięki temu przygotujesz nawet sześć filiżanek napoju przy jednorazowym napełnieniu wodą, a specjalna funkcja utrzymywania temperatury nie pozwoli, aby woda ochłodziła się zanim jej użyjesz</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/precision-control/kettle/2.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Obrotowa podstawa</strong> czajnika sprawia, że mogą go używać zar&oacute;wno osoby prawo, jak i leworęczne</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/precision-control/kettle/3.svg') }}" alt="" /></div>
                            <div class="col-10">Aby uniknąć osadzania się kamienia w czajniku i zapobiec wpadaniu kawałk&oacute;w kamienia do filiżanki, czajnik został wyposażony w <strong>specjalny filtr</strong>, kt&oacute;ry można łatwo wyjąć, opłukać i włożyć z powrotem</div>
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
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/precision-control/0.jpg') }}" alt="" /></div>
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/precision-control/1.jpg') }}" alt="" /></div>
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/precision-control/2.jpg') }}" alt="" /></div>
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/precision-control/3.jpg') }}" alt="" /></div>
            </div>
        </div>
    </section>

    @include('collection.section.brand')
    @include('collection.section.carousel-opinions')
    @include('home.section.steps')
    @include('common.modal')

@endsection
