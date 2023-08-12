<?php
include 'connection.php';
$conexion = DatabaseConnection::getConnection();

if (isset($_GET['id']) && isset($_GET['table'])) {
    $id = $_GET['id'];
    $table = $_GET['table'];

    try {
        // Utilizar el campo de eliminación adecuado según la tabla
        $column = ($table === "usuario") ? 'id' : 'id_consulta';
        $query = "DELETE FROM $table WHERE $column = :id;";
        $statement = $conexion->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);

        if ($statement->execute()) {
            if ($table === "usuario") {
                header('Location: ../administrator/vista_users.php');
            } elseif ($table === "consulta") {
                header('Location: ../administrator/vista_consultas.php');
            }
            exit();
        } else {
            echo "Error al eliminar el registro.";
        }
    } catch (PDOException $error) {
        echo "Error en la consulta: " . $error->getMessage();
    }
} else {
    echo "ID o tabla no proporcionados.";
}
?>
