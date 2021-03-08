@extends('layouts.front')

@section('content')

    <section id="top" class="product" style="background-image:url({{ asset('images/products/shadow.png') }}), url({{ asset('images/products/cooper-express.png') }})">
        <div class="container">
            <h1 class="title">Cooper Express</h1>
        </div>
        <button class="scroll-button" aria-label="scroll-button"><img class="scroll-icon" src="{{ asset('images/svg/scroll.svg') }}" alt="" /></button>
    </section>

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Wyraź swój styl z żelazkiem Copper Express! Jego sprytny design i funkcje sprawią, że prasowanie stanie się samą przyjemnością. Dzięki niemu w mgnieniu oka uporasz się z uporczywymi zagnieceniami.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-0" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/cooper-express/0.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Ultraszybkie nagrzewanie</h2><span class="line"></span>
                    <p class="feature-text">Nie ma nic gorszego niż czekanie na nagrzanie się żelazka, gdy już dawno jest się spóźnionym do wyjścia z domu, prawda? Nasze żelazko copper express zostało wyposażone w ultraszybko nagrzewającą się miedzianą stopę, dzięki której w mig uporasz się z wyprasowaniem swojej wyjściowej sukienki. I zachwycisz wszystkich!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-1" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/cooper-express/1.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Ekskluzywny wygląd</h2><span class="line"></span>
                    <p class="feature-text">Daj się uwieść najbardziej stylowemu żelazku w naszej ofercie! Miedziane akcenty i piękne metaliczne czarne wykończenia sprawiają, że prasowanie staje się prawdziwie estetycznym doznaniem.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-2" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/cooper-express/2.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Pomoc przy trudniejszych materiałach</h2><span class="line"></span>
                    <p class="feature-text">Zmagasz się z uporczywymi zagnieceniami na ukochanej koszuli? Nie ma problemu! Użyj przycisku steam shot, a dzięki parze wodnej w potężnej dawce 150g skutecznie zmiękczysz tkaninę i z łatwością ją wygładzisz.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-3" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/cooper-express/3.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Pionowy i poziomy wyrzut pary</h2><span class="line"></span>
                    <p class="feature-text">Doskonale wiemy, że niektóre tkaniny prasuje się zdecydowanie ciężej niż inne. Dlatego żelazko copper express posiada zmienną kontrolę pary wodnej. Dzięki niej możesz regulować jej wydajność, przez co z łatwością poradzisz sobie nawet z najtrudniejszymi zagnieceniami. Z kolei z opcją pionowego wyrzutu pary bez problemu usuniesz zagniecenia na wiszących ubraniach.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-4" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/cooper-express/4.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Duża moc</h2><span class="line"></span>
                    <p class="feature-text">Stylowy wygląd to nie wszystko! Żelazko copper express może pochwalić się imponującą mocą 2600w. Dzięki takiej wydajności będziesz w stanie wyprasować każde zagniecenie bez wysiłku.</p>
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
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.euro.com.pl/zelazka/russell-hobbs-copper-express.bhtml" target="_blank" rel="noopener noreferrer" aria-label="euro">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/euro.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.oleole.pl/zelazka/russell-hobbs-copper-express.bhtml" target="_blank" rel="noopener noreferrer" aria-label="oleole">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/oleole.png') }}" alt="" /></div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('collection.section.carousel-irons')

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
                                        <h3 class="opinion-client">Ania</h3>
                                        <p class="opinion-text">Bardzo dobry produkt w dobrej cenie. Polecam</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="opinion">
                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        <img class="opinion-img lazy" data-src="{{ asset('images/svg/quote.svg') }}" alt="" />
                                        <h3 class="opinion-client">Bogna</h3>
                                        <p class="opinion-text">Żelazko Russel Hobbs Copper Express jest fantastyczne. Bardo szybko się nagrzewa,dobrze manewruje się nim,prasowanie nie wymaga dużego nacisku. A przy tym fantastyczny design. Polecam z przekonaniem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="opinion">
                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        <img class="opinion-img lazy" data-src="{{ asset('images/svg/quote.svg') }}" alt="" />
                                        <h3 class="opinion-client">Marta</h3>
                                        <p class="opinion-text">Super żelazko! Miałam wiele urzadzeń do prasowania, ale to według mnie jest zdecydowanie najlepsze. Polecam z czystym sercem! :) ładnie doprasowuje nawet najbardziej upierdliwe zagniecenia.</p>
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
