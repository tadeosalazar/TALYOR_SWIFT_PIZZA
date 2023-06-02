<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS Style -->
    <link rel="stylesheet" href="CSS/style.css">
    <!-- CSS Normalize -->
    <link rel="stylesheet" href="CSS/normalize.css">
    <!-- javascript -->
    <link rel="stylesheet" href="JS/app.js">


</head>
<body>
    <div class="inicio">
        <h1 class="logo-header">
            <span class="logo">TAYLOR'S </span><span class="logo">  &nbsp;PIZZA  </span>
        </h1>

    </div>

    <!-- bootstrap-navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="font-family: 'Lucida Grande';"><img src="IMG/logo.png" height="30" width="30">   PIZZA SWIFT</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="INDEX.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="comidas.html">A degustar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="lab1.html">Contactanos</a>
<<<<<<< Updated upstream
                
=======
>>>>>>> Stashed changes
              </li>

            </ul>

            <ul class="navbar-nav">
              <li class="nav-item">
                <form action="registro.php" method="POST">
                  <a type="submit" class="nav-link active" aria-current="page" href="registro.php">Registrarse</a>
                </form>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="Insesion.php">Iniciar Sesión</a>
                  <?php
    if (isset($_GET['rol'])) {
        $rol = $_GET['rol'];
        echo "<p>¡Bienvenido, $rol!</p>";
    }
    ?>
                  
              </li>
          </ul>
          </div>
        </div>
      </nav>

      <!-- Imagne inicial- seccion 1 -->
<div class="main">
    <h1 class="title" style="color: white;">
        PIZZA SWIFT
    </h1>
</div>
<div class="footer">
    <b>SOBRE NOSOTROS</b>
    <div>
      <p>PIZZA SWIFT es una empresa que busca proporcionar una experiencia gastronómica única y
        satisfacer el paladar de nuestros clientes con pizzas frescas y deliciosas, elaboradas con
        los ingredientes de la más alta calidad y servidas en un ambiente acogedor y agradable
      </p>
    </div>
</div>



<script src="JS/app.js"></script>


</body>
</html>