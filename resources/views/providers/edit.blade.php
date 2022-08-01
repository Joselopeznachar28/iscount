@extends('layouts.principal')

    @section('contenido')

    <form  action="{{ route('providers.update' , $provider->id)}}" method="POST" class="row g-3 needs-validation" novalidate>
        @method('PUT')
        @csrf

        <h1>Editar Proveedor</h1><hr><br>
        
        <!-- NOMBRE E IDENTIFICACION -->
        <div class="row">

            <div class="col-sm-6">
                <label for="name" class="form-label">Nombre</label>
                <input name="name" id="name" class="form-control" value="{{$provider->name}}">
            </div>
            <div class="col-sm-6">

                <div class="row">

                    <div class="col-sm-3">
                        <label for="getTypeDocument" class="form-label">Documento</label>
                        <select  name="type_identification" id="getTypeDocument" class="form-control" onchange="documentOptions()">
                            <option value="RIF">RIF</option>
                            <option value="CEDULA">ID</option>
                            <option selected="selected" disabled>-- Selecionar --</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label for="type_document" class="form-label">Tipo</label>
                        <select name="type_document" id="type_document" class="form-control">
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label for="identification" class="form-label">Identificacion</label>
                        <input name="identification" id="identification" class="form-control" value="{{$provider->identification}}">
                    </div>
    
                </div>
 
            </div>

        </div>
        <br>

        <!-- CORREO Y NUMERO DE CONTACTOS -->
        <div class="row">

            <div class="col-sm-6">
                <label for="email" class="form-label">Correo</label>
                <input type="email" name="email" id="email" class="form-control" value="{{$provider->email}}">
            </div>

            <div class="col-sm-6">
                <label for="contact">Numero de Contacto</label>
                <input type="tel"" name="contact" id="contact" class="form-control" value="{{$provider->contact}}">
            </div>

        </div>
        <br>

        <!-- DESCRIPCION -->
        <div class="row">
            <div class="col-sm-12">
                <label for="description" class="form-label">Descripcion</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control">
                    {{$provider->description}}
                </textarea>
            </div>
        </div>
        
        <div class="row">

            <div class="col-sm-6">
                <input type="submit" class="btn btn-outline-success" onclick="return confirm('¿Desea Guardar este Proveedor?')">

                <input type="reset" value="Borrar Formulario" class="btn btn-outline-warning" onclick="return confirm('¿Desea Limpiar el Formulario?')">

                <a href="{{url('providers')}}" class="btn btn-outline-primary" onclick="return confirm('¿Desea Regresar?')">Regresar</a>
            </div>

        </div>

    </form>


    @endsection