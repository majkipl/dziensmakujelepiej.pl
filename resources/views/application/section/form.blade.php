<section id="form" class="form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <form class="app-form" method="post" id="save" action="{{ route('front.application.save') }}">
                    @csrf
                    <x-form.input.text name="name" placeholder="Imię i nazwisko" required max="128" />
                    <x-form.input.email name="email" placeholder="E-mail" required max="128" />
                    <x-form.input.text name="phone" placeholder="Numer telefonu" required max="32" />
                    <x-form.input.text name="street" placeholder="Ulica" required max="128" />
                    <x-form.input.text name="flat" placeholder="Numer mieszkania" required max="16" />
                    <x-form.input.text name="zip" placeholder="Kod pocztowy" required max="6" />
                    <x-form.input.text name="city" placeholder="Miasto" required max="128" />

                    <x-form.select name="purchase" placeholder="Gdzie dokonałaś/eś zakupu?" required :items="$purchases" />
                    <x-form.select name="whence" placeholder="Skąd dowiedziałaś/eś się o promocji?" required :items="$whences" />

                    <x-form.input.text name="whence_other" placeholder="Inne" required max="128" classWrapper="whence-other"/>

                    <x-form.input.file name="img_receipt" class="field" required>
                        <img src="{{ asset('/images/svg/form/0.svg') }}" alt="ikona paragonu" class="uploads-icon" />
                        <p class="col-12 file-text">Dodaj zdjęcie dowodu zakupu<br>(paragonu lub faktury)*</p>
                    </x-form.input.file>

                    <x-form.input.file name="img_ean" class="field" required>
                        <img src="{{ asset('/images/svg/form/1.svg') }}" alt="ikona ean" class="uploads-icon" />
                        <p class="col-12 file-text">Dodaj zdjęcie wyciętego kodu kreskowego EAN<br>(znajdziesz go na pudełku po produkcie)*</p>
                    </x-form.input.file>

                    <x-form.input.file name="img_box" class="field" required>
                        <img src="{{ asset('/images/svg/form/2.svg') }}" alt="Zdjęcie dowodu zakupu" />
                        <p class="col-12 file-text">Dodaj zdjęcie pudełka z wyciętym<br>kodem kreskowym BOX*</p>
                    </x-form.input.file>

                    <x-form.input.checkbox name="legal_all" required>
                        ZAZNACZ WSZYSTKIE
                    </x-form.input.checkbox>

                    <x-form.input.checkbox name="legal_1" required>
                        Zapoznałem/am się i akceptuję <a class="link" href="{{ asset('regulamin.pdf') }}" target="_blank" rel="noopener noreferrer">REGULAMIN PROMOCJI</a>
                    </x-form.input.checkbox>

                    <x-form.input.checkbox name="legal_2" required>
                        Zapoznałem/am się z <a class="link" href="{{ asset('polityka.pdf') }}" target="_blank" rel="noopener noreferrer">POLITYKĄ PRYWATNOŚCI</a>
                    </x-form.input.checkbox>

                    <x-form.input.checkbox name="legal_3" required>
                        Wyrażam zgodę na przetwarzanie moich danych osobowych w celu realizacji promocji, wysyłkę nagrody, przez Highlite Bielecka Jellinek Spółka Jawna, ul. Pomorska 55/2, Wrocław.
                    </x-form.input.checkbox>

                    <x-form.input.checkbox name="legal_4">
                        Wyrażam zgodę na przetwarzanie moich danych osobowych: imienia, nazwiska, adresu e-mail w celach marketingowych przez Spectrum Brands Sp z o. o., ul. Bitwy Warszawskiej 1920 r 7a, Warszawa.
                    </x-form.input.checkbox>

                    <div class="button-div">
                        <button type="submit" class="button submit">Wyślij</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
