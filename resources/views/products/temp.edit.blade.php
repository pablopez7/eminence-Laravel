
<a href="/catalogues/{{$catalogue_id}}/categories/{{ $category->id }}/edit"
   role="button" type="button" class="btn btn-warning" data-toggle="modal"
   data-target="#editar">
    <i class="glyphicon glyphicon-pencil"></i></a>

<!-- Modal -->
<div class="modal fade bs-editar-modal-lg" id="editar" tabindex="-1" role="dialog" aria-labelledby="editar">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="myModalLabel">Crear Categoria</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    {!! Form::model(
                        $category,
                        ['route' => ['categories.update', $category->id],
                        'class' => 'form-horizontal',
                        'method' => 'PUT',
                        'files' => true]) !!}

                    {{ Form::hidden('id', $category->id) }}
                    <div class="col-xs-12 col-md-6">
                        <div class="file-upload">
                            <button class="file-upload-btn" type="button"
                                    onclick="$('.file-upload-input').trigger( 'click' )">Editar Imagen
                            </button>
                            <div class="image-upload-wrap">
                                <input class="file-upload-input" type='file' name="image" onchange="readURL(this);"
                                       accept="image/*"/>
                                <div class="drag-text">
                                    <img class="file-upload-image" src="{{ url("images/categories/$category->image") }}"
                                         alt="">
                                    <h4>Cambia la imagen aqui</h4>
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
                            {{ Form::text('title', $category->title, ['class' => 'form-control', 'id' => 'recipient-name']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Descripcion', null, ['class' => 'control-label']) }}
                            {{ Form::textarea('description', $category->description, ['class' => 'form-control', 'rows' => '3', 'id' => 'message-text']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::select('status', ['active' => 'Activo', 'inactive' => 'Inactivo'], $category->status, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg pull-right">Editar</button>
                        </div>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>