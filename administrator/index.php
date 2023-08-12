<?php 

session_start();


if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: login.php");
    exit();
}



include("includes/header.php");




?>

<main class="margin__top container">



<div class="container mt-5">
    <div class="card">
      <div class="card-header bg-primary text-white">
        <h4>Bienvenido Administrador</h4>
      </div>
      <div class="card-body">
        <h5 class="card-title">¡Hola, Administrador!</h5>
        <p class="card-text">Bienvenido a la plataforma de administración.</p>
        <p class="card-text">Aquí puedes gestionar los usuarios, y consultas.</p>
      </div>
    </div>
  </div>



</main>



<?php 

include("includes/footer.php");




?>