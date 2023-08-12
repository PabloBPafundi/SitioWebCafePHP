<?php 
session_start();

if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: login.php");
    exit();
}

include("includes/header.php");


if (isset($_GET['id_consulta'])) {
    $id = $_GET['id_consulta'];

    // Utilizamos PDO para la consulta
    $connection = DatabaseConnection::getConnection();
    $query = "SELECT * FROM consulta WHERE id_consulta = :id";
    $statement = $connection->prepare($query);
    $statement->bindParam(':id', $id, PDO::PARAM_INT); // Utilizamos PDO::PARAM_INT para enlazar el parámetro como un entero
    $statement->execute();

    if ($statement->rowCount() == 1) {
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        $nombre = $row['nombre'];
        $email = $row['email'];
        $mensaje = $row['mensaje']; // El nombre del campo en la tabla es 'mensaje', no 'consulta'
    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id_consulta'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Utilizamos PDO para la actualización
    $connection = DatabaseConnection::getConnection();
    $query = "UPDATE consulta SET nombre = :nombre, email = :email, mensaje = :mensaje WHERE id_consulta = :id"; // Cambiamos 'consulta' por 'mensaje'
    $statement = $connection->prepare($query);
    $statement->bindValue(':nombre', $nombre);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':mensaje', $mensaje);
    $statement->bindParam(':id', $id, PDO::PARAM_INT); // Utilizamos PDO::PARAM_INT para enlazar el parámetro como un entero

    try {
        $statement->execute();
        header("Location: vista_consultas.php");
    } catch (PDOException $error) {
        echo "Error al actualizar la consulta: " . $error->getMessage();
    }
}








?>

<main class="margin__top container">


    <form action="vista_consulta_editar.php?id_consulta=<?php echo $_GET['id_consulta']; ?>" method="POST">
        <div class="form-group">
            <label for="nombre" class="mt-2">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>" placeholder="Ingresa tu nombre">
        </div>
        <div class="form-group">
            <label for="email" class="mt-2">Correo electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" placeholder="Ingresa tu correo electrónico">
        </div>
        <div class="form-group">
            <label for="mensaje" class="mt-2">Comentario:</label>
            <textarea class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu comentario aquí"><?php echo $mensaje; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-2" name="update">Actualizar</button>
    </form>

</main>

<?php 
include("includes/footer.php");
?>
