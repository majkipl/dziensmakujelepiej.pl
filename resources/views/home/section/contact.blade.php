<section id="contact" class="home">
    <div class="container">
        <div class="row">
            <h2 class="title">Masz pytania?</h2>
        </div>
        <div class="row">
            <h3 class="title subtitle">Napisz do nas</h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <form method="post" action="{{ route('front.contact.send') }}">
                    @csrf
                    <x-form.input.text name="name" placeholder="Imię i nazwisko" required max="128" />
                    <x-form.input.email name="email" placeholder="E-mail" required max="128" />
                    <x-form.textarea name="message" placeholder="Wiadomość" required max="4096" class="message"></x-form.textarea>

                    <x-form.input.checkbox name="legal_1" required>
                        <span class="col-auto checkbox-text">Wyrażam zgodę na przetwarzanie przekazanych przeze mnie danych osobowych (imienia, nazwiska i adresu e-mail) w celu utrzymywania kontaktu przez Spectrum Brands Poland sp. z o.o. z siedzibą w Warszawie, przy ul. Bitwy Warszawskiej 1920 r. 7A, jako administratora przekazanych danych osobowych. Potwierdzam jednocześnie, że zostałem poinformowany o dobrowolności wyrażenia zgody na przetwarzanie danych osobowych, o prawie do wycofania zgody w dowolnym momencie oraz o zgodności z prawem przetwarzania, którego dokonano na podstawie zgody przed jej wycofaniem. Więcej informacji o przetwarzaniu danych osobowych pod linkiem Polityka prywatności.</span>
                    </x-form.input.checkbox>

                    <div class="button-div">
                        <a href="{{ route('front.contact.send') }}" class="button send">Wyślij</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
