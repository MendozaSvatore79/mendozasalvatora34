<?php

$server = "localhost";
$user = "root";
$password="";
$db ="web301";



$conexion = mysqli_connect($server,$user,$password,$db);

if(!$conexion){
    die("Error de conexion".mysqli_connect_error());
}

?>