@extends('layouts.eminence')

@section('content')
    <!-- banner start -->
    <div class="banner-area">
        <img class="image-banner" src="/img/banner/img.jpg" alt="">
    </div>
    <!-- banner end -->
    <!-- shop grid start -->
    <div class="shop-grid-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                        <h2>Nuestros Clientes</h2>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                        <h2>Professional</h2><br><br><br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <div class="clearfix"></div>
                    <div class="tab-content">
                        <div id="grid" class="tab-pane active" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        @forelse($professionals as $professional)
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="single-product">
                                                    <div class="single-product-img">
                                                        <a href="#"><img
                                                                    class="img-home"
                                                                    src="{{ url("images/clients/$professional->image") }}"
                                                                    alt="{{ $professional->title }}"></a>
                                                    </div>
                                                    <div class="single-product-hover">
                                                        <div class="single-product-hover-text">
                                                            <h2>
                                                                <a href="#">{{ $professional->title }}</a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="alert alert-danger">
                                                <h3 class="text-center">Ups!! No existen clientes en esta categoría, los estamos creando...</h3>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                        <h2>RETAIL</h2><br><br><br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <div class="clearfix"></div>
                    <div class="tab-content">
                        <div id="grid" class="tab-pane active" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        @forelse($retails as $retail)
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="single-product">
                                                    <div class="single-product-img">
                                                        <a href="#"><img
                                                                    class="img-home"
                                                                    src="{{ url("images/clients/$retail->image") }}"
                                                                    alt="{{ $retail->title }}"></a>
                                                    </div>
                                                    <div class="single-product-hover">
                                                        <div class="single-product-hover-text">
                                                            <h2>
                                                                <a href="#">{{ $retail->title }}</a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="alert alert-danger">
                                                <h3 class="text-center">Ups!! No existen clientes en esta categoría, los estamos creando...</h3>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <!-- shop grid end -->
@endsection