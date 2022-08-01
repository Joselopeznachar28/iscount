<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Estilos de Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- CARGAR LOS ESTIILOS RAPIDAMENTE -->
    <link rel="preload" href="/css/styles.css" as="style">
    <!-- ESTILOS PROPIOS -->
    <link rel="stylesheet" href="/css/styles.css">
    <!-- CARGAR LOS ESTIILOS RAPIDAMENTE -->
    <link rel="preload" href="/css/normalize.css" as="style">
    <!-- ESTILOS PROPIOS -->
    <link rel="stylesheet" href="/css/normalize.css">
</head>
<body>

    <div class="container">
        
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{$error}}</li>
                    @endforeach
                </ul>   
            </div>    
        @endif

        @yield('contenido')
        
    </div>

    <script src="/js/script.js"></script>
</body>
</html>