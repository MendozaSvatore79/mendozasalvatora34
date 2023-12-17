<?php
include "conexion.php";

if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_persona = $_GET['id'];

    $delete_query = "DELETE FROM persona WHERE id_persona = $id_persona";
    $result = mysqli_query($conexion, $delete_query);

    if($result) {
        header("Location: agenda.php"); 
        exit();
    } else {
        echo "Hubo un Error Al Eliminar  el registro: " . mysqli_error($conexion);
    }
} else {
    echo "ID no válido";
    exit();
}
?>
