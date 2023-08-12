<?php
require '../dataBase/connection.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje= $_POST['mensaje'];
   

 
    $conexion = DatabaseConnection::getConnection();


$queryCrearTabla = "CREATE TABLE IF NOT EXISTS consulta (
    id_consulta INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    mensaje VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
    
    $conexion->exec($queryCrearTabla);

 
    $queryInsertar = "INSERT INTO consulta (email, nombre, mensaje) 
                      VALUES (:email, :nombre, :mensaje)";
    $statement = $conexion->prepare($queryInsertar);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':nombre', $nombre);
    $statement->bindParam(':mensaje', $mensaje);
  

    $statement->execute();

    header("Location: ../pages/contacto.php?success=true");
    exit();
}
?>
