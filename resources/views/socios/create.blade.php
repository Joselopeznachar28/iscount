@extends('layouts.principal')

    @section('contenido')

<<<<<<< HEAD
        <form action="{{ route ('socios.store') }}" method="post" class="row g-3 needs-validation" novalidate >
=======
        <form action="{{ route ('socios.store') }}" method="post" class="row g-3 needs-validation" novalidate>
>>>>>>> 70540c2e13bc2ec4ca15c2d0a573000d0463a751
        @csrf
            <h1>Datos del Socio</h1><hr>
            
            <div class="row">
                <div class="col-sm-6">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" name="name" id="name" placeholder="Ingrese el Nombre" class="form-control" >
                </div>
                <div class="col-sm-6">
                    <label for="lastname" class="form-label">Apelildo</label>
                    <input type="lastname" name="lastname" id="lastname" placeholder="Ingrese el Apellido" class="form-control" >
                </div>
            </div>
            <br>
            
            <div class="row">
                <div class="col-sm-2">
                    <label for="tipo_identificacion">Nacionalidad</label>
                    <select name="tipo_identificacion" id="tipo_identificacion" class="form-control">
                        <option value="Venezolana" selected="selected">V-</option>
                        <option value="Extranjero" selected="selected">E-</option>
                        <option value="Seleccionar" selected="selected" disabled>--Seleccionar--</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="identification" class="form-label">Identificacion</label>
                    <input type="text" name="identification" id="identification" placeholder="Ingrese la Cedula" class="form-control" >
                </div>
                <div class="col-sm-6">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email" name="email" id="email" placeholder="Ingrese el Correo" class="form-control" >
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-sm-6">
                    <label for="address" class="form-label">Direccion</label>
                    <input type="text" name="address" id="address" placeholder="Ingrese la Direccion" class="form-control">
                </div>
                <div class="col-sm-6">
                    <label for="status" class="form-label">Estado</label>
                    <select name="status" id="status" class="form-control">
                        <option value="Activo" selected='selected'> Activo </option>
                        <option value="Inactivo" selected='selected'> Inactivo </option>
                        <option value="Seleccione" selected='selected' disabled> -- Seleccione -- </option>
                    </select>
                </div>
            </div>
            <br>
<<<<<<< HEAD
            <!-- BOTONES DE OPCIONES -->
            <div class="row-3 f-end">

                <button  type="submit" onclick="return confirm('Desea guardar este nuevo Socio?')" value="Guardar" class="btn btn-outline-success">Guardar</button>

                <button  type="reset" onclick="return confirm('Desea resetear el formulario?')" value="Borrar" class="btn btn-outline-warning">Borrar</button>

                <a href="{{ route ('socios.index') }}" class="btn btn-outline-primary">Listado de Socios</a>

            </div>

        </form> 
=======

            <div class="row">
                <div class="col-sm-12">
                    <h4 style="text-align: center;">
                        Datos del Familiar
                    </h4>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-6">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Ingrese el Nombre" class="form-control" >
                </div>
                <div class="col-sm-6">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" name="apellido" id="apellido" placeholder="Ingrese el Apellido" class="form-control" >
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-sm-6">
                    <label for="identificacion" class="form-label">Identificacion</label>
                    <input type="text" name="identificacion" id="identificacion" placeholder="Ingrese la Cedula" class="form-control" >
                </div>
                <div class="col-sm-6">
                    <label for="familiar" class="form-label">Familiar</label>
                    <br>
                    <select name="familiar" id="familiar" class="form-control">
                        <option value="Padre" selected='selected'>Padre</option>
                        <option value="Madre" selected='selected'>Madre</option>
                        <option value="Hijo" selected='selected'>Hijo</option>
                        <option value="Hija" selected='selected'>Hija</option>
                        <option value="Seleccionar" selected='selected' disabled>--Seleccionar--</option>
                    </select>
                    <br>
                </div>
            </div>
            <br>

            <div class="row-3 f-end">
                <button  type="submit" onclick="return confirm('Desea guardar este nuevo Socio?')" value="Guardar" class="btn btn-outline-success">Guardar</button>
                <button  type="reset" onclick="return confirm('Desea resetear el formulario?')" value="Borrar" class="btn btn-outline-warning">Borrar</button>
                <a href="{{ route ('socios.index') }}" class="btn btn-outline-primary">Listado de Socios</a>
            </div>
        </form>
>>>>>>> 70540c2e13bc2ec4ca15c2d0a573000d0463a751
    @endsection