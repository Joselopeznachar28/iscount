@extends('layouts.principal')

    <h1>Datos del Socio</h1><hr>
    @section('contenido')

        <form action="{{ route ('socios.store') }}" method="post" class="row g-3 needs-validation" novalidate >
        @csrf
            
            <div class="row">
                <div class="col-sm-6">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" name="name" id="name" placeholder="Ingrese el Nombre" class="form-control" >
                </div>
                <div class="col-sm-6">
                    <label for="lastname" class="form-label">Apellido</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Ingrese el Apellido" class="form-control" >
                </div>
            </div>
            <br>
            
            <div class="row">
                <div class="col-sm-2">
                    <label for="typeIdentification" class="form-label">Nacionalidad</label>
                    <select name="typeIdentification" id="typeIdentification" class="form-control">
                        <option value="Venezolana">V-</option>
                        <option value="Extranjero">E-</option>
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
            </div>
            <br>
            <!-- BOTONES DE OPCIONES -->
            <div class="row-3 f-end">

                <button  type="submit" onclick="return confirm('Desea guardar este nuevo Socio?')" value="Guardar" class="btn btn-outline-success">Guardar</button>

                <button  type="reset" onclick="return confirm('Desea Borrar el formulario?')" value="Borrar" class="btn btn-outline-warning">Borrar</button>

                <a href="{{ route ('socios.index') }}" class="btn btn-outline-primary">Listado de Socios</a>

            </div>

        </form> 
    @endsection