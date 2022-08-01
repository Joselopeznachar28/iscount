@extends('layouts.principal')

  <h1>Login</h1><hr><br>
  @section('contenido')
      
      <form action="{{route('login')}}" method="post">
        @csrf
        

          <div class="row">
            <div class="col-sm-3">
              <label for="username" class="form-label">Nombre de Usuario / Correo</label>
              <input type="text" name="username" id="username" class="form-control">
            </div>
          </div>
  
          <div class="row">
            <div class="col-sm-3">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" name="password" id="password" class="form-control">
            </div>
          </div>
          <br>

        <input type="submit" value="Login" class="btn btn-outline-success">

      </form>
      
  @endsection
