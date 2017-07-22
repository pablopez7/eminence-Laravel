@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-center">Catalogos</h1>
                    <!-- Button trigger modal -->
                </div>
                <div class="col-md-6">
                    @include('catalogues.create')
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
                            <th>Estatus</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        @forelse($catalogues as $catalogue)
                            <tbody>
                            <tr>
                                <th width="20%"><img class="img-table-size img-rounded"
                                                     src="{{ url("images/catalogues/$catalogue->image") }}"
                                                     alt="{{ $catalogue->title }}"></th>
                                <td width="20%" class="text-center"><h4>{{ $catalogue->title }}</h4></td>
                                <td width="40%">{{ $catalogue->description }}</td>
                                <td width="10%">{{ $catalogue->status }}</td>
                                <td width="10%">
                                    <a href="/catalogues/{{ $catalogue->id }}/edit" class="btn btn-warning"
                                       role="button">
                                        <i class="glyphicon glyphicon-pencil"></i></a>

                                    {!! Form::open(['url' => '/catalogues/'.$catalogue->id, 'method' => 'DELETE']) !!}
                                    <button type="submit" class="btn btn-danger"><i
                                                class="glyphicon glyphicon-trash"></i></button>
                                    {!! Form::close() !!}

                                    <a href="/catalogues/{{ $catalogue->id }}/categories/" class="btn btn-primary"
                                       role="button">
                                        <i class="glyphicon glyphicon-chevron-right"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        @empty
                            <div class="alert alert-danger">
                                <h3 class="text-center">Ups!! No existen catalogos, crea uno...</h3>
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