<footer id="footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-auto">
                <a href="/" aria-label="Russell Hobbs">
                    <img class="logo" src="{{ asset('images/svg/logo.svg') }}" alt="" />
                </a>
            </div>
            <div class="col-auto socials">
                <a class="social" href="https://www.instagram.com/kochamdom/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                    {!! file_get_contents(public_path('images/svg/icon/instagram.svg')) !!}
                </a>
                <a class="social" href="https://www.youtube.com/user/russellhobbspolska" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
                    {!! file_get_contents(public_path('images/svg/icon/youtube.svg')) !!}
                </a>
                <a class="social" href="https://www.facebook.com/RussellHobbsPolska" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                    {!! file_get_contents(public_path('images/svg/icon/facebook.svg')) !!}
                </a>
            </div>
        </div>
        <p class="info"><a class="link" href="{{ asset('polityka.pdf') }}" target="_blank" rel="noopener noreferrer">Polityka prywatności</a></p>
        <p class="info"><a class="link" href="{{ asset('regulamin.pdf') }}" target="_blank" rel="noopener noreferrer">Regulamin</a></p>
    </div>
</footer>
