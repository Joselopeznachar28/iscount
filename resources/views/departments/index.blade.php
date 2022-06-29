@extends('layouts.principal')


    <nav class="navegacion-principal">
      <a href="{{route('departments.create')}}">Crear Departamento</a>
      <a href="{{route('acquisitions.index')}}">Lista de Requerimientos</a>
    </nav>

    @section('contenido')

    <h1>listado de departamentos</h1><hr><br>
    <table class="table">

        <thead>

            <tr class="table-dark">

                <th scope="col" class="t-a-center">#</th>
                <th scope="col" class="t-a-center">Departamento</th>
                <th scope="col" class="t-a-center">Opciones</th>

            </tr>

        </thead>

        <tbody class="table-dark">

            @foreach ($departments as $department)

                <tr>
                    <td class="t-a-center">{{$department->id}}</td>
                    <td class="t-a-center">{{$department->name}}</td>
                    <!-- BOTONES -->
                    <td class="opciones">
                      <a href="{{route('departments.edit', $department->id)}}" class="btn btn-outline-warning">Editar</a> 
                        <form action="{{route('departments.destroy', $department->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('DESEA BORRAR ESTE DEPARTAMENTO?')">Eliminar</button>
                        </form>
                      <a href="{{route('departments.show', $department->id)}}" class="btn btn-outline-primary">Detalles</a>
                      <a href="{{route('acquisitions.create', $department->id)}}" class="btn btn-outline-success">Agregar Requerimiento</a>
                    </td>
                </tr>

            @endforeach

        </tbody>

    </table>
    @endsection