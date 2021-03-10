@extends('layouts.front')

@section('content')

    <section id="top" class="product" style="background-image:url({{ asset('images/products/shadow.png') }}), url({{ asset('images/products/one-temperature.png') }})">
        <div class="container">
            <h1 class="title">One Temperature</h1>
        </div>
        <button class="scroll-button" aria-label="scroll-button"><img class="scroll-icon" src="{{ asset('images/svg/scroll.svg') }}" alt="" /></button>
    </section>

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Żelazko, które jedną temperaturą jest w stanie perfekcyjnie wyprasować wszystkie rodzaje materiałów – od delikatnego jedwabiu po twardy jeans. I to bez żadnego ryzyka! Możesz zapomnieć o sortowaniu prania i zmianach temperatury. Od dzisiaj prasowanie jest dziecinnie proste, a czytanie metek z instrukcją prasowania przechodzi do lamusa!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-0" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/one-temperature/0.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Bezpieczna temperatura</h2><span class="line"></span>
                    <p class="feature-text">Jedno optymalne ustawienie temperatury, które perfekcyjnie wygładzi wszystkie rodzaje tkanin. Prasuj wygodnie, bez ciągłego zmieniania temperatury i bez ryzyka zniszczenia twoich ulubionych ubrań!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-1" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/one-temperature/1.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Gładszy poślizg</h2><span class="line"></span>
                    <p class="feature-text">Prasowanie staje się czystą przyjemnością! A to wszystko dzięki ceramicznej stopie z turmalinem, która pozwala na gładszy o 60% poślizg w porównaniu ze zwykłą ceramiczną powłoką. Materiał nie gniecie się, nie elektryzuje i nie przesuwa po desce, a stopa żelazka nie przykleja się do tkaniny podczas prasowania.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-2" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/one-temperature/2.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Automatyczne wyłączanie</h2><span class="line"></span>
                    <p class="feature-text">Gdyby zdarzyło ci się zapomnieć wyłączyć żelazko, ono zrobi to za ciebie po około 30 sekundach, jeśli stopa skierowana jest w dół lub po 8 minutach, jeśli jest w pozycji pionowej.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-3" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/one-temperature/3.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Pionowy strumień pary</h2><span class="line"></span>
                    <p class="feature-text">Funkcja pionowego strumienia pary sprawdza się znakomicie przy wyrównywaniu fałd na firankach czy poduszkach.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-4" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/one-temperature/4.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Idealne do trudnych materiałów</h2><span class="line"></span>
                    <p class="feature-text">Duże uderzenie pary, aż 210 g na minutę, oraz stała dystrybucja pary o wartości 50 g na minutę, znacznie ułatwi ci prasowanie grubych materiałów, jak len czy dżins.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-5" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/one-temperature/5.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Duża pojemność</h2><span class="line"></span>
                    <p class="feature-text">Zbiornik, który mieści aż 350 ml wody, zapewnia dłuższe korzystanie bez potrzeby częstego napełniania.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-6" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/one-temperature/6.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Potrójna siła czyszcząca</h2><span class="line"></span>
                    <p class="feature-text">Dzięki funkcji samooczyszczenia i systemowi zapobiegającemu tworzeniu się osadu żelazko będzie służyło ci sprawnie przed długi czas.</p>
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
