<?php
    $mysqli = include_once "../database/conexion.php";
    $placa = $_POST["placa"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $modeloAnio = $_POST["modeloAnio"];
    $capacidad = $_POST["capacidad"];
    $cantidadCombustible = $_POST["cantidadCombustible"];
    $idEmpleado = $_POST["idEmpleado"];
    $observaciones = $_POST["observaciones"];
    $idVehiculo = $_POST["id"];
    $queryActualizacion=$mysqli->prepare(
        "UPDATE vehiculos
        SET idvehiculo = ?, placa = ?, marca = ?, 
        modelo = ?, modeloAnio = ?, capacidad = ?, 
        cantidad_combustible = ?, idempleado = ?, 
        observaciones = ?
        WHERE idvehiculo = ?"
    );
    $queryActualizacion->bind_param("sssiddisi",$placa,$marca,$modelo,$modeloAnio,
    $capacidad,$cantidadCombustible,$idEmpleado,$observaciones,$idVehiculo);
    $queryActualizacion->execute();
    header("location: listar-vehiculos.php");
?>