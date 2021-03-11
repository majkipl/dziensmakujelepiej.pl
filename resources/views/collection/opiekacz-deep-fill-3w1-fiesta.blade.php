@extends('layouts.front')

@section('content')

    @include('collection.section.top', [
        'title' => 'Opiekacz deep fill 3w1 Fiesta',
        'poster' => asset('images/products/opiekacz-deep-fill-3w1-fiesta.png'),
    ])

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

    @include('collection.section.brand')
    @include('collection.section.carousel-preparation')
    @include('collection.section.carousel-opinions')
    @include('collection.section.return')
    @include('common.modal')

@endsection
