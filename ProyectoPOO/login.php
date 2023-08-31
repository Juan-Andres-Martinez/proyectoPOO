<?php 
$url_base="http://localhost/proyectoPOO/login.php?"; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Inicio Sesion y Registro</title>
</head>
<body>
    <div class="container-form Registro">
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenido</h2>
                <p>Para unirte a nuestra comunidad por favor Inicio Sesión con tus datos.</p>
                <input type="button" value="Iniciar Sesion" id="Inicio-Sesion">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Crear una Cuenta</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-github' ></i>
                    <i class='bx bxl-linkedin' ></i> 
                </div>
                <p>o usa tu email para registrarte</p>
                <form class="form" method="post" action="objeto.php">
                    <label>
                        <i class='bx bx-user' ></i>
                        <input type="text" placeholder="Nombres Completos" name="Nombres">
                    </label>
                    <label>
                        <i class='bx bx-user' ></i>
                        <input type="text" placeholder="Apellidos Completos" name="Apellidos">
                    </label>
                    <label>
                        <i class='bx bx-envelope' ></i>
                        <input type="email" placeholder="Correo" name="Correo">
                    </label>
                    <label>
                        <i class='bx bx-user' ></i>
                        <input type="text" placeholder="Telefono" name="Telefono">
                    </label>
                    <label>
                        <i class='bx bx-lock-alt' ></i>
                        <input type="password" placeholder="Contraseña" name="Perfil">
                    </label>
                    <input type="submit" value="Registrarse">
                </form>
            </div>
        </div>
    </div>
    

    <div class="container-form Inicio hide">
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenido</h2>
                <p>Para unirte a nuestra comunidad por favor Inicio Sesión con tus datos.</p>
                <input type="button" value="Registrarse" id="Registrarse">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Inicia Sesión</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-github' ></i>
                    <i class='bx bxl-linkedin' ></i> 
                </div>
                <p>o inicia sesión con tu cuenta.</p>
                <form class="form">
                    <label>
                        <i class='bx bx-envelope' ></i>
                        <input type="email" placeholder="Correo">
                    </label>
                    <label>
                        <i class='bx bx-lock-alt' ></i>
                        <input type="password" placeholder="Contraseña">
                    </label>
                    <input type="submit" value="Iniciar Sesión">
                </form>
            </div>
        </div>
    </div>
    <script src="./scripts/script.js"></script>
</body>
</html>