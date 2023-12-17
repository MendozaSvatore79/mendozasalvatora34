<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];

// Realiza la conexión a tu base de datos
$conexion = new mysqli('localhost', 'root', '', 'utsv2023');

// Verifica la conexión
if ($conexion->connect_error) {
    die("La conexión ha fallado: " . $conexion->connect_error);
}

// Crea la sentencia SQL para insertar el nuevo usuario
$sql = "INSERT INTO usuarios (nombre, email,passw) VALUES ('$nombre', '$email', '$password')";
if ($conexion->query($sql) === true) {
    // Si el registro es exitoso, muestra una notificación
    echo "<script>Swal.fire('¡Usuario agregado correctamente!', 'El nuevo usuario ha sido registrado con éxito', 'success');</script>";
} else {
    // Si el registro falla, muestra una alerta de error
    echo "<script>Swal.fire('Error', 'No se pudo agregar el usuario', 'error');</script>";
}


$conexion->close();
?>
