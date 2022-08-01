@extends('layouts.principal')

    <h1>Detalles de los Presupuestos</h1><hr><br>
    @section('contenido')

        <div class="row">

          <div class="col-sm-6">
            <label for="provider_id" class="form-label">Proveedor</label><br>
            <input type="text" name="provider_id" id="provider_id" class="form-control" value="{{$budget->provider->name}}" disabled readonly>
          </div>

          <div class="col-sm-6">
            <label for="quantity" class="form-label">Cantidad de Producto</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{$budget->quantity}}" disabled readonly>
          </div>

        </div>

        <div class="row">

          <div class="col-sm-6">
            <label for="unitPriceBs" class="form-label">Precio por Unidad VEF</label>
            <input type="number" name="unitPriceBs" id="unitPriceBs" class="form-control" value="{{$budget->unitPriceBs}}" disabled readonly>
          </div>

          <div class="col-sm-6">

              <label for="totalPriceBs" class="form-label">Precio total VEF</label>
              <input type="number" name="totalPriceBs" id="totalPriceBs" class="form-control" value="{{$budget->totalPriceBs}}" disabled readonly>

          </div>

        </div>

        <div class="row">

          <div class="col-sm-6">
            <label for="unitPriceDollar" class="form-label">Precio por Unidad $</label>
            <input type="number" name="unitPriceDollar" id="unitPriceDollar" class="form-control" value="{{$budget->unitPriceDollar}}" disabled readonly>
          </div>

          <div class="col-sm-6">
              <label for="totalPriceDollar" class="form-label">Precio total $</label>
              <input type="number" name="totalPriceDollar" id="totalPriceDollar" class="form-control" value="{{$budget->totalPriceDollar}}" disabled readonly>
          </div>

        </div>

        <div class="row">

          <div class="col-sm-6">

            <label for="observations" class="form-label">Observaciones</label>
            <textarea name="observations" id="observations" cols="auto" rows="auto" class="form-control" disabled readonly>{{$budget->observations}}</textarea>

          </div>

        </div>

        <br>

        <div class="row">
            <div class="col-sm-4">
                <a href="{{route('budgets.index')}}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    @endsection