<?php
    $mysqli = include_once "../database/conexion.php";
    $codigoRegistro = $_POST["codigoRegistro"];
    $fecha = $_POST["fecha"];
    $horaInicio = $_POST["horaInicio"];
    $horaFin = $_POST["horaFin"];
    $cantidadAprobada = $_POST["cantidadAprobada"];
    $cantidadRechazada = $_POST["cantidadRechazada"];
    $temperaturaInicial = $_POST["temperaturaInicial"];
    $temperaturaFinal = $_POST["temperaturaFinal"];
    $cantidadInicialAcpm = $_POST["cantidadInicialAcpm"];
    $cantidadFinalAcpm = $_POST["cantidadFinalAcpm"];
    $cantidadInicialAsfalto = $_POST["cantidadInicialAsfalto"];
    $cantidadFinalAsfalto = $_POST["cantidadFinalAsfalto"];
    $cantidadInicialEmulsion = $_POST["cantidadInicialEmulsion"];
    $cantidadFinalEmulsion = $_POST["cantidadFinalEmulsion"];
    $idEmpleado = $_POST["idEmpleado"];
    $observaciones = $_POST["observaciones"];
    $queryInsercion=$mysqli->prepare(
        "INSERT INTO registro_produccion
        (codigo_registro, fecha, hora_inicio, hora_fin, cantidad_aprobada, cantidad_rechazada, 
        temperatura_inicial, temperatura_final, cantidad_inicial_acpm, cantidad_final_acpm, 
        cantidad_inicial_asfalto, cantidad_final_asfalto, cantidad_inicial_emulsion, cantidad_final_emulsion, 
        idempleado, observaciones)
        VALUES
        (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $queryInsercion->bind_param("ssssddddddddddis",$codigoRegistro,$fecha,$horaInicio,$horaFin,$cantidadAprobada,
    $cantidadRechazada,$temperaturaInicial,$temperaturaFinal, $cantidadInicialAcpm, $cantidadFinalAcpm, 
    $cantidadInicialAsfalto, $cantidadFinalAsfalto, $cantidadInicialEmulsion, $cantidadFinalEmulsion, 
    $idEmpleado, $observaciones); 
    $queryInsercion->execute();
    header("location: listar-produccion.php");
