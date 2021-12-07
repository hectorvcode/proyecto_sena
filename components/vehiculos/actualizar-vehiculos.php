<?php
    $mysqli = include_once "../database/conexion.php";
    $idVehiculo = $_POST["id"];
    $placa = $_POST["placa"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $modeloAnio = $_POST["modeloAnio"];
    $capacidad = $_POST["capacidad"];
    $cantidadCombustible = $_POST["cantidadCombustible"];
    $observaciones = $_POST["observaciones"];
    $idEmpleado = $_POST["idEmpleado"];
    $queryActualizacion=$mysqli->prepare(
        "UPDATE vehiculos
        SET placa = ?, marca = ?, 
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