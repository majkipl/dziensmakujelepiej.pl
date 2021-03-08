<section id="carousel" class="product">
    <div class="container">
        <h2 class="title">Poznaj pozostałe produkty</h2><span class="line"></span>
        <div class="owl-carousel">
            @if($product !== 'mrs')
            <div class="item">
                <div class="product"><img class="product-img" src="{{ asset('images/home/tabs/mikser-reczny-swirl.png') }}" alt="" />
                    <div class="product-body">
                        <h3 class="product-head">Mikser ręczny SWIRL</h3>
                        <div class="line"></div>
                        <p class="product-text">Ten mikser ręczny ma kilka asów w rękawie. Dzięki innowacyjnym końcówkom możesz cieszyć się równomiernym miksowaniem bez wysiłku.</p>
                        <div class="button-div"><a class="link product-link" href="/mikser-reczny-swirl">Dowiedz się więcej</a></div>
                        <div class="button-div"><a class="button button-alt product-button" href="#" data-toggle="modal" data-target="#modal" data-series="mikser-reczny-swirl">Kup teraz</a></div>
                    </div>
                </div>
            </div>
            @endif

            @if($product !== 'odf')
            <div class="item">
                <div class="product"><img class="product-img" src="{{ asset('images/home/tabs/opiekacz-deep-fill-3w1-fiesta.png') }}" alt="" />
                    <div class="product-body">
                        <h3 class="product-head">Opiekacz deep fill 3w1 Fiesta</h3>
                        <div class="line"></div>
                        <p class="product-text">Ten wielofunkcyjny opiekacz to grill, gofrownica i sandwicher w jednym!</p>
                        <div class="button-div"><a class="link product-link" href="/opiekacz-deep-fill-3w1-fiesta">Dowiedz się więcej</a></div>
                        <div class="button-div"><a class="button button-alt product-button" href="#" data-toggle="modal" data-target="#modal" data-series="opiekacz-deep-fill-3w1-fiesta">Kup teraz</a></div>
                    </div>
                </div>
            </div>
            @endif

            @if($product !== 'pcm')
            <div class="item">
                <div class="product"><img class="product-img" src="{{ asset('images/home/tabs/parowar-cyfrowy-maxicook.png') }}" alt="" />
                    <div class="product-body">
                        <h3 class="product-head">Parowar cyfrowy MaxiCook</h3>
                        <div class="line"></div>
                        <p class="product-text">Ciesz się pysznymi i pełnymi witamin posiłkami każdego dnia i oszczędzaj swój czas!</p>
                        <div class="button-div"><a class="link product-link" href="/parowar-cyfrowy-maxicook">Dowiedz się więcej</a></div>
                        <div class="button-div"><a class="button button-alt product-button" href="#" data-toggle="modal" data-target="#modal" data-series="parowar-cyfrowy-maxicook">Kup teraz</a></div>
                    </div>
                </div>
            </div>
            @endif

            @if($product !== 'rch')
            <div class="item">
                <div class="product"><img class="product-img" src="{{ asset('images/home/tabs/ryzowar-cook-home.png') }}" alt="" />
                    <div class="product-body">
                        <h3 class="product-head">Ryżowar Cook@Home</h3>
                        <div class="line"></div>
                        <p class="product-text">Gotowanie ryżu jeszcze nigdy nie było tak łatwe! Dzięki urządzeniu Cook@Home przygotujesz aż 10 porcji za jednym razem!</p>
                        <div class="button-div"><a class="link product-link" href="/ryzowar-cook-home">Dowiedz się więcej</a></div>
                        <div class="button-div"><a class="button button-alt product-button" href="#" data-toggle="modal" data-target="#modal" data-series="ryzowar-cook-home">Kup teraz</a></div>
                    </div>
                </div>
            </div>
            @endif

            @if($product !== 'zdr')
            <div class="item">
                <div class="product"><img class="product-img" src="{{ asset('images/home/tabs/zestaw-do-raclette-fiesta.png') }}" alt="" />
                    <div class="product-body">
                        <h3 class="product-head">Zestaw do Raclette Fiesta</h3>
                        <div class="line"></div>
                        <p class="product-text">Od teraz wspólne spożywanie posiłków staje się prawdziwą ucztą! Zestaw do Raclette umożliwia przygotowanie różnych drobnych dań dla 8 osób</p>
                        <div class="button-div"><a class="link product-link" href="/zestaw-do-raclette-fiesta">Dowiedz się więcej</a></div>
                        <div class="button-div"><a class="button button-alt product-button" href="#" data-toggle="modal" data-target="#modal" data-series="zestaw-do-raclette-fiesta">Kup teraz</a></div>
                    </div>
                </div>
            </div>
            @endif

            @if($product !== 'wdc')
            <div class="item">
                <div class="product"><img class="product-img" src="{{ asset('images/home/tabs/wyciskarka-do-cytrusow.png') }}" alt="" />
                    <div class="product-body">
                        <h3 class="product-head">Wyciskarka do cytrusów</h3>
                        <div class="line"></div>
                        <p class="product-text">Nic tak nie orzeźwia, jak szklanka świeżo wyciśniętego roku o poranku.</p>
                        <div class="button-div"><a class="link product-link" href="/wyciskarka-do-cytrusow">Dowiedz się więcej</a></div>
                        <div class="button-div"><a class="button button-alt product-button" href="#" data-toggle="modal" data-target="#modal" data-series="wyciskarka-do-cytrusow">Kup teraz</a></div>
                    </div>
                </div>
            </div>
            @endif

            @if($product !== 'fcp')
            <div class="item">
                <div class="product"><img class="product-img" src="{{ asset('images/home/tabs/frytownica-cyclofry-plus.png') }}" alt="" />
                    <div class="product-body">
                        <h3 class="product-head">Frytownica Cyclofry Plus</h3>
                        <div class="line"></div>
                        <p class="product-text">Gotuj, smaż, grilluj i piecz bez dodatku oleju dzięki innowacyjnej i wszechstronnej frytownicy Cyclofry!</p>
                        <div class="button-div"><a class="link product-link" href="/frytownica-cyclofry-plus">Dowiedz się więcej</a></div>
                        <div class="button-div"><a class="button button-alt product-button" href="#" data-toggle="modal" data-target="#modal" data-series="frytownica-cyclofry-plus">Kup teraz</a></div>
                    </div>
                </div>
            </div>
            @endif

            @if($product !== 'bks')
            <div class="item">
                <div class="product"><img class="product-img" src="{{ asset('images/home/tabs/blender-kielichowy-sensigence.png') }}" alt="" />
                    <div class="product-body">
                        <h3 class="product-head">Blender kielichowy Sensigence</h3>
                        <div class="line"></div>
                        <p class="product-text">Żyj smacznie i kolorowo dzięki nowemu inteligentnemu blenderowi kielichowemu Sensigence.</p>
                        <div class="button-div"><a class="link product-link" href="/blender-kielichowy-sensigence">Dowiedz się więcej</a></div>
                        <div class="button-div"><a class="button button-alt product-button" href="#" data-toggle="modal" data-target="#modal" data-series="blender-kielichowy-sensigence">Kup teraz</a></div>
                    </div>
                </div>
            </div>
            @endif

            @if($product !== 'brd')
            <div class="item">
                <div class="product"><img class="product-img" src="{{ asset('images/home/tabs/blender-reczny-desire.png') }}" alt="" />
                    <div class="product-body">
                        <h3 class="product-head">Blender ręczny Desire</h3>
                        <div class="line"></div>
                        <p class="product-text">Kochasz gotowanie, ale nie masz wystarczająco dużo miejsca na przechowywanie wielu urządzeń?</p>
                        <div class="button-div"><a class="link product-link" href="/blender-reczny-desire">Dowiedz się więcej</a></div>
                        <div class="button-div"><a class="button button-alt product-button" href="#" data-toggle="modal" data-target="#modal" data-series="blender-reczny-desire">Kup teraz</a></div>
                    </div>
                </div>
            </div>
                @endif
        </div>
    </div>
</section>
