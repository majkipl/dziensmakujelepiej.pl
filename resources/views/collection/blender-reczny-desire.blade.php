@extends('layouts.front')

@section('content')

    <section id="top" class="product" style="background-image:url({{ asset('images/products/shadow.png') }}), url({{ asset('images/products/blender-reczny-desire.jpg') }})">
        <div class="container">
            <h1 class="title">Blender ręczny Desire</h1>
        </div>
        <button class="scroll-button" aria-label="scroll-button"><img class="scroll-icon" src="{{ asset('images/svg/scroll.svg') }}" alt="" /></button>
    </section>

    <section id="copy" class="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <p class="text">Kochasz gotowanie, ale nie masz wystarczająco dużo miejsca na przechowywanie wielu urządzeń? Ten ręczny blender 3w1 jest wprost stworzony dla Ciebie! Dzięki niemu możesz mieszać, ubijać i rozdrabniać składniki oszczędzając czas, energię i przestrzeń w kuchni. Coś nam mówi, że to będzie Twój niezastąpiony towarzysz kulinarnych przygód!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-0" class="feature-info feature-info-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2"><img class="feature-img lazy" data-src="{{ asset('images/series/blender-reczny-desire/0.jpg') }}" alt="" /></div>
                <div class="col-lg-7 order-lg-1">
                    <h2 class="feature-name">Funkcjonalne dodatki</h2><span class="line"></span>
                    <p class="feature-text">Z tym wielofunkcyjnym blenderem ręcznym możesz podjąć się każdego kulinarnego wyzwania. Za jego pomocą z łatwością zmiksujesz składniki na koktajl, posiekasz cebulę, zioła czy orzechy, a nawet ubijesz śmietanę na deser.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-1" class="feature-info feature-info-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img class="feature-img lazy" data-src="{{ asset('images/series/blender-reczny-desire/1.jpg') }}" alt="" /></div>
                <div class="col-lg-7">
                    <h2 class="feature-name">Części możliwe do umycia w zmywarce</h2><span class="line"></span>
                    <p class="feature-text">Dzięki łatwym do wyjęcia akcesoriom, które można myć w zmywarce, gotowanie staje się przyjemnością, a sprzątanie nie sprawia problemów.</p>
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
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.neonet.pl/blendery-reczne/russell-hobbs-desire-24700-56.html" target="_blank" rel="noopener noreferrer" aria-label="neonet">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/neonet.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://www.neo24.pl/russell-hobbs-desire-24700-56.html" target="_blank" rel="noopener noreferrer" aria-label="neo24">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/neo24.png') }}" alt="" /></div>
                            </a></div>
                        <div class="col-6 col-md-4"><a class="product-link" href="https://maxelektro.pl/sklep/karta-produktu/blender-russell-hobbs-24700-56,67654.html" target="_blank" rel="noopener noreferrer" aria-label="maxelektro">
                                <div class="brand-box"><img class="brand-img" src="{{ asset('images/brands/maxelektro.png') }}" alt="" /></div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('collection.section.carousel-preparation')
    @include('collection.section.return')
    @include('common.modal')

@endsection
