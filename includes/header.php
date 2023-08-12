<?php
include("../dataBase/connection.php");


session_start();


$usuarioLogueado = isset($_SESSION['email']) && !empty($_SESSION['email']);


$conexion = DatabaseConnection::getConnection();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Café</title>
  
    <!-- Style  -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital@1&family=Quicksand&display=swap" rel="stylesheet"> 

    <!-- BOOTSTRAP  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>

<header class="mb-5 fixed-top">

<div class="border-bottom bg-light d-none d-lg-block">
  <div class="container d-flex justify-content-between align-items-center py-1">
    
      <h1 class="fs-6 align-self-center my-0">Buenos Aires | WhatsApp 011-15-11111111 | Mail infoTiendaCafe@tiendacafe.com</h1>
      
  </div>
</div>


<nav class="navbar navbar-expand-lg bg-body-tertiary ">
  <div class="container">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <a class="navbar-brand fs-3 text-center  m-0" href="./index.php">Tienda de Café</a>

   
   


    <div class="">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./index.php">Inicio</a>
        </li>
        
       

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./contacto.php">Contacto</a>
        </li>

        <li class="nav-item dropdown d-none d-lg-block">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Locales
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./index.php#lm">Local Mercedes</a></li>
            <li><a class="dropdown-item" href="./index.php#lst">Local San Telmo</a></li>
            <li><a class="dropdown-item" href="./index.php#lp">Local Palermo</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#Sub">Subcripciones</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./quienes_somos.php">Quienes somos</a>
        </li>

      </ul>

      
     
    </div>


    </div>

    <div class="d-none d-lg-block">
  <?php if ($usuarioLogueado): ?>
    <!-- Si hay un usuario logueado, mostramos el correo electrónico del usuario -->
    <p>
      <p class="d-inline">Hola <?php echo $_SESSION['email']; ?></p>
      <span>|</span>
      <a class="nav-link d-inline" href="../dataBase/logout.php">Desconectar</a>
    </p>
  <?php else: ?>
    <!-- Si no hay un usuario logueado, mostramos los enlaces de registro e inicio de sesión -->
    <p>
      <a class="nav-link d-inline" href="./registrarse.php">Crear cuenta</a>
      <span>|</span>
      <a class="nav-link d-inline" href="../auth/login.php">Iniciar sesión</a>
    </p>
  <?php endif; ?>
</div>

  </div>
</nav>

</header>