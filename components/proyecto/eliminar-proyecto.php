<?php
$mysqli = include_once "../database/conexion.php";
if (!isset($_GET["idproyecto"])) {
    exit("no se tiene un id");
} else {
    $id_proyecto = $_GET["idproyecto"];
    $queryEliminacion = $mysqli->prepare("DELETE FROM proyecto
        WHERE 
            idproyecto = ?");
    $queryEliminacion->bind_param("i", $id_proyecto);
    $queryEliminacion->execute();
    header("location: listar-proyecto.php");
}
?>
