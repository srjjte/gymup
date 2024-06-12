<?php
class Conexion {
    private $conect;

    public function __construct() {
        // Parámetros de conexión
        $host = "gymup.mysql.database.azure.com";
        $dbname = "gymup";
        $user = "Administrador";
        $pass = "Upiicsa2024.";
        $charset = "utf8mb4";
        $ca_cert = __DIR__ . "/DigiCertGlobalRootCA.crt"; // Ruta relativa al certificado CA

        // Configuración del DSN de PDO
        $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

        try {
            // Opciones de PDO para SSL
            $options = [
                PDO::MYSQL_ATTR_SSL_CA => $ca_cert,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false // Desactiva la verificación del certificado del servidor si es necesario
            ];

            // Crear una nueva conexión PDO con SSL
            $this->conect = new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $e) {
            echo "Error en la conexion: " . $e->getMessage();
        }
    }

    public function conect() {
        return $this->conect;
    }
}
?>
