@extends('layouts.front')

@section('content')

    <section id="top" class="product" style="background-image:url({{ asset('images/products/shadow.png') }}),  url({{ asset('images/products/pearl-glide.png') }})">
        <div class="container">
            <h1 class="title">Pearl Glide</h1>
        </div><button class="scroll-button" aria-label="scroll-button"><img class="scroll-icon" src="{{ asset('images/svg/scroll.svg') }}" alt="" /></button>
    </section>

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Pearl Glide to bez wątpienia najbardziej stylowe żelazko z naszej oferty. Dzięki niemu prasowanie przestaje być nudne! Ale design to nie wszystko. Urządzenie zachwyci Cię dużą mocą, gładkim poślizgiem, wytrzymałością i szeregiem innych przydatnych funkcji.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-0" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/pearl-glide/0.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Niepowtarzalny styl</h2><span class="line"></span>
                    <p class="feature-text">Zachwyć się modnym, perłowo-różowym wykończeniem z elementami różowego złota i pozwól, by Twoje codzienne obowiązki stały się przyjemniejsze.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-1" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/pearl-glide/1.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">50% płynniejsze prasowanie</h2><span class="line"></span>
                    <p class="feature-text">Ceramiczna stopa z perłową powłoką zapewni Ci 50% gładszy poślizg, dla jeszcze łatwiejszego prasowania.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-2" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/pearl-glide/2.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Duża moc pary</h2><span class="line"></span>
                    <p class="feature-text">Duże uderzenie pary, aż 150 g na minutę, oraz stała dystrybucja pary o wartości 40 g na minutę znacznie ułatwiają prasowanie, a Ty masz więcej czasu dla siebie.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-3" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/pearl-glide/3.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Zmienna i pionowa para wodna</h2><span class="line"></span>
                    <p class="feature-text">Z pewnością spodoba Ci się także funkcja Variable Steam, która pozwala wybrać dokładnie tyle pary, ile potrzebujesz. Walczysz z upartymi zagnieceniami? Wybierz funkcję pionowej pary!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-4" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/pearl-glide/4.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Potrójna siła czyszcząca</h2><span class="line"></span>
                    <p class="feature-text">Dzięki funkcji samooczyszczenia i systemowi zapobiegającemu tworzeniu się osadu żelazko będzie służyło Ci sprawnie przed długi czas.</p>
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
