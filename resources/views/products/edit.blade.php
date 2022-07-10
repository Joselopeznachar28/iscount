@extends('layouts.principal')

    @section('contenido')

    <form  action="{{ route('products.update' , $product->id)}}" method="POST" class="row g-3 needs-validation" novalidate>
        @method('PUT')
        @csrf

        <h1>Editar Producto</h1><hr><br>
        
        <!-- DESCRIPCION Y PRODUCTO -->
        <div class="row">


            <div class="col-sm-6">

              <label for="name" class="form-label">Nombre del Producto</label>
              <input name="name" id="name" class="form-control" value="{{$product->name}}">

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