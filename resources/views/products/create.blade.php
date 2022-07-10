@extends('layouts.principal');

    @section('contenido')
        <h1>Nuevo Producto</h1><hr>

        <form action="{{route('products.store')}}" method="post" novalidate>
            @csrf

            <div class="row">

                <div class="col-sm-6">
                    <label for="name" class="form-label">Producto</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese Nombre del Producto">
                </div>

                <div class="col-sm-6">
                    <label for="description" class="form-label">Descripcion</label>
                    <textarea name="description" id="description" cols="auto" rows="auto" placeholder="Introduzca una breve descripcion del producto" class="form-control"></textarea>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-6">
                    <button type="submit" onclick="return confirm('Desea guardar este producto?')" value="Guardar" class="btn btn-outline-success">Guardar</button>
                    <a href="{{route('products.index')}}" onclick="return confirm('Desea salir?')" value="Regresar" class="btn btn-outline-primary">Regresar</a>
                </div>
            </div>
        </form>
        
    @endsection