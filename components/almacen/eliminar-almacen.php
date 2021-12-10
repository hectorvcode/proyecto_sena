<?php
$mysqli = include_once "../database/conexion.php";
if (!isset($_GET["idalmacen"])) {
    exit("no se tiene un id");
} else {
    $id_almacen = $_GET["idalmacen"];
    $queryEliminacion = $mysqli->prepare("DELETE FROM almacen
        WHERE 
            idalmacen = ?");
    $queryEliminacion->bind_param("i", $id_almacen);
    $queryEliminacion->execute();
    header("location: listar-almacen.php");
}
?>