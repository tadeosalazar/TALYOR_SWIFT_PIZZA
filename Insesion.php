<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesión</title>
    <link rel="stylesheet" href="CSS/insesion.css">
</head>
<body>
    <div class="formulario">
        <h1>Inicio de Sesión</h1>
        <?php
        if(isset($_GET['mensaje'])){
            $mensaje = $_GET['mensaje'];
            echo "<p class='mensaje'>$mensaje</p>";
        }
        ?>
        <form method="post" action="iniciar_sesion.php">
            <div class="username">
                <input type="text" name="username" required>
                <label>Nombre de Usuario</label>
            </div>
            <div class="username">
                <input type="password" name="password" required>
                <label>Contraseña</label>
            </div>
            <div class="recordar">¿Olvidó su contraseña?</div>
            <input type="submit" name="submit" value="Iniciar">
            <div class="registrarse">
                Quiero hacer el <a href="registro.php">Registro</a>
            </div>
        </form>
    </div>
</body>
</html>