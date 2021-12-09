<?php
$mysqli = include_once "../database/conexion.php";
if (!isset($_GET["idregistro"])) {
    exit("no se tiene un id");
} else {
    $id_registro = $_GET["idregistro"];
    $queryEliminacion = $mysqli->prepare("DELETE FROM registro_produccion
        WHERE 
            idregistro = ?");
    $queryEliminacion->bind_param("i", $id_registro);
    $queryEliminacion->execute();
    header("location: listar-produccion.php");
}
?>