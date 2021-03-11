@extends('layouts.front')

@section('content')

    @include('collection.section.top', [
        'title' => 'Steam Genie',
        'poster' => asset('images/products/steam-genie.png'),
    ])

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Prasowanie może być przyjemne! Zwłaszcza, kiedy nie musisz rozkładać ciężkiej deski. Ręczny generator pary to oszczędność miejsca i czasu. Zabija do 99,9% bakterii w 60 sekund!* Odśwież nim ozdobne podsuszki na kanapie, wygładź wiszące zasłony, przeprasuj sukienkę na chwilę przed przybyciem gości, a nawet zabierz w podróż. Bądź w pełnej gotowości zawsze i wszędzie.<br><br>* Na podstawie badań laboratoryjnych przeprowadzonych w stosunku do 2 bakterii: Staphylococcus aureus ATTC 6538 i Klebsiella pneumoniae ATC 4352 przy ekspozycji przez 1 minutę w odległości 1 cm od parownicy ręcznej na trzech powierzchniach</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-0" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/steam-genie/0.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Wszechstronność</h2><span class="line"></span>
                    <p class="feature-text">Dzięki trzem nakładkom parownica ręczna jest wszechstronna i możesz ją używać do wielu różnych materiałów i przedmiotów. Nakładka do delikatnych tkanin ułatwi prasowanie jedwabiu i lekkich firanek. Specjalna nakładka do tapicerki czyści i odświeża sofy, materace czy pościel. A frędzle pomogą właścicielom zwierząt domowych w skutecznym usuwaniu sierści z tapicerki i dywanów.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-1" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/steam-genie/1.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Gotowy do pracy w chwilę</h2><span class="line"></span>
                    <p class="feature-text">Prasowanie możesz zacząć już w niespełna 45 sekund od włączenia. Spokojnie zdążysz przygotować swoje ubranie do pracy. Nawet jeśli zaśpisz.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-2" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/steam-genie/2.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Nie trać czasu</h2><span class="line"></span>
                    <p class="feature-text">Duży zbiornik na wodę o pojemności aż 220 ml pozwoli ci na 11 minut stałego generowania pary. Zdziwisz się, jak dużo ubrań wyprasujesz w tym czasie!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-3" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/steam-genie/3.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Bezpieczeństwo</h2><span class="line"></span>
                    <p class="feature-text">Funkcja automatycznego wyłączania, gdy urządzenie nie jest używane, gwarantuje bezpieczeństwo tobie i twojemu domowi.</p>
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
