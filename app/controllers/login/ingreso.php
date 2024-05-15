<?php

include('../../config.php');

// Obtener datos del formulario y limpiarlos
$usuario = filter_var($_POST['usuario'] ?? '', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$clave = filter_var($_POST['clave'] ?? '', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

// Preparar la consulta SQL
$sql = "SELECT nombres FROM `tb_usuarios` WHERE email = :usuario AND password_user = :clave";
$query = $pdo->prepare($sql);

// Vincular los parámetros
$query->bindParam(':usuario', $usuario, PDO::PARAM_STR);
$query->bindParam(':clave', $clave, PDO::PARAM_STR);

// Ejecutar la consulta
$query->execute();

// Obtener los resultados
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

// Verificar si se encontraron resultados
if (count($usuarios) > 0) { 
    // Almacenar el nombre de usuario en la sesión
    session_start();
    $_SESSION['session_usuario'] = $usuario;
    // Redireccionar al panel de administración
    header('Location: ' . $URL . '/admin/principal.php');
    exit;
} else {
    session_start();
    $_SESSION['mensaje'] = 'Error datos Incorrectos';
    header('Location: ' . $URL);
    exit;
}