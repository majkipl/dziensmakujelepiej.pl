@if( isset($links) && !$links->isEmpty() )
    <section id="brands" class="product">
        <div class="container">
            <h2 class="title">Gdzie kupić</h2>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        @foreach($links as $link)
                            <div class="col-6 col-md-4">
                                <a class="product-link" href="{{ $link->url }}" target="_blank"
                                   rel="noopener noreferrer">
                                    <div class="brand-box"></div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
