@extends('layouts.principal')

    <h1>Editar Presupuesto</h1><hr><br>
    @section('contenido')

    <form  action="{{ route('budgets.update' , $budget->id)}}" method="POST" class="row g-3 needs-validation" novalidate>
        @method('PUT')
        @csrf
        
        <div class="row">

          <div class="col-sm-6">
            <label for="provider_id" class="form-label">Proveedor</label><br>
            <select name="provider_id" id="provider_id" class="form-control">
              @foreach ($providers as $provider)
                  <option value="{{$provider->id}}">{{$provider->name}}</option>
              @endforeach
            </select>
          </div>

          <div class="col-sm-6">

              <label for="quantity" class="form-label">Cantidad de Producto</label>
              <input type="number" name="quantity" id="quantity" class="form-control" value="{{$budget->quantity}}">

          </div>

        </div>

        <div class="row">

          <div class="col-sm-6">
            <label for="unitPriceBs" class="form-label">Precio por Unidad VEF</label>
            <input type="number" name="unitPriceBs" id="unitPriceBs" class="form-control" value="{{$budget->unitPriceBs}}">
          </div>

          <div class="col-sm-6">

              <label for="totalPriceBs" class="form-label">Precio total VEF</label>
              <input type="number" name="totalPriceBs" id="totalPriceBs" class="form-control" value="{{$budget->totalPriceBs}}">

          </div>

        </div>

        <div class="row">

          <div class="col-sm-6">
            <label for="unitPriceDollar" class="form-label">Precio por Unidad $</label>
            <input type="number" name="unitPriceDollar" id="unitPriceDollar" class="form-control" value="{{$budget->unitPriceDollar}}">
          </div>

          <div class="col-sm-6">
              <label for="totalPriceDollar" class="form-label">Precio total $</label>
              <input type="number" name="totalPriceDollar" id="totalPriceDollar" class="form-control" value="{{$budget->totalPriceDollar}}">
          </div>

        </div>

        <div class="row">

          <div class="col-sm-6">

            <label for="observations" class="form-label">Observaciones</label>
            <textarea name="observations" id="observations" cols="auto" rows="auto" class="form-control">{{$budget->observations}}</textarea>

          </div>

        </div>

        <br>
        
        <!-- BOTONES -->
        <div class="row">

            <div class="col-sm-6">

                <input type="submit" class="btn btn-outline-success" onclick="return confirm('¿Desea Guardar los Cambios?')" value="Actualizar">

                <input type="reset" value="Borrar Formulario" class="btn btn-outline-warning" onclick="return confirm('¿Desea Limpiar el Formulario?')">
                
                <a href="{{route('budgets.index')}}" class="btn btn-outline-primary" onclick="return confirm('¿Desea salir sin actualizar cambios?')">Regresar</a>

            </div>

        </div>

    </form>


    @endsection