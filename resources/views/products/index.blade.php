@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-4">
                    <a href="/catalogues/{{$catalogue_id}}/categories/" class="btn btn-danger btn-circle btn-lg">
                        <i class="glyphicon glyphicon-chevron-left"></i></a>
                </div>
                <div class="col-md-4">
                    <h1 class="text-center">Productos de la categoría: <b>{{ $category_title }}</h1>
                </div>
                <div class="col-md-4">
                    @include('products.create')
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
                    @if($products)
                        {{ $products->links() }}
                    @endif
                </div>

                <div class="row">
                    <table class="table table-hover" width="100%">
                        <thead>
                        <tr>
                            <th class="text-center">Imagen</th>
                            <th class="text-center">Titulo</th>
                            <th class="text-center">Descripción</th>
                            <th>Estatus</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        @forelse($products as $product)
                            <tbody>
                            <tr>
                                <th width="20%"><img class="img-table-size img-rounded"
                                                     src="{{ url("images/products/$product->image") }}"
                                                     alt="{{ $product->title }}"></th>
                                <td width="20%" class="text-center"><h4>{{ $product->title }}</h4></td>
                                <td width="40%">{{ $product->description }}</td>
                                <td width="10%">{{ $product->status }}</td>
                                <td width="10%">

                                    <a href="/catalogues/{{$catalogue_id}}/categories/{{$category_id}}/products/{{ $product->id }}/edit"
                                       class="btn btn-warning"
                                       role="button">
                                        <i class="glyphicon glyphicon-pencil"></i></a>

                                    {!! Form::open(['url' => 'products/'.$product->id, 'method' => 'DELETE']) !!}
                                    <button type="submit" class="btn btn-danger"><i
                                                class="glyphicon glyphicon-trash"></i></button>
                                    {!! Form::close() !!}

                                </td>
                            </tr>
                            </tbody>
                        @empty
                            <div class="alert alert-danger">
                                <h3 class="text-center">Ups!! No existen productos, crea uno...</h3>
                            </div>
                        @endforelse
                    </table>
                </div>
                <hr>

                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    @if($products)
                        {{ $products->links() }}
                    @endif
                </div>

            </div>
            <!--row-->
        </div>
    </div>
@endsection