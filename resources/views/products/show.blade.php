@extends('layouts.principal')

    @section('contenido')
        <h1>Detalles del Producto</h1><hr><br>

        <div class="row">

            <div class="col-sm-6">
                <label for="provider_id" class="form-label">Proveedor</label>
                <input type="number" name="provider_id" id="provider_id" class="form-control" disable readonly value="{{$products->provider_id}}">
            </div>

            <div class="col-sm-6">
                <label for="name" class="form-label">Producto</label>
                <input type="text" name="name" id="name" class="form-control" disable readonly value="{{$products->name}}">
            </div>

        </div>

        <div class="row">

            <div class="col-sm-6">

                <label for="price" class="form-label">Precio del Producto</label>
                <input type="number" name="price" id="price" class="form-control" disable readonly value="{{$products->price}}">

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