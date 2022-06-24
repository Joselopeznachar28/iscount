@extends('layouts.principal')

@section('contenido')
    
    <form action="{{route('families.store')}}" method="post" novalidate>
        @csrf
        <!-- DATOS DE LOS FAMILIARES -->
        <div class="row">
            <div class="col-sm-12">
                <h1 style="text-align: center;">Datos del Familiar</h1>
            </div>
        </div>
        <hr>

        <!-- CAMPOS DE FAMILIARES -->
        <div id="camposFamiliar">
            <input type="hidden" name="socio_id" id="socio_id" value="{{$socio->id}}">
            <!-- NOMBRE Y APELLIDO -->
            <div class="row">
                <div class="col-sm-6">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" name="name" id="nombre" placeholder="Ingrese el Nombre" class="form-control" >
                </div>
                <div class="col-sm-6">
                    <label for="lastname" class="form-label">Apellido</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Ingrese el Apellido" class="form-control" >
                </div>
            </div>
            <br>
            <!-- IDENTIFICACION Y TIPO DE FAMILIAR -->
            <div class="row">
                <div class="col-sm-6">
                    <label for="identification" class="form-label">Identificacion</label>
                    <input type="text" name="identification" id="identification" placeholder="Ingrese la Cedula" class="form-control" >
                </div>
                <div class="col-sm-6">
                    <label for="type" class="form-label">Familiar</label>
                    <br>
                    <select name="type" id="type" class="form-control">
                        <option value="Padre" selected='selected'>Padre</option>
                        <option value="Madre" selected='selected'>Madre</option>
                        <option value="Hijo" selected='selected'>Hijo</option>
                        <option value="Hija" selected='selected'>Hija</option>
                        <option value="Seleccionar" selected='selected' disabled>--Seleccionar--</option>
                    </select>
                    <br>
                </div>
            </div><hr>  
        </div>
        <!-- Repeticion de los campos familiar -->
        <div id="otroFamiliar"></div>

        <!-- BOTONES DE OPCIONES -->
        <div class="row-3 f-end">

            <input type="button" value="Agregar Familiar" class="form-control" id="addFamiliar" class="btn btn-outline-success">

            <button  type="submit" onclick="return confirm('Desea guardar este nuevo Familiar?')" value="Guardar" class="btn btn-outline-success">Guardar</button>

            <button  type="reset" onclick="return confirm('Desea resetear el formulario?')" value="Borrar" class="btn btn-outline-warning">Borrar</button>

            <a href="{{ route ('socios.index') }}" class="btn btn-outline-primary">Listado de Socios</a>

        </div>
    </form>
@endsection