<?php

include "conexion.php";

$query = "SELECT * FROM persona";
$res = mysqli_query($conexion, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<div class="myDiv">
    <h1>
        <marquee behavior ="" direction = "">Agenda Grupo 301</marquee>

    </h1>
    <main style="width: 80%;">
    <h3><a href="registrar.php">Agregar un Nuevo Usuario</a></h3>

    <table border="1" style="width: 100%;">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Fecha de Nacimiento</th>
        <th>Correo Electronico </th>
        <th>Usuario</th>
        <th>Password</th>
        <th colspan="2">Accion</th>
    </tr>

    <?php
    $num=1;
    while($row = mysqli_fetch_assoc($res)){

        ?>
        <tr>
            <td><?php echo $num ?></td>
            <td><?php echo $row["nombre"]; ?></td>
            <td><?php echo $row["ape_pat"]. "" . $row["ape_mat"]; ?></td>
            <td><?php echo $row["fecha_nac"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["usuario"]; ?></td>
            <td><?php echo $row ["password"]; ?></td>
            <td><a href="update.php?id=<?php echo $row['id_persona']; ?>">Actualizar</a></td>
            <td><a href="delete.php?id=<?php echo $row['id_persona']; ?>">Eliminar</a></td>

        </tr>
        <?php
        $num++;
    }
    ?>

    </table>

    </main>
</div>
    
</body>
</html>