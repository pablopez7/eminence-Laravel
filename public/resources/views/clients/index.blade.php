@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-center">Clientes</h1>
                    <!-- Button trigger modal -->
                </div>
                <div class="col-md-6">
                    @include('clients.create')
                </div>
            </div>
            <hr>
            <div class="row">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @include('components.flash')


                <div class="container">
                    <div class="row">
                        <h2 class="text-center">Professional</h2>
                    </div>
                    <div class="row">
                        @forelse($professionals as $professional)
                            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                                <div class="thumbnail">
                                    <img class="img-table-size img-rounded"
                                         src="{{ url("images/clients/$professional->image") }}"
                                         alt="{{ $professional->title }}">
                                    <div class="caption text-center">
                                        <h3>{{ $professional->title }}</h3>
                                        <h4>{{ $professional->description }}</h4>
                                        <p><b> Estatus: </b> {{ $professional->status }} -- <b> Organizar: </b> {{ $professional->order }} </p>
                                        <div class="row">
                                            <div class="col-xs-6 col-md-6 col-lg-6">
                                                {!! Form::open(['url' => '/clients/'.$professional->id, 'method' => 'DELETE']) !!}
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="glyphicon glyphicon-trash"> Borrar</i>
                                                </button>
                                                {!! Form::close() !!}
                                            </div>
                                            <div class="col-xs-6 col-md-6 col-lg-6">
                                                <a href="/clients/{{ $professional->id }}/edit" class="btn btn-warning"
                                                   role="button">
                                                    <i class="glyphicon glyphicon-pencil"> Editar</i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="alert alert-danger">
                                <h3 class="text-center">Ups!! Aun no hay clientes, crea uno...</h3>
                            </div>
                        @endforelse
                    </div>
                </div>
                <hr>
                <div class="container">
                    <div class="row">
                        <h2 class="text-center">Retail</h2>
                    </div>
                    <div class="row">
                        @forelse($retails as $retail)
                            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                                <div class="thumbnail">
                                    <img class="img-table-size img-rounded"
                                         src="{{ url("images/clients/$retail->image") }}"
                                         alt="{{ $retail->title }}">
                                    <div class="caption text-center">
                                        <h3>{{ $retail->title }}</h3>
                                        <h4>{{ $retail->description }}</h4>
                                        <p><b> Estatus: </b> {{ $retail->status }} -- <b> Organizar: </b> {{ $retail->order }} </p>
                                        <div class="row">
                                            <div class="col-xs-6 col-md-6 col-lg-6">
                                                {!! Form::open(['url' => '/clients/'.$retail->id, 'method' => 'DELETE']) !!}
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="glyphicon glyphicon-trash"> Borrar</i>
                                                </button>
                                                {!! Form::close() !!}
                                            </div>
                                            <div class="col-xs-6 col-md-6 col-lg-6">
                                                <a href="/clients/{{ $retail->id }}/edit" class="btn btn-warning"
                                                   role="button">
                                                    <i class="glyphicon glyphicon-pencil"> Editar</i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="alert alert-danger">
                                <h3 class="text-center">Ups!! Aun no hay clientes, crea uno...</h3>
                            </div>
                        @endforelse
                    </div>
                </div>


                <hr>
            </div>
            <!--row-->
        </div>
    </div>


@endsection