<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    
    <form action="{{route ('socios.update', $socio->id)}}" method="post">

        @csrf
        @method('PUT')

        <div class="container">
            <br>

            <div class="row">
                <div class="col-sm-12">
                    <h4 style = "text-align: center" >
                        Datos del Socio
                    </h4>
                </div>
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
    
                <div class="row">
                    <div class="col-sm-6">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" placeholder="Ingrese el Nombre" class="form-control" value="{{$socio->name}}">
                    </div>
                    <div class="col-sm-6">
                        <label for="lastname">Apelildo</label>
                        <input type="lastname" name="lastname" id="lastname" placeholder="Ingrese el Apellido" class="form-control" value="{{$socio->lastname}}">
                    </div>
                </div>
                <br>
                
                <div class="row">
                    <div class="col-sm-2">
                        <label for="tipo_identificacion">Nacionalidad</label>
                        <select name="tipo_identificacion" id="tipo_identificacion" class="form-control">
<<<<<<< HEAD
                            <option value="Venezolano">V-</option>
                            <option value="Extranjero">E-</option>
                            <option value="Extranjero" selected="selected" disabled>-- Seleccionar --</option>
=======
                            @foreach($ciudadania as $nacionalidad)
                                <option value="{{$nacionalidad}}">{{$nacionalidad}}</option>
                            @endforeach
>>>>>>> 70540c2e13bc2ec4ca15c2d0a573000d0463a751
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <label for="identification">Identificacion</label>
                        <input type="text" name="identification" id="identification" class="form-control" value="{{$socio->identification}}">
                    </div>
                    <div class="col-sm-6">
                        <label for="email">Correo</label>
                        <input type="email" name="email" id="email" value="{{$socio->email}}" class="form-control">
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-sm-6">
                        <label for="address">Direccion</label>
                        <input type="text" name="address" id="address" class="form-control" value="{{$socio->address}}">
                    </div>
                    <div class="col-sm-6">
                        <label for="status">Estado</label>
                        <select name="status" id="status" class="form-control">
<<<<<<< HEAD
                            <option selected='selected' value="Activo"> Activo </option>
                            <option selected='selected' value="Inactivo"> Inactivo </option>
                            <option selected='selected' disabled> -- Seleccionar -- </option>
=======
                            @foreach ($status_socios as $status)
                            <option placeholder="{{$socio->status}}" selected='selected'> {{ $status }} </option>
                            @endforeach  
>>>>>>> 70540c2e13bc2ec4ca15c2d0a573000d0463a751
                        </select>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-sm-6">
                        <label for="membership">Membresia</label>
<<<<<<< HEAD
                        <input type="membership" id="membership" class="form-control" value="{{ $socio->membership }}" disabled readonly>
=======
                        <input type="membership" id="membership" class="form-control" value="{{ $socio->membership }}">
>>>>>>> 70540c2e13bc2ec4ca15c2d0a573000d0463a751
                    </div>
                </div>
                <br>

<<<<<<< HEAD
            <div class="row-3">
                <button  type="submit" onclick="return confirm('Desea guardar la informacion?')" value="Guardar" class="btn btn-outline-success">Guardar</button>
=======
                <div class="row">
                    <div class="col-sm-12">
                        <h4 style="text-align: center;">
                            Datos del Familiar
                        </h4>
                    </div>
                </div>
                <hr>
                
                @foreach ($socio->familiares as $familiar)
                <div class="row">
                    <div class="col-sm-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" value="{{$familiar->name}}" class="form-control" aria-label="Disabled input example" disabled readonly>
                    </div>
                    <div class="col-sm-6">
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" id="apellido" value="{{$familiar->lastname}}" class="form-control" aria-label="Disabled input example" disabled readonly>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-sm-6">
                        <label for="identificacion">Cedula</label>
                        <input type="text" name="identificacion" value="{{$familiar->identification}}" id="identificacion" class="form-control" aria-label="Disabled input example" disabled readonly>
                    </div>
                    <div class="col-sm-6">
                        <label for="familiar">Familiar</label>
                        <br>
                        <input type="text" name="type" id="type" value="{{$familiar->type}}" class="form-control" aria-label="Disabled input example" disabled readonly>
                        <br>
                    </div>
                </div>
                <br>
                @endforeach
            <div class="row-3">
                <button  type="submit" onclick="return confirm('Desea guardar la informacion?')" value="Guardar" class="btn btn-outline-success">Guardar</button>
                <button  type="reset" onclick="return confirm('Desea resetear el formulario?')" value="Borrar" class="btn btn-outline-warning">Borrar</button>
>>>>>>> 70540c2e13bc2ec4ca15c2d0a573000d0463a751
                <a href="{{ route ('socios.index') }}" class="btn btn-outline-primary">Listado de Socios</a>
            </div>
        </div>
    </form>

</body>
</html>