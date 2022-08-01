@extends('layouts.principal')


    <nav class="navegacion-principal">
        <a href="{{route('products.index')}}">Productos</a>
        <a href="{{route('providers.create')}}">Crear Proveedor</a>
        <a href="{{route('departments.index')}}">Departamentos</a>
    </nav>

    @section('contenido')

    <h1>lista de proveedores</h1><hr><br>

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

            @foreach ($providers as $provider)

                <tr>
                    <td>{{$provider->name}}</td>
                    <td>{{$provider->identification}}</td>
                    <td>{{$provider->email}}</td>
                    <td>{{$provider->contact}}</td>
                    <!-- BOTONES -->
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
                </tr>

            @endforeach

        </tbody>

    </table>
    @endsection