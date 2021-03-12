@extends('layouts.front')

@section('content')
    <section id="top" class="thankyou">
        <div class="container">
            <h1 class="title">Dziękujemy!</h1>
        </div>
        <div class="mail-box"><img class="mail-icon" src="{{ asset('images/svg/thankyou.svg')}}" alt="" /></div>
    </section>

    <section id="info" class="thankyou">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 content">
                    <p class="text">Dziękujemy za udział w promocji Dzień smakuje lepiej!</p>
                    <p class="text">Twoje zgłoszenie jest obecnie sprawdzane. Jeśli wszystko jest w porządku, wyślemy do Ciebie GRATIS w postaci zestawu młynków do soli i pieprzu Russell Hobbs.</p>
                    <p class="text">Masz pytania?</p>
                    <div class="button-div"><a href="mailto:Russell.Hobbs@highlite.pl" class="button button-alt">Napisz do nas</a></div>
                </div>
            </div>
        </div>
    </section>
@endsection
