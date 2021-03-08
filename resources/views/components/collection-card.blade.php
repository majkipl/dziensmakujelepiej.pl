<div class="col-md-6 col-lg-4">
    <div class="product">
        <img class="product-img lazy" data-src="{{ $src }}" alt="" />
        <div class="product-body">
            <h4 class="product-head">{{ $name }}</h4>
            <div class="line"></div>
            <p class="product-text">{{ $slot }}</p>
            <div class="button-div">
                <a class="link product-link" href="/{{ $slug }}">Dowiedz się więcej</a>
            </div>
            <div class="button-div">
                <a class="button button-alt product-button" href="#" data-toggle="modal" data-target="#modal" data-series="{{ $slug }}">Kup teraz</a>
            </div>
        </div>
    </div>
</div>
