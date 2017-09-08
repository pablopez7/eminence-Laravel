@extends('layouts.eminence')

@section('content')
    <!-- banner start -->
    <div class="banner-area">
        <img class="image-banner" src="/img/banner/img.jpg" alt="">
    </div>
    <!-- banner end -->
    <!-- Spa Locations us start -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title space-title">
                    <h2>localiza tu spa</h2><br><br><br>
                </div>
            </div>
        </div>
        <div class="row">
            <section id="map">
                <div class="container">
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-12">
                            <div class="panel-body">
                                <div style="width: 100%; height: 500px;">{!! Mapper::render() !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- Spa Locations us end -->
@endsection