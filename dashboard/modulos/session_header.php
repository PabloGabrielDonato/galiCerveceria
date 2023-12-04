<?php
session_start();
require '../dbconnection.php';

date_default_timezone_set("America/Argentina/Buenos_Aires");

$idUsuario = $_SESSION['user_id'];
$dniUsuario = $_SESSION['dniUsuario'];
$nomreUsuario = $_SESSION['nombreUsuario'];
$apellidoUsuario = $_SESSION['apellidoUsuario'];
$accesoUsuario = $_SESSION['accesoUsuario'];

if (isset($_SESSION['dniUsuario'])) {
    $records = $conn->prepare('SELECT users.* FROM users WHERE users.dni= :dni');
    $records->bindParam(':dni',  $_SESSION['dniUsuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
        $user = $results;
    }
}

// verifica si el usuario esta logeado
if (!isset($user)) {
    header("Location: ../index.php");
}
