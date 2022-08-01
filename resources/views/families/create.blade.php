@extends('layouts.principal')


    <h1>Datos del Familiar</h1><hr>
    @section('contenido')
        
        <form action="{{route('families.store')}}" method="post" novalidate>
            @csrf

            <input type="hidden" name="socio_id" id="socio_id" value="{{$socio->id}}">

            <!-- CAMPOS DE FAMILIARES -->
            <div class="wrapper">
                    <!-- NOMBRE Y APELLIDO -->
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" name="familyMembers[0][name]" id="memberName" placeholder="Ingrese el Nombre" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label for="lastname" class="form-label">Apellido</label>
                            <input type="text" name="familyMembers[0][lastname]" id="memberLastName" placeholder="Ingrese el Apellido" class="form-control">
                        </div>
                    </div>
                    <br>
                    <!-- IDENTIFICACION Y TIPO DE FAMILIAR -->
                    <div class="row">
                        <div class="col-sm-2">
                            <label for="tipo_identification" class="form-label">Nacionalidad</label>
                            <select name="familyMembers[0][tipo_identification]" id="memberTypeIdentification" class="form-control">
                                <option value="Venezolana" selected="selected">V-</option>
                                <option value="Extranjero" selected="selected">E-</option>
                                <option value="Seleccionar" selected="selected" disabled>--Seleccionar--</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="identification" class="form-label">Identificacion</label>
                            <input type="text" name="familyMembers[0][identification]" id="memberIdentification" placeholder="Ingrese la Cedula" class="form-control" >
                        </div>
                        <div class="col-sm-6">
                            <label for="type" class="form-label">Familiar</label>
                            <br>
                            <select name="familyMembers[0][type]" id="typeFamily" class="form-control">
                                <option value="Padre">Padre</option>
                                <option value="Madre">Madre</option>
                                <option value="Hijo">Hijo</option>
                                <option value="Hija">Hija</option>
                                <option value="Seleccionar" selected='selected' disabled>--Seleccionar--</option>
                            </select>
                            <br>
                        </div>
                    </div><hr>  

            </div>

            <!-- BOTONES DE OPCIONES -->
            <div class="row-3 f-end">

                <button  type="button" class="btn btn-outline-success" id="addFamiliar">Agregar Familiar</button>

                <input type="reset" value="Borrar Formulario" class="btn btn-outline-warning" onclick="return confirm('¿Desea Limpiar el Formulario?')">

                <button  type="submit" onclick="return confirm('Desea guardar este nuevo Familiar?')" value="Guardar" class="btn btn-outline-success">Guardar</button>

                <a href="{{ route ('socios.index') }}" class="btn btn-outline-primary">Listado de Socios</a>

            </div>
        </form>
    @endsection