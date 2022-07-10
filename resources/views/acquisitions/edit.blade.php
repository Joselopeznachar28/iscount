@extends('layouts.principal')

    @section('contenido')

    <form  action="{{ route('acquisitions.update' , $acquisition->id)}}" method="POST" class="row g-3 needs-validation" novalidate>
        @method('PUT')
        @csrf

        <h1>Editar Producto</h1><hr><br>
        
        <!-- DEARTAMENTO Y FECHA DE REQUERIMIENTO -->
        <div class="row">

            <div class="col-sm-6">

                <label for="department_id" class="form-label">Departamento</label>
                <input name="department_id" id="department_id" class="form-control" value="{{$acquisition->department_id}}" readonly>

            </div>

            <div class="col-sm-6">

              <label for="date_acquisition" class="form-label">Fecha de Peticion</label>
              <input name="date_acquisition" id="date_acquisition" class="form-control" value="{{$acquisition->date_acquisition}}" readonly>

          </div>

        </div>
        <br>

        <div class="row">

            <div class="col-sm-6">
                <label for="date_max" class="form-label">Requerido para: </label>
                <input type="date" name="date_max" id="date_max" class="form-control" value="{{$acquisition->date_max}}">
            </div>
            
            <div class="col-sm-6">
                <label for="description" class="form-label">Descripcion del Requerimiento</label><br>
                <textarea name="description" id="description" cols="auto" rows='auto' class="form-control">
                  {{$acquisition->description}}
                </textarea>
            </div>

        </div>
        <br>
        
        <!-- BOTONES -->
        <div class="row">

            <div class="col-sm-6">

                <input type="submit" class="btn btn-outline-success" onclick="return confirm('¿Desea Guardar los Cambios?')" value="Actualizar">
                <a href="{{route('acquisitions.index')}}" class="btn btn-outline-primary" onclick="return confirm('¿Desea salir sin actualizar cambios?')">Regresar</a>

            </div>

        </div>

    </form>


    @endsection