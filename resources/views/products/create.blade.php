@extends('layouts.principal');

    @section('contenido')
        <h1>Nuevo Producto</h1><hr>

        <form action="{{route('products.store')}}" method="post" novalidate>
            @csrf

            <div class="row">
    
                <div class="col sm-6">
                    <label for="provider_id">Proveedor</label>
                    <select name="provider_id" id="provider_id" class="form-control">
                        @foreach ($provider as $prov)
                            <option value="{{$prov->id}}" selected="selected" > {{$prov->name}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-sm-6">
                    <label for="name" class="form-label">Producto</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese Nombre del Producto">
                </div>

            </div>
    
            <div class="row">
    
                <div class="col-sm-6">
                    <label for="price" class="form-label">Precio</label>
                    <input type="number" name="price" id="price" min=".5" class="form-control">
                </div>
    
                <div class="col-sm-6">
                    <label for="description" class="form-label">Descripcion</label>
                    <textarea name="description" id="description" cols="30" rows="10" placeholder="Introduzca una breve descripcion del producto"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <button type="submit" onclick="return ('Desea guardar este producto?')" value="Guardar" class="btn btn-outline-primary">Guardar</button>
                </div>
            </div>
        </form>
        
    @endsection