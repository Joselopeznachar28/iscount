@extends('layouts.principal')

    @section('contenido')
        <h1>Detalles del departamento</h1><hr><br>

        <div class="row">

            <div class="col-sm-6">

                <label for="name" class="form-label">Nombre del Departamento</label>
                <input type="text" name="name" id="name" class="form-control" disable readonly value="{{$department->name}}">

            </div>

            <div class="col-sm-6">

                <label for="description" class="form-label">Descripcion del Departamento</label>
                <textarea name="description" id="description" cols="auto" rows="auto" class="form-control" disable readonly>{{$department->description}}</textarea>

            </div>

        </div>
        <br>

        <div class="row">
            <div class="col-sm-4">
                <a href="{{route('departments.index')}}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    @endsection