<?php
include("../dataBase/connection.php");

session_start();

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
          <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
        </li>
        
       

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="vista_consultas.php">Consultas</a>
        </li>

    

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="vista_users.php">Usuarios</a>
        </li>


      

      </ul>

      
     
    </div>


    </div>

    <div class="d-none d-lg-block">
  
  
    <p>
    
      <a class="nav-link d-inline" href="../dataBase/logout.php">Desconectar</a>
    </p>
 
</div>

  </div>
</nav>

</header>