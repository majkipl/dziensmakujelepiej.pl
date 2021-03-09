<?php

namespace Database\Seeders;

use App\Models\Collection;
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
                'reviews' => []
            ],
            [
                'name' => 'Structure',
                'slug' => 'structure',
                'reviews' => []
            ],
            [
                'name' => 'Inspire',
                'slug' => 'inspire',
                'reviews' => []
            ],
            [
                'name' => 'Retro',
                'slug' => 'retro',
                'reviews' => []
            ],
            [
                'name' => 'Geo Steel',
                'slug' => 'geo-steel',
                'reviews' => []
            ],
            [
                'name' => 'Buckingham',
                'slug' => 'buckingham',
                'reviews' => []
            ],
            [
                'name' => 'Precision Control',
                'slug' => 'precision-control',
                'reviews' => []
            ],
            [
                'name' => 'Colours Plus',
                'slug' => 'colours-plus',
                'reviews' => []
            ],
            [
                'name' => 'Textures Plus',
                'slug' => 'textures-plus',
                'reviews' => []
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
                ]
            ],
            [
                'name' => 'Blender kielichowy Sensigence',
                'slug' => 'blender-kielichowy-sensigence',
                'reviews' => []
            ],
            [
                'name' => 'Blender ręczny Desire',
                'slug' => 'blender-reczny-desire',
                'reviews' => []
            ]
        ];

        foreach ($data as $item) {
            $reviews = $item['reviews'];
            unset($item['reviews']);

            $collection = Collection::factory()->create($item);

            foreach ($reviews as $review) {
                Review::factory()->create(array_merge($review, ['collection_id' => $collection->id]));
            }
        }

        $this->call([
            UserSeeder::class,
            CollectionSeeder::class
        ]);
    }
}
