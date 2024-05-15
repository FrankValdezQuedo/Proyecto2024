<?php
include('../../config.php');
session_start();


if(isset($_SESSION['session_usuario'])){
    session_destroy();
    header('Location: ' . $URL);
}

?>