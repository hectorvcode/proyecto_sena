<?php
    $mysqli = include_once "../database/conexion.php";
    $nombreProyecto = $_POST["nombreProyecto"];
    $ubicacion = $_POST["ubicacion"];
    $fechaInicio = $_POST["fechaInicio"];
    $fechaFin = $_POST["fechaFin"];
    $presupuesto = $_POST["presupuesto"];
    $kilometrajeProyecto = $_POST["kilometrajeProyecto"];
    $observaciones = $_POST["observaciones"];
    $queryInsercion=$mysqli->prepare(
        "INSERT INTO proyecto
        (
        nombre_proyecto, 
        ubicacion, 
        fecha_inicio,
        fecha_fin,
        presupuesto,
        kilometraje_proyecto,
        observaciones
        )
        VALUES
        (?,?,?,?,?,?,?)");
    $queryInsercion->bind_param(
        "ssssdds",
        $nombreProyecto, 
        $ubicacion, 
        $fechaInicio,
        $fechaFin,
        $presupuesto,
        $kilometrajeProyecto,
        $observaciones
    );
    $queryInsercion->execute();
    header("location: listar-proyecto.php");
?>