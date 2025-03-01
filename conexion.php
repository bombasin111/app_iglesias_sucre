<?php
// conexion.php
$host = 'localhost'; // Host local
$dbname = 'iglesias_localidad'; // Nombre de la base de datos
$user = 'cumpa_user'; // Usuario que creaste
$password = 'Bom111Ba-'; // Contraseña que asignaste al usuario

try {
    $conexion = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>