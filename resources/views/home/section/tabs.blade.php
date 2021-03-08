<section id="tabs" class="home">
    <div class="container">
        <h2 class="title">Produkty</h2>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="nav-tab-0" data-toggle="tab" href="#tab-kolekcje-sniadaniowe" role="tab" aria-controls="kolekcje-sniadaniowe" aria-selected="true">
                    <img class="nav-img lazy" data-src="{{ asset('images/svg/home/tabs/0.svg') }}" alt="" />
                    <span class="nav-head">Kolekcje śniadaniowe</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="nav-tab-1" data-toggle="tab" href="#tab-zelazka" role="tab" aria-controls="zelazka" aria-selected="false">
                    <img class="nav-img lazy" data-src="{{ asset('images/svg/home/tabs/1.svg') }}" alt="" />
                    <span class="nav-head">Żelazka</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-przygotowanie-zywnosci" role="tab" aria-controls="przygotowanie-zywnosci" aria-selected="false">
                    <img class="nav-img lazy" data-src="{{ asset('images/svg/home/tabs/2.svg') }}" alt="" />
                    <span class="nav-head">Przygotowanie żywności</span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade active show" id="tab-kolekcje-sniadaniowe" role="tabpanel">
                <h3 class="serie-head">Kolekcje śniadaniowe</h3>
                <div class="row">

                    <x-collection-card name="Honeycomb" slug="honeycomb" src="{{ asset('images/home/tabs/honeycomb.png') }}">
                        Z zachwycającą kolekcją produktów śniadaniowych Honeycomb w mgnieniu oka odmienisz charakter swojej kuchni.
                    </x-collection-card>

                    <x-collection-card name="Structure" slug="structure" src="{{ asset('images/home/tabs/structure.png') }}">
                        Czajnik i toster z najnowszej kolekcji śniadaniowej Structure to wysokiej jakości wzornictwo na lata.
                    </x-collection-card>

                    <x-collection-card name="Inspire" slug="inspire" src="{{ asset('images/home/tabs/inspire.png') }}">
                        Pozwól się zainspirować nowoczesną kolekcją produktów śniadaniowych Inspire, która łączy w sobie elementy tworzywa sztucznego o teksturowanej fakturze.
                    </x-collection-card>

                    <x-collection-card name="Retro" slug="retro" src="{{ asset('images/home/tabs/retro.png') }}">
                        Ta przyciągająca wzrok kolekcja produktów śniadaniowych swoim designem nawiązuje do kultowego stylu retro.
                    </x-collection-card>

                    <x-collection-card name="Geo Steel" slug="geo-steel" src="{{ asset('images/home/tabs/geo-steel.png') }}">
                        Kolekcja śniadaniowa Geo Steel została zaprojektowana z myślą o właścicielach kuchni wykończonych w surowym, industrialnym stylu.
                    </x-collection-card>

                    <x-collection-card name="Buckingham" slug="buckingham" src="{{ asset('images/home/tabs/buckingham.png') }}">
                        Kolekcja czajników i ekspresów do kawy Buckingham została stworzona z myślą o tych, którzy nie chcą zakłócać domowego spokoju.
                    </x-collection-card>

                    <x-collection-card name="Precision Control" slug="precision-control" src="{{ asset('images/home/tabs/precision-control.png') }}">
                        Przygotuj idealną herbatę, kawę lub gorącą czekoladę dzięki czajnikowi z funkcją precyzyjnego mierzenia temperatury wody.
                    </x-collection-card>

                    <x-collection-card name="Colours Plus" slug="colours-plus" src="{{ asset('images/home/tabs/colours-plus.png') }}">
                        Czajniki z serii Colours Plus to połączenie ciekawego stylu z różnorodnością przydatnych funkcji.
                    </x-collection-card>

                    <x-collection-card name="Textures Plus" slug="textures-plus" src="{{ asset('images/home/tabs/textures-plus.png') }}">
                        Kolekcja Textures plus zachwyca nie tylko swoją funkcjonalnością, ale i nowoczesnym designem.
                    </x-collection-card>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-zelazka" role="tabpanel">
                <h3 class="serie-head">Żelazka</h3>
                <div class="row">

                    <x-collection-card name="Power Steam Ultra" slug="power-steam-ultra" src="{{ asset('images/home/tabs/power-steam-ultra.png') }}">
                        Wiemy, że nie masz czasu na prasowanie. Może nawet go nie lubisz. Dlatego stworzyliśmy żelazko o dużej mocy.
                    </x-collection-card>

                    <x-collection-card name="Steam Genie" slug="steam-genie" src="{{ asset('images/home/tabs/steam-genie.png') }}">
                        Prasowanie może być przyjemne! Zwłaszcza, kiedy nie musisz rozkładać ciężkiej deski.
                    </x-collection-card>

                    <x-collection-card name="Cooper Express Pro" slug="cooper-express-pro" src="{{ asset('images/home/tabs/cooper-express-pro.png') }}">
                        Wyrazisty styl, inteligentne funkcje i bezpieczeństwo to główne cechy żelazka Cooper Express Pro!
                    </x-collection-card>

                    <x-collection-card name="Cooper Express" slug="cooper-express" src="{{ asset('images/home/tabs/cooper-express.png') }}">
                        Wyraź swój styl z żelazkiem Copper Express! Jego sprytny design i funkcje sprawią, że prasowanie stanie się samą przyjemnością.
                    </x-collection-card>

                    <x-collection-card name="Impact" slug="impact" src="{{ asset('images/home/tabs/impact.png') }}">
                        Wytrzymałość to drugie imię żelazka Impact. Dlatego nie martw się, jeśli w ferworze codziennych obowiązków przypadkiem upuścisz je na podłogę.
                    </x-collection-card>

                    <x-collection-card name="Colour Control Supreme" slug="colour-control-supreme" src="{{ asset('images/home/tabs/colour-control-supreme.png') }}">
                        Czy prasowanie może być jeszcze przyjemniejsze? TAK! Pozbądź się zagnieceń.
                    </x-collection-card>

                    <x-collection-card name="Quiet Super Steam" slug="quiet-super-steam" src="{{ asset('images/home/tabs/quiet-super-steam.png') }}">
                        Pożegnaj zagniecenia jednym ruchem! Dzięki wysokiej wydajności pary 315 g i ciśnieniu 8 barów wystarczy jeden ruch, by pozbyć się zagnieceń na ubraniach!
                    </x-collection-card>

                    <x-collection-card name="One Temperature" slug="one-temperature" src="{{ asset('images/home/tabs/one-temperature.png') }}">
                        Żelazko, które jedną temperaturą jest w stanie perfekcyjnie wyprasować wszystkie rodzaje materiałów.
                    </x-collection-card>

                    <x-collection-card name="Pearl Glide" slug="pearl-glide" src="{{ asset('images/home/tabs/pearl-glide.png') }}">
                        Pearl Glide to bez wątpienia najbardziej stylowe żelazko z naszej oferty.
                    </x-collection-card>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-przygotowanie-zywnosci" role="tabpanel">
                <h3 class="serie-head">Przygotowanie żywności</h3>
                <div class="row">

                    <x-collection-card name="Mikser ręczny SWIRL" slug="mikser-reczny-swirl" src="{{ asset('images/home/tabs/mikser-reczny-swirl.png') }}">
                        Ten mikser ręczny ma kilka asów w rękawie. Dzięki innowacyjnym końcówkom możesz cieszyć się równomiernym miksowaniem bez wysiłku.
                    </x-collection-card>

                    <x-collection-card name="Opiekacz deep fill 3w1 Fiesta" slug="opiekacz-deep-fill-3w1-fiesta" src="{{ asset('images/home/tabs/opiekacz-deep-fill-3w1-fiesta.png') }}">
                        Ten wielofunkcyjny opiekacz to grill, gofrownica i sandwicher w jednym!
                    </x-collection-card>

                    <x-collection-card name="Parowar cyfrowy MaxiCook" slug="parowar-cyfrowy-maxicook" src="{{ asset('images/home/tabs/parowar-cyfrowy-maxicook.png') }}">
                        Ciesz się pysznymi i pełnymi witamin posiłkami każdego dnia i oszczędzaj swój czas!
                    </x-collection-card>

                    <x-collection-card name="Ryżowar Cook@Home" slug="ryzowar-cook-home" src="{{ asset('images/home/tabs/ryzowar-cook-home.png') }}">
                        Gotowanie ryżu jeszcze nigdy nie było tak łatwe! Dzięki urządzeniu Cook@Home przygotujesz aż 10 porcji za jednym razem!
                    </x-collection-card>

                    <x-collection-card name="Zestaw do Raclette Fiesta" slug="zestaw-do-raclette-fiesta" src="{{ asset('images/home/tabs/zestaw-do-raclette-fiesta.png') }}">
                        Od teraz wspólne spożywanie posiłków staje się prawdziwą ucztą! Zestaw do Raclette umożliwia przygotowanie różnych drobnych dań dla 8 osób.
                    </x-collection-card>

                    <x-collection-card name="Wyciskarka do cytrusów" slug="wyciskarka-do-cytrusow" src="{{ asset('images/home/tabs/wyciskarka-do-cytrusow.png') }}">
                        Nic tak nie orzeźwia, jak szklanka świeżo wyciśniętego roku o poranku.
                    </x-collection-card>

                    <x-collection-card name="Frytownica Cyclofry Plus" slug="frytownica-cyclofry-plus" src="{{ asset('images/home/tabs/frytownica-cyclofry-plus.png') }}">
                        Gotuj, smaż, grilluj i piecz bez dodatku oleju dzięki innowacyjnej i wszechstronnej frytownicy Cyclofry!
                    </x-collection-card>

                    <x-collection-card name="Blender kielichowy Sensigence" slug="blender-kielichowy-sensigence" src="{{ asset('images/home/tabs/blender-kielichowy-sensigence.png') }}">
                        Żyj smacznie i kolorowo dzięki nowemu inteligentnemu blenderowi kielichowemu Sensigence.
                    </x-collection-card>

                    <x-collection-card name="Blender ręczny Desire" slug="blender-reczny-desire" src="{{ asset('images/home/tabs/blender-reczny-desire.png') }}">
                        Kochasz gotowanie, ale nie masz wystarczająco dużo miejsca na przechowywanie wielu urządzeń?
                    </x-collection-card>
                </div>
            </div>
        </div>
    </div>
</section>
