@extends('layouts.principal')

    @section('contenido')

    <form  action="{{route('departments.update', $department->id)}}" method="POST" class="row g-3 needs-validation" novalidate>
        @method('PUT')
        @csrf

        <h1>Editar departamento</h1><hr><br>
        
        <!-- NOMBRE Y DESCRIPTION -->
        <div class="row">

            <div class="col-sm-6">

                <label for="name" class="form-label">Nombre</label>
                <input name="name" id="name" class="form-control" value="{{$department->name}}">

            </div>

            <div class="col-sm-6">

                <label for="description" class="form-label">Descripcion</label>
                <textarea name="description" id="description" cols="auto" rows="auto" class="form-control"> {{$department->description}}</textarea>

            </div>

        </div>
        <br>

        <div class="row">

          <div class="col-sm-6">

            <input type="submit" class="btn btn-outline-success" onclick="return confirm('¿Desea Guardar los Cambios?')" value="Actualizar">

            <input type="reset" value="Borrar Formulario" class="btn btn-outline-warning" onclick="return confirm('¿Desea Limpiar el Formulario?')">

            <a href="{{route('departments.index')}}" class="btn btn-outline-primary" onclick="return confirm('Desea salir sin actualizar los cambios?')">Regresar</a>

          </div>

        </div>

    </form>

    @endsection