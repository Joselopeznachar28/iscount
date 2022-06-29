@extends('layouts.principal')

    @section('contenido')

    <form  action="{{ route('products.update' , $product->id)}}" method="POST" class="row g-3 needs-validation" novalidate>
        @method('PUT')
        @csrf

        <h1>Editar Producto</h1><hr><br>
        
        <!-- PROVEEDOR Y PRODUCTO -->
        <div class="row">

            <div class="col-sm-6">

                <label for="provider_id" class="form-label">Proveedor</label>
                <input name="provider_id" id="provider_id" class="form-control" value="{{$product->provider_id}}"  readonly>

            </div>

            <div class="col-sm-6">

              <label for="name" class="form-label">Nombre del Producto</label>
              <input name="name" id="name" class="form-control" value="{{$product->name}}">

          </div>

        </div>
        <br>

        <!-- PRECIO -->
        <div class="row">

            <div class="col-sm-6">
                <label for="price" class="form-label">Precio del Producto</label>
                <input name="price" id="price" class="form-control" value="{{$product->price}}">
            </div>
            
            <div class="col-sm-6">
                <label for="description" class="form-label">Descripcion del Producto</label><br>
                <textarea name="description" id="description" cols="auto" rows='auto' class="form-control">
                  {{$product->description}}
                </textarea>
            </div>

        </div>
        <br>
        
        <!-- BOTONES -->
        <div class="row">

            <div class="col-sm-6">

                <input type="submit" class="btn btn-outline-success" onclick="return confirm('¿Desea Guardar los Cambios?')" value="Actualizar">
                <a href="{{url('products')}}" class="btn btn-outline-primary" onclick="return confirm('¿Desea salir sin actualizar cambios?')">Regresar</a>

            </div>

        </div>

    </form>


    @endsection