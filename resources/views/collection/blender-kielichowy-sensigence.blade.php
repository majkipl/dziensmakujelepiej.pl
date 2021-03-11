@extends('layouts.front')

@section('content')

    @include('collection.section.top', [
        'title' => 'Blender kielichowy Sensigence',
        'poster' => asset('images/products/blender-kielichowy-sensigence.jpg'),
    ])

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Żyj smacznie i kolorowo dzięki nowemu inteligentnemu blenderowi kielichowemu Sensigence. Przygotujesz w nim znakomite zupy, aksamitne smoothie i orzeźwiające mrożone koktajle. Urządzenie zostało wyposażone w zdejmowane ostrze z 6 nożykami ze stali nierdzewnej dla jeszcze szybszego efektu miksowania i dla jeszcze gładszej konsystencji.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-0" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/blender-kielichowy-sensigence/0.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Szklany kielich o pojemności 1,5 l</h2><span class="line"></span>
                    <p class="feature-text">Pożywne smoothie dla Ciebie czy zupa krem dla całej rodziny? Dzięki dużemu szklanemu kielichowi o pojemności 1,5 l przygotujesz jednocześnie wiele porcji.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-1" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/blender-kielichowy-sensigence/1.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">6 mocnych końcówek dla łatwego miksowania</h2><span class="line"></span>
                    <p class="feature-text">Dzięki mocnym i trwałym ostrzom bez problemu zmiksujesz nawet kostki lodu. Od teraz z łatwością przygotujesz mrożone drinki i aksamitne koktajle.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-2" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/blender-kielichowy-sensigence/2.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Cyfrowy wyświetlacz</h2><span class="line"></span>
                    <p class="feature-text">Nasz blender został wyposażony w dotykowy wyświetlacz cyfrowy z funkcją zegara, za pomocą którego możesz wybrać jedną z trzech inteligentnych programów – zupy, smoothie lub mrożone drinki.</p>
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
