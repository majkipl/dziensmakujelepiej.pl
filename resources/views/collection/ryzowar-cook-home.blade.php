@extends('layouts.front')

@section('content')

    <section id="top" class="product" style="background-image:url({{ asset('images/products/shadow.png') }}), url({{ asset('images/products/ryzowar-cook-home.png') }})">
        <div class="container">
            <h1 class="title">Ryżowar Cook@Home</h1>
        </div>
        <button class="scroll-button" aria-label="scroll-button"><img class="scroll-icon" src="{{ asset('images/svg/scroll.svg') }}" alt="" /></button>
    </section>

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Gotowanie ryżu jeszcze nigdy nie było tak łatwe! Dzięki urządzeniu Cook@Home przygotujesz aż 10 porcji za jednym razem! I za każdym razem ziarenka ryżu będą przygotowane idealnie – ryżowar automatycznie wyłączy się, gdy jedzenie będzie gotowe. Do zestawu dołączona jest też taca do gotowania na parze ryb i warzyw.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-0" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/ryzowar-cook-home/0.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Duża pojemność</h2><span class="line"></span>
                    <p class="feature-text">Ryżowar sprawdzi się idealnie niezależnie od tego, czy przygotowujesz obiad tylko dla siebie czy przyjęcie dla przyjaciół. Dzięki dużej pojemności, aż 1,8 l ugotujesz do 10 porcji ryżu za jednym razem.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-1" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/ryzowar-cook-home/1.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Funkcja utrzymywania ciepła</h2><span class="line"></span>
                    <p class="feature-text">Masz ochotę na dokładkę ryżu? Nie ma problemu! Dzięki funkcji utrzymywania ciepła ryż będzie miał odpowiednią temperaturę jeszcze długo po przygotowaniu.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-2" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/ryzowar-cook-home/2.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Tacka do gotowania na parze</h2><span class="line"></span>
                    <p class="feature-text">Czy może być jeszcze smaczniej i jeszcze bardziej zdrowo? Tak! Ryżowar posiada tackę do gotowania na parze. Z łatwością przygotujesz na niej rybę i warzywa, tworząc pełnowartościowy i pożywny posiłek.</p>
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
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.neonet.pl/pozostale/russell-hobbs-ryzowar-19750-56.html" target="_blank" rel="noopener noreferrer" aria-label="neonet">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/neonet.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.neo24.pl/russell-hobbs-ryzowar-19750-56.html" target="_blank" rel="noopener noreferrer" aria-label="neo24">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/neo24.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://mediamarkt.pl/agd-male/garnek-do-ryzu-russell-hobbs-19750-56" target="_blank" rel="noopener noreferrer" aria-label="mediamarkt">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/mediamarkt.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://agdperfekt.pl/5354-ryzowar-russell-hobbs-cookhome-19750-56.html" target="_blank" rel="noopener noreferrer" aria-label="agdperfekt">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/agdperfekt.png') }}" alt="" /></div>
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
                                        <h3 class="opinion-client">Eliza</h3>
                                        <p class="opinion-text">Jestem bardzo zadowolona. Jeśli ktoś ma dodatkowe miejsce w kuchni to zdecydowanie polecam! Ryż z tego urządzenia jest o niebo lepszy :)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="opinion">
                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        <img class="opinion-img lazy" data-src="{{ asset('images/svg/quote.svg') }}" alt="" />
                                        <h3 class="opinion-client">Gosia</h3>
                                        <p class="opinion-text">Zakup wykonałam po przeczytaniu opinii innych użytkowników. Proste, intuicyjne urządzenie do przygotowania ryżu takiego jak lubię, sypkiego bez nadmiaru wody.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="opinion">
                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        <img class="opinion-img lazy" data-src="{{ asset('images/svg/quote.svg') }}" alt="" />
                                        <h3 class="opinion-client">andy295</h3>
                                        <p class="opinion-text">Funkcjonalny, nowoczesny design, idealny na potrzeby domowe, niewielkie rozmiary ułatwiają przechowywanie.</p>
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