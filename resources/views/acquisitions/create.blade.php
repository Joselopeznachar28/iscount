@extends('layouts.principal')

    @section('contenido')
    
        <h1>Agregar Requerimiento</h1><hr><br>
        <form action="{{route('acquisitions.store')}}" method="post" novalidate>
            @csrf

            <!-- DEPARTAMENTO Y FECHA DE PETICION -->
            <div class="row">
                <input type="hidden" name="department_id" id="department_id" value="{{$department->id}}">


                <div class="col-sm-6">
                    <label for="date_max" class="form-label">Requerido para:</label>
                    <input type="date" name="date_max" id="date_max" class="form-control">
                </div>

                <div class="col-sm-6">
                    <label for="description" class="form-label">Descripcion</label>
                    <textarea name="description" id="description" cols="auto" rows="auto" placeholder="Introduzca una breve descripcion del producto" class="form-control"></textarea>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-6">
                    <button type="submit" onclick="return ('Desea Realizar este Requerimiento?')" value="Guardar" class="btn btn-outline-success">Guardar</button>
                    <a href="{{route('departments.index')}}" class="btn btn-outline-primary">Regresar</a>
                </div>
            </div>
        </form>
        
    @endsection