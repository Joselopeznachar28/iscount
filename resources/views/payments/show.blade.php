@extends('layouts.principal')
    @section('contenido')
    <h1>Detalles de pago</h1><hr>

    <!-- CODIGO Y FECHA DE PAGO -->
    <div class="row">
        <div class="col-sm-6">
            <label for="payment_id" class="form-label">Codigo de Pago</label>
            <input type="text" name="payment_id" id="payment_id" value="{{$payment->payment_id}}" class="form-control" disabled readonly>
        </div>
        <div class="col-sm-6">
            <label for="fecha_pago" class="form-label">Fecha de Pago</label>
            <input type="text" name="fecha_pago" id="fecha_pago" value="{{$payment->fecha_pago}}" class="form-control" disabled readonly>
        </div>
    </div>

    <!-- TIPO DE OPERACION Y MONTO -->
    <div class="row">
        <div class="col-sm-6">
            <label for="descripcion" class="form-label">Tipo de Operacion</label>
            <input type="text" name="descripcion" id="descripcion" value="{{$payment->descripcion}}" class="form-control" disabled readonly>
        </div>
        <div class="col-sm-6">
            <label for="monto" class="form-label">Monto</label>
            <input type="text" name="monto" id="monto" value="{{$payment->monto}}" class="form-control" disabled readonly>
        </div>
    </div>

    <!-- FORMA Y TIPO DE PAGO -->
    <div class="row">
        <div class="col-sm-6">
            <label for="forma_pago" class="form-label">Forma de Pago</label>
            <input type="text" name="forma_pago" id="forma_pago" value="{{$payment->forma_pago}}" class="form-control" disabled readonly>
        </div>
        <div class="col-sm-6">
            <label for="tipo_pago" class="form-label">Tipo de Pago</label>
            <input type="text" name="tipo_pago" id="tipo_pago" value="{{$payment->tipo_pago}}" class="form-control" disabled readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <label for="fecha_vencimiento" class="form-label">Vencimiento de Membresia</label>
            <input type="text" name="fecha_vencimiento" id="fecha_vencimiento" value="{{$payment->fecha_vencimiento}}"class="form-control" disabled readonly >
        </div>
        <div class="col-sm-6">
            <label for="comprobante" class="form-label">Comprobante de Pago</label>
            <input type="text" name="comprobante" id="comprobante" value="{{$payment->comprobante}}"class="form-control" disabled readonly >
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <a href="{{url('payments')}}" class="btn btn-outline-primary" disab>Regresar</a>
        </div>
    </div>
    @endsection