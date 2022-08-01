@extends('layouts.principal')

    <h1>Realizar Pago</h1><hr>

    @section('contenido')

        <form  action="{{ route ('pagos.store') }}" method="POST" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
        @csrf

            <div class="row">
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
                    <input type="number" name="monto" id="monto" class="form-control" min=0>
                </div>

                <div class="col-sm-6">
                    <label for="comprobante">Comprobane de Pago</label>
                    <input type="file" name="comprobante" id="comprobante" class="form-control">
                </div>
            </div>
            <br>
            
            <input type="submit" class="btn btn-outline-success" onclick="return confirm('¿Desea realizar este pago?')">
        </form>
    @endsection