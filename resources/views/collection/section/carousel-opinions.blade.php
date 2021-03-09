@if( !$reviews->isEmpty() )
<section id="opinions" class="product">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <h2 class="title">Opinie klientów</h2>
                <span class="line"></span>
                <div class="owl-carousel">
                    @foreach($reviews as $review)
                    <div class="item">
                        <div class="opinion">
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <img class="opinion-img lazy" data-src="{{ asset('images/svg/quote.svg') }}" alt="" />
                                    <h3 class="opinion-client">{{ $review->customer }}</h3>
                                    <p class="opinion-text">{{ $review->content }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif
