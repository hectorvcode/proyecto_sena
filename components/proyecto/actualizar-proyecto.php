<?php
    $mysqli = include_once "../database/conexion.php";
    $nombreProyecto = $_POST["nombreProyecto"];
    $ubicacion = $_POST["ubicacion"];
    $fechaInicio = $_POST["fechaInicio"];
    $fechaFin = $_POST["fechaFin"];
    $presupuesto = $_POST["presupuesto"];
    $kilometrajeProyecto = $_POST["kilometrajeProyecto"];
    $observaciones = $_POST["observaciones"];
    $idProyecto = $_POST["id"];
    $queryActualizacion=$mysqli->prepare(
        "UPDATE proyecto
        SET 
            nombre_proyecto = ?, 
            ubicacion = ?, 
            fecha_inicio = ?,
            fecha_fin = ?,
            presupuesto = ?,
            kilometraje_proyecto = ?,
            observaciones = ?
        WHERE idproyecto = ?"
    );
    $queryActualizacion->bind_param(
        "ssssddsi",
        $nombreProyecto,
        $ubicacion,
        $fechaInicio,
        $fechaFin,
        $presupuesto,
        $kilometrajeProyecto,
        $observaciones,
        $idProyecto
    );
    $queryActualizacion->execute();
    header("location: listar-proyecto.php");
?>