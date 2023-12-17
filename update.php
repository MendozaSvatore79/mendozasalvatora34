<?php
include "conexion.php";

if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_persona = $_GET['id'];

    // Verificar si se ha enviado el formulario de actualización
    if(isset($_POST['submit'])) {
        $nombre = $_POST['nombre'];
        $ape_pat = $_POST['ape_pat'];
        $ape_mat = $_POST['ape_mat'];
        $fecha_nac = $_POST['fecha_nac'];
        $email = $_POST['email'];
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        $update_query = "UPDATE persona SET 
                        nombre = '$nombre', 
                        ape_pat = '$ape_pat', 
                        ape_mat = '$ape_mat', 
                        fecha_nac = '$fecha_nac', 
                        email = '$email', 
                        usuario = '$usuario', 
                        password = '$password' 
                        WHERE id_persona = $id_persona";

        $result = mysqli_query($conexion, $update_query);

        if($result) {
            header("Location: agenda.php"); // Redirigir a la página principal después de la actualización
            exit();
        } else {
            echo "Error al actualizar el registro: " . mysqli_error($conexion);
        }
    }

    // Obtener datos actuales del usuario
    $select_query = "SELECT * FROM persona WHERE id_persona = $id_persona";
    $select_result = mysqli_query($conexion, $select_query);
    $row = mysqli_fetch_assoc($select_result);
} else {
    echo "ID de persona no válido";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Usuario</title>
</head>
<body>

<div class="myDiv">
    <h1>Actualizar Usuario</h1>
    <form method="post" action="">
       
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required>
        
        <label for="nombre">Apellido Paterno:</label>
        <input type="text" name="ape_pat" value="<?php echo $row['ape_pat']; ?>" required>
        
        <label for="nombre">Apellido Materno:</label>
        <input type="text" name="ape_mat" value="<?php echo $row['ape_mat']; ?>" required>


        <label for="nombre">Fecha De Nacimiento</label>
        <input type="date" name="fecha_nac" value="<?php echo $row['fecha_nac']; ?>" required>

        <label for="nombre">Correo Electronico:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required>

        <label for="nombre">Usuario:</label>
        <input type="text" name="usuario" value="<?php echo $row['usuario']; ?>" required>

        <label for="nombre">Contraseña:</label>
        <input type="password" name="password" value="<?php echo $row['password']; ?>" required>
        
        
        
        
        
       

        <input type="submit" name="submit" value="Actualizar">
    </form>
</div>

</body>
</html>