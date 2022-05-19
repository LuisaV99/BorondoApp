<!DOCTYPE html>
<html lang="en">

<head>
    <title>Inicio de Sesión</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Coming+Soon&family=Lobster&family=Noto+Sans+JP&family=Shizuru&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Coming+Soon&family=Lobster&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="imagenes/Logo.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../estilos/util.css">
    <link rel="stylesheet" type="text/css" href="../estilos/iniciosesion.css">


</head>

<body>
    <header>

        <div class="logosv2">
            <img class="navlogo" src="../imagenes/logo2.png" alt="logo" width="60">

            <a href="http://localhost:8080/mvc/view/Iniciosesion.php"><img src="../imagenes/User-Profile.png" width="60"></a>

            <div class="banderas">
                <a class="ESP" href="#"><button>ES</button></a>
                <a href="#"><img src="../imagenes/spain.png" width="20" height="20"></a>
                <a class="ENG" href="#"><button>EN</button></a>
                <a href="#"><img src="../imagenes/usa.png" width="20" height="20"></a>
            </div>
    </header>



    </br>
    <!--FORMULARIO-->
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic">
                <img id="logo" src="../imagenes/Logo.png" alt="" width="280px"></br>
            </div>
            <div class="formulario">
                <form class="login100-form validate-form" action="../Controlador/iniciosesion.php" method="post">
                    <span class="login100-form-title">
                        Iniciar
                        Sesión
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Ingresa un usuario válido.">

                        <input class="input100" type="text" name="user" placeholder="Usuario">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa-solid fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Ingresa una contraseña válida">
                        <input class="input100" type="password" name="pass" placeholder="Contraseña">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="text-center p-t-1">
                        <span class="txt1">
                            ¿Olvidó su
                            <button id="btn-abrir-popup" class="btn-abrir-popup">Contraseña?</button>
                        </span>
                    </div>
                    <div class="container-login100-form-btn">
                        <center>
                            <button type="submit" class="btn btn-primary">Ingresar</button>
                        </center>
                    </div>
                </form>

                <div class="text-center p-t-40">
                    <a class="txt2" href="../Vista/registro.html">
                        Registrate
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
                </form>
                <div class="overlay" id="overlay">
                    <div class="popup" id="popup">
                        <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                        <h3>RECUPERAR CONTRASEÑA</h3>
                        <h4>Ingresa tú correo electrónico</h4>
                        <form action="">
                            <div class="contenedor-inputs">
                                <label>Correo electrónico</label>
                                <input class="inputcorreo" type="email" placeholder="Correo">
                            </div>
                            <input type="submit" class="btn-submit" value="RECUPERAR">
                        </form>
                    </div>
                </div>


            </div>



        </div>
    </div>
    </div>
    </div></br></br>
    <!-----FOOTER--->
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box2">
                <figure>
                    <img src="../imagenes/Logo.png" width="70">
                    <h2 class="footer3">¡A un click de tu destino! </h2>
                    <div class="copyright" style="color: black;">
                        Todos los derechos reservados © 2022 Copyright
                    </div>
                </figure>

            </div>
            <div class="box">
                <h2 style="font-family: Open Sans, sans-serif; color: black;">PQR'S</h2></br>
                <div>
                    <div class="pqrs-imput" data-validate="Ingresa un correo válido">
                        <input class="input100" type="text" name="user" placeholder="Correo@ejemplo.com">
                        <span class="symbol-input100">
                        </span>
                    </div>
                </div>
                <div class="column1">
                    <div class="pqrs-imput" data-validate="Ingresa un nombre válido">
                        <input class="input100" type="text" name="pass" placeholder="Nombres">
                        <span class="symbol-input100">
                            <i aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="pqrs-imput" data-validate="Ingresa un número de Teléfono">
                        <input class="input100" type="number" placeholder="Teléfono">
                        <span class="symbol-input100">
                            <i aria-hidden="true"></i>
                        </span>
                    </div>
                </div>

                <div class="column2">

                    <input class="input100" list="datalistOptions" id="exampleDataList" placeholder="Seleccione">
                    <datalist id="datalistOptions">
                        <option value="Peticiones">
                        <option value="Quejas">
                        <option value="Reclamos">
                        <option value="Sugerencias">
                    </datalist>



                    <div class="pqrs-imput" data-validate="Ingresa otro tipo de PQRS">
                        <input class="input100" type="text" placeholder="Asunto">
                        <span class="symbol-input100">
                            <i aria-hidden="true"></i>
                        </span>
                    </div><br>
                </div>
                <textarea class="pqrs" rows="5" cols="30" placeholder="Escribe aquí tu PQR'S"></textarea>
                <li class="enviar">
                    <a class="botones3" href="#">Enviar</a>
                </li></br>

            </div>
            <div class="column3">
                <div class="single">
                    <div class="subcolum1">
                        <a style="color: black;" class="linksl" href="#">Nosotros</a>
                        <a style="color: black;" class="linksl" href="#">Platillos</a>
                        <a style="color: black;" class="linksl" href="#">Paquetes</a>
                    </div>

                    <div class="subcolum2">
                        <a style="color: black;" class="linksr" href="#">Lugares</a>
                        <a style="color: black;" class="linksr" href="#">Transporte</a>
                        <a style="color: black;" class="linksr" href="#">Inicia Sesión</a>

                    </div>
                </div>

                </br>
                <div class="cucumelo">
                    <h2 class="texbloc1">SÍGUENOS EN REDES SOCIALES</h2></br>
                    <div class="social">
                        <div class="imgs">
                            <a class="fa" href="#"><img src="../imagenes/face.png" alt="instagram" width="34px"></a>
                            <a class="ins" href="#"><img src="../imagenes/insta.png" alt="facebook" width="34px"></a>
                            <a class="tw" href="#"><img src="../imagenes/twit.png" alt="linkedin" width="34px"></a>
                        </div>
                    </div>
                    <h2 class="texbloc1">@BorondoApp.Oficial</h2>
                </div>


            </div>

        </div>

    </footer>

    </div>
    </div>



    <!--===============================================================================================-->
    <script src="vendorr/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendorr/bootstrap/js/popper.js"></script>
    <script src="vendorr/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendorr/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendorr/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="../js/iniciosesion.js"></script>

</body>

</html>