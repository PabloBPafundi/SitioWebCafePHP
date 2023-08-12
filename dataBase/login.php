<?php
include("../dataBase/connection.php");


session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];


    $conexion = DatabaseConnection::getConnection();


    $query = "SELECT email, contrasena FROM usuario WHERE email = :email";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':email', $email);


    $statement->execute();


    $registro = $statement->fetch(PDO::FETCH_ASSOC);

    if ($registro !== false && password_verify($contrasena, $registro['contrasena'])) {

        $_SESSION['email'] = $email;
        header("Location: ../pages/index.php");
        exit;
    } else {
        echo 'Usuario o contraseña incorrectos.';
    }
}
?>
