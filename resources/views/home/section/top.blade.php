<section id="top" class="home">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 top-col-lg-2/5">
                <p class="head">Dzień smakuje lepiej!</p>
                <img class="icon" src="{{ asset('images/svg/home/top/icon.svg') }}" alt="" />
                <p class="lead">Kup dowolne produkty<br />Russell Hobbs za minimum 249 zł<br />i ODBIERZ zestaw młynków<br />do soli i pieprzu o wartości 130 zł<br /><span class="link" style="text-decoration: underline;">GRATIS!</span></p><img class="mlynki" src="{{ asset('images/home/top/mlynki.png') }}" alt="" />
                <div class="button-div"><a class="button button-alt" href="#about">Zobacz więcej</a></div>
                <p class="lead">Promocja trwa do 30 czerwca 2021 r.</p>
            </div>
            <div class="col-12 top-col-lg-3/5">
                <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="carousel-img" src="{{ asset('images/home/top/0.jpg') }}" alt="" />
                        </div>
                        <div class="carousel-item">
                            <img class="carousel-img" src="{{ asset('images/home/top/1.jpg') }}" alt="" />
                        </div>
                        <div class="carousel-item">
                            <img class="carousel-img" src="{{ asset('images/home/top/2.jpg') }}" alt="" />
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <img class="shadow-img" src="{{ asset('images/home/top/shadow.png') }}" alt="" />
</section>
