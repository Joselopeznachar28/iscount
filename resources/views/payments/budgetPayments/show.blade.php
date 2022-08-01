@extends('layouts.principal')
    
    <h1>Detalles de pago</h1><hr>
    
    @section('contenido')

    <!-- CODIGO Y FECHA DE PAGO -->
    <div class="row">
        <div class="col-sm-6">
            <label for="budget_payment_id" class="form-label">Codigo de Pago</label>
            <input type="text" name="budget_payment_id" id="budget_payment_id" value="{{$payment->budget_payment_id}}" class="form-control" disabled readonly>
        </div>
        <div class="col-sm-6">
            <label for="fecha_pago" class="form-label">Fecha de Pago</label>
            <input type="text" name="fecha_pago" id="fecha_pago" value="{{$payment->fecha_pago}}" class="form-control" disabled readonly>
        </div>
    </div>

    <!-- COMPROBANTE Y MONTO -->
    <div class="row">

        <div class="col-sm-6">
            <label for="comprobante" class="form-label">Comprobante de Pago</label>
            <input type="text" name="comprobante" id="comprobante" value="{{$payment->comprobante}}"class="form-control" disabled readonly >
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
    </div><br>

    <div class="row">
        <div class="col-sm-4">
            <a href="{{route('payments/budgetPayments.index')}}" class="btn btn-outline-primary" disab>Regresar</a>
        </div>
    </div>
    @endsection