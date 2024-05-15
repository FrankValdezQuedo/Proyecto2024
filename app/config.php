<?php
define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASSWORD', '');
define('BD', 'sistemaventas');

$servidor = "mysql:host=" . SERVIDOR . ";dbname=" . BD;

try {
    $pdo = new PDO($servidor, USUARIO, PASSWORD);
    // Configurar PDO para que lance excepciones en caso de error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Imprimir el error si la conexión falla
    echo "Error de conexión: " . $e->getMessage();
    die(); // Detener la ejecución del script
}

$URL = "http://localhost/proyecto2024";

date_default_timezone_set("America/Lima");
$fechaHora = date('y-m-d H:i:s');
?>
