<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ISCount</title>
        <!-- CARGAR LOS ESTIILOS RAPIDAMENTE -->
        <link rel="preload" href="css/normalize.css" as="style">
        <!-- Para estandarizar las vistas en cualquier navegador -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- CARGAR LOS ESTIILOS RAPIDAMENTE -->
        <link rel="preload" href="css/styles.css" as="style">
        <!-- ESTILOS PROPIOS -->
        <link rel="stylesheet" href="css/styles.css">
        <!-- ESTILOS DE BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- ICONOS DE FONTAWESOME-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="css/fontawesome/css/all.css">
    </head>
    <body>
    <!-- ENCABEZADO DEL SISTEMA -->
        <div class="bgimg">
            <!-- BARRA DE NAVEGACION -->
            <div class="contenedor">
                <nav class="navegacion-principal">          
                    <a href="#inicio">Inicio</a>
                    <a href="#sistema">Acerca de</a>
                    <a href="#hotel">Hotel</a>
                    <a href="#departamentos">Departamentos</a>
                    <a href="{{route('registers.create')}}">Registrarse</a>
                    <a href="{{route('login.view_login')}}">Login</a>
                </nav>
            </div>
            <!-- TEXTO DE IMAGEN DEL SISTEMA -->
            <div class="container center-namesystem">
                <marquee behavior="" direction="right" class="tamaño-namesystem">
                    <p> 
                        <img src="/img/lobbyClub/logo.png" alt="" class="img-section-principal-p">
                        ISCount San Miguel 
                        <img src="/img/lobbyClub/logo.png" alt="" class="img-section-principal-p">
                    </p>
                </marquee>
            </div>
        </div>
        <br>

    <!-- Seccion Acerca de... -->
    <section  id="sistema">
        <h2>ISCount</h2>
        <div class="seccion bg-color-gw container">
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, obcaecati. Molestiae repellendus cupiditate tempore porro incidunt pariatur ea eveniet illum assumenda modi, eaque laboriosam quis, cumque adipisci, consequuntur et ducimus.</p>
        </div>
    </section>

    <!-- Seccion de Vision y Mision-->
    <section id="hotel">
        <h2>Hotel</h2>  
        <div class="grid seccion bg-color-wg container">
            <div>
                <h3>Mision</h3>
                <p>Prestamos servicios hoteleros de alta calidad, que proyectan comodidad, confort, respeto a la privacidad de los huespedes y prestos a satisfacer las necesidades particulares de cada uno, basados en nuestra cultura organizativa abierta, que fomenta la innovacion y el enriquecimiento del equipo. Trabajamos diariamente por cumplir nuestros estandares de servicio, buscando satisfascer las necesidades de viaje de nuestros huespeder para lograr una experiencia inolvidable, sea cual sea el fin de estancia: placer, negocios, deporte, turismo.</p> 
                <br>    
            </div>
            <div>
                <h3>Vision</h3>
                <p>Convertirnos en referente nacional e internacional en turismo sostenible, entendiendo un modelo de negocio, rentable, solido, lider en la satisfacicion de nuestros clientes, basados en una cultura organizativa abierta que fomenta la innovacion y el enriquecimiento del equipo de trabajo.</p>
            </div>
        </div>                  
    </section>

    <!-- Seccion de Departamentos -->
    <section>
        <h2>Departamentos</h2>
        <div class="seccion bg-color-gw container" id="departamentos">
        <!-- TECNOLOGIA -->
            <div>
                <h3>Tecnologia</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor facilis eligendi qui eos laboriosam vitae inventore commodi repellendus quos ullam. Maiores, odit! Quisquam porro voluptatibus cupiditate cum quasi, soluta quis!</p>
            </div>
            <div class="flex-img">
                <img src="/img/lobbyClub/rack.png" alt="" class="img-departamentos">
                <img src="/img/lobbyClub/innovacion.jpg" alt="" class="img-departamentos">
                <img src="/img/lobbyClub/programacion.jpg" alt="" class="img-departamentos">
            </div>
            <br>
        <!-- ADMINISTRACION -->
            <div>
                <h3>Administracion</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus amet ut vitae sunt quas! Deleniti reiciendis, aut modi excepturi, architecto optio voluptates recusandae dolores neque repudiandae alias perferendis laudantium incidunt.</p>
            </div>
            <div class="flex-img">
                <img src="/img/lobbyClub/empresa.png" alt="" class="img-departamentos">
                <img src="/img/lobbyClub/contabilidad.jpg" alt="" class="img-departamentos">
                <img src="/img/lobbyClub/finanzas.jpg" alt="" class="img-departamentos">
            </div>
            <br>
        <!-- LOBBY-CLUB -->
            <div>
                <h3>Lobby Club</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum corporis vel possimus debitis commodi doloribus voluptate! A quas delectus molestiae consequuntur placeat, iste dicta. Quaerat qui minus itaque error mollitia.</p>
            </div>
            <div class="flex-img">
                <img src="/img/lobbyClub/piscina.jpg" alt="" class="img-departamentos">
                <img src="/img/lobbyClub/gym.jpg" alt="" class="img-departamentos">
                <img src="/img/lobbyClub/lobby.jpg" alt="" class="img-departamentos">
            </div>
            <br>
        <!-- EVENTOS Y BANQUETES -->
            <div>
                <h3>Eventos & Banquetes</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus laudantium tempore eos doloribus! Facere soluta sint vero, repellat cum laboriosam beatae voluptates nulla, illum libero veritatis eaque quisquam temporibus facilis.</p>
            </div>
            <div class="flex-img">
                <img src="/img/lobbyClub/salon1.jpg" alt="" class="img-departamentos">
                <img src="/img/lobbyClub/conferencia.jpg" alt="" class="img-departamentos">
                <img src="/img/lobbyClub/banquetes.jpg" alt="" class="img-departamentos">
            </div>
        </div>
       
    </section>

    <footer></footer>
        <!-- Modal -->
        <!-- <form action="" method="post">
            <div class="modal fade " style="margin-top: 130px ;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <button type="button" class="btn-close btn-cerrar-modal" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body" style="margin-left: 100px ;">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="name">Usuario</label><br>
                                    <input type="text" class="bg-border-rd" id="name" placeholder="Ingrese el Usuario">
                                    <br>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="name">Contraseña</label><br>
                                        <input type="password" class="bg-border-rd" id="password" placeholder="Ingrese la Contraseña">
                                        <br>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" value="Ingresar"class="btn btn-outline-warning">Ingresar</button>
                                    <a href="" class="btn btn-outline-warning">Recuperar Contraseña</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form> -->
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>