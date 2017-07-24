@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-center">Editar Cliente</h1>
                    <!-- Button trigger modal -->
                </div>
                <a href="{{ url('/clients') }}" type="button" class="btn btn-primary pull-right">Regresar</a>
            </div>
            <hr>

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

            {!! Form::model(
                $client,
                ['route' => ['clients.update', $client->id],
                'class' => 'form-horizontal',
                'method' => 'PUT',
                'files' => true]) !!}

            {{ Form::hidden('id', $client->id) }}
            <div class="col-xs-12 col-md-6">
                <div class="file-upload">
                    <button class="file-upload-btn" type="button"
                            onclick="$('.file-upload-input').trigger( 'click' )">Editar Imagen
                    </button>
                    <div class="image-upload-wrap">
                        <input class="file-upload-input" type='file' name="image" onchange="readURL(this);"
                               accept="image/*"/>
                        <div class="drag-text">
                            <img class="file-upload-image" src="{{ url("images/clients/$client->image") }}" alt="">
                            <h4>Cambia la imagen aquí</h4>
                        </div>
                    </div>
                    <div class="file-upload-content">
                        <img class="file-upload-image" src="" alt="your image"/>
                        <div class="image-title-wrap">
                            <button type="button" onclick="removeUpload()" class="remove-image"><b>Eliminar</b>
                                <span class="image-title">Uploaded Image</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="form-group">
                    {{ Form::label('Titulo', null, ['class' => 'control-label']) }}
                    {{ Form::text('title', $client->title, ['class' => 'form-control', 'id' => 'recipient-name']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('Descripcion', null, ['class' => 'control-label']) }}
                    {{ Form::textarea('description', $client->description, ['class' => 'form-control', 'rows' => '3', 'id' => 'message-text']) }}
                </div>
                <div class="form-group">
                    {{ Form::select('kind', ['professional' => 'Professional', 'retail' => 'Retail'], $client->kind, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::select('status', ['active' => 'Activo', 'inactive' => 'Inactivo'], $client->status, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg pull-right">Editar</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
        <hr>
        <div class="col-xs-6 col-md-6 text-center">
            <a href="{{ url('/clients') }}" type="button" class="btn btn-danger">Cancelar</a>
        </div>
        <div class="col-xs-6 col-md-6 text-center">
            <h4 class="text-center">Nota: El titulo no se debe repetir con otros productos, pero se puede repetir así mismo.</h4>
        </div>
    </div>
@endsection