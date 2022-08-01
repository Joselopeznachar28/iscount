@extends('layouts.principal')

    <h1>Proveedor</h1><hr>
    @section('contenido')

    <form  action="{{ route('providers.store')}}" method="POST" class="row g-3 needs-validation" novalidate>
        @csrf

    <div class="containerProvider">
            
        <!-- NOMBRE E IDENTIFICACION -->
        <div class="row">
                <div class="col-sm-6">
                    <label for="name" class="form-label">Nombre</label>
                    <input name="name" id="name" class="form-control" placeholder="Ingrese Nombre">
                </div>

            <div class="col-sm-6">

                <div class="row">

                    <div class="col-sm-3">
                        <label for="getDocumentTye" class="form-label">Documento</label>
                        <select  name="type_identification" id="getTypeDocument" class="form-control" onchange="documentOptions()">
                            <option  value="RIF">RIF</option>
                            <option  value="CEDULA">ID</option>
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
                <label for="contact" class="form-label">Numero de Contacto</label>
                <input type="tel"" name="contact" id="contact" class="form-control" placeholder="Ingrese Numero de Contacto">
            </div>

        </div>
        <br>

        <!-- Descripcion -->
        <div class="row">
            <div class="col-sm-12">
                <label for="description" class="form-label">Descripcion</label>
                <textarea name="description" id="description" cols="auto" rows="auto" placeholder="Ingrese una breve descripcion del proveedor" class="form-control">
                </textarea>
                <br>
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-sm-6">

                <input type="submit" class="btn btn-outline-success" onclick="return confirm('¿Desea Guardar este Proveedor?')" value="Guardar">

                <input type="reset" value="Borrar Formulario" class="btn btn-outline-warning" onclick="return confirm('¿Desea Limpiar el Formulario?')">

                <a href="{{route('providers.index')}}" class="btn btn-outline-primary" onclick="return confirm('¿Desea Regresar?')">Regresar</a>

            </div>
        </div>
    </div>
    </form>

    @endsection