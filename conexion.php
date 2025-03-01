<?php
// conexion.php
$host = getenv('dpg-cv1ok2d6l47c73fi3rn0-a.oregon-postgres.render.com');       // Host de la base de datos
$dbname = getenv('iglesias_localidad_0nd1');     // Nombre de la base de datos
$user = getenv('bombasin111');       // Usuario de la base de datos
$password = getenv('LOGlCiLdaP9T6a5O8PN3QM6A9Er7xul3'); // Contraseña de la base de datos

try {
    $conexion = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>