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

    $query = "INSERT INTO persona(nombre,ape_pat,ape_mat,fecha_nac,email,usuario,password) VALUES ('".$name."','".$apePat."','".$apeMat."','".$fecha."','".$correo."','".$user."','".$pwd."');";

    $res = mysqli_query($conexion, $query);

    if($res){
        echo "<script language = 'javascript'>alert('Registro exitoso');
        window.location.href = 'login.php';</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="register">
        <div class="register-container">
            <div class="circle circle-one">
                <div class="form-container">
                    <h1>REGISTRO</h1>
                    <form action="" method="get">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" required>
                        <input type="text" name="txtApePat" id="txtApePat" placeholder="Apellido Paterno" required>
                        <input type="text" name="txtApeMat" id="txtApeMat" placeholder="Apellido Materno" required>
                        <input type="date" name="fecha_nac" id="fecha_nac" placeholder="Fecha de Nacimiento" required>
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" required>
                        <input type="text" name="txtUser" id="txtUser" placeholder="Usuario" required>
                        <input type="password" name="txtPwd" id="txtPwd" placeholder="Contraseña" required>
                        <input type="submit" name="btnRegistrar" value="Registrar">

                 </form>
                </div>
                <div class="circle circle-two"></div>
            </div>
            <div class="theme-btn-container"></div>
    </section>
    
</body>
</html>