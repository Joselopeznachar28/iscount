@extends('layouts.principal');

    <h1>Presupuestos</h1><hr><br>
    @section('contenido')
        <form action="{{route('budgets.store')}}" method="post" novalidate>
            @csrf

            <input type="hidden" name="acquisition_id" value="{{$acquisition->id}}">
            
            <div class="containerBudget">

                <div class="row">
                    <!-- PROVIDERS -->
                    <div class="col-sm-3">
                        <label for="provider_id" class="form-label">Proveedor</label>
                        <select name="budgets[0][provider_id]" id="provider_id"  class="form-control">
                          @foreach ($providers as $provider)
                              <option value="{{$provider->id}}" selected="selected">{{$provider->name}}</option>
                          @endforeach
                        </select>
                    </div>
                    <!-- OBSERVATIONS THE PROVIDERS -->
                    <div class="col-sm-9">
                        <label for="observations" class="form-label">Observaciones</label>
                        <textarea name="budgets[0][observations]" id="observations" cols="auto" rows="auto" class="form-control" placeholder="Ingrese todas las observaciones importantes a detalles."></textarea>
                    </div>
                </div>
            
                <div class="containerBudgetProducts">
                    <div class="row">
        
                        <!-- NAME OF PRODUCT -->
                        <div class="col-sm-2">
                            <label for="name" class="form-label">Producto</label>
                            <input type="text" name="products[0][name]" id="name" placeholder="Nombre del Producto" class="form-control">
                        </div>
                        <!-- CARACTERISTIC OF PRODUCT -->
                        <div class="col-sm-2">
                            <label for="description" class="form-label">DESCRIPCION</label>
                            <input type="text" name="products[0][description]" id="description" class="form-control" placeholder="Descripcion">
                        </div>
                        <!-- QUANTITY OF PRODUCT -->
                        <div class="col-sm-2">
                            <label for="quantity" class="form-label">CANTIDAD</label>
                            <input type="number" name="products[0][quantity]" id="quantity" placeholder="Cantidad" class="form-control">
                        </div>
                        <!-- PRICE FOR UNID VEF -->
                        <div class="col-sm-2">
                            <label for="unitPriceBs" class="form-label">VEF/U</label>
                            <input type="number" name="products[0][unitPriceBs]" id="unitPriceBs" class="form-control">
                        </div>
                        <!-- PRICE FOR UNID $$ -->
                        <div class="col-sm-2">
                            <label for="unitPriceDollar" class="form-label">$/U</label>
                            <input type="number" name="products[0][unitPriceDollar]" id="unitPriceDollar" class="form-control">
                        </div>
        
                    </div>
                </div>

            </div><br>
            
            <!-- BOTTONS -->
            <div class="row">
                <div class="col-sm-6">
                    <button type="submit" onclick="return confirm('Desea guardar este Presupuesto?')" value="Guardar" class="btn btn-outline-success">Guardar</button>

                    <button type="button" id="addMoreProduct" class="btn btn-outline-success">Agregar Producto</button>
                    
                    <input type="reset" value="Borrar Formulario" class="btn btn-outline-warning" onclick="return confirm('¿Desea Limpiar el Formulario?')">
                    
                    <a href="{{route('acquisitions.index')}}" onclick="return confirm('Desea Regresar?')" value="Regresar" class="btn btn-outline-primary">Regresar</a>
                </div>
            </div>
        </form>
        
    @endsection