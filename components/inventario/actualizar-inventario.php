<?php
    $mysqli = include_once "../database/conexion.php";
    $idItem = $_POST["id"];
    $codigoItem = $_POST["codigoItem"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $cantidad = $_POST["cantidad"];
    $fecha = $_POST["fecha"];
    $unidadMedida = $_POST["unidadMedida"];
    $stockMaximo = $_POST["stockMaximo"];
    $stockMinimo = $_POST["stockMinimo"];
    $observaciones = $_POST["observaciones"];
    $idAlmacen = $_POST["idAlmacen"];
    $idRegistro = $_POST["idRegistro"];
    $queryActualizacion=$mysqli->prepare(
        "UPDATE inventario
        SET 
        codigo_item = ?,
        descripcion = ?,
        precio = ?,
        cantidad = ?,
        fecha = ?,
        unidad_medida = ?,
        stock_maximo = ?,
        stock_minimo = ?,
        observaciones = ?,
        idalmacen = ?,
        idregistro = ?
        WHERE iditem = ?"
    );
    $queryActualizacion->bind_param(
        "ssddssddsiii",
        $codigoItem,
        $descripcion,
        $precio,
        $cantidad,
        $fecha,
        $unidadMedida,
        $stockMaximo,
        $stockMinimo,
        $observaciones,
        $idAlmacen,
        $idRegistro,
        $idItem
    );
    $queryActualizacion->execute();
    header("location: listar-inventario.php");
?>