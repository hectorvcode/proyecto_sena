<?php
    $mysqli = include_once "../database/conexion.php";
    $idItem = $_POST["idItem"];
    $cantidadItem = $_POST["cantidadItem"];
    $fechaDespacho = $_POST["fechaDespacho"];
    $idVehiculo = $_POST["idVehiculo"];
    $idProyecto = $_POST["idProyecto"];
    $observaciones = $_POST["observaciones"];
    $queryInsercion=$mysqli->prepare(
        "INSERT INTO despacho
        (
            iditem, 
            cantidad_item, 
            fecha_despacho,
            idvehiculo,
            idproyecto,
            observaciones
        )
        VALUES
        (?,?,?,?,?,?)");
    $queryInsercion->bind_param(
        "idsiis",
        $idItem,
        $cantidadItem,
        $fechaDespacho,
        $idVehiculo,
        $idProyecto,
        $observaciones
    );
    $queryInsercion->execute();
    header("location: listar-despachos.php");
?>