@extends('layouts.principal');

    @section('contenido')
        <h1>Presupuestos</h1><hr><br>
        <form action="{{route('budgets.store')}}" method="post" novalidate>
            @csrf

            <div class="row">
              
              <input type="hidden" name="acquisition_id" value="{{$acquisition->id}}">

                <div class="col-sm-6">
                    <label for="provider_id" class="form-label">Proveedor</label>
                    <select name="provider_id" id="provider_id"  class="form-control">
                      @foreach ($providers as $provider)
                          <option value="{{$provider->id}}" selected="selected">{{$provider->name}}</option>
                      @endforeach
                    </select>
                </div>

                <div class="col-sm-6">
                    <label for="quantity" class="form-label">Cantidad de Producto</label>
                    <input type="number" name="quantity" id="quantity" placeholder="Ingresa la cantidad del Producto" class="form-control">
                </div>

            </div>

            <div class="row">

                <div class="col-sm-6">
                    <label for="unitPriceBs" class="form-label">Precio por Unidad VEF</label>
                    <input type="number" name="unitPriceBs" id="unitPriceBs" class="form-control">
                </div>

                <div class="col-sm-6">
                    <label for="totalPriceBs" class="form-label">Precio total VEF</label>
                    <input type="number" name="totalPriceBs" id="totalPriceBs" class="form-control">
                </div>

            </div>

            <div class="row">

                <div class="col-sm-6">
                    <label for="unitPriceDollar" class="form-label">Precio por Unidad $</label>
                    <input type="number" name="unitPriceDollar" id="unitPriceDollar" class="form-control">
                </div>

                <div class="col-sm-6">
                    <label for="totalPriceDollar" class="form-label">Precio total $</label>
                    <input type="number" name="totalPriceDollar" id="totalPriceDollar" class="form-control">
                </div>

            </div>

            <div class="row">

                <div class="col-sm-6">
                    <label for="observations" class="form-label">Observaciones</label>
                    <textarea name="observations" id="observations" cols="auto" rows="auto" class="form-control" placeholder="Ingrese todas las observaciones importantes a detalles."></textarea>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-6">
                    <button type="submit" onclick="return confirm('Desea guardar este Presupuesto?')" value="Guardar" class="btn btn-outline-success">Guardar</button>
                    <a href="{{route('acquisitions.index')}}" onclick="return confirm('Desea salir?')" value="Regresar" class="btn btn-outline-primary">Regresar</a>
                </div>
            </div>
        </form>
        
    @endsection