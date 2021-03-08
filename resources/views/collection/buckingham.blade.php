@extends('layouts.front')

@section('content')

    <section id="top" class="product" style="background-image:url({{ asset('images/products/shadow.png') }}), url({{ asset('images/products/buckingham.jpg') }})">
        <video class="video lazy" data-src="{{ asset('mp4/buckingham.mp4') }}" autoplay="" loop="" muted=""></video>
        <div class="container">
            <h1 class="title">Buckingham</h1>
        </div>
        <button class="scroll-button" aria-label="scroll-button"><img class="scroll-icon" src="{{ asset('images/svg/scroll.svg') }}" alt="" /></button>
    </section>
    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Kolekcja Buckingham została stworzona z myślą o tych, którzy nie chcą zakłócać domowego spokoju. Specjalna technologia cichego gotowania ogranicza hałas nawet o 75%*. Od teraz filiżanka espresso o 6 rano czy przygotowywanie mleka dla niemowlaka w środku nocy nie stanowi żadnego problemu dla śpiących domowników.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="kettle" class="product-info product-info-0 product-info--3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="title">Czajnik Buckingham</h2>
                    <div class="button-div">
                        <a class="button" href="#" data-toggle="modal" data-target="#modal" data-series="buckingham-kettle">Kup teraz</a>
                    </div>
                    <img id="product-img-0" class="product-img lazy" data-src="{{ asset('images/series/buckingham/kettle/gray.png') }}" alt="" />
                </div>
                <div class="col-lg-6">
                    <ul class="features">
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/buckingham/kettle/0.svg') }}" alt="" /></div>
                            <div class="col-10">Specjalna powłoka w podstawie czajnika wraz z integralnym pierścieniem rozprasza powstające podczas gotowania bąble powietrza, <strong>minimalizując hałas nawet o 75%</strong>*. To idealny czajnik dla tych, kt&oacute;rzy cenią sobie ciszę i spok&oacute;j, o każdej porze dnia i nocy </div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/buckingham/kettle/1.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Strefy szybkiego gotowania</strong> wskazują pojemność dla 1, 2 lub 3 filiżanek, dzięki czemu zagotujesz dokładnie tyle wody, ile potrzebujesz. Doskonałe rozwiązanie, gdy chcesz szybko napić się czegoś ciepłego, nie marnując przy tym za dużo wody.</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/buckingham/kettle/2.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Dzięki mocy 2400W </strong>przygotujesz 1 filiżankę herbaty w niespełna 50 sekund**</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/buckingham/kettle/3.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Doskonale wyprofilowany dziubek </strong>to łatwiejsze przelewanie wody z czajnika do filiżanki, bez rozlewania choćby kropli</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/buckingham/kettle/4.svg') }}" alt="" /></div>
                            <div class="col-10">Dzięki <strong>pokrywce otwieranej przyciskiem </strong>napełnianie czajnika jest jeszcze łatwiejsze</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="kettle-with-temp-control" class="product-info product-info-1 product-info--2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <h2 class="title">Czajnik z regulacją temperatury Buckingham</h2>
                    <div class="button-div">
                        <a class="button" href="#" data-toggle="modal" data-target="#modal" data-series="buckingham-kettle-with-temp-control">Kup teraz</a>
                    </div>
                    <img id="product-img-1" class="product-img lazy" data-src="{{ asset('images/series/buckingham/kettle-with-temp-control/gray.png') }}" alt="" />
                </div>
                <div class="col-lg-6 order-lg-1">
                    <ul class="features">
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/buckingham/kettle-with-temp-control/0.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Cyfrowy wyświetlacz</strong> pozwala w łatwy spos&oacute;b dostosować temperaturę wody od 60&deg;C do 100&deg;C dla jeszcze smaczniejszych napoj&oacute;w</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/buckingham/kettle-with-temp-control/1.svg') }}" alt="" /></div>
                            <div class="col-10">Specjalna powłoka w podstawie czajnika wraz z integralnym pierścieniem rozprasza powstające podczas gotowania bąble powietrza, <strong>minimalizując hałas nawet o 75%</strong>*. To idealny czajnik dla tych, kt&oacute;rzy cenią sobie ciszę i spok&oacute;j, o każdej porze dnia i nocy </div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/buckingham/kettle-with-temp-control/2.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Strefy szybkiego gotowania</strong> wskazują pojemność dla 1, 2 lub 3 filiżanek, dzięki czemu zagotujesz dokładnie tyle wody, ile potrzebujesz. Doskonałe rozwiązanie, gdy chcesz szybko napić się czegoś ciepłego, nie marnując przy tym za dużo wody.</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/buckingham/kettle-with-temp-control/3.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Dzięki mocy 2400W </strong>przygotujesz 1 filiżankę herbaty w niespełna 50 sekund**</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/buckingham/kettle-with-temp-control/4.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Doskonale wyprofilowany dziubek </strong>to łatwiejsze przelewanie wody z czajnika do filiżanki, bez rozlewania choćby kropli</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/buckingham/kettle-with-temp-control/5.svg') }}" alt="" /></div>
                            <div class="col-10">Dzięki <strong>pokrywce otwieranej przyciskiem </strong>napełnianie czajnika jest jeszcze łatwiejsze</div>
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
                    <h2 class="title">Ekspres Buckingham</h2>
                    <div class="button-div">
                        <a class="button" href="#" data-toggle="modal" data-target="#modal" data-series="buckingham-express">Kup teraz</a>
                    </div>
                    <img id="product-img-2" class="product-img lazy" data-src="{{ asset('images/series/buckingham/express/gray.png') }}" alt="" />
                </div>
                <div class="col-lg-6">
                    <ul class="features">
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/buckingham/express/0.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Ulepszone sterowanie temperaturą</strong> pozwala osiągnąć optymalną temperaturę do przygotowania kawy o <strong>50% szybciej*</strong> i zgodnie z wytycznymi Europejskiego Stowarzyszenia ds. Jakości Kawy. To standardy ustanowione przez ludzi, kt&oacute;rzy doskonale wiedzą, jak powinna smakować idealna kawa. Więc jeśli oni kochają to rozwiązanie, Tobie z pewnością także przypadnie do gustu</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/buckingham/express/1.svg') }}" alt="" /></div>
                            <div class="col-10">Dzięki <strong>24-godzinnemu programatorowi czasu parzenia,</strong> Twoja kawa może czekać na Ciebie od razu po przebudzeniu lub po wieczornym posiłku</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/buckingham/express/2.svg') }}" alt="" /></div>
                            <div class="col-10"><strong>Podświetlany, niebieski pierścień</strong> zapala się podczas parzenia i pozostaje włączony aż do momentu zakończenia programu utrzymywania ciepła</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/buckingham/express/3.svg') }}" alt="" /></div>
                            <div class="col-10">Ekspres pozwala przygotować jednorazowo do <strong>10 filiżanek kawy</strong>, dzięki szklanemu dzbankowi o <strong>pojemności 1.25 litra.</strong> A jeżeli nie potrzebujesz tak dużo kawy, wystarczy zmienić ustawienia, aby przygotować 2-4 filiżanki</div>
                        </li>
                        <li class="row feature">
                            <div class="col-2"><img class="feature-icon" src="{{ asset('images/svg/series/buckingham/express/4.svg') }}" alt="" /></div>
                            <div class="col-10">Dzięki zaawansowanej <strong>technologii przelewowej</strong> ekspres rozprowadza wodę r&oacute;wnomiernie po całej porcji zmielonej kawy, by każda filiżanka miała doskonały smak</div>
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
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/buckingham/0.jpg') }}" alt="" /></div>
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/buckingham/1.jpg') }}" alt="" /></div>
                <div class="item"><img class="item-img lazy" data-src="{{ asset('images/gallery/buckingham/2.jpg') }}" alt="" /></div>
            </div>
        </div>
    </section>

    @include('home.section.steps')
    @include('common.modal')

@endsection
