<?php
require '../dataBase/connection.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];


    $hashedPassword = password_hash($contrasena, PASSWORD_DEFAULT);


    $conexion = DatabaseConnection::getConnection();


    $queryCrearTabla = "CREATE TABLE IF NOT EXISTS usuario (
        id INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(255) NOT NULL,
        telefono VARCHAR(15) NOT NULL,
        nombre VARCHAR(100) NOT NULL,
        apellido VARCHAR(100) NOT NULL,
        usuario VARCHAR(50) NOT NULL,
        contrasena VARCHAR(255) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
    
    $conexion->exec($queryCrearTabla);


    $queryInsertar = "INSERT INTO usuario (email, telefono, nombre, apellido, usuario, contrasena) 
                      VALUES (:email, :telefono, :nombre, :apellido, :usuario, :contrasena)";
    $statement = $conexion->prepare($queryInsertar);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':telefono', $telefono);
    $statement->bindParam(':nombre', $nombre);
    $statement->bindParam(':apellido', $apellido);
    $statement->bindParam(':usuario', $usuario);
    $statement->bindParam(':contrasena', $hashedPassword); 

    $statement->execute();

    header("Location: ../auth/login.php");
}
?>
