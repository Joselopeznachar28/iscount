@extends('layouts.principal')

    <h1>Pago</h1><hr>
    @section('contenido')
        <form  action="{{ route('payments/lobbyPayments.store')}}" method="POST" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
        @csrf
            
            <div class="row">
                <input type="hidden" name="socio_id" value="{{$socio->id}}">
                <div class="col-sm-6">
                    <label for="forma_pago" class="form-label">Forma de Pago</label>
                    <select name="forma_pago" id="forma_pago" class="form-control">
                        <option value="Bolivares"> Bolivares </option>
                        <option value="Divisas"> Divisas </option>
                        <option value="Seleccionar" selected="selected" disabled>-- Seleccionar -- </option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="tipo_pago" class="form-label">Tipo de Pago</label>
                    <select name="tipo_pago" id="tipo_pago" class="form-control">
                        <option value="Efectivo"> Efectivo </option>
                        <option value="Transferencia"> Transferencia </option>
                        <option value="Seleccionar" selected="selected" disabled>-- Seleccionar --</option>
                    </select>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-sm-6">
                    <label for="monto" class="form-label">Monto a Pagar</label>
                    <input type="number" name="monto" id="monto" class="form-control" min=0>
                </div>
                <div class="col-sm-6">
                    <label for="descripcion" class="form-label">Tipo de Operacion</label>
                    <select name="descripcion" id="descripcion" class="form-control">
                        <option value="Inscripcion">Inscripcion</option>
                        <option value="Mensualidad">Mensualidad</option>
                        <option selected="selected" disabled>-- Seleccionar --</option>
                    </select>
                </div>
                
            </div>
            <br>

            <div class="row">
                <div class="col-sm-6">
                    <label for="comprobante" class="form-label">Comprobante de Pago</label>
                    <input type="file" name="comprobante" id="comprobante" class="form-control">
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-6">

                    <input type="submit" class="btn btn-outline-success" onclick="return confirm('¿Desea realizar este pago?')" value="Subir Pago">

                    <input type="reset" value="Borrar Formulario" class="btn btn-outline-warning" onclick="return confirm('¿Desea Limpiar el Formulario?')">

                    <a href="{{route('socios.index')}}" class="btn btn-outline-primary" onclick="return confirm('¿Desea Regresar?')">Regresar</a>
                    
                </div>
            </div>
        </form>
    @endsection