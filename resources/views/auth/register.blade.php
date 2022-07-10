<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registro</title>
</head>
<body>
  
  <h1>Registrarse</h1><hr><br>

  <form action="{{route('registers.store')}}" method="post">
    @csrf
    <label for="email">Correo</label>
    <input type="email" name="email" id="email" placeholder="Ingrese su Correo Electronico">

    <label for="username">Nombre de Usuario</label>
    <input type="text" name="username" id="username" placeholder="Ingrese su Nombre de Usuario">

    <label for="password">Contraseña</label>
    <input type="password" name="password" id="password" placeholder="Ingrese su Contraseña">

    <label for="password_confirmation">Contraseña</label>
    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Ingrese su Contraseña">

    <button type="submit" value="Guardar">Crear Usuario</button>

  </form>

</body>
</html>