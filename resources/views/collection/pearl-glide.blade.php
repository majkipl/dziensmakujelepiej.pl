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

    <section id="brands" class="product">
        <div class="container">
            <h2 class="title">Gdzie kupić</h2>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.neonet.pl/zelazka/russell-hobbs-pearl-glide-rose-23972-56.html" target="_blank" rel="noopener noreferrer" aria-label="neonet">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/neonet.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.neo24.pl/russell-hobbs-pearl-glide-rose-23972-56.html" target="_blank" rel="noopener noreferrer" aria-label="neo24">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/neo24.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://mambonus.pl/katalog/agd/zelazko_pearl_glide_rose_23972-56_russell_hobbs-4963" target="_blank" rel="noopener noreferrer" aria-label="mambonus">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/mambonus.png') }}" alt="" /></div>
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
                                        <h3 class="opinion-client">m…k</h3>
                                        <p class="opinion-text">Za tą cenę to super żelazko.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="opinion">
                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        <img class="opinion-img lazy" data-src="{{ asset('images/svg/quote.svg') }}" alt="" />
                                        <h3 class="opinion-client">Marzena</h3>
                                        <p class="opinion-text">Bardzo fajne żelazko za przystępną cenę. Polecam</p>
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
