<?php
    $mysqli = include_once "../database/conexion.php";
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
    $queryInsercion=$mysqli->prepare(
        "INSERT INTO inventario
        (codigo_item,
        descripcion,
        precio,
        cantidad,
        fecha,
        unidad_medida,
        stock_maximo,
        stock_minimo,
        observaciones,
        idalmacen,
        idregistro)
        VALUES
        (?,?,?,?,?,?,?,?,?,?,?)");
    $queryInsercion->bind_param("ssddssddsii",
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
        $idRegistro);
    $queryInsercion->execute();
    header("location: listar-inventario.php");
?>