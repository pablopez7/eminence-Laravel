<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<!-- about us start -->
<div class="about-us-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <h2>Email Eminence MX</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="about-info">
                    <h2>{{ $nombre }}</h2>
                    <h4>Te ha enviado un correo a través de la plataforma de www.eminence.mx</h4>

                    <h4>Asunto:</h4>
                    <h3>{{ $asunto }}</h3>

                    <h4>Mensaje:</h4>
                    <h3>{{ $mensaje }}</h3>

                    <h3>Los datos de contacto que dejo el usuario son los siguientes:</h3>
                    <div class="col-sm-6 col-md-6">
                        <h4>Teléfono:</h4>
                        <h2>{{ $telefono }}</h2>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <h4>Correo:</h4>
                        <h2>{{ $email }}</h2>
                    </div>
                    <div class="padding">
                        <div role="alert" class="alert alert-success"><strong>Nota!</strong> No olvides contactar a esta
                            persona lo antes posible.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
