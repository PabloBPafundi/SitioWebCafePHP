<?php 

session_start();


if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: login.php");
    exit();
}



include("includes/header.php");




?>
<main class=" mt-5">


<table class="container text-center table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>Acción</th>
        </tr>
    </thead>

    <tbody>
        <?php

        try {
          
            $query = "SELECT * FROM usuario;";
            $resultado_consulta = $conexion->query($query);

          
            while ($row = $resultado_consulta->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['telefono'] ?></td>
                    <td><?php echo $row['nombre'] ?></td>
                    <td><?php echo $row['apellido'] ?></td>
                    <td><?php echo $row['usuario'] ?></td>
                    <td><?php echo $row['contrasena'] ?></td>
                    <td>
                        <a href="vista_users_editar.php?id=<?php echo $row['id'] ?>">Editar</a>
                        <a href="../dataBase/eliminar.php?id=<?php echo $row['id'] ?>&table=usuario">Eliminar</a>

                    </td>
                </tr>
                <?php
            }
        } catch (PDOException $error) {
            echo "Error en la consulta: " . $error->getMessage();
        }
        ?>
    </tbody>
</table>

</main>

    
<?php 

include("includes/footer.php");




?>

