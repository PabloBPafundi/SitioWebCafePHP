
<?php 

include("../includes/header.php");


$mensaje_enviado = isset($_GET['success']) && $_GET['success'] === 'true';

?>



<main class="margin__top container">



    <div class="container d-flex align-items-center mb-3">
        <hr class="flex-grow-1">
        <h2 class="text-center mx-3">Contacto</h2>
        <hr class="flex-grow-1">
      </div>

      


      <form action="../dataBase/guardarConsulta.php" method="post">
    <div class="form-group">
        <label for="nombre" class="mt-2">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre">
    </div>
    <div class="form-group">
        <label for="email" class="mt-2">Correo electrónico:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo electrónico">
    </div>
    <div class="form-group">
        <label for="mensaje" class="mt-2">Comentario:</label>
        <textarea class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu comentario aquí"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Enviar</button>
</form>


<?php if ($mensaje_enviado) { ?>
        <p>¡El formulario se envió correctamente! Gracias por tu consulta.</p>
    <?php } ?>

</main>



<?php 

include("../includes/footer.php");
?>