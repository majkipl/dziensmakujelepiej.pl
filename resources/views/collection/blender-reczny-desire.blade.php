@extends('layouts.front')

@section('content')

    @include('collection.section.top', [
        'title' => 'Blender ręczny Desire',
        'poster' => asset('images/products/blender-reczny-desire.jpg'),
    ])

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

    @include('collection.section.brand')
    @include('collection.section.carousel-preparation')
    @include('collection.section.carousel-opinions')
    @include('collection.section.return')
    @include('common.modal')

@endsection
