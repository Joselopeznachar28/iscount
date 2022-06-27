@extends('layouts.principal')

    <nav class="navegacion-principal">
        <a href="{{url('socios')}}">Socios</a>
        <a href="">Logout</a>
    </nav>

    @section('contenido')
    
        <table class="table">
            <thead>
                <tr class="table-dark">

                    <th scope="col">Tipo de Operacion</th>
                    <th scope="col">Codigo de Pago  </th>
                    <th scope="col">Fecha del Pago  </th>
                    <th scope="col">Detalles de Pago</th>
                </tr>
            </thead>
            <tbody class="table-dark">
                @foreach ($payments as $payment)
                    <tr>
                        <td>{{$payment->descripcion}}</td>
                        <td>{{$payment->payment_id}} </td>
                        <td>{{$payment->fecha_pago}} </td>
                        <td>
                            <a href="{{route('payments.show', $payment->id)}}" class="btn btn-outline-primary">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    @endsection