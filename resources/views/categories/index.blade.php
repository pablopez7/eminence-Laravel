@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-4">
                    <a href="/catalogues" class="btn btn-danger btn-circle btn-lg">
                        <i class="glyphicon glyphicon-chevron-left"></i></a>
                </div>
                <div class="col-md-4">
                    <h1 class="text-center">Categorias</h1>
                </div>
                <div class="col-md-4">
                    @include('categories.create')
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

                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    @if($categories)
                        {{ $categories->links() }}
                    @endif
                </div>

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
                        @forelse($categories as $category)
                            <tbody>
                            <tr>
                                <th width="20%"><img class="img-table-size img-rounded"
                                                     src="{{ url("images/categories/$category->image") }}"
                                                     alt="{{ $category->title }}"></th>
                                <td width="20%" class="text-center"><h4>{{ $category->title }}</h4></td>
                                <td width="40%">{{ $category->description }}</td>
                                <td width="10%">{{ $category->status }}</td>
                                <td width="10%">

                                    <a href="/catalogues/{{$catalogue_id}}/categories/{{ $category->id }}/edit"
                                       class="btn btn-warning"
                                       role="button">
                                        <i class="glyphicon glyphicon-pencil"></i></a>

                                    {!! Form::open(['url' => '/categories/'.$category->id, 'method' => 'DELETE']) !!}
                                    <button type="submit" class="btn btn-danger"><i
                                                class="glyphicon glyphicon-trash"></i></button>
                                    {!! Form::close() !!}

                                    <a href="/catalogues/{{$catalogue_id}}/categories/{{ $category->id }}/products/"
                                       class="btn btn-primary"
                                       role="button">
                                        <i class="glyphicon glyphicon-chevron-right"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        @empty
                            <div class="alert alert-danger">
                                <h3 class="text-center">Ups!! No existen categorias, crea una...</h3>
                            </div>
                        @endforelse
                    </table>
                </div>
                <hr>

                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    @if($categories)
                        {{ $categories->links() }}
                    @endif
                </div>

            </div>
            <!--row-->
        </div>
    </div>
@endsection