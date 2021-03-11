@extends('layouts.front')

@section('content')

    @include('collection.section.top', [
        'title' => 'Mikser ręczny SWIRL',
        'poster' => asset('images/products/mikser-reczny-swirl.jpg'),
    ])

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Ten mikser ręczny ma kilka asów w rękawie. Dzięki innowacyjnym końcówkom możesz cieszyć się równomiernym miksowaniem bez wysiłku. Dodatkowo, wszystkie akcesoria zostały umieszczone w poręcznym kontenerku, do którego bez problemu przymocujesz urządzenie, zaoszczędzając przy tym sporo miejsca w szafce. Wybierz jeden z czterech kolorów i miksuj do woli!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-0" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/mikser-reczny-swirl/0.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Wysokiej jakości spiralne mieszadła</h2><span class="line"></span>
                    <p class="feature-text">Bez względu na to, jakie zadanie masz do wykonania - mikser ręczy Swirl został zaprojektowany tak, by proces miksowania był całkowicie bezproblemowy.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-1" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/mikser-reczny-swirl/1.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Mniej bałaganu, lepszy efekt miksowania</h2><span class="line"></span>
                    <p class="feature-text">Mikser ręczny Swirl posiada 5 stopni regulacji prędkości oraz funkcję Turbo Boost, która sprosta każdemu zadaniu.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-2" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/mikser-reczny-swirl/2.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Dołączone akcesoria</h2><span class="line"></span>
                    <p class="feature-text">W zestawie znajdziesz ubijaczki w kształcie helisy, chromowane haki do zagniatania ciasta oraz 2 końcówki do ubijania. Przycisk wysuwania umożliwia łatwy, bezpieczny i bezproblemowy demontaż akcesoriów, które nadają się do mycia w zmywarce.</p>
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
