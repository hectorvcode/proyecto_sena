<?php
$mysqli = include_once "../database/conexion.php";
if (!isset($_GET["idvehiculo"])) {
    exit("no se tiene un id");
} else {
    $id_vehiculo = $_GET["idvehiculo"];
    $queryEliminacion = $mysqli->prepare("DELETE FROM vehiculos
        WHERE 
            idvehiculo = ?");
    $queryEliminacion->bind_param("i", $id_vehiculo);
    $queryEliminacion->execute();
    header("location: listar-vehiculos.php");
}
?>