@extends('layouts.front')

@section('content')

    <section id="top" class="product" style="background-image:url({{ asset('images/products/shadow.png') }}), url({{ asset('images/products/colours-plus.png') }})">
        <div class="container">
            <h1 class="title">Colours Plus</h1>
        </div>
        <button class="scroll-button" aria-label="scroll-button"><img class="scroll-icon" src="{{ asset('images/svg/scroll.svg') }}" alt="" /></button>
    </section>

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Produkty z serii Colours Plus to połączenie ciekawego stylu z różnorodnością przydatnych funkcji. Zapomnij o codziennej rutynie! Wybierz ulubiony kolor i ożyw swoją kuchnię.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="kettle" class="product-info product-info-0 product-info--3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="title">Czajnik Colours Plus</h2>
                    <div class="button-div">
                        <a class="button" href="#" data-toggle="modal" data-target="#modal" data-series="colours-plus-kettle">Kup teraz</a>
                    </div>
                    <img id="product-img-0" class="product-img lazy" data-src="{{ asset('images/series/colours-plus/kettle/yellow.png') }}" alt="" />
                </div>
                <div class="col-lg-6">
                    <ul class="features">
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/sv}/series/colours-plus/kettle/0.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Strefy szybkiego gotowania</strong> wskazują ilość wody niezbędnej do przygotowania 1, 2 lub 3 filiżanek, dzięki czemu uzyskasz dokładnie tyle wrzątku ile potrzeba, oszczędzając czas <br /> i energię</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/sv}/series/colours-plus/kettle/1.svg') }}" alt="" /></div>
                            <div class="col-10">Dzięki dużej <strong>mocy 2400 W</strong> przygotujesz filiżankę herbaty w niespełna 50 sekund</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/sv}/series/colours-plus/kettle/2.svg') }}" alt="" /></div>
                            <div class="col-10">Czajnik posiada r&oacute;wnież <strong>ergonomiczną pokrywę</strong>, kt&oacute;rej nie trzeba zdejmować przy nalewaniu wody</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/sv}/series/colours-plus/kettle/3.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Obrotowa podstawa 360&deg;</strong> zapewnia wygodę użytkowania dla os&oacute;b prawo i leworęcznych. <br /> W podstawie znajduje się r&oacute;wnież schowek na przew&oacute;d, dzięki kt&oacute;remu czajnik znacznie lepiej prezentuje się na kuchennym blacie.</div>
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
                    <h2 class="title">Toster Colours Plus</h2>
                    <div class="button-div">
                        <a class="button" href="#" data-toggle="modal" data-target="#modal" data-series="colours-plus-toaster">Kup teraz</a>
                    </div>
                    <img id="product-img-1" class="product-img lazy" data-src="{{ asset('images/series/colours-plus/toaster/yellow.png') }}" alt="" />
                </div>
                <div class="col-lg-6 order-lg-1">
                    <ul class="features">
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/colours-plus/toaster/0.svg') }}" alt="" /></div>
                            <div class="col-10">Dzięki funkcji <strong>szybkiego opiekania</strong> zdążysz zjeść śniadanie nawet w największym porannym pośpiechu</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/colours-plus/toaster/1.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Regulacja opiekania</strong> pozwali uzyskać dokładnie taki stopień zarumienienia pieczywa, jaki lubisz najbardziej</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/colours-plus/toaster/2.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Szerokie otwory</strong> pomieszczą nawet grubsze kawałki pieczywa</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/colours-plus/toaster/3.svg') }}" alt="" /></div>
                            <div class="col-10">Toster posiada <strong>funkcje rozmrażania i anulowania opiekania</strong></div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/colours-plus/toaster/4.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Wbudowany schowek</strong> na przew&oacute;d i <strong>nieślizgające się n&oacute;żki</strong> gwarantują bezpieczną obsługę <br /> i brak bałaganu na kuchennym blacie</div>
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
                    <h2 class="title">Ekspres Colours Plus</h2>
                    <div class="button-div">
                        <a class="button" href="#" data-toggle="modal" data-target="#modal" data-series="colours-plus-express">Kup teraz</a>
                    </div>
                    <img id="product-img-2" class="product-img lazy" data-src="{{ asset('images/series/colours-plus/express/yellow.png') }}" alt="" />
                </div>
                <div class="col-lg-6">
                    <ul class="features">
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/colours-plus/express/0.svg') }}" alt="" /></div>
                            <div class="col-10">Dobrze wiemy, że w porannym pośpiechu ciężko znaleźć chwilę na zaparzenie ulubionej kawy. <strong>Funkcja 24-godzinnego programatora czasowego</strong> pozwoli Ci zaprogramować ekspres tak, aby kawa była gotowa, gdy tylko się obudzisz</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/colours-plus/express/1.svg') }}" alt="" /></div>
                            <div class="col-10">Rotacyjna <strong>technologia parzenia kawy WhirlTech</strong> zapewnia doskonały smak</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/colours-plus/express/2.svg') }}" alt="" /></div>
                            <div class="col-10">Szklany dzbanek o <strong>pojemności 1.25 l</strong> pozwala na zaparzenie aż 10 dużych kubk&oacute;w kawy</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/colours-plus/express/3.svg') }}" alt="" /></div>
                            <div class="col-10">Dzięki <strong>funkcji podtrzymywania temperatury</strong> każdy następny kubek kawy będzie r&oacute;wnie smaczny</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/colours-plus/express/4.svg') }}" alt="" /></div>
                            <div class="col-10">Do zestawu została dołączona <strong>łyżka do odmierzania kawy</strong></div>
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
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/colours-plus/0.jpg') }}" alt="" /></div>
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/colours-plus/1.jpg') }}" alt="" /></div>
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/colours-plus/2.jpg') }}" alt="" /></div>
            </div>
        </div>
    </section>

    @include('collection.section.brand')
    @include('collection.section.carousel-opinions')
    @include('home.section.steps')
    @include('common.modal')

@endsection
