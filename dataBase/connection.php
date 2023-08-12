<?php
class DatabaseConnection
{
    private static $connection;

    private static $server = "localhost";
    private static $user = "root";
    private static $password = "";
    private static $database = "tienda_de_cafe";

    public static function getConnection()
    {
        if (self::$connection === null) {
            try {
                self::$connection = new PDO("mysql:host=" . self::$server . ";dbname=" . self::$database, self::$user, self::$password);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $error) {
                echo "Error al conectar a la base de datos: " . $error->getMessage();
            }
        }

        return self::$connection;
    }
}
?>




