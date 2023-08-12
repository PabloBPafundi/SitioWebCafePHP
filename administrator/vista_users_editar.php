<?php
session_start();

if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: login.php");
    exit();
}

include("includes/header.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Utilizamos PDO para la consulta
    $connection = DatabaseConnection::getConnection();
    $query = "SELECT * FROM usuario WHERE id = :id";
    $statement = $connection->prepare($query);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    if ($statement->rowCount() == 1) {
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        $nombre = $row['nombre'];
        $email = $row['email'];
        $telefono = $row['telefono'];
        $apellido = $row['apellido'];
        $usuario = $row['usuario'];
        
    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];

    
    $connection = DatabaseConnection::getConnection();
    $query = "UPDATE usuario SET nombre = :nombre, email = :email, telefono = :telefono, apellido = :apellido, usuario = :usuario WHERE id = :id";
    $statement = $connection->prepare($query);
    $statement->bindValue(':nombre', $nombre);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':telefono', $telefono);
    $statement->bindValue(':apellido', $apellido);
    $statement->bindValue(':usuario', $usuario);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);

    try {
        $statement->execute();
        header("Location: vista_users.php");
    } catch (PDOException $error) {
        echo "Error al actualizar el usuario: " . $error->getMessage();
    }
}
?>

<main class="margin__top container">


<form action="vista_users_editar.php?id=<?php echo $id ?>&table=usuario" method="post">

    <div class="row d-flex justify-content-center">
        <div class="mb-3 col-5">
            <label for="email" class="form-label">Correo Electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
        </div>
        <div class="mb-3 col-5">
            <label for="telefono" class="form-label">Número de Teléfono:</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $telefono; ?>" required>
        </div>
        <div class="mb-3 col-5">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required>
        </div>
        <div class="mb-3 col-5">
            <label for="apellido" class="form-label">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $apellido; ?>" required>
        </div>
        <div class="mb-3 col-5">
            <label for="usuario" class="form-label">Usuario:</label>
            <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $usuario; ?>" required>
        </div>
       
        <div class="mb-3 col-10">
            <button type="submit" class="btn btn-primary" name="update">Actualizar</button>
            <small><a href="../administrator/vista_users.php">Volver</a></small>
        </div>

    </div>
</form>
</main>



<?php
include("includes/footer.php");
?>
