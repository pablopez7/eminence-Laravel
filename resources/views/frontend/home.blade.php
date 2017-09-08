@extends('layouts.eminence')

@section('content')
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="{{ url('img/slider1/img1.png') }}" alt="...">
            <div class="carousel-caption">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="nivo_text">
                            <div class="nivo_text-wrapper">
                                <div class="slider-content slider-text-1 text-left">
                                    <div class="wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.3s">
                                        <h1><span>Nuestros Productos</span><br></h1>
                                    </div>
                                </div>
                                <div class="slider-content slider-text-2 text-left">
                                    <div class="wow bounceInLeft" data-wow-duration="3s" data-wow-delay="1s">
                                        <p class="text-slide tex-slide">Cada producto es elaborado y empacado con la mejor calidad y frescura cada ingrediente
                                            es seleccionado cuidadosamente.</p>
                                    </div>
                                </div>
                                <div class="slider-content slider-text-3 text-left hidden-sm">
                                    <div class="wow bounceInUp" data-wow-duration="3s" data-wow-delay="1s"> <a href='/catalogos' class='slider-button hidden-xs'>Productos >></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ url('img/slider1/img2.png') }}" alt="...">
            <div class="carousel-caption">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="nivo_text">
                            <div class="nivo_text-wrapper">
                                <div class="slider-content slider-text-1 text-left">
                                    <div class="wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.3s">
                                        <h1><span>Nuestros Clientes</span><br></h1>
                                    </div>
                                </div>
                                <div class="slider-content slider-text-2 text-left">
                                    <div class="wow bounceInLeft" data-wow-duration="3s" data-wow-delay="1s">
                                        <p class="text-slide tex-slide">Cada cliente es tan importante para nosotros, por eso cada producto es elaborado con la más alta calidad.</p>
                                    </div>
                                </div>
                                <div class="slider-content slider-text-3 text-left hidden-sm">
                                    <div class="wow bounceInUp" data-wow-duration="3s" data-wow-delay="1s"> <a href='/clientes' class='slider-button hidden-xs'>Clientes >></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ url('img/slider1/img3.png') }}" alt="...">
            <div class="carousel-caption">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="nivo_text">
                            <div class="nivo_text-wrapper">
                                <div class="slider-content slider-text-1 text-left">
                                    <div class="wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.3s">
                                        <h1><span>Empresa Verde</span><br></h1>
                                    </div>
                                </div>
                                <div class="slider-content slider-text-2 text-left">
                                    <div class="wow bounceInLeft" data-wow-duration="3s" data-wow-delay="1s">
                                        <p class="text-slide tex-slide">Somos una empresa Socialmente responsable, y solo procuramos que cada cliente reciba
                                            un producto de la más alta calidad.</p>
                                    </div>
                                </div>
                                <div class="slider-content slider-text-3 text-left hidden-sm">
                                    <div class="wow bounceInUp" data-wow-duration="3s" data-wow-delay="1s"> <a href='/empresaVerde' class='slider-button hidden-xs'>Empresa Verde >></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ url('img/slider1/img4.png') }}" alt="...">
            <div class="carousel-caption">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="nivo_text">
                            <div class="nivo_text-wrapper">
                                <div class="slider-content slider-text-1 text-left">
                                    <div class="wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.3s">
                                        <h1 class="text-center"><span>Éminence E.U.A.</span><br><a class="slider-button hidden-xs fancybox" href="#inline1" title="Éminence E.U.A. / www.eminenceorganics.com/us" role="button">ver video</a></h1>
                                    </div>
                                </div>

                                <div style="display: none;">
                                    <div id="inline1" style="max-width:770px;">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <iframe width="750" height="400" src="https://www.youtube.com/embed/m7u9mAX465E" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>

                                <div class="slider-content slider-text-2 text-left">
                                    <div class="wow bounceInLeft" data-wow-duration="3s" data-wow-delay="1s">
                                        <p class="text-slide tex-slide">Puedes ver más detalles de cada producto en nuestra página en ingles. <code>www.eminenceorganics.com/us</code></p>
                                    </div>
                                </div>
                                <div class="slider-content slider-text-3 text-left hidden-sm">
                                    <div class="wow bounceInUp" data-wow-duration="3s" data-wow-delay="1s"> <a href='https://eminenceorganics.com/us' target="_blank" class='slider-button hidden-xs'>Éminence E.U.A. >></a>                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- arrival area start -->
<div class="arrival-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <h2>Productos mas populares</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse($catalogues as $catalogue)
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-product">
                    <div class="single-product-img">
                        <a href="#"><img class="img-home" src="{{ url("images/catalogues/$catalogue->image") }}"
                                         alt="{{ $catalogue->title }}"></a>
                    </div>
                    <div class="single-product-hover">
                        <div class="single-product-hover-text">
                            <h2><a class="title-home" href="/catalogos/{{ $catalogue->id }}/categorias/">{{ $catalogue->title }}</a></h2>
                            <ul class="cart-metalic">
                                <li><a href="/catalogos/{{ $catalogue->id }}/categorias/" class="add-to-cart">Ver >></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                <div class="alert alert-danger">
                    <h3 class="text-center">Ups!! Por el momento no tenemos productos, pero muy pronto estarán listos...</h3>
                </div>
            @endforelse
        </div>
    </div>
</div>
<!-- arrival area end -->
<!-- newsletter area start -->
<div class="newsletter-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-service">
                    <div class="single-service-icon"> <i class="zmdi zmdi-flower"></i> </div>
                    <div class="single-service-info">
                        <h5>Productos naturales</h5>
                        <p>Seleccionamos cuidadosamente cada producto para tu tranquilidad.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-service">
                    <div class="single-service-icon"> <i class="zmdi zmdi-shield-check"></i> </div>
                    <div class="single-service-info">
                        <h5>reconocimientos</h5>
                        <p>Nuestros reconocimientos nos avalan como una empresa 100% natural.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 hidden-md hidden-sm">
                <div class="single-service">
                    <div class="single-service-icon"> <i class="zmdi zmdi-phone"></i> </div>
                    <div class="single-service-info">
                        <h5>atención personalizada</h5>
                        <p>Tenemos un grupo de profesionales listos para asesorarte</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
