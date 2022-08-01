@extends('layouts.principal')

    <nav class="navegacion-principal">
        <a href="{{route('socios.index')}}">Socios</a>
        <a href="">Logout</a>
    </nav>

    @section('contenido')
        <h1>listado de pagos</h1><hr><br>
        
        <form action="{{route('payments/lobbyPayments.index')}}" class="f-end">

            <input type="text" name="search" id="search" value="{{$search}}">
            <input type="submit" value="Buscar">

        </form>

        <table class="table">
            <thead>
                <tr class="table-dark">
                    <th scope="col">Membresia</th>
                    <th scope="col">Tipo de Operacion</th>
                    <th scope="col">Codigo de Pago  </th>
                    <th scope="col">Fecha del Pago  </th>
                    <th scope="col">Detalles de Pago</th>
                </tr>
            </thead>
            <tbody class="table-dark">
                @foreach ($payments as $payment)
                    <tr>
                        <td>{{$payment->socio->membership}}</td>
                        <td>{{$payment->descripcion}}</td>
                        <td>{{$payment->lobby_payment_id}} </td>
                        <td>{{$payment->fecha_pago}} </td>
                        <td>
                            <a href="{{route('payments/lobbyPayments.show', $payment->id)}}" class="btn btn-outline-primary">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    @endsection