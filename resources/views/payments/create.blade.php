@extends('layouts.principal')

    @section('contenido')
        <form  action="{{ route('payments.store')}}" method="POST" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
        @csrf
            <h1>Pago</h1><hr>
            <div class="row">
                <input type="hidden" name="socio_id" value="{{$socio->id}}">
                <div class="col-sm-6">
                    <label for="forma_pago" class="form-label">Forma de Pago</label>
                    <select name="forma_pago" id="forma_pago" class="form-control">
                        <option value="Bolivares" selected='selected'> Bolivares </option>
                        <option value="Divisas" selected='selected'> Divisas </option>
                        <option value="Seleccionar" selected="selected" disabled>-- Seleccionar -- </option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="tipo_pago" class="form-label">Tipo de Pago</label>
                    <select name="tipo_pago" id="tipo_pago" class="form-control">
                        <option value="Efectivo" selected='selected'> Efectivo </option>
                        <option value="Transferencia" selected='selected'> Transferencia </option>
                        <option value="Seleccionar" selected="selected" disabled>-- Seleccionar --</option>
                    </select>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-sm-6">
                    <label for="monto" class="form-label">Monto a Pagar</label>
                    <input type="number" name="monto" id="monto" class="form-control" min=0 step=30>
                </div>

                <div class="col-sm-6">
                    <label for="comprobante">Comprobane de Pago</label>
                    <input type="file" name="comprobante" id="comprobante" class="form-control">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-sm-6">
                    <label for="fecha_pago" class="form-label">Fecha de Pago</label>
                    <input type="date" name="fecha_pago" id="fecha_pago" class="form-control">
                </div>
                <div class="col-sm-6">
                    <label for="descripcion" class="form-label">Tipo de Operacion</label>
                    <select name="descripcion" id="descripcion" class="form-control">
                        <option value="Inscripcion" selected="selected">Inscripcion</option>
                        <option value="Mensualidad" selected="selected">Mensualidad</option>
                        <option selected="selected" disabled>-- Seleccionar --</option>
                    </select>
                </div>
            </div>
            
            <input type="submit" class="btn btn-outline-success" onclick="return confirm('¿Desea realizar este pago?')">
        </form>
    @endsection