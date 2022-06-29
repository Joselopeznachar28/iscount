@extends('layouts.principal')
    
    @section('contenido')

    <h1>Detalles del Proveedor</h1><hr><br>

    <!-- NOMBRE E IDENTIFICACION -->
    <div class="row">
        
        <div class="col-sm-6">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" readonly value="{{$provider->name}}">
        </div>

        <div class="col-sm-6">

            <div class="row">

                <div class="col-sm-2">
                    <label for="type_identification" class="form-label">Tipo</label>
                    <input type="text" name="type_identification" id="type_identification" class="form-control" value="{{$provider->type_identification}}" readonly>
                </div>
                <div class="col-sm-4">
                    <label for="identification" class="form-label">Identificacion</label>
                    <input name="identification" id="identification" class="form-control" value="{{$provider->identification}}" readonly>
                </div>

            </div>
               
        </div>
    </div>
    <!-- EMAIL Y CONTACTO -->
    <div class="row">

        <div class="col-sm-6">
            <label for="email" class="form-label">Correo</label>
            <input type="email" name="email" id="email" class="form-control" readonly value="{{$provider->email}}">
        </div>

        <div class="col-sm-6">
            <label for="contact">Numero de Contacto</label>
            <input type="tel" name="contact" id="contact" class="form-control" readonly value="{{$provider->contact}}">
        </div>

    </div>

    <div class="row">

        <div class="col-sm-6">
            <label for="description">Descripcion</label>
            <input type="text" name="description" id="description" class="form-control" readonly value="{{$provider->description}}">
        </div>

    </div>
    <br>

    <div class="row">
        <div class="col-sm-2">
            <a href="{{url('providers')}}" class="btn btn-outline-primary">Regresar</a>
        </div>
    </div>

    @endsection