@extends('layouts.front')

@section('content')

    <section id="top" class="product" style="background-image:url({{ asset('images/products/shadow.png') }}), url({{ asset('images/products/quiet-super-steam.png') }})">
        <div class="container">
            <h1 class="title">Quiet Super Steam</h1>
        </div>
        <button class="scroll-button" aria-label="scroll-button"><img class="scroll-icon" src="{{ asset('images/svg/scroll.svg') }}" alt="" /></button>
    </section>

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Pożegnaj zagniecenia jednym ruchem! Dzięki wysokiej wydajności pary 315 g i ciśnieniu 8 barów wystarczy jeden ruch, by pozbyć się zagnieceń na ubraniach! Prasowanie jeszcze nigdy nie było tak efektywne i komfortowe! 20% cichsza praca* urządzenia i technologia jednej temperatury sprawią, że wreszcie pokochasz domowe obowiązki!<br><br>*w porównaniu z poprzednimi modelami</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-0" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/quiet-super-steam/0.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Jeszcze dłuższa żywotność</h2><span class="line"></span>
                    <p class="feature-text">Wewnętrzny system usuwania kamienia sprawia, że czyszczenie stacji parowej to pestka! Dzięki temu urządzenie będzie służyło ci naprawdę długo. Wszystko to za sprawą technologii skuteczniejszej niż tefal*.<br><br>*w porównaniu z tefal gv9832. Zweryfikowano niezależnie</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-1" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/quiet-super-steam/1.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Ochrona przed kamieniem</h2><span class="line"></span>
                    <p class="feature-text">I to na 2 sposoby! Pierwsza linia ochrony przed kamieniem to bajecznie łatwy w czyszczeniu filtr antywapienny wielokrotnego użytku. Wystarczy opłukać go pod bieżącą wodą i ponownie włożyć do stacji. Jak często? Poinformuje cię o tym wbudowana kontrolka. Dla dodatkowej ochrony quiet super steam posiada specjalny system podgrzewania wstępnego, który minimalizuje osadzanie się kamienia wewnątrz urządzenia, dzięki czemu pozostaje ono wydajne, a prasowanie przyjemne.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-2" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/quiet-super-steam/2.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Teraz możesz prasować w ciszy</h2><span class="line"></span>
                    <p class="feature-text">Czyli również wtedy, gdy inni domownicy jeszcze śpią. Stacja parowa została wyposażona w technologię, dzięki której urządzenie pracuje aż 20% ciszej*.<br><br>*w porównaniu z poprzednim modelem</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-3" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/quiet-super-steam/3.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Prasuj tak, jak ci wygodnie</h2><span class="line"></span>
                    <p class="feature-text">Rozłóż ubranie na desce lub odśwież bezpośrednio na wieszaku. W quiet super steam masz do dyspozycji funkcję pary pionowej, dzięki czemu możesz dostosować urządzenie do swoich potrzeb. 2750 w mocy, ciśnienie 8 barów i wydajność 315 g bez problemu rozprawią się ze wszelkimi zagnieceniami.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-4" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/quiet-super-steam/4.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Jedna bezpieczna temperatura</h2><span class="line"></span>
                    <p class="feature-text">Z quiet super steam nie musisz co chwilę dostosowywać temperatury do rodzaju tkaniny, jaką prasujesz. Urządzenie zostało wyposażone w technologię jednej, optymalnej temperatury, która bezpiecznie usunie zagniecenia zarówno z jeansu, jak i delikatnego jedwabiu. I masz to z głowy!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-5" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/quiet-super-steam/5.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">1,8 l wody, czyli całe pranie na jedno prasowanie</h2><span class="line"></span>
                    <p class="feature-text">Pojemność zbiornika 1,8 l pozwoli ci sprawnie wyprasować dużą ilość ubrań - bez ciągłego przerywania, by dolać wodę. A jeśli w końcu jej zabraknie, dostaniesz ostrzeżenie o pustym zbiorniku. Nie musisz więc stale sprawdzać, ile wody jeszcze zostało.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-6" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/quiet-super-steam/6.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Jeszcze gładszy poślizg</h2><span class="line"></span>
                    <p class="feature-text">Dzięki ceramicznej stopie żelazka prasujesz bez wysiłku! Równomiernie rozprowadza ciepło, gładko sunąc po tkaninie. Wystarczy jedno przeciągnięcie żelazkiem, by zagniecenia zniknęły.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-7" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/quiet-super-steam/7.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Zapomniałaś/eś wyłączyć?</h2><span class="line"></span>
                    <p class="feature-text">Z quiet super steam nie musisz o tym pamiętać. Stacja parowa wyłączy się automatycznie po 10 minutach bezczynności, jeśli zostawisz ją podłączoną do prądu. Zawsze będziesz wiedzieć, w jakim stanie jest urządzenie, dzięki kontrolce zasilania i temperatury.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-8" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/quiet-super-steam/8.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">1,9 metra swobody i poręczne uchwyty</h2><span class="line"></span>
                    <p class="feature-text">Quiet super steam ma przewód o długości 1,9 m, dzięki czemu z łatwością wyprasujesz duże powierzchnie, np. pościel. Stacja posiada wbudowany schowek na wąż i wtyczkę, więc wygodnie możesz je tam schować. Dodatkowym udogodnieniem są poręczne uchwyty, które ułatwią ci bezpieczne przenoszenie stacji.</p>
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
