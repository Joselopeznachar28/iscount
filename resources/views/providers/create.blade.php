@extends('layouts.principal')

    @section('contenido')

    <form  action="{{ route('providers.store')}}" method="POST" class="row g-3 needs-validation" novalidate>
        @csrf

        <h1>Proveedor</h1><hr>
        
        <!-- NOMBRE E IDENTIFICACION -->
        <div class="row">

            <div class="col-sm-6">
                <label for="name" class="form-label">Nombre</label>
                <input name="name" id="name" class="form-control" placeholder="Ingrese Nombre">
            </div>
            <div class="col-sm-6">
                <label for="identification" class="form-label">Identificacion</label>
                <input name="identification" id="identification" class="form-control" placeholder="Ingrese Identificacion">
            </div>

        </div>
        <br>

        <!-- CORREO Y NUMERO DE CONTACTOS -->
        <div class="row">
            <div class="col-sm-6">
                <label for="email" class="form-label">Correo</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Ingrese Correo">
            </div>

            <div class="col-sm-6">
                <label for="contact">Numero de Contacto</label>
                <input type="tel"" name="contact" id="contact" class="form-control" placeholder="Ingrese Numero de Contacto">
            </div>

        </div>
        <br>

        <!-- Descripcion -->
        <div class="row">
            <div class="col-sm-12">
                <label for="description" class="form-label">descripcion</label>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="Ingrese una breve descripcion del proveedor" class="form-control">
                </textarea>
            </div>
        </div>
        
        <input type="submit" class="btn btn-outline-success" onclick="return confirm('¿Desea Guardar este Proveedor?')">

    </form>

    @endsection