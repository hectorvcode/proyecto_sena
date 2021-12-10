<?php
    $mysqli = include_once "../database/conexion.php";
    $nombreAlmacen = $_POST["nombreAlmacen"];
    $ubicacion = $_POST["ubicacion"];
    $observaciones = $_POST["observaciones"];
    $queryInsercion=$mysqli->prepare(
        "INSERT INTO almacen
        (nombreAlmacen, ubicacion, observaciones)
        VALUES
        (?,?,?)
    ");
    $queryInsercion->bind_param("sss",$nombreAlmacen,$ubicacion,$observaciones);
    $queryInsercion->execute();
    header("location: listar-almacen.php");
?>