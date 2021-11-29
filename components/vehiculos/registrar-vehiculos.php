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
    $queryInsercion=$mysqli->prepare(
        "INSERT INTO vehiculos
        (placa, marca, modelo, modeloAnio, capacidad, cantidad_combustible, idempleado,observaciones)
        VALUES
        (?,?,?,?,?,?,?,?)");
    $queryInsercion->bind_param("sssiddis",$placa,$marca,$modelo,$modeloAnio,
    $capacidad,$cantidadCombustible,$idEmpleado,$observaciones);
    $queryInsercion->execute();
    header("location: listar-vehiculos.php");
?>