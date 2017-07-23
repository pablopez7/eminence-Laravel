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
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            </div>
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

                <div class="row">
                    <table class="table table-hover" width="100%">
                        <thead>
                        <tr>
                            <th class="text-center">Imagen</th>
                            <th class="text-center">Titulo</th>
                            <th class="text-center">Descripcion</th>
                            <th>Tipo</th>
                            <th>Estatus</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        @forelse($clients as $client)
                            <tbody>
                            <tr>
                                <th width="20%"><img class="img-table-size img-rounded"
                                                     src="{{ url("images/clients/$client->image") }}"
                                                     alt="{{ $client->title }}"></th>
                                <td width="20%" class="text-center"><h4>{{ $client->title }}</h4></td>
                                <td width="40%">{{ $client->description }}</td>
                                <td width="10%">{{ $client->kind }}</td>
                                <td width="10%">{{ $client->status }}</td>
                                <td width="10%">
                                    <a href="/clients/{{ $client->id }}/edit" class="btn btn-warning"
                                       role="button">
                                        <i class="glyphicon glyphicon-pencil"></i></a>

                                    {!! Form::open(['url' => '/clients/'.$client->id, 'method' => 'DELETE']) !!}
                                    <button type="submit" class="btn btn-danger"><i
                                                class="glyphicon glyphicon-trash"></i></button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            </tbody>
                        @empty
                            <div class="alert alert-danger">
                                <h3 class="text-center">Ups!! Aun no hay clientes, crea uno...</h3>
                            </div>
                        @endforelse
                    </table>
                </div>
                <hr>
            </div>
            <!--row-->
        </div>
    </div>
@endsection