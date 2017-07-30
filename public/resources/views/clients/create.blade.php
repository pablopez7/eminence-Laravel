<button type="button" class="btn btn-primary pull-right" data-toggle="modal"
        data-target=".bs-example-modal-lg">Nuevo Cliente
</button>

<!-- Modal -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="myModalLabel">Crear Cliente</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    {!! Form::open(['url' => '/clients', 'method' => 'POST', 'files' => true]) !!}
                    <div class="col-xs-12 col-md-6">
                        <div class="file-upload">
                            <button class="file-upload-btn" type="button"
                                    onclick="$('.file-upload-input').trigger( 'click' )">Agregar Imagen
                            </button>
                            <div class="image-upload-wrap">
                                <input class="file-upload-input" type='file' name="image"
                                       onchange="readURL(this);" accept="image/*"/>
                                <div class="drag-text">
                                    <h3>Arrastra una imagen hasta aquí.</h3>
                                </div>
                            </div>
                            <div class="file-upload-content">
                                <img class="file-upload-image" src="#" alt="your image"/>
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
                            {{ Form::text('title', '', ['class' => 'form-control', 'id' => 'recipient-name', 'placeholder' => 'Nombre del Cliente']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Descripcion', null, ['class' => 'control-label']) }}
                            {{ Form::textarea('description', '', ['class' => 'form-control', 'rows' => '3', 'id' => 'message-text', 'placeholder' => 'Descripción']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::select('kind', ['professional' => 'Professional', 'retail' => 'Retail'], 'professional', ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::select('status', ['active' => 'Activo', 'inactive' => 'Inactivo'], 'active', ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6 col-md-6 col-lg-6">
                                {{ Form::label('Organizar', null, ['class' => 'control-label']) }}
                                {{ Form::number('order', '', ['class' => 'form-control', 'id' => 'recipient-name', 'placeholder' => '#']) }}
                            </div>
                            <div class="col-xs-6 col-md-6 col-lg-6">
                                <button type="submit" class="btn btn-success btn-lg pull-right">Crear</button>
                            </div>
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