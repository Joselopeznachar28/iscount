@extends('layouts.principal')

    <nav class="navegacion-principal">
        <a href="{{route('departments.index')}}">Departamentos</a>
    </nav>

    @section('contenido')
        
        <h1>Listado de Requerimientos</h1><hr><br>

        <table class="table">

            <thead class="table-dark">
                <tr>
                    <th scope="col" class="t-a-center">Departamento</th>
                    <th scope="col" class="t-a-center">Codigo de Requerimiento</th>
                    <th scope="col" class="t-a-center">Fecha de Peticion</th>
                    <th scope="col" class="t-a-center">Opciones</th>
                </tr>
            </thead>

            <tbody class="table-dark">
                @foreach ($acquisitions as $acquisition)
                    <tr>
                        <td class="t-a-center">{{$acquisition->department_id}}</td>
                        <td class="t-a-center">{{$acquisition->acquisition_code}}</td>
                        <td class="t-a-center">{{$acquisition->date_acquisition}}</td>
                        <td class="opcionesr">
                            <a href="{{route('acquisitions.show', $acquisition->id)}}" class="btn btn-outline-primary">Detalles</a>
                            <a href="{{route('acquisitions.edit', $acquisition->id)}}" class="btn btn-outline-warning">Editar</a>
                            <form action="{{route('acquisitions.destroy', $acquisition->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                class="btn btn-outline-danger"
                                value="Eliminar"
                                onclick="return confirm('Desea eliminar este requerimiento?')">
                                Eliminar
                                </button>
                            </form>
                            <a href="{{route('budgets.create', $acquisition->id)}}" class="btn btn-outline-success"> Agregar Cotizaciones</a>
                        </td>
                    </tr>
                @endforeach
                 
            </tbody>

        </table>

    @endsection 