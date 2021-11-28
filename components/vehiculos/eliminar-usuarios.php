<?php
$mysqli = include_once "../database/conexion.php";
if (!isset($_GET["idusuario"])) {
    exit("no se tiene un id");
} else {
    $id_usuario = $_GET["idusuario"];
    $queryEliminacion = $mysqli->prepare("DELETE FROM usuarios
        WHERE 
            idusuario = ?");
    $queryEliminacion->bind_param("i", $id_usuario);
    $queryEliminacion->execute();
    header("location: listar-usuarios.php");
}
?>