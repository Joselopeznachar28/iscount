@extends('layouts.principal')

    <nav class="navegacion-principal">
        <a href="{{route('providers.index')}}">Lista de Proveedores</a>
        <a href="{{route('products.create')}}">Crear Producto</a>
    </nav>

    @section('contenido')
        
        <h1>Listado de Productos</h1><hr><br>

        <table class="table">

            <thead class="table-dark">
                <tr>
                    <th scope="col" class="t-a-center">#</th>
                    <th scope="col" class="t-a-center">Producto</th>
                    <th scope="col" class="t-a-center">Opciones</th>
                </tr>
            </thead>

            <tbody class="table-dark">

                @foreach ($products as $product)
                    <tr>
                        <td class="t-a-center">{{$product->id}}</td>
                        <td class="t-a-center">{{$product->name}}</td>
                        <td class="opciones">
                            <a href="{{route('products.edit', $product->id)}}" class="btn btn-warning">Editar</a>
                            <a href="{{route('products.show', $product->id)}}" class="btn btn-primary">Ver</a>
                            <form action="{{route('products.destroy', $product->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button 
                                type="submit" 
                                class="btn btn-danger"
                                onclick="return confirm('Desea eliminar este producto?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                 
            </tbody>

        </table>

    @endsection 