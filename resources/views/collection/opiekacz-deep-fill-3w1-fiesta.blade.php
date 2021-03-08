@extends('layouts.front')

@section('content')

    <section id="top" class="product" style="background-image:url({{ asset('images/products/shadow.png') }}), url({{ asset('images/products/opiekacz-deep-fill-3w1-fiesta.png') }})">
        <div class="container">
            <h1 class="title">Opiekacz deep fill 3w1 Fiesta</h1>
        </div>
        <button class="scroll-button" aria-label="scroll-button"><img class="scroll-icon" src="{{ asset('images/svg/scroll.svg') }}" alt="" /></button>
    </section>

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Ten wielofunkcyjny opiekacz to grill, gofrownica i sandwicher w jednym! Dzięki niemu w mig przygotujesz pyszne i różnorodne przekąski od grillowanego boczku i gofrów z czekoladą po pyszne opiekane kanapki.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-0" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/opiekacz-deep-fill-3w1-fiesta/0.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Głębokie płyty</h2><span class="line"></span>
                    <p class="feature-text">Wiemy, że smak opiekanych kanapek zależy od ich nadzienia, dlatego zaprojektowaliśmy nasze płyty tak, by były wystarczająco głębokie i pomieściły wszystkie Twoje ulubione składniki. Niezależnie od tego, czy masz ochotę na kanapkę z łososiem, bądź klasyczne kanapki z serem i szynką – opiekacz do kanapek deep fill pozwoli Ci przygotować dokładnie taką przekąskę, jaką lubisz najbardziej.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-1" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/opiekacz-deep-fill-3w1-fiesta/1.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Łatwe czyszczenie</h2><span class="line"></span>
                    <p class="feature-text">Dzięki nieprzywierającym płytkom, które można łatwo wytrzeć po użyciu lub umieścić bezpośrednio w zmywarce, możesz cieszyć się ciepłym posiłkiem i nie martwić późniejszym zmywaniem.</p>
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
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.mediaexpert.pl/agd-male/do-kuchni/opiekacze/opiekacz-do-kanapek-fiesta-3-w-1-24540-56" target="_blank" rel="noopener noreferrer" aria-label="mediaexpert">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/mediaexpert.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.avans.pl/agd-male/do-kuchni/opiekacze/opiekacz-do-kanapek-fiesta-3-w-1-24540-56" target="_blank" rel="noopener noreferrer" aria-label="avans">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/avans.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://selgros24.pl/Sprzet-AGD/Drobne-AGD/Drobne-AGD-do-kuchni/Opiekacze-elektryczne/RUSSELL-HOBBS/OPIEKACZ-3W1-RUSSELL-HOBBS-24540-56-pp143260.html" target="_blank" rel="noopener noreferrer" aria-label="selgros24">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/selgros24.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.electro.pl/agd-male/do-kuchni/opiekacze/opiekacz-do-kanapek-fiesta-3-w-1-24540-56" target="_blank" rel="noopener noreferrer" aria-label="electro">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/electro.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.neonet.pl/opiekacze-do-kanapek/russell-hobbs-deep-fill-3w1-fiesta-24540-56.html" target="_blank" rel="noopener noreferrer" aria-label="neonet">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/neonet.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.neo24.pl/russell-hobbs-deep-fill-3w1-fiesta-24540-56.html" target="_blank" rel="noopener noreferrer" aria-label="neo24">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/neo24.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://sklep.payback.pl/nagrody/opiekacz-3w1-russell-hobbs" target="_blank" rel="noopener noreferrer" aria-label="payback">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/payback.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://mediamarkt.pl/agd-male/opiekacz-russell-hobbs-24540-56-fiesta" target="_blank" rel="noopener noreferrer" aria-label="mediamarkt">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/mediamarkt.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.morele.net/opiekacz-russell-hobbs-24540-56-4046452/" target="_blank" rel="noopener noreferrer" aria-label="morele">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/morele.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.empik.com/opiekacz-russell-hobbs-fiesta-24540-56-750-w,p1218231884,agd-p" target="_blank" rel="noopener noreferrer" aria-label="empik">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/empik.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://maxelektro.pl/sklep/karta-produktu/opiekacz-russell-hobbs-3w1-24540-56,67647.html" target="_blank" rel="noopener noreferrer" aria-label="maxelektro">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/maxelektro.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.zadowolenie.pl/male-agd/do-kuchni/gofrownice-i-sandwicze/russell-hobbs-opiekacz-do-kanapek-fiesta-3-w-1-24540-56" target="_blank" rel="noopener noreferrer" aria-label="zadowolenie">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/zadowolenie.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.kakto.pl/male-agd-do-kuchni/sandwichery-gofrownice-opiekacze-do-kanapek/russell-hobbs-opiekacz-do-kanapek-fiesta-3-w-1-24540-56" target="_blank" rel="noopener noreferrer" aria-label="kakto">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/kakto.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.al.to/p/421328-opiekacz-russell-hobbs-fiesta-24540-56-3w1.html" target="_blank" rel="noopener noreferrer" aria-label="alto">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/alto.png') }}" alt="" /></div>
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
                                        <h3 class="opinion-client">Tomasz Konstanty</h3>
                                        <p class="opinion-text">Super opiekacz...mój 8 letni syn od razu przy zakupie stwierdził że brakuje kiełbasy do grillowania :) Warto wspomnieć że opiekacz ma bardzo łatwo wymienne formy do kanapek, grillowania i gofrów. Nawet w instrukcji jest przepis..jak by ktoś nie wiedział jak zrobić. Świetnie wygląda, moc taka że się ciężko przestawić ze starego ;) . wygodne zapięcie...no i w ogóle. Marka dobrze zapracowała na pięciogwiazdkową opinię... tylko ta kiełbasa :) ...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="opinion">
                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        <img class="opinion-img lazy" data-src="{{ asset('images/svg/quote.svg') }}" alt="" />
                                        <h3 class="opinion-client">Monika</h3>
                                        <p class="opinion-text">Zakupiony produkt zaskoczył mnie jakością i solidnością wykonania jak i funkcjonowania. Cena rozsądna a w zamian bardzo dobra jakość. Płytki są głębokie. Rączka nie nagrzewa się. Opiekacz z łatwością można zamknąć nawet przy potrójnym toście. Tosty chrupiące. Zupełnie inne niż z dotychczas używanego produktu firmy konkurencyjnej i oferującej droższe produkty. Podobnie z płytką do grillowania. Łosoś w folii, czy zwykła bułka do hot- doga - rewelacja. Czas przygotowania krótszy niż się spodziewałam. Łosoś był gotowy w mniej niż 2 min. Gofrów jeszcze nie testowałam. Gorąco polecam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="opinion">
                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        <img class="opinion-img lazy" data-src="{{ asset('images/svg/quote.svg') }}" alt="" />
                                        <h3 class="opinion-client">Kika</h3>
                                        <p class="opinion-text">Opiekacz zaskoczył mnie jakością.Nie sprawdzałam funkcji gofrownicy. Natomiast płytki do grilla i kanapek naprawdę się sprawdzają. Jestem bardzo zadowolona.</p>
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
