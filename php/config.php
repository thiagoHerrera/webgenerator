<?php
// Configuración de base de datos
define('HOST', 'localhost');
define('USERNAME', 'adm_webgenerator');
define('PASSWORD', 'webgenerator2024');
define('NOMBREDB', 'webgenerator');

// Conexión a MySQL
$conexion = new mysqli(HOST, USERNAME, PASSWORD, NOMBREDB);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

echo "Conexión exitosa a la base de datos";
?>