@extends('layouts.eminence')

@section('content')
<div class="extend"></div>
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
                        <div class="show text-center">
                            <p>show: 16 items</p>
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
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="shop-left-sidebar">
                    <div class="single-left-widget">
                        <div class="section-title">
                            <h4>categories</h4>
                            <ul>
                                <li><a href="#" class="show-submenu">Nickel Men’s Spa</a>
                                    <ul class="submenu submenu-active">
                                        <li><a href="#">Spa Skin-Care</a></li>
                                        <li><a href="#">lora</a></li>
                                        <li><a href="#">Bliss Spa</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="show-submenu">Clarins Spa</a>
                                    <ul class="submenu">
                                        <li><a href="#">Spa Skin-Care</a></li>
                                        <li><a href="#">lora</a></li>
                                        <li><a href="#">Bliss Spa</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="show-submenu">Anantara Spa</a>
                                    <ul class="submenu">
                                        <li><a href="#">Spa Skin-Care</a></li>
                                        <li><a href="#">lora</a></li>
                                        <li><a href="#">Bliss Spa</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="show-submenu">Elemis Spa</a>
                                    <ul class="submenu">
                                        <li><a href="#">Spa Skin-Care</a></li>
                                        <li><a href="#">lora</a></li>
                                        <li><a href="#">Bliss Spa</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="show-submenu">Mandara Spa</a>
                                    <ul class="submenu">
                                        <li><a href="#">Spa Skin-Care</a></li>
                                        <li><a href="#">lora</a></li>
                                        <li><a href="#">Bliss Spa</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="show-submenu">NATURA spa</a>
                                    <ul class="submenu">
                                        <li><a href="#">Spa Skin-Care</a></li>
                                        <li><a href="#">lora</a></li>
                                        <li><a href="#">Bliss Spa</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-xs-12">
                <div class="clearfix"></div>
                <div class="tab-content">
                    <div id="grid" class="tab-pane active" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#"><img src="{{ url('img/product/2.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="single-product-hover">
                                                <div class="single-product-hover-text">
                                                    <h4><a href="#">Arctic Spa Body Lotion</a></h4>
                                                    <h2>$ 125.00</h2>
                                                    <ul class="cart-metalic">
                                                        <li class="hidden-md hidden-sm"><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                                                        <li><a href="cart.html" class="add-to-cart">add to cart</a></li>
                                                        <li class="hidden-md hidden-sm"><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#"><img src="{{ url('img/product/3.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="single-product-hover">
                                                <div class="single-product-hover-text">
                                                    <h4><a href="#">Arctic Spa Body Lotion</a></h4>
                                                    <h2>$ 125.00</h2>
                                                    <ul class="cart-metalic">
                                                        <li class="hidden-md hidden-sm"><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                                                        <li><a href="cart.html" class="add-to-cart">add to cart</a></li>
                                                        <li class="hidden-md hidden-sm"><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#"><img src="{{ url('img/product/4.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="single-product-hover">
                                                <div class="single-product-hover-text">
                                                    <h4><a href="#">Arctic Spa Body Lotion</a></h4>
                                                    <h2>$ 125.00</h2>
                                                    <ul class="cart-metalic">
                                                        <li class="hidden-md hidden-sm"><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                                                        <li><a href="cart.html" class="add-to-cart">add to cart</a></li>
                                                        <li class="hidden-md hidden-sm"><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#"><img src="{{ url('img/product/6.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="single-product-hover">
                                                <div class="single-product-hover-text">
                                                    <h4><a href="#">Arctic Spa Body Lotion</a></h4>
                                                    <h2>$ 125.00</h2>
                                                    <ul class="cart-metalic">
                                                        <li class="hidden-md hidden-sm"><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                                                        <li><a href="cart.html" class="add-to-cart">add to cart</a></li>
                                                        <li class="hidden-md hidden-sm"><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#"><img src="{{ url('img/product/7.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="single-product-hover">
                                                <div class="single-product-hover-text">
                                                    <h4><a href="#">Arctic Spa Body Lotion</a></h4>
                                                    <h2>$ 125.00</h2>
                                                    <ul class="cart-metalic">
                                                        <li class="hidden-md hidden-sm"><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                                                        <li><a href="cart.html" class="add-to-cart">add to cart</a></li>
                                                        <li class="hidden-md hidden-sm"><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#"><img src="{{ url('img/product/8.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="single-product-hover">
                                                <div class="single-product-hover-text">
                                                    <h4><a href="#">Arctic Spa Body Lotion</a></h4>
                                                    <h2>$ 125.00</h2>
                                                    <ul class="cart-metalic">
                                                        <li class="hidden-md hidden-sm"><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                                                        <li><a href="cart.html" class="add-to-cart">add to cart</a></li>
                                                        <li class="hidden-md hidden-sm"><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="list" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="shop-product-list col-md-12">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-5 col-sm-5">
                                                <div class="single-product">
                                                    <div class="single-product-img">
                                                        <a href="#"><img src="{{ url('img/product/3.jpg') }}" alt=""></a>
                                                    </div>
                                                    <div class="single-product-hover">
                                                        <div class="single-product-hover-text">
                                                            <h4><a href="#">Arctic Spa Body Lotion</a></h4>
                                                            <h2>$ 125.00</h2>
                                                            <ul class="cart-metalic">
                                                                <li class="hidden-md hidden-sm"><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                                                                <li><a href="cart.html" class="add-to-cart">add to cart</a></li>
                                                                <li class="hidden-md hidden-sm"><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7">
                                                <div class="single-product-info">
                                                    <h3>Arctic Spa Body Lotion</h3>
                                                    <h4>$ 125.00</h4>
                                                    <h5>AVAILABILITY: <span>IN STOCK</span></h5>
                                                    <h5>OVERVIEW:</h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                    <ul class="cart-metalic">
                                                        <li class="hidden-xs"><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                                                        <li><a href="cart.html" class="add-to-cart">add to cart</a></li>
                                                        <li class="hidden-xs"><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-product-list col-md-12">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-5 col-sm-5">
                                                <div class="single-product">
                                                    <div class="single-product-img">
                                                        <a href="#"><img src="{{ url('img/product/6.jpg') }}" alt=""></a>
                                                    </div>
                                                    <div class="single-product-hover">
                                                        <div class="single-product-hover-text">
                                                            <h4><a href="#">Arctic Spa Body Lotion</a></h4>
                                                            <h2>$ 125.00</h2>
                                                            <ul class="cart-metalic">
                                                                <li class="hidden-md hidden-sm"><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                                                                <li><a href="cart.html" class="add-to-cart">add to cart</a></li>
                                                                <li class="hidden-md hidden-sm"><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7">
                                                <div class="single-product-info">
                                                    <h3>Arctic Spa Body Lotion</h3>
                                                    <h4>$ 125.00</h4>
                                                    <h5>AVAILABILITY: <span>IN STOCK</span></h5>
                                                    <h5>OVERVIEW:</h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                    <ul class="cart-metalic">
                                                        <li class="hidden-xs"><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                                                        <li><a href="cart.html" class="add-to-cart">add to cart</a></li>
                                                        <li class="hidden-xs"><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-product-list col-md-12">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-5 col-sm-5">
                                                <div class="single-product">
                                                    <div class="single-product-img">
                                                        <a href="#"><img src="{{ url('img/product/1.jpg') }}" alt=""></a>
                                                    </div>
                                                    <div class="single-product-hover">
                                                        <div class="single-product-hover-text">
                                                            <h4><a href="#">Arctic Spa Body Lotion</a></h4>
                                                            <h2>$ 125.00</h2>
                                                            <ul class="cart-metalic">
                                                                <li class="hidden-md hidden-sm"><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                                                                <li><a href="cart.html" class="add-to-cart">add to cart</a></li>
                                                                <li class="hidden-md hidden-sm"><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7">
                                                <div class="single-product-info">
                                                    <h3>Arctic Spa Body Lotion</h3>
                                                    <h4>$ 125.00</h4>
                                                    <h5>AVAILABILITY: <span>IN STOCK</span></h5>
                                                    <h5>OVERVIEW:</h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                    <ul class="cart-metalic">
                                                        <li class="hidden-xs"><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                                                        <li><a href="cart.html" class="add-to-cart">add to cart</a></li>
                                                        <li class="hidden-xs"><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-product-list col-md-12">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-5 col-sm-5">
                                                <div class="single-product">
                                                    <div class="single-product-img">
                                                        <a href="#"><img src="{{ url('img/product/3.jpg') }}" alt=""></a>
                                                    </div>
                                                    <div class="single-product-hover">
                                                        <div class="single-product-hover-text">
                                                            <h4><a href="#">Arctic Spa Body Lotion</a></h4>
                                                            <h2>$ 125.00</h2>
                                                            <ul class="cart-metalic">
                                                                <li class="hidden-md hidden-sm"><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                                                                <li><a href="cart.html" class="add-to-cart">add to cart</a></li>
                                                                <li class="hidden-md hidden-sm"><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7">
                                                <div class="single-product-info">
                                                    <h3>Arctic Spa Body Lotion</h3>
                                                    <h4>$ 125.00</h4>
                                                    <h5>AVAILABILITY: <span>IN STOCK</span></h5>
                                                    <h5>OVERVIEW:</h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                    <ul class="cart-metalic">
                                                        <li class="hidden-xs"><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                                                        <li><a href="cart.html" class="add-to-cart">add to cart</a></li>
                                                        <li class="hidden-xs"><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-product-list col-md-12">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-5 col-sm-5">
                                                <div class="single-product">
                                                    <div class="single-product-img">
                                                        <a href="#"><img src="{{ url('img/product/8.jpg') }}" alt=""></a>
                                                    </div>
                                                    <div class="single-product-hover">
                                                        <div class="single-product-hover-text">
                                                            <h4><a href="#">Arctic Spa Body Lotion</a></h4>
                                                            <h2>$ 125.00</h2>
                                                            <ul class="cart-metalic">
                                                                <li class="hidden-md hidden-sm"><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                                                                <li><a href="cart.html" class="add-to-cart">add to cart</a></li>
                                                                <li class="hidden-md hidden-sm"><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7">
                                                <div class="single-product-info">
                                                    <h3>Arctic Spa Body Lotion</h3>
                                                    <h4>$ 125.00</h4>
                                                    <h5>AVAILABILITY: <span>IN STOCK</span></h5>
                                                    <h5>OVERVIEW:</h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                    <ul class="cart-metalic">
                                                        <li class="hidden-xs"><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                                                        <li><a href="cart.html" class="add-to-cart">add to cart</a></li>
                                                        <li class="hidden-xs"><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-product-list col-md-12">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-5 col-sm-5">
                                                <div class="single-product">
                                                    <div class="single-product-img">
                                                        <a href="#"><img src="{{ url('img/product/13.jpg') }}" alt=""></a>
                                                    </div>
                                                    <div class="single-product-hover">
                                                        <div class="single-product-hover-text">
                                                            <h4><a href="#">Arctic Spa Body Lotion</a></h4>
                                                            <h2>$ 125.00</h2>
                                                            <ul class="cart-metalic">
                                                                <li class="hidden-md hidden-sm"><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                                                                <li><a href="cart.html" class="add-to-cart">add to cart</a></li>
                                                                <li class="hidden-md hidden-sm"><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7">
                                                <div class="single-product-info">
                                                    <h3>Arctic Spa Body Lotion</h3>
                                                    <h4>$ 125.00</h4>
                                                    <h5>AVAILABILITY: <span>IN STOCK</span></h5>
                                                    <h5>OVERVIEW:</h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                    <ul class="cart-metalic">
                                                        <li class="hidden-xs"><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                                                        <li><a href="cart.html" class="add-to-cart">add to cart</a></li>
                                                        <li class="hidden-xs"><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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