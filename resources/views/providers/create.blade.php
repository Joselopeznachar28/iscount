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

                <div class="row">

                    <div class="col-sm-4">
                        <label for="type_identification" class="form-label">Documento</label>
                        <select name="type_identification" id="type_identification" class="form-control">
                            <option selected="selected" value="RIF">R-</option>
                            <option selected="selected" value="CEDULA">C-</option>
                            <option selected="selected" disabled>-- Selecionar --</option>
                        </select>
                    </div>
                    <div class="col-sm-8">
                        <label for="identification" class="form-label">Identificacion</label>
                        <input name="identification" id="identification" class="form-control" placeholder="Identificacion">
                    </div>
    
                </div>
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
                <textarea name="description" id="description" cols="auto" rows="auto" placeholder="Ingrese una breve descripcion del proveedor" class="form-control">
                </textarea>
                <br>
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-sm-6">
                <input type="submit" class="btn btn-outline-success" onclick="return confirm('¿Desea Guardar este Proveedor?')" value="Guardar">
                <a href="{{route('providers.index')}}" class="btn btn-outline-primary">Regresar</a>
            </div>
        </div>

    </form>

    @endsection