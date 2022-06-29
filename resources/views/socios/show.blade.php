<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> 
    <title>Ver Socio</title>
</head>
<body>

    <div class="container">
        <br>
        <div class="row">
            <div class="col-sm-12">
                <h4 style="text-align: center;">Datos del Socio</h4>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-sm-6">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" value="{{$socio->name}}" class="form-control" aria-label="Disabled input example" disabled readonly>
            </div>
            <div class="col-sm-6">
                <label for="lastname">Apellido</label>
                <input type="text" name="lastname" id="lastname" value="{{$socio->lastname}}" class="form-control" aria-label="Disabled input example" disabled readonly>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-sm-6">
                <label for="identification">Cedula</label>
                <input type="text" name="identification" id="identification" value="{{$socio->identification}}" class="form-control" aria-label="Disabled input example" disabled readonly>
            </div>
            <div class="col-sm-6">
                <label for="status">Estado</label>
                <input type="text" name="status" id="status" value="{{$socio->status}}" class="form-control" aria-label="Disabled input example" disabled readonly>   
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-sm-6">
                <label for="address">Direccion</label>
                <input type="text" name="address" id="address" value="{{$socio->address}}" class="form-control"aria-label="Disabled input example" disabled readonly>
            </div>
            <div class="col-sm-6">
                <label for="email">Correo</label>
                <input type="email" name="email" id="email" value="{{$socio->email}}" class="form-control" aria-label="Disabled input example" disabled readonly>
            </div>
        </div>
        <br>

        <div class="row">

            <div class="col-sm-6">

                <label for="membership">Membresia</label>
                <input type="text" name="membership" id="membership" value="{{$socio->membership}}" class="form-control"aria-label="Disabled input example" disabled readonly>

            </div>

        </div>
        <br>

        <!-- DATOS DEL FAMILIAR-->
        <div class="row">
            <div class="col-sm-12">
                <h4 style="text-align: center;">Datos Familiares</h4>
            </div>
        </div>
        <hr>
        
        @foreach($socio->families as $family)
            <div class="row">
                <div class="col-sm-6">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="{{$family->name}}" class="form-control" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="col-sm-6">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" value="{{$family->lastname}}" class="form-control" aria-label="Disabled input example" disabled readonly>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-sm-6">
                    <label for="identificacion">Cedula</label>
                    <input type="text" name="identificacion" id="identificacion" value="{{$family->identification}}"  class="form-control" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="col-sm-6">
                    <label for="familiar">Familiar</label>
                    <input type="text" name="type" id="type" value="{{$family->type}}" class="form-control" aria-label="Disabled input example" disabled readonly>
                </div>
            </div>
            <hr>
            <br>
        @endforeach

        <div class="row">
            <a href="{{route ('socios.index') }}" class="btn btn-outline-primary" style="margin: 0 0 0 15px;">Regresar</a> 
        </div>

    </div>
</body>
</html>