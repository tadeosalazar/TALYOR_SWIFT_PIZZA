<?php
require_once('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos enviados desde el formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Preparar la consulta SQL utilizando consultas preparadas
    $query = "SELECT * FROM datos WHERE `Nombre,` = ? AND `Password` = ?";
    $statement = mysqli_prepare($enlace, $query);
    mysqli_stmt_bind_param($statement, "ss", $username, $password);
    mysqli_stmt_execute($statement);
    $result = mysqli_stmt_get_result($statement);

    if (mysqli_num_rows($result) == 1) {
        // Inicio de sesión exitoso
        // Redireccionar al index.html con mensaje de éxito
        header("Location: INDEX.html?mensaje=Se inició sesión correctamente");
        exit();
    } else {
        // Credenciales incorrectas
        // Redireccionar a insesion.php con mensaje de error
        header("Location: insesion.php?mensaje=Lo sentimos, la contraseña o el usuario proporcionados no coinciden");
        exit();
    }
}

mysqli_close($enlace);
?>






