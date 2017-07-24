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
                    <div class="shop-item-filter">
                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                            <div class="shop-tab clearfix">
                                <!-- Nav tabs -->
                                <ul role="tablist">
                                    <li role="presentation" class="active"><a data-toggle="tab" role="tab" aria-controls="grid" class="grid-view" href="#grid"><i class="zmdi zmdi-apps"></i></a></li>
                                    <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list" class="list-view" href="#list"><i class="zmdi zmdi-view-list-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-3 hidden-xs">
                            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                                @if($catalogues)
                                    {{ $catalogues->links() }}
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 hidden-xs">
                            <div class="filter-by">
                                <h4>Short by: </h4>
                                <form action="#">
                                    <div class="select-filter">
                                        <select>
                                            <option value="10">popular</option>
                                            <option value="20">premium</option>
                                            <option value="30">standard</option>
                                            <option value="30">gold</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    @include('frontend.sidebar')
                </div>
                <div class="col-md-8 col-xs-12">
                    <div class="clearfix"></div>
                    <div class="tab-content">
                        <div id="grid" class="tab-pane active" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        @forelse($catalogues as $catalogue)
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="single-product">
                                                    <div class="single-product-img">
                                                        <a href="#"><img src="{{ url("images/catalogues/$catalogue->image") }}" alt="{{ $catalogue->title }}" class="img-catalog"></a>
                                                    </div>
                                                    <div class="single-product-hover">
                                                        <div class="single-product-hover-text">
                                                            <h4>
                                                                <a href="/catalogos/{{ $catalogue->id }}/categorias/">{{ $catalogue->title }}</a>
                                                            </h4>
                                                            <ul class="cart-metalic">
                                                                <li>
                                                                    <a href="/catalogos/{{ $catalogue->id }}/categorias/"
                                                                       class="add-to-cart">Ver >></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="alert alert-danger">
                                                <h3 class="text-center">Ups!! No existen catálogos, los estamos creando...</h3>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="list" class="tab-pane" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        @forelse($catalogues as $catalogue)
                                            <div class="shop-product-list col-md-12">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-5 col-sm-5">
                                                        <div class="single-product">
                                                            <div class="single-product-img">
                                                                <a href="#"><img class="img-home"
                                                                                 src="{{ url("images/catalogues/$catalogue->image") }}"
                                                                                 alt="{{ $catalogue->title }}"></a>
                                                            </div>
                                                            <div class="single-product-hover">
                                                                <div class="single-product-hover-text">
                                                                    <h4><a href="#">{{ $catalogue->title }}</a></h4>
                                                                    <ul class="cart-metalic">
                                                                        <li>
                                                                            <a href="/catalogos/{{ $catalogue->id }}/categorias/"
                                                                               class="add-to-cart">Ver >></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-7 col-sm-7">
                                                        <div class="single-product-info">
                                                            <h2>{{ $catalogue->title }}</h2>
                                                            <h5>{{ $catalogue->description }}</h5>
                                                            <ul class="cart-metalic">
                                                                <li>
                                                                    <a href="/catalogos/{{ $catalogue->id }}/categorias/"
                                                                       class="add-to-cart">Ver >></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="alert alert-danger">
                                                <h3 class="text-center">Ups!! No existen catálogos, los estamos creando...</h3>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop grid end -->
@endsection