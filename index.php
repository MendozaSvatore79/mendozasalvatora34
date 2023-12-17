<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <div class="container">
        <div class="form-content">
            <h1 id="title">Registro</h1>
            <form action="Registro.php"  method="post">
                <div class="input-group">
                    <div class="input-field" id="nameInput">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Nombre" id="nombre" name="nombre" required>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="Correo" id="email" name="email" required>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Contraseña" id="password" name="password" required>
                    </div>
                    <p>Olvidaste tu contraseña <a href="#">Click aqui</a></p>
                </div>
                <div class="btn-field">
                    <button id="SignUp" value="Registrar" type="submit">Registro</button>
                    <button id="SignIn" type="button" class="disable" >Login</button>
                </div>
            </form>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18"></script>
        </div>
    </div>

</body>
</html>