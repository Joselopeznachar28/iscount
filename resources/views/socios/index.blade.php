<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LobbyClub</title>

    <!-- Estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Estilos propios -->
<<<<<<< HEAD
    <link rel="stylesheet" href="/css/styles.css">
=======
    <link rel="stylesheet" href="css/styles.css">
>>>>>>> 70540c2e13bc2ec4ca15c2d0a573000d0463a751
</head>
  <body>
    
    <nav class="navegacion-principal">
        <a href=""><img src="" alt=""></a>
        <a href="#" class="enlaces-sidebar">Socios</a>
<<<<<<< HEAD
        <a href=" {{ url('socios/create')}}" class="enlaces-sidebar">Crear Socio</a>
        <a href=" {{ route('payments.index')}}">Pagos</a>
=======
        <a href=" {{ url ('socios/create')}}" class="enlaces-sidebar">Crear Socio</a>
        <a href="{{ url ('pagos') }}" class="enlaces-sidebar">Pagos</a>
>>>>>>> 70540c2e13bc2ec4ca15c2d0a573000d0463a751
        <a href="" class="enlaces-sidebar">Logout</a>
    </nav>
    
        <!-- BUSCADOR -->
    <div class="contenedor buscador">
      <h1>listado de socios</h1>
      <form action="{{ route ('socios.index') }}" class="f-end">
          <input type="text" name="search" id="search" value='{{$consulta}}' class="input">
          <input type="submit" value="Buscar" class="input-buscar">
      </form>
      <hr>  
    </div>

    <!-- Contenido -->
    <div class="contenedor ">
      <table class="table">
        <thead>
          <tr class="table-dark">
<<<<<<< HEAD
            <th scope="col">Fecha de Vencimiento</th>
            <th scope="col">Apellido</th>
            <th scope="col">Nombre</th>
            <th scope="col">Membresia</th>
            <th scope="col">Identificacion</th>
            <th scope="col">Estado</th>
=======
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Membresia</th>
            <th scope="col">Identificacion</th>
            <th scope="col">Estado</th>
            <th scope="col">Fecha de Vencimiento</th>
>>>>>>> 70540c2e13bc2ec4ca15c2d0a573000d0463a751
            <th scope="col" class="t-a-center">Opciones</th>
          </tr>
        </thead>
        <tbody class="table-dark">
          <tr>
<<<<<<< HEAD
            <td> {{$payments->fecha_vencimiento}}</td>
          @foreach( $socios as $socio )
              <td> {{$socio->lastname}}       </td>
              <td> {{$socio->name}}           </td>
              <td> {{$socio->membership}}     </td>
              <td> {{$socio->identification}} </td>
              
              <td> {{$socio->status}}</td>
              <!-- BOTONES DE OPCIONES-->
              <td class="opciones">
                <a href="{{ route('socios.edit', $socio->id)}}" class="btn btn-outline-warning">Editar<a>  
                <form action="{{ route ('socios.destroy', $socio) }}"        method="post">     
                  @csrf
                  @method('DELETE')
                  <button type="submit"
                  value="Eliminar" 
                  class="btn btn-outline-danger" 
                  onclick="return confirm('Desea eliminar este a este socio de la lista?')">Eliminar</button>
                </form>
                <a href="{{route('families.create', $socio->id)}}" class="btn btn-outline-warning">Agregar Familiar</a>
                <a href="{{ route('socios.show', $socio->id)}}" class="btn btn-outline-info">Ver</a>
                <a href="{{ route('payments.create', $socio->id)}}" class="btn btn-outline-info">Pagar</a>
              </td>
              @endforeach
            </tr>
=======
          @foreach( $socios as $socio )
            <td> {{$socio->name}}           </td>
            <td> {{$socio->lastname}}       </td>
            <td> {{$socio->membership}}     </td>
            <td> {{$socio->identification}} </td>
            <td> {{$socio->status}}         </td>
            <td></td>

            <!-- BOTON PARA EDITAR-->
            <!-- BOTON PARA ELIMINAR-->
            <!-- BOTON PARA VER SOCIO-->
            <td class="opciones">
              <a href="{{ route('socios.edit', $socio->id)}}" class="btn btn-outline-warning">Editar<a>  
              <form action="{{ route ('socios.destroy', $socio) }}"        method="post">     
                @csrf
                @method('DELETE')
                <button type="submit"
                value="Eliminar" 
                class="btn btn-outline-danger" 
                onclick="return confirm('Desea eliminar este a este socio de la lista?')">Eliminar</button>
              </form>
              <a href="{{ route('socios.show', $socio->id)}}" class="btn btn-outline-info">Ver</a>
              <a href="{{ route('pagos.create') }}" class="btn btn-outline-success">Pagar</a>
            </td>
          </tr>
          @endforeach
>>>>>>> 70540c2e13bc2ec4ca15c2d0a573000d0463a751
        </tbody>
      </table>
    </div>
    
    <!-- Script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>