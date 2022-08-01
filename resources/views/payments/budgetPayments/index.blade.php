@extends('layouts.principal')

    <nav class="navegacion-principal">
        <a href="{{route('budgets.index')}}">Presupuestos</a>
        <a href="{{route('acquisitions.index')}}">Requerimientos</a>
        <a href="{{route('departments.index')}}">Departamentos</a>
        <a href="">Logout</a>
    </nav>

    <h1>listado de pagos</h1><hr><br>
    @section('contenido')
        
        <form action="{{route('payments/budgetPayments.index')}}" class="f-end">

            <input type="text" name="search" id="search" value="{{$search}}">
            <input type="submit" value="Buscar">

        </form>

        <table class="table">
            <thead>
                <tr class="table-dark">
                    <th scope="col">#</th>
                    <th scope="col">Presupuesto</th>
                    <th scope="col">Monto Total</th>
                    <th scope="col">Codigo de Pago  </th>
                    <th scope="col">Fecha del Pago  </th>
                </tr>
            </thead>
            <tbody class="table-dark">
                @foreach ($payments as $payment)
                    <tr>
                        <td>{{$payment->id}}</td>
                        <td>{{$payment->budget->budget_id}}</td>
                        <td>{{$payment->monto}}</td>
                        <td>{{$payment->budget_payment_id}} </td>
                        <td>{{$payment->fecha_pago}} </td>
                        <td>
                            <a href="{{route('payments/budgetPayments.show', $payment->id)}}" class="btn btn-outline-primary">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    @endsection