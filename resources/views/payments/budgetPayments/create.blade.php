@extends('layouts.principal')

    <h1>Pago</h1><hr>
    @section('contenido')
        <form  action="{{ route('payments/budgetPayments.store')}}" method="POST" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
        @csrf
            
            <div class="row">
                <input type="hidden" name="budget_id" value="{{$budget->id}}">
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
                    <label for="fecha_pago" class="form-label">Fecha de Pago</label>
                    <input type="date" name="fecha_pago" id="fecha_pago" class="form-control">
                </div>

            </div>
            <br>

            <div class="row">

                <div class="col-sm-6">
                    <label for="descripcion" class="form-label">Nota de Pago</label>
                    <textarea name="descripcion" id="descripcion" cols="auto" rows="auto" placeholder="Ingrese una Nota de pago breve" class="form-control"></textarea>
                </div>

                <div class="col-sm-6">
                        <label for="comprobante" class="form-label">Comprobante de Pago</label>
                        <input type="file" name="comprobante" id="comprobante" class="form-control">
                </div>

            </div><br><hr>
            
            <div class="row">
                <div class="col-sm-6">

                    <input type="submit" class="btn btn-outline-success" onclick="return confirm('¿Desea realizar este pago?')" value="Realizar Pago">

                    <input type="reset" value="Borrar Formulario" class="btn btn-outline-warning" onclick="return confirm('¿Desea Limpiar el Formulario?')">

                    <a href="{{route('budgets.index')}}" class="btn btn-outline-primary" onclick="return confirm('¿Desea Regresar?')">Regresar</a>
                    
                </div>
            </div>
        </form>
    @endsection