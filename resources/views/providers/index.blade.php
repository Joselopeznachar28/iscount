@extends('layouts.principal')


    <nav class="navegacion-principal">
        <a href="#">Productos</a>
        <a href="{{route('providers.create')}}">Crear</a>
    </nav>

    @section('contenido')

    <table class="table">

        <thead>

            <tr class="table-dark">

                <th scope="col">Nombre</th>
                <th scope="col">Identificacion</th>
                <th scope="col">Correo</th>
                <th scope="col">Telefono</th>
                <th scope="col">Opciones</th>

            </tr>

        </thead>

        <tbody class="table-dark">

            <tr>
                @foreach ($providers as $provider)
                <td>{{$provider->name}}</td>
                <td>{{$provider->identification}}</td>
                <td>{{$provider->email}}</td>
                <td>{{$provider->contact}}</td>
                <td>
                    <a href="{{route('providers.show', $provider->id)}}" class="btn btn-outline-primary">Detalles</a>
                    <a href="{{route('providers.edit', $provider->id)}}" class="btn btn-outline-primary">Editar</a>
                    <form action="{{route('providers.destroy', $provider->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit"
                        value="Eliminar" 
                        class="btn btn-outline-danger" 
                        onclick="return confirm('Desea eliminar a este proveedor de la lista?')">Eliminar</button>
                    </form>
                </td>
                @endforeach
            </tr>

        </tbody>

    </table>
    @endsection