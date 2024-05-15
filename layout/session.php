<?php
session_start();

if (isset($_SESSION['session_usuario'])) {

    $usuario_logeado = $_SESSION['session_usuario'];

    $sql = "SELECT * FROM tb_usuarios where email = '$usuario_logeado'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($usuarios as $usua) {
        $nombre_sesion = $usua["nombres"];
    }
}else{
    header('Location: ' . $URL);
    exit;
}
