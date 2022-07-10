@extends('layouts.principal')

    @section('contenido')
        <h1>Detalles del Producto</h1><hr><br>

        <div class="row">

            <div class="col-sm-6">
                <label for="name" class="form-label">Producto</label>
                <input type="text" name="name" id="name" class="form-control" disable readonly value="{{$products->name}}">
            </div>


            <div class="col-sm-6">
                <label for="description" class="form-label">Descripcion del Producto</label>
                <textarea name="description" id="description" cols="auto" rows="auto" class="form-control" disable readonly>{{$products->description}}</textarea>
            </div>

        </div>
        <br>

        <div class="row">
            <div class="col-sm-4">
                <a href="{{route('products.index')}}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    @endsection