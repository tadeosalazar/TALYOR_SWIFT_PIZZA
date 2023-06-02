<?php
$enlace = mysqli_connect("localhost", "root", "", "swiftpizza");

if (!$enlace) {
    die("No se pudo conectar a la base de datos: " . mysqli_connect_error());
}
?>