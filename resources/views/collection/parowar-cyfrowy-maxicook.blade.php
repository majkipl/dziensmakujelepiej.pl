@extends('layouts.front')

@section('content')

    <section id="top" class="product" style="background-image:url({{ asset('images/products/shadow.png') }}), url({{ asset('images/products/parowar-cyfrowy-maxicook.jpg') }})">
        <div class="container">
            <h1 class="title">Parowar cyfrowy MaxiCook</h1>
        </div>
        <button class="scroll-button" aria-label="scroll-button"><img class="scroll-icon" src="{{ asset('images/svg/scroll.svg') }}" alt="" /></button>
    </section>

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Ciesz się pysznymi i pełnymi witamin posiłkami każdego dnia i oszczędzaj swój czas! Dzięki trzypoziomowemu parowarowi w mgnieniu oka przygotujesz jedocześnie danie główne, na przykład pierś kurczaka lub rybę oraz dodatki takie jak ziemniaki, brokuły i inne warzywa. W zestawie znajduje się również pojemnik do gotowania ryżu.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-0" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/parowar-cyfrowy-maxicook/0.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Praktyczne funkcje</h2><span class="line"></span>
                    <p class="feature-text">Cyfrowy zegar pozwala opóźnić rozpoczęcie gotowania, natomiast funkcja turbo zapewnia szybsze generowanie pary, przyspieszając cały proces – dlatego też urządzenie świetnie sprawdza się w porze lunchu lub kiedy chcesz szybko przygotować jedzenie na wynos.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-1" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/parowar-cyfrowy-maxicook/1.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Duża pojemność</h2><span class="line"></span>
                    <p class="feature-text">Łączna pojemność trzech poziomów urządzenia wynosi aż 10,5 l. Dzięki temu, możesz przygotować jednocześnie obiad dla całej rodziny. W zestawie znajduje się również pojemnik do gotowania ryżu.</p>
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
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.mediaexpert.pl/agd-male/do-kuchni/parowary/parowar-russell-hobbs-maxicook-23560-56" target="_blank" rel="noopener noreferrer" aria-label="mediaexpert">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/mediaexpert.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.avans.pl/agd-male/do-kuchni/parowary/parowar-russell-hobbs-maxicook-23560-56" target="_blank" rel="noopener noreferrer" aria-label="avans">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/avans.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.electro.pl/agd-male/do-kuchni/parowary/parowar-russell-hobbs-maxicook-23560-56" target="_blank" rel="noopener noreferrer" aria-label="electro">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/electro.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://maxelektro.pl/sklep/karta-produktu/parowar-russell-hobbs-23560-56,67561.html" target="_blank" rel="noopener noreferrer" aria-label="maxelektro">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/maxelektro.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://mambonus.pl/katalog/agd/parowar_cyfrowy_maxicook_23560-56_russell_hobbs-2270" target="_blank" rel="noopener noreferrer" aria-label="mambonus">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/mambonus.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.zadowolenie.pl/male-agd/do-kuchni/parowary-i-kombiwary/russell-hobbs-parowar-maxicook-23560-56" target="_blank" rel="noopener noreferrer" aria-label="zadowolenie">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/zadowolenie.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.kakto.pl/male-agd-do-kuchni/parowary-i-kombiwary/russell-hobbs-parowar-maxicook-23560-56" target="_blank" rel="noopener noreferrer" aria-label="kakto">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/kakto.png') }}" alt="" /></div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('collection.section.carousel-preparation')
    @include('collection.section.carousel-opinions')
    @include('collection.section.return')
    @include('common.modal')

@endsection
