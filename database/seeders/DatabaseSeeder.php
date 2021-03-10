<?php

namespace Database\Seeders;

use App\Models\Collection;
use App\Models\Link;
use App\Models\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Honeycomb',
                'slug' => 'honeycomb',
                'reviews' => [],
                'links' => []
            ],
            [
                'name' => 'Structure',
                'slug' => 'structure',
                'reviews' => [],
                'links' => []
            ],
            [
                'name' => 'Inspire',
                'slug' => 'inspire',
                'reviews' => [],
                'links' => []
            ],
            [
                'name' => 'Retro',
                'slug' => 'retro',
                'reviews' => [],
                'links' => []
            ],
            [
                'name' => 'Geo Steel',
                'slug' => 'geo-steel',
                'reviews' => [],
                'links' => []
            ],
            [
                'name' => 'Buckingham',
                'slug' => 'buckingham',
                'reviews' => [],
                'links' => []
            ],
            [
                'name' => 'Precision Control',
                'slug' => 'precision-control',
                'reviews' => [],
                'links' => []
            ],
            [
                'name' => 'Colours Plus',
                'slug' => 'colours-plus',
                'reviews' => [],
                'links' => []
            ],
            [
                'name' => 'Textures Plus',
                'slug' => 'textures-plus',
                'reviews' => [],
                'links' => []
            ],
            [
                'name' => 'Power Steam Ultra',
                'slug' => 'power-steam-ultra',
                'reviews' => [
                    [
                        'customer' => 'Mario51',
                        'content' => 'najlepsze żelazko jakie miałem. Inne renomowane firmy droższe dwu-trzykrotnie się chowają!'
                    ],
                    [
                        'customer' => 'leszek520',
                        'content' => 'Żelazko posiada dużą moc co połączeniu z dobrym ślizgiem stopy sprawia że prasowanie niczym nie odbiega od żelazek z półki cenowej powyżej 350zł - polecam.'
                    ],
                    [
                        'customer' => 'Axa',
                        'content' => 'Jest super - potrzebowałam żelazka nr 2 (do mieszkania, które będę wynajmować) i najpierw chciałam odmiany, ale ostatecznie znowu wybrałam to. Ma dużą moc, no i kabel nie jest taki denerwująco krótki, jak w innych kandydatach :) Jestem zadowolona z tego żelazka, mój egzemplarz nr 1 działa długo i bez zarzutu, pewnie takie będzie i to :)'
                    ],
                ],
                'links' => [
                    'https://www.euro.com.pl/zelazka/russell-hobbs-power-steam-ultra-20630-56.bhtml',
                    'https://www.oleole.pl/zelazka/russell-hobbs-power-steam-ultra-20630-56.bhtml',
                    'https://www.komputronik.pl/product/386017/russell-hobbs-20630-56-power-steam-ultra.html',
                    'https://www.electro.pl/agd-male/agd-male-do-domu/zelazka/zelazko-russell-hobbs-20630-56-power-steam',
                    'https://www.mediaexpert.pl/agd-male/prasowanie-i-pielegnacja-ubran/zelazka/zelazko-russell-hobbs-20630-56-power-steam',
                    'https://www.avans.pl/agd-male/agd-male-do-domu/zelazka/zelazko-russell-hobbs-20630-56-power-steam',
                    'https://mediamarkt.pl/agd-male/zelazko-russell-hobbs-power-steam-ultra-20630-56',
                    'https://sklep.payback.pl/nagrody/zelazko-powersteam-ultra-russell-hobbs-20630-56',
                    'https://www.empik.com/zelazko-parowe-russell-hobbs-power-steam-3100-w-0-35-l,p1102859105,agd-p',
                    'https://www.morele.net/zelazko-russell-hobbs-powersteam-ultra-20630-56-666549/',
                    'https://maxelektro.pl/sklep/karta-produktu/zelazko-russell-hobbs-20630-56-power-steam-ultra,36566.html',
                    'https://www.mycenter.pl/zelazko-russell-hobbs-20630-56,id-152915',
                    'https://mediadomek.pl/product-pol-13425-Russell-Hobbs-20630-56-ZELAZKO-POWERSTEAM-WROCLAW.html',
                ]
            ],
            [
                'name' => 'Steam Genie',
                'slug' => 'steam-genie',
                'reviews' => [
                    [
                        'customer' => 'Beata',
                        'content' => 'Używam parownicy od kilku miesięcy i jestem bardzo zadowolona. Dzięki tej parownicy, bezproblemowo mogę szybko usunąć zagniecenia na ubraniach. Polecam.'
                    ],
                    [
                        'customer' => 'Krisu93',
                        'content' => 'Super parownica, poradziła sobie z koszulą, której żelazko nie dawało rady. Grubą kurtkę też bezproblemowo doprowadziła do ładu. Jak najbardziej sprzęt można polecić.'
                    ],
                    [
                        'customer' => 'Ewelina',
                        'content' => 'Parownica świetnie sprawdza się w podróży. Prasowanie bez wyciągania deski do prasowania jest również ogromnym plusem na codzień. Jeśli nie ma miejsca do powieszenia ubrania i prasowania w pionie, polecam położyć je na łóżku czy fotelu. Fajny produkt, jestem zadowolona z efektów prasowania i odświeżania ubrań.'
                    ],
                ],
                'links' => [
                    'https://www.euro.com.pl/parownice-do-ubran/russell-hobbs-25600-56.bhtml',
                    'https://www.oleole.pl/parownice-do-ubran/russell-hobbs-25600-56.bhtml',
                    'https://sklep.payback.pl/nagrody/szczotka-do-prasowania-parowego-russell-hobbs',
                    'https://mambonus.pl/katalog/agd/parownica_steam_genie_handheld_25600_russell_hobbs-6458',
                ]
            ],
            [
                'name' => 'Cooper Express Pro',
                'slug' => 'cooper-express-pro',
                'reviews' => [
                    [
                        'customer' => 'Magdalena',
                        'content' => 'Żelazko jest poręczne, szybko się nagrzewa, ładnie wygląda (ma drobinki brokatu co jest raczej niespotykane) ;)'
                    ],
                    [
                        'customer' => 'krzysztof',
                        'content' => 'Wszystko ok! Jestem zadowolony.'
                    ],
                    [
                        'customer' => 'Andrzej',
                        'content' => 'Żelazko ładnie się prezentuje, szybko się nagrzewa i dobrze się nim prasuje. Wszystkie zabezpieczenia w razie pozostawienia... działają bez zarzutu. Za tą cenę nic tylko kupować !'
                    ],
                ],
                'links' => [
                    'https://www.mediaexpert.pl/agd-male/prasowanie-i-pielegnacja-ubran/zelazka/zelazko-russell-hobbs-23986-56-copper-express-pro-auto-off',
                    'https://www.avans.pl/agd-male/agd-male-do-domu/zelazka/zelazko-russell-hobbs-23986-56-copper-express-pro-auto-off',
                    'https://www.electro.pl/agd-male/agd-male-do-domu/zelazka/zelazko-russell-hobbs-23986-56-copper-express-pro-auto-off',
                ]
            ],
            [
                'name' => 'Cooper Express',
                'slug' => 'cooper-express',
                'reviews' => [
                    [
                        'customer' => 'Ania',
                        'content' => 'Bardzo dobry produkt w dobrej cenie. Polecam'
                    ],
                    [
                        'customer' => 'Bogna',
                        'content' => 'Żelazko Russel Hobbs Copper Express jest fantastyczne. Bardo szybko się nagrzewa,dobrze manewruje się nim,prasowanie nie wymaga dużego nacisku. A przy tym fantastyczny design. Polecam z przekonaniem.'
                    ],
                    [
                        'customer' => 'Marta',
                        'content' => 'Super żelazko! Miałam wiele urzadzeń do prasowania, ale to według mnie jest zdecydowanie najlepsze. Polecam z czystym sercem! :) ładnie doprasowuje nawet najbardziej upierdliwe zagniecenia.'
                    ],
                ],
                'links' => [
                    'https://www.euro.com.pl/zelazka/russell-hobbs-copper-express.bhtml',
                    'https://www.oleole.pl/zelazka/russell-hobbs-copper-express.bhtml',
                ]
            ],
            [
                'name' => 'Impact',
                'slug' => 'impact',
                'reviews' => [
                    [
                        'customer' => 'Krystyna',
                        'content' => 'Bardzo dobry produkt, wysoka jakość za przystępną cenę. Żelazko proste w obsłudze, duża funkcjonalność, mocne uderzenie pary. Stopa wyprofilowana, co ułatwia prasowanie. Estetyczny design i kolorystyka.'
                    ],
                    [
                        'customer' => 'Zbigniew',
                        'content' => 'Produkt zasługuje na szczególną uwagę ponieważ jest wykonany z materiałów bardzo dobrej jakości, przewód elektryczny jest trwały i długi. Obsługa nie jest skomplikowana, jest wręcz prosta i łatwa.'
                    ],
                    [
                        'customer' => 'Małgorzata S',
                        'content' => 'Uważam, iż wasz produkt zasługuje na miano najlepszego w mieście, gdyż sprawuje się wyśmienicie. Po pierwszym użyciu już czułam, że ten produkt jest stworzony dla mnie.'
                    ],
                ],
                'links' => [
                    'https://www.mediaexpert.pl/agd-male/prasowanie-i-pielegnacja-ubran/zelazka/zelazko-russell-hobbs-impact-24650-56',
                    'https://www.avans.pl/agd-male/agd-male-do-domu/zelazka/zelazko-russell-hobbs-impact-24650-56',
                    'https://www.electro.pl/agd-male/agd-male-do-domu/zelazka/zelazko-russell-hobbs-impact-24650-56',
                ]
            ],
            [
                'name' => 'Colour Control Supreme',
                'slug' => 'colour-control-supreme',
                'reviews' => [
                    [
                        'customer' => 'Zosia',
                        'content' => 'Prasowałam jedynie raz ale myślę, że żelazko poradziło&amp;nbsp;sobie zaskakująco dobrze (przy parze włączonej na &quot;maksa&quot; i maksymalnej temperaturze) z grubą, pogniecioną bawełnianą pościelą, porównywalnie dobrze co stacja parowa bosha za 1000zł, której używam na co dzień. Przycisk do dodatkowego wyrzutu pary jakoś nie chciał za bardzo za działać ale w sumie nie był za bardzo potrzebny. Jedyny denerwujący minus jest taki, że podczas trzymania żelazka przypadkowo cały czas naciska się przycisk zmieniający temperaturę i trzeba na to uważać.... W porównaniu do stacji parowej jest też cięższe. Ale ogólnie myślę, że w tej cenie jest naprawdę super :)'
                    ],
                ],
                'links' => [
                    'https://www.euro.com.pl/zelazka/russell-hobbs-colour-control-supreme-25400-56.bhtml',
                    'https://www.oleole.pl/zelazka/russell-hobbs-colour-control-supreme-25400-56.bhtml',
                ]
            ],
            [
                'name' => 'Quiet Super Steam',
                'slug' => 'quiet-super-steam',
                'reviews' => [
                    [
                        'customer' => 'Grzeg_Sz',
                        'content' => 'Po pierwszym prasowaniu wrażenia pozytywne. Oby tak dalej'
                    ],
                ],
                'links' => [
                    'https://www.euro.com.pl/zelazka-systemowe/russell-hobbs-quiet-super-steam-pro-24460-56.bhtml',
                    'https://www.oleole.pl/generatory-pary1/russell-hobbs-quiet-super-steam-pro-24460-56.bhtml',
                ]
            ],
            [
                'name' => 'One Temperature',
                'slug' => 'one-temperature',
                'reviews' => [
                    [
                        'customer' => 'Tuśka82',
                        'content' => 'Żelazko spełnia moje oczekiwania, gładko sunie zarówno po materiale grubszym, jak i cieńszym, nie &quot;przyłapuje&quot;. Jestem bardzo zadowolona z zakupu.'
                    ],
                    [
                        'customer' => 'Eweelka',
                        'content' => 'Żelazko bardzo fajnie się nagrzewa, zbiorki na wodę jest bardzo pojemny, wystarczy na maaasę prasowania 😅. A funkcja stałej temperatury - &amp;gt; rewelacja!! Już nie muszę się martwić, że przypalę swoją ulubiona bluzkę czy koszule męża 😅. Polecam z całego serca ♥️'
                    ],
                    [
                        'customer' => 'gocha',
                        'content' => 'kupione na prezent dla synowej i syna, bardzo są zadowoleni'
                    ],
                ],
                'links' => [
                    'https://www.euro.com.pl/zelazka/russell-hobbs-zelazko-one-temperature.bhtml',
                    'https://www.komputronik.pl/product/554899/russell-hobbs-25090-56-one-temperature.html',
                    'https://www.neonet.pl/zelazka/russell-hobbs-25090-56.html',
                    'https://mambonus.pl/katalog/agd/zelazko_one_temperature_25090-56_russell_hobbs-2160',
                ]
            ],
            [
                'name' => 'Pearl Glide',
                'slug' => 'pearl-glide',
                'reviews' => [
                    [
                        'customer' => 'm…k',
                        'content' => 'Za tą cenę to super żelazko.'
                    ],
                    [
                        'customer' => 'Marzena',
                        'content' => 'Bardzo fajne żelazko za przystępną cenę. Polecam'
                    ],
                ],
                'links' => [
                    'https://www.neonet.pl/zelazka/russell-hobbs-pearl-glide-rose-23972-56.html',
                    'https://www.neo24.pl/russell-hobbs-pearl-glide-rose-23972-56.html',
                    'https://mambonus.pl/katalog/agd/zelazko_pearl_glide_rose_23972-56_russell_hobbs-4963',
                ]
            ],
            [
                'name' => 'Mikser ręczny SWIRL',
                'slug' => 'mikser-reczny-swirl',
                'reviews' => [
                    [
                        'customer' => 'Weronika',
                        'content' => 'Od dłuższego czasu zastanawiałam się nad zakupem tego miksera. Początkowo zaintrygował mnie elegancki i nowoczesny design. Po zapoznaniu się z opisem producenta dotyczącym funkcji (mieszadła HELIX BEATERS, haki do ciasta, ubijaczki, funkcja turbo boost) zdecydowałam, że to właśnie mój idealny wybór. Po dzisiejszych eksperymentach w kuchni muszę przyznać, że się nie zawiodłam. Jeśli szukasz połączenia designu i funkcjonalności w dobrej cenie to mogę Ci szczerze polecić zakup tego urządzenia :)'
                    ],
                    [
                        'customer' => 'Wojciech',
                        'content' => 'Jest OK, mogę polecić. Wydaje mi się, że miksuje o wiele lepiej od takiego zwykłego miksera. Dodatkowo bardzo fajnie ugniata ciasto na pizzę , mniej wysiłku a ciasto lepiej wyrobione . Coś jak z myciem zębów zwykłą oraz soniczną szczoteczką :)'
                    ],
                    [
                        'customer' => 'Michał',
                        'content' => 'Nowoczesny design, praktyczny pojemnik na osprzęt, który razem z mikserem tworzy całość, solidne wykonanie, bardzo dobrze stosunek jakości do ceny :) POLECAM.'
                    ],
                ],
                'links' => [
                    'https://www.mediaexpert.pl/agd-male/do-kuchni/miksery-reczne/mikser-reczny-russell-hobbs-swirl-25890-56-grafitowy',
                    'https://www.avans.pl/agd-male/do-kuchni/miksery-reczne/mikser-reczny-russell-hobbs-swirl-25890-56-grafitowy',
                    'https://www.electro.pl/agd-male/do-kuchni/miksery-reczne/mikser-reczny-russell-hobbs-swirl-25890-56-grafitowy',
                ]
            ],
            [
                'name' => 'Opiekacz deep fill 3w1 Fiesta',
                'slug' => 'opiekacz-deep-fill-3w1-fiesta',
                'reviews' => [
                    [
                        'customer' => 'Tomasz Konstanty',
                        'content' => 'Super opiekacz...mój 8 letni syn od razu przy zakupie stwierdził że brakuje kiełbasy do grillowania :) Warto wspomnieć że opiekacz ma bardzo łatwo wymienne formy do kanapek, grillowania i gofrów. Nawet w instrukcji jest przepis..jak by ktoś nie wiedział jak zrobić. Świetnie wygląda, moc taka że się ciężko przestawić ze starego ;) . wygodne zapięcie...no i w ogóle. Marka dobrze zapracowała na pięciogwiazdkową opinię... tylko ta kiełbasa :) ...'
                    ],
                    [
                        'customer' => 'Monika',
                        'content' => 'Zakupiony produkt zaskoczył mnie jakością i solidnością wykonania jak i funkcjonowania. Cena rozsądna a w zamian bardzo dobra jakość. Płytki są głębokie. Rączka nie nagrzewa się. Opiekacz z łatwością można zamknąć nawet przy potrójnym toście. Tosty chrupiące. Zupełnie inne niż z dotychczas używanego produktu firmy konkurencyjnej i oferującej droższe produkty. Podobnie z płytką do grillowania. Łosoś w folii, czy zwykła bułka do hot- doga - rewelacja. Czas przygotowania krótszy niż się spodziewałam. Łosoś był gotowy w mniej niż 2 min. Gofrów jeszcze nie testowałam. Gorąco polecam.'
                    ],
                    [
                        'customer' => 'Kika',
                        'content' => 'Opiekacz zaskoczył mnie jakością.Nie sprawdzałam funkcji gofrownicy. Natomiast płytki do grilla i kanapek naprawdę się sprawdzają. Jestem bardzo zadowolona.'
                    ],
                ],
                'links' => [
                    'https://www.mediaexpert.pl/agd-male/do-kuchni/opiekacze/opiekacz-do-kanapek-fiesta-3-w-1-24540-56',
                    'https://www.avans.pl/agd-male/do-kuchni/opiekacze/opiekacz-do-kanapek-fiesta-3-w-1-24540-56',
                    'https://selgros24.pl/Sprzet-AGD/Drobne-AGD/Drobne-AGD-do-kuchni/Opiekacze-elektryczne/RUSSELL-HOBBS/OPIEKACZ-3W1-RUSSELL-HOBBS-24540-56-pp143260.html',
                    'https://www.electro.pl/agd-male/do-kuchni/opiekacze/opiekacz-do-kanapek-fiesta-3-w-1-24540-56',
                    'https://www.neonet.pl/opiekacze-do-kanapek/russell-hobbs-deep-fill-3w1-fiesta-24540-56.html',
                    'https://www.neo24.pl/russell-hobbs-deep-fill-3w1-fiesta-24540-56.html',
                    'https://sklep.payback.pl/nagrody/opiekacz-3w1-russell-hobbs',
                    'https://mediamarkt.pl/agd-male/opiekacz-russell-hobbs-24540-56-fiesta',
                    'https://www.morele.net/opiekacz-russell-hobbs-24540-56-4046452/',
                    'https://www.empik.com/opiekacz-russell-hobbs-fiesta-24540-56-750-w,p1218231884,agd-p',
                    'https://maxelektro.pl/sklep/karta-produktu/opiekacz-russell-hobbs-3w1-24540-56,67647.html',
                    'https://www.zadowolenie.pl/male-agd/do-kuchni/gofrownice-i-sandwicze/russell-hobbs-opiekacz-do-kanapek-fiesta-3-w-1-24540-56',
                    'https://www.kakto.pl/male-agd-do-kuchni/sandwichery-gofrownice-opiekacze-do-kanapek/russell-hobbs-opiekacz-do-kanapek-fiesta-3-w-1-24540-56',
                    'https://www.al.to/p/421328-opiekacz-russell-hobbs-fiesta-24540-56-3w1.html',
                ]
            ],
            [
                'name' => 'Parowar cyfrowy MaxiCook',
                'slug' => 'parowar-cyfrowy-maxicook',
                'reviews' => [
                    [
                        'customer' => 'Grzegorz',
                        'content' => 'jakość adekwatna do ceny. polecam produkt.'
                    ],
                    [
                        'customer' => 'Krzysztof',
                        'content' => 'Gorąco polecam!!!'
                    ],
                ],
                'links' => [
                    'https://www.mediaexpert.pl/agd-male/do-kuchni/parowary/parowar-russell-hobbs-maxicook-23560-56',
                    'https://www.avans.pl/agd-male/do-kuchni/parowary/parowar-russell-hobbs-maxicook-23560-56',
                    'https://www.electro.pl/agd-male/do-kuchni/parowary/parowar-russell-hobbs-maxicook-23560-56',
                    'https://maxelektro.pl/sklep/karta-produktu/parowar-russell-hobbs-23560-56,67561.html',
                    'https://mambonus.pl/katalog/agd/parowar_cyfrowy_maxicook_23560-56_russell_hobbs-2270',
                    'https://www.zadowolenie.pl/male-agd/do-kuchni/parowary-i-kombiwary/russell-hobbs-parowar-maxicook-23560-56',
                    'https://www.kakto.pl/male-agd-do-kuchni/parowary-i-kombiwary/russell-hobbs-parowar-maxicook-23560-56',
                ]
            ],
            [
                'name' => 'Ryżowar Cook@Home',
                'slug' => 'ryzowar-cook-home',
                'reviews' => [
                    [
                        'customer' => 'Eliza',
                        'content' => 'estem bardzo zadowolona. Jeśli ktoś ma dodatkowe miejsce w kuchni to zdecydowanie polecam! Ryż z tego urządzenia jest o niebo lepszy :)'
                    ],
                    [
                        'customer' => 'Gosia',
                        'content' => 'Zakup wykonałam po przeczytaniu opinii innych użytkowników. Proste, intuicyjne urządzenie do przygotowania ryżu takiego jak lubię, sypkiego bez nadmiaru wody.'
                    ],
                    [
                        'customer' => 'andy295',
                        'content' => 'Funkcjonalny, nowoczesny design, idealny na potrzeby domowe, niewielkie rozmiary ułatwiają przechowywanie.'
                    ],
                ],
                'links' => [
                    'https://www.neonet.pl/pozostale/russell-hobbs-ryzowar-19750-56.html',
                    'https://www.neo24.pl/russell-hobbs-ryzowar-19750-56.html',
                    'https://mediamarkt.pl/agd-male/garnek-do-ryzu-russell-hobbs-19750-56',
                    'https://agdperfekt.pl/5354-ryzowar-russell-hobbs-cookhome-19750-56.html',
                ]
            ],
            [
                'name' => 'Zestaw do Raclette Fiesta',
                'slug' => 'zestaw-do-raclette-fiesta',
                'reviews' => [
                    [
                        'customer' => 'ella',
                        'content' => 'Zamówiony produkt spełnił moje oczekiwania, jest funkcjonalny i estetycznie wykonany. Doskonały na prezent. Dostawa błyskawiczna. Polecam.'
                    ],
                    [
                        'customer' => 'Kasiac',
                        'content' => 'Grill sprawdził się już na wielu imprezach. Jest to super sprawa!'
                    ],
                    [
                        'customer' => 'Andrzej',
                        'content' => 'Grill elektryczny w 100% zgodny z opisem. Bardzo ciekawa propozycja na domowe spotkania przy stole. Polecam.'
                    ]
                ],
                'links' => [
                    'https://www.euro.com.pl/grille/russell-hobbs-raclette-fiesta-21000-56.bhtml',
                    'https://www.oleole.pl/grille/russell-hobbs-raclette-fiesta-21000-56.bhtml',
                    'https://www.komputronik.pl/product/346656/russell-hobbs-21000-56-raclette-fiesta.html',
                    'https://www.electro.pl/agd-male/do-kuchni/grille-kuchenne/grill-russell-hobbs-21000-56-fiesta-raclette',
                    'https://www.avans.pl/agd-male/do-kuchni/grille-kuchenne/grill-russell-hobbs-21000-56-fiesta-raclette',
                    'https://www.mediaexpert.pl/agd-male/do-kuchni/grille-kuchenne/grill-russell-hobbs-21000-56-fiesta-raclette',
                    'https://www.neonet.pl/grille-elektryczne/russell-hobbs-21000-56-fiesta.html',
                    'https://www.neo24.pl/russell-hobbs-21000-56-fiesta.html',
                ]
            ],
            [
                'name' => 'Wyciskarka do cytrusów',
                'slug' => 'wyciskarka-do-cytrusow',
                'reviews' => [
                    [
                        'customer' => 'Zofia',
                        'content' => 'Wyciskarka firmy Russell Hobbs, jest bardzo funkcjonalna. Dokładnie wyciska cytrusy. Nie należy do głośnych urządzeń, pracuje cicho. Rozmiar cytrusa nie ma znaczenia, świetnie radzi sobie z cytrynami, pomarańczami, grejpfrutami. Produkt wykonany estetycznie i łatwy w obsłudze. Serdecznie polecam wyciskarkę do cytrusów Russell Hobbs :)'
                    ],
                    [
                        'customer' => 'Kamila',
                        'content' => 'Bardzo dobra wyciskarka do cytrusów. Cicha, łatwa w obsłudze, z dobrą mocą. Owoc jest cały wydrążony, przez co nic się nie marnuje. Łatwa w późniejszym myciu. Teraz wyciskanie świeżego soku z rana to sama przyjemność. Z czystym sumieniem polecam.'
                    ],
                    [
                        'customer' => 'Dagmara',
                        'content' => 'Wyciskarka w 100% spełnia swoją funkcję, sok wyciśnięty do ostatniej kropli. Brudne części po wciśnięciu soku szybciutko myje się ręcznie, można także myć w zmywarce. Polecam.'
                    ]
                ],
                'links' => [
                    'https://www.mediaexpert.pl/agd-male/do-kuchni/wyciskarki-do-cytrusow/wyciskarka-do-cytrusow-russell-hobbs-22760-56',
                    'https://www.avans.pl/agd-male/do-kuchni/wyciskarki-do-cytrusow/wyciskarka-do-cytrusow-russell-hobbs-22760-56',
                    'https://www.zadowolenie.pl/male-agd/do-kuchni/wyciskarki/russell-hobbs-wyciskarka-do-cytrusow-classics-22760-56',
                    'https://www.electro.pl/agd-male/do-kuchni/wyciskarki-do-cytrusow/wyciskarka-do-cytrusow-russell-hobbs-22760-56',
                    'https://www.neonet.pl/wyciskarki-do-cytrusow/russell-hobbs-russell-hobbs-22760-56-classics.html',
                    'https://mediamarkt.pl/agd-male/wyciskarka-russell-hobbs-22760-56-classics',
                    'https://www.neo24.pl/russell-hobbs-russell-hobbs-22760-56-classics.html',
                    'https://sklep.payback.pl/nagrody/wyciskarka-do-cytrusow-russell-hobbs-22760-56',
                    'https://www.morele.net/wyciskarka-do-cytrusow-russell-hobbs-classics-czarno-srebrna-22760-56-706802/',
                    'https://www.empik.com/wyciskarka-do-cytrusow-russell-hobbs-classics-22760-56-60-w,p1116142923,agd-p',
                    'https://www.kakto.pl/male-agd-do-kuchni/wyciskarki/russell-hobbs-wyciskarka-do-cytrusow-classics-22760-56',
                    'https://agdperfekt.pl/5356-wyciskarka-do-cytrusow-russell-hobbs-classics-22760-56.html',
                ]
            ],
            [
                'name' => 'Frytownica Cyclofry Plus',
                'slug' => 'frytownica-cyclofry-plus',
                'reviews' => [
                    [
                        'customer' => 'wgre',
                        'content' => 'Prosta obsługa. Potrawy smaczne, aczkolwiek niekoniecznie frytki. Kurczak z rożna wspaniały.'
                    ],
                    [
                        'customer' => 'a...a',
                        'content' => 'Zdecydowanie polecam.'
                    ],
                ],
                'links' => [
                    'https://maxelektro.pl/sklep/karta-produktu/frytkownica-russell-hobbs-22101-56,67544.html',
                ]
            ],
            [
                'name' => 'Blender kielichowy Sensigence',
                'slug' => 'blender-kielichowy-sensigence',
                'reviews' => [],
                'links' => []
            ],
            [
                'name' => 'Blender ręczny Desire',
                'slug' => 'blender-reczny-desire',
                'reviews' => [],
                'links' => [
                    'https://www.neonet.pl/blendery-reczne/russell-hobbs-desire-24700-56.html',
                    'https://www.neo24.pl/russell-hobbs-desire-24700-56.html',
                    'https://maxelektro.pl/sklep/karta-produktu/blender-russell-hobbs-24700-56,67654.html',
                ]
            ]
        ];

        foreach ($data as $item) {
            $reviews = $item['reviews'];
            $links = $item['links'];

            unset($item['reviews']);
            unset($item['links']);

            $collection = Collection::factory()->create($item);

            foreach ($reviews as $review) {
                Review::factory()->create(array_merge($review, ['collection_id' => $collection->id]));
            }

            foreach ($links as $link) {
                Link::factory()->create([
                    'url' => $link,
                    'collection_id' => $collection->id
                ]);
            }
        }

        $this->call([
            UserSeeder::class,
            CollectionSeeder::class
        ]);
    }
}
