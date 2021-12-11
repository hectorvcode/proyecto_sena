<?php
$mysqli = include_once "../database/conexion.php";
if (!isset($_GET["iddespacho"])) {
    exit("no se tiene un id");
} else {
    $id_despacho = $_GET["iddespacho"];
    $queryEliminacion = $mysqli->prepare("DELETE FROM despacho
        WHERE 
            iddespacho = ?");
    $queryEliminacion->bind_param("i", $id_despacho);
    $queryEliminacion->execute();
    header("location: listar-despacho.php");
}
?>