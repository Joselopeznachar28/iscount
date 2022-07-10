@extends('layouts.principal')

  <nav class="navegacion-principal">
    <a href="#">Lista de Productos</a>
    <a href="#">Crear Proveedor</a>
  </nav>

  @section('contenido')


  <h1>Lista de Presupuestos</h1><hr><br>

  <table class="table">
    
    <thead>
  
      <tr class="table-dark">
  
          <th scope="col" class="t-a-center">#</th>
          <th scope="col" class="t-a-center">Proveedor</th>
          <th scope="col" class="t-a-center">Cantidad</th>
          <th scope="col" class="t-a-center">Precio total VEF</th>
          <th scope="col" class="t-a-center">Precio total $</th>
          <th scope="col" class="t-a-center">Opciones</th>
  
      </tr>
  
    </thead>

    <tbody class="table-dark">

      @foreach ($budgets as $budget)

          <tr>
              <td class="t-a-center">{{$budget->id}}</td>
              <td class="t-a-center">{{$budget->provider_id}}</td>
              <td class="t-a-center">{{$budget->quantity}}</td>
              <td class="t-a-center">{{$budget->totalPriceBs}}</td>
              <td class="t-a-center">{{$budget->totalPriceDollar}}</td>
              <!-- BOTONES -->
              <td class="opciones">
                <a href="{{route('budgets.edit', $budget->id)}}" class="btn btn-outline-warning">Editar</a>
                <a href="{{route('budgets.show', $budget->id)}}" class="btn btn-outline-primary">Detalles</a>
                <form action="{{route('budgets.destroy', $budget->id)}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" 
                class="btn btn-outline-danger"
                onclick="return confirm('Desea eliminar este presupuesto?')"
                value="Eliminar">
                  Eliminar
                </button>
                </form>
              </td>
          </tr>

      @endforeach

    </tbody>

  </table>
      
  @endsection