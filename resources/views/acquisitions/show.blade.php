@extends('layouts.principal')

    @section('contenido')
        <h1>Detalles del Requerimiento</h1><hr><br>

        <div class="row">

            <div class="col-sm-6">

                <label for="department_id" class="form-label">Departamento</label>
                <input type="text" name="department_id" id="department_id" class="form-control" disable readonly value="{{$acquisition->department_id}}">

            </div>

            <div class="col-sm-6">

                <label for="date_acquisition" class="form-label">Fecha de Peticion</label>
                <input type="text" name="date_acquisition" id="date_acquisition" class="form-control" disable readonly value="{{$acquisition->date_acquisition}}">

            </div>

        </div>

        <div class="row">

          <div class="col-sm-6">

              <label for="date_max" class="form-label">Requerido para:</label>
              <input type="text" name="date_max" id="date_max" class="form-control" disable readonly value="{{$acquisition->date_max}}">

          </div>

          <div class="col-sm-6">

              <label for="description" class="form-label">Descripcion del Requerimiento</label><br>
              <textarea name="description" id="description" cols="auto" rows="auto" disabled readonly class="form-control">{{$acquisition->description}}</textarea>

          </div>

        </div>

        <div class="row">

          <div class="col-sm-6">

              <label for="acquisition_code" class="form-label">Codigo del Requerimiento</label>
              <input type="text" name="acquisition_code" id="acquisition_code" class="form-control" disable readonly value="{{$acquisition->acquisition_code}}">

          </div>

        </div>
        <br>

        <div class="row">
            <div class="col-sm-4">
                <a href="{{route('acquisitions.index')}}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    @endsection