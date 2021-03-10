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

    @include('collection.section.brand')
    @include('collection.section.carousel-irons')
    @include('collection.section.carousel-opinions')
    @include('collection.section.return')
    @include('common.modal')

@endsection
