@extends('layouts.eminence')

@section('content')
    <!-- banner start -->
    <div class="banner-area">
        <img class="image-banner" src="/img/banner/img.jpg" alt="">
    </div>
    <!-- banner end -->
    <!-- contact us start -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title space-title">
                        <h2>Éminence México</h2><br><br><br>
                    </div>
                </div>
            </div>
            <div class="row">
                @if (session('message'))
                    <div class="padding">
                        <div role="alert" class="alert alert-success alert-dismissible">
                            <button aria-label="Close" data-dismiss="alert" class="close" type="button">
                                <span aria-hidden="true">×</span>
                            </button> <h4><strong>Gracias!</strong></h4> <h4>{{ session('message') }}</h4>
                        </div>
                    </div>
                @endif
                <div class="contact-form">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="contact-form-info">
                            <h2>Nosotros te contactamos</h2>
                            {!! Form::open(['url' => '/contacto', 'method' => 'POST']) !!}
                                <input type="hidden" name="_token" id="_token" value="<?= csrf_token(); ?>">
                                <input type="text" name="nombre" placeholder="Nombre*">
                                <input type="email" name="email" placeholder="e-mail*">
                                <input type="phone" name="telefono" placeholder="Teléfono">
                                <input type="text" name="asunto" placeholder="Asunto">
                                <textarea name="mensaje" placeholder="Mensaje" rows="5" cols="20"></textarea>
                                <button type="submit">Enviar</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="col-lg-5 col-lg-offse-2 col-md-5 col-md-offset-2 col-sm-12 col-xs-12">
                        <div class="contact-address">
                            <h2>Contáctanos</h2>
                            <div class="contact-address-wrapper">
                                <div class="single-address">
                                    <div class="contact-icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                    <div class="contact-info">
                                        <h4>Claudia Mendez Cuervo</h4>
                                        <p>México Managing Director</p>
                                    </div>
                                </div>
                                <div class="single-address">
                                    <div class="contact-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="contact-info">
                                        <p>(55) 3722 6299</p>
                                    </div>
                                </div>
                                <div class="single-address">
                                    <div class="contact-icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="contact-info">
                                        <p>claudia@eminence.mx</p>
                                    </div>
                                </div>
                                <div><br/>
                                    <p>Visita nuestra tienda y nuestras redes sociales<br>
                                        No olvides compartir.
                                    </p>
                                    <div class="newsletter-social-icon">
                                        <ul>
                                            <li class="google-plus"><a href="https://www.instagram.com/eminencemx/" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>
                                            <li><a href="https://www.facebook.com/MexicoEminence" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li class="pinterest"><a href="https://www.latiendadesuperfoods.com" target="_blank"><i class="zmdi zmdi-mall"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- contact us end -->
@endsection