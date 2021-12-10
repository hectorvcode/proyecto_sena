<?php
    $mysqli = include_once "../database/conexion.php";
    $nombreAlmacen = $_POST["nombreAlmacen"];
    $ubicacion = $_POST["ubicacion"];
    $observaciones = $_POST["observaciones"];
    $idAlmacen = $_POST["id"];
    $queryActualizacion=$mysqli->prepare(
        "UPDATE almacen
        SET nombreAlmacen = ?, 
        ubicacion = ?, 
        observaciones = ?
        WHERE idalmacen = ?"
    );
    $queryActualizacion->bind_param(
        "sssi",
        $nombreAlmacen,
        $ubicacion,
        $observaciones,
        $idAlmacen
    );
    $queryActualizacion->execute();
    header("location: listar-almacen.php");
?>