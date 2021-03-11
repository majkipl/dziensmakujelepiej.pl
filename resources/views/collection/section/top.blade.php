<section id="top" class="product" style="background-image:url({{ asset('images/products/shadow.png') }}), url({{ $poster }})">
    @isset($video)
    <video class="video lazy" data-src="{{ $video }}" autoplay="" loop="" muted=""></video>
    @endisset
    <div class="container">
        <h1 class="title">{{ $title }}</h1>
    </div>
    <button class="scroll-button" aria-label="scroll-button"><img class="scroll-icon" src="{{ asset('images/svg/scroll.svg') }}" alt="" /></button>
</section>
