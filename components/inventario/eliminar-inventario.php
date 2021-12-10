<?php
$mysqli = include_once "../database/conexion.php";
if (!isset($_GET["iditem"])) {
    exit("no se tiene un id");
} else {
    $id_usuario = $_GET["iditem"];
    $queryEliminacion = $mysqli->prepare("DELETE FROM inventario
        WHERE 
            iditem = ?");
    $queryEliminacion->bind_param("i", $id_usuario);
    $queryEliminacion->execute();
    header("location: listar-inventario.php");
}
?>