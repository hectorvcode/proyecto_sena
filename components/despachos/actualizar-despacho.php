<?php
    $mysqli = include_once "../database/conexion.php";
    $idItem = $_POST["idItem"];
    $cantidadItem = $_POST["cantidadItem"];
    $fechaDespacho = $_POST["fechaDespacho"];
    $idVehiculo = $_POST["idVehiculo"];
    $idProyecto = $_POST["idProyecto"];
    $observaciones = $_POST["observaciones"];
    $idDespacho = $_POST["id"];
    $queryActualizacion=$mysqli->prepare(
        "UPDATE despacho
        SET 
        iditem = ?,
        cantidad_item = ?,
        fecha_despacho = ?,
        idvehiculo = ?,
        idproyecto = ?,
        observaciones = ?
        WHERE iddespacho = ?"
    );
    $queryActualizacion->bind_param(
        "idsiisi",
        $idItem,
        $cantidadItem,
        $fechaDespacho,
        $idVehiculo,
        $idProyecto,
        $observaciones,
        $idDespacho
    );
    $queryActualizacion->execute();
    header("location: listar-despacho.php");
?>