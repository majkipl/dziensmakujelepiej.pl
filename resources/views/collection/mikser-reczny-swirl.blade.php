@extends('layouts.front')

@section('content')

    <section id="top" class="product" style="background-image:url({{ asset('images/products/shadow.png') }}), url({{ asset('images/products/mikser-reczny-swirl.jpg') }})">
        <div class="container">
            <h1 class="title">Mikser ręczny SWIRL</h1>
        </div>
        <button class="scroll-button" aria-label="scroll-button"><img class="scroll-icon" src="{{ asset('images/svg/scroll.svg') }}" alt="" /></button>
    </section>

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Ten mikser ręczny ma kilka asów w rękawie. Dzięki innowacyjnym końcówkom możesz cieszyć się równomiernym miksowaniem bez wysiłku. Dodatkowo, wszystkie akcesoria zostały umieszczone w poręcznym kontenerku, do którego bez problemu przymocujesz urządzenie, zaoszczędzając przy tym sporo miejsca w szafce. Wybierz jeden z czterech kolorów i miksuj do woli!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-0" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/mikser-reczny-swirl/0.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Wysokiej jakości spiralne mieszadła</h2><span class="line"></span>
                    <p class="feature-text">Bez względu na to, jakie zadanie masz do wykonania - mikser ręczy Swirl został zaprojektowany tak, by proces miksowania był całkowicie bezproblemowy.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-1" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/mikser-reczny-swirl/1.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Mniej bałaganu, lepszy efekt miksowania</h2><span class="line"></span>
                    <p class="feature-text">Mikser ręczny Swirl posiada 5 stopni regulacji prędkości oraz funkcję Turbo Boost, która sprosta każdemu zadaniu.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-2" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/mikser-reczny-swirl/2.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Dołączone akcesoria</h2><span class="line"></span>
                    <p class="feature-text">W zestawie znajdziesz ubijaczki w kształcie helisy, chromowane haki do zagniatania ciasta oraz 2 końcówki do ubijania. Przycisk wysuwania umożliwia łatwy, bezpieczny i bezproblemowy demontaż akcesoriów, które nadają się do mycia w zmywarce.</p>
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
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.mediaexpert.pl/agd-male/do-kuchni/miksery-reczne/mikser-reczny-russell-hobbs-swirl-25890-56-grafitowy" target="_blank" rel="noopener noreferrer" aria-label="mediaexpert">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/mediaexpert.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.avans.pl/agd-male/do-kuchni/miksery-reczne/mikser-reczny-russell-hobbs-swirl-25890-56-grafitowy" target="_blank" rel="noopener noreferrer" aria-label="avans">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/avans.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.electro.pl/agd-male/do-kuchni/miksery-reczne/mikser-reczny-russell-hobbs-swirl-25890-56-grafitowy" target="_blank" rel="noopener noreferrer" aria-label="electro">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/electro.png') }}" alt="" /></div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('collection.section.carousel-preparation')

    <section id="opinions" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <h2 class="title">Opinie klientów</h2><span class="line"></span>
                    <div class="owl-carousel">
                        <div class="item">
                            <div class="opinion">
                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        <img class="opinion-img lazy" data-src="{{ asset('images/svg/quote.svg') }}" alt="" />
                                        <h3 class="opinion-client">Weronika</h3>
                                        <p class="opinion-text">Od dłuższego czasu zastanawiałam się nad zakupem tego miksera. Początkowo zaintrygował mnie elegancki i nowoczesny design. Po zapoznaniu się z opisem producenta dotyczącym funkcji (mieszadła HELIX BEATERS, haki do ciasta, ubijaczki, funkcja turbo boost) zdecydowałam, że to właśnie mój idealny wybór. Po dzisiejszych eksperymentach w kuchni muszę przyznać, że się nie zawiodłam. Jeśli szukasz połączenia designu i funkcjonalności w dobrej cenie to mogę Ci szczerze polecić zakup tego urządzenia :)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="opinion">
                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        <img class="opinion-img lazy" data-src="{{ asset('images/svg/quote.svg') }}" alt="" />
                                        <h3 class="opinion-client">Wojciech</h3>
                                        <p class="opinion-text">Jest OK, mogę polecić. Wydaje mi się, że miksuje o wiele lepiej od takiego zwykłego miksera. Dodatkowo bardzo fajnie ugniata ciasto na pizzę , mniej wysiłku a ciasto lepiej wyrobione . Coś jak z myciem zębów zwykłą oraz soniczną szczoteczką :)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="opinion">
                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        <img class="opinion-img lazy" data-src="{{ asset('images/svg/quote.svg') }}" alt="" />
                                        <h3 class="opinion-client">Michał</h3>
                                        <p class="opinion-text">Nowoczesny design, praktyczny pojemnik na osprzęt, który razem z mikserem tworzy całość, solidne wykonanie, bardzo dobrze stosunek jakości do ceny :) POLECAM.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('collection.section.return')
    @include('common.modal')

@endsection
