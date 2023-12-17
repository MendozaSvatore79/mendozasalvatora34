<?php

if(isset($_GET ["btnEntrar"])){
    include "conexion.php";

    $user = $_GET["txtUser"];
    $pwd = $_GET["txtPwd"];

    $query = "SELECT * FROM persona where usuario ='". $user ."' and password = '".$pwd. "';";

    $res = mysqli_query($conexion, $query);
    $row = mysqli_fetch_assoc($res);

    if(mysqli_num_rows($res) > 0){
        echo "<script language = 'javascript'>alert('Bienvenido $user');
        window.location.href = 'index.html';</script>";
    }
}

?>


<?php

if(isset($_GET["btnRegistrar"])){
    include "conexion.php";

    $name = $_GET["txtNombre"];
    $apePat = $_GET["txtApePat"];
    $apeMat = $_GET["txtApeMat"];
    $fecha = $_GET["fecha_nac"];
    $correo = $_GET["txtCorreo"];
    $user = $_GET["txtUser"];
    $pwd = $_GET["txtPwd"];

    echo $query = "INSERT INTO persona(nombre,ape_pat,ape_mat,fecha_nac,email,usuario,password) VALUES ('".$name."','".$apePat."','".$apeMat."','".$fecha."','".$correo."','".$user."','".$pwd."');";

    $res = mysqli_query($conexion, $query);

    if($res){
        echo "<script language = 'javascript'>alert('Registro exitoso');
        window.location.href = 'login.php';</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio y Registro Utsv</title>
    <link rel="stylesheet" href="../css/formStyle.css">

</head>

<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form name="login-form" id="login-form" method="get" autocomplete="on" class="sign-in-form" action="#">
                        <div class="logo">
                            <img src="../img/2.png" alt="easyclass">
                            <h3>Universidad Tecnologica del Sureste de Veracruz</h3>
                        </div>

                        <div class="heading">
                            <h2>Bienvenido de Nuevo Docente</h2>
                            <h6>Aun no te registras ?</h6>
                            <a href="#" class="toggle">Registrate</a>
                        </div>
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" name="txtUser" id="usuario" minlength="4" class="input-field" name="usuario" placeholder="Ingresar Nombre" required autocomplete="off" />
                                <label>Usuario</label>
                            </div>
                            <div class="input-wrap">
                                <input type="password" minlength="4" id="clave" class="input-field" name="txtPwd" placeholder="Ingresar Contraseña" required autocomplete="off" />
                                <label>Clave</label>
                            </div>
                            <input type="hidden" name="login-user" value="1">
                            <input type="submit" name="btnEntrar" class="sign-btn" value="Iniciar Sesion">
                            <p class="text">
                                Olvidaste La contraseña ?
                                <a href="#">Contacta al Soporte Tecnico</a>
                            </p>
                        </div>
                    </form>

                    <!-- Seccion Registro -->
                    <form action="#" method="get" autocomplete="off" class="sign-up-form">
                        <div class="logo">
                            <img src="../img/3.png" alt="easyclass">
                            <h4>UTSV</h4>
                        </div>

                        <div class="heading">
                            <h2>Bienvenido Docente Utsv</h2>
                            <h6>Ya tienes Cuenta de Profesor?</h6>
                            <a href="#" class="toggle">Inicia Sesion </a>
                        </div>
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" minlength="4" name="txtNombre" class="input-field" required autocomplete="off" />
                                <label>Nombre</label>
                            </div>
                            <div class="input-wrap">
                                <input type="text" minlength="4" name="txtApePat" class="input-field" required autocomplete="off" />
                                <label>Apellido Paterno</label>
                            </div>
                            <div class="input-wrap">
                                <input type="text" minlength="6" name="txtApeMat" class="input-field" required autocomplete="off" />
                                <label>Apellido Materno</label>
                            </div>
                            <div class="input-wrap">
                                <input type="date" minlength="6" name="fecha_nac" class="input-field" required autocomplete="off" />
                                <label></label>
                            </div>
                            <div class="input-wrap">
                                <input type="email" minlength="6" name="txtCorreo" class="input-field" required autocomplete="off" />
                                <label>Correo Electronico </label>
                            </div>
                            <div class="input-wrap">
                                <input type="text" minlength="6" name="txtUser" class="input-field" required autocomplete="off" />
                                <label>Nombre Usuario</label>
                            </div>
                            <div class="input-wrap">
                                <input type="password" minlength="6" name="txtPwd" class="input-field" required autocomplete="off" />
                                <label>Clave</label>
                            </div>
                            <input type="submit" name="btnRegistrar" method="post" value="Finalizar Registro" class="sign-btn">
                            <p class="text" type="">
                                Aceptas los terminos y condiciones de la Universidad Tecnologica del Sureste de Veracruz?
                                <a href="#">Aviso de Privacidad Utsv</a>
                            </p>
                        </div>
                    </form>
                </div>
                <div class="carousel">
                    <div class="images-wrapper">
                        <img src="../img/lucesita.jpg" class="image  img-1 show" alt="">
                        <img src="../img/cosmo.jpg" class="image  img-2" alt="">
                        <img src="../img/paris.jpg" class="image  img-3" alt="">
                    </div>

                    <div class="text-slider">
                        <div class="text-wrap">
                            <div class="text-group">
                                <h2>La mejor Educacion</h2>
                                <h2>Educacion de Calidad</h2>
                                <h2>Educacion</h2>
                            </div>
                        </div>
                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>


    <!-- JAVACRIPT FILE -->
    <script src="../js/sweetalert2.min.js"></script>
    <script src="../Js/app.js"></script>
    <script src="../js/login-fetch.js"></script>



</body>

</html>