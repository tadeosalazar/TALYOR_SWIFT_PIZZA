<?php
if(isset($_POST['registro.php'])){
    $enlace = mysqli_connect("localhost", "root", "", "swiftpizza");

    if(!$enlace){
        die("No pudo conectarse a la base de datos " . mysqli_error());
    }

    $nombre = $_POST['nombre'];
    $correo = $_POST['email'];
    $password = $_POST['password'];
    $rol = $_GET['rol'];

    if (empty($rol)) {
        $rol = 'usuario';
    }

    $insertarDatos = "INSERT INTO datos (`Nombre,`, `Correo,`, `Password`, `Rol`) VALUES ('$nombre', '$correo', '$password', '$rol')";
    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

    if($ejecutarInsertar){
        echo "Los datos se han guardado correctamente.";
    } else {
        echo "Error al guardar los datos: " . mysqli_error($enlace);
    }

    mysqli_close($enlace);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Regístrate Ahora</title>
    <link rel="stylesheet" type="text/css" href="CSS/registro.css">
</head>
<body>
    <form action="#" name="swiftpizza" method="post">
        <h1>Regístrate Ahora</h1>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit" name="registro">Registrarse</button>
        <input type="reset">
    </form>
</body>
</html>