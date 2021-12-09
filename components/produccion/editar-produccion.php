<?php
$mysqli = include_once "../database/conexion.php";
$id_registro = $_GET["idregistro"];
$resultadoQuery = $mysqli->prepare("SELECT 
    idregistro, 
    codigo_registro, 
    fecha, 
    hora_inicio, 
    hora_fin, 
    cantidad_aprobada, 
    cantidad_rechazada, 
    temperatura_inicial, 
    temperatura_final, 
    cantidad_inicial_acpm, 
    cantidad_final_acpm, 
    cantidad_inicial_asfalto, 
    cantidad_final_asfalto, 
    cantidad_inicial_emulsion, 
    cantidad_final_emulsion, 
    idempleado, 
    observaciones
FROM registro_produccion WHERE idregistro=?");
$resultadoQuery->bind_param("i", $id_registro);
$resultadoQuery->execute();
$resultadoData = $resultadoQuery->get_result();
$infoProduccion = $resultadoData->fetch_assoc();
if (!$infoProduccion) {
    exit("No existe información para el id que se envió");
}
?>

<?php include_once "../common/encabezado.php" ?>
<link rel="stylesheet" href="empleados.css">
</head>

<body class="inner_page media_gallery">
    <div class="full_container">
        <div class="inner_container">


            <!-- Sidebar  -->
            <?php include_once "../common/sidebar.php" ?>
            <!-- end sidebar -->


            <!-- right content -->
            <div id="content">


                <!-- topbar -->
                <?php include_once "../common/topbar.php" ?>
                <!-- end topbar -->


                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>Módulo Producción</h2>
                                </div>
                            </div>
                        </div>
                        <!-- row -->
                        <div class="row column4 graph">
                            <!-- Gallery section -->
                            <div class="col-md-12">
                                <div class="white_shd full margin_bottom_30">
                                    <div class="full graph_head">
                                        <div class="heading1 margin_0">
                                            <h2>Registrar Producción</h2>
                                        </div>
                                    </div>
                                    <div class="full gallery_section_inner padding_infor_info">
                                        <div class="row">



                                            <div class="container mt-5 mb-5 d-flex justify-content-center">
                                                <div class="card px-1 py-4">

                                                    <div class="row">
                                                        <div class="col-12 contenedor">
                                                            <form class="main-form" action="actualizar-produccion.php" method="POST">

                                                            <input type="hidden" name="id" id="id" value="<?php echo $id_registro ?>">

                                                                <div class="mb-3">
                                                                    <label for="codigoRegistro" class="form-label">Código Registro</label>
                                                                    <input value="<?php echo $infoProduccion["codigo_registro"] ?>" required type="text" class="form-control" name="codigoRegistro" id="codigoRegistro" placeholder="código registro interno">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="fecha" class="form-label">Fecha</label>
                                                                    <input value="<?php echo $infoProduccion["fecha"] ?>" required type="date" class="form-control" name="fecha" id="fecha">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="horaInicio" class="form-label">Hora Inicio</label>
                                                                    <input value="<?php echo $infoProduccion["hora_inicio"] ?>" required type="time" class="form-control" name="horaInicio" id="horaInicio">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="horaFin" class="form-label">Hora Finalización</label>
                                                                    <input value="<?php echo $infoProduccion["hora_fin"] ?>" required type="time" class="form-control" name="horaFin" id="horaFin">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="cantidadAprobada" class="form-label">Cantidad Aprobada</label>
                                                                    <input value="<?php echo $infoProduccion["cantidad_aprobada"] ?>" type="number" class="form-control" name="cantidadAprobada" id="cantidadAprobada">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="cantidadRechazada" class="form-label">Cantidad Rechazada</label>
                                                                    <input value="<?php echo $infoProduccion["cantidad_rechazada"] ?>" type="number" class="form-control" name="cantidadRechazada" id="cantidadRechazada">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="temperaturaInicial" class="form-label">Temperatura Inicial</label>
                                                                    <input value="<?php echo $infoProduccion["temperatura_inicial"] ?>" required type="number" class="form-control" name="temperaturaInicial" id="temperaturaInicial">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="temperaturaFinal" class="form-label">Temperatura Final</label>
                                                                    <input value="<?php echo $infoProduccion["temperatura_final"] ?>" required type="number" class="form-control" name="temperaturaFinal" id="temperaturaFinal">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="cantidadInicialAcpm" class="form-label">Cantidad Inicial ACPM</label>
                                                                    <input value="<?php echo $infoProduccion["cantidad_inicial_acpm"] ?>" required type="number" class="form-control" name="cantidadInicialAcpm" id="cantidadInicialAcpm">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="cantidadFinalAcpm" class="form-label">Cantidad Final ACPM</label>
                                                                    <input value="<?php echo $infoProduccion["cantidad_final_acpm"] ?>" required type="number" class="form-control" name="cantidadFinalAcpm" id="cantidadFinalAcpm">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="cantidadInicialAsfalto" class="form-label">Cantidad Inicial Asfalto</label>
                                                                    <input value="<?php echo $infoProduccion["cantidad_inicial_asfalto"] ?>" required type="number" class="form-control" name="cantidadInicialAsfalto" id="cantidadInicialAsfalto">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="cantidadFinalAsfalto" class="form-label">Cantidad Final Asfalto</label>
                                                                    <input value="<?php echo $infoProduccion["cantidad_final_asfalto"] ?>" required type="number" class="form-control" name="cantidadFinalAsfalto" id="cantidadFinalAsfalto">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="cantidadInicialEmulsion" class="form-label">Cantidad Inicial Emulsion</label>
                                                                    <input value="<?php echo $infoProduccion["cantidad_inicial_emulsion"] ?>" required type="number" class="form-control" name="cantidadInicialEmulsion" id="cantidadInicialEmulsion">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="cantidadFinalEmulsion" class="form-label">Cantidad Final Emulsion</label>
                                                                    <input value="<?php echo $infoProduccion["cantidad_final_emulsion"] ?>" required type="number" class="form-control" name="cantidadFinalEmulsion" id="cantidadFinalEmulsion">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="idEmpleado" class="form-label">ID Empleado</label>
                                                                    <input value="<?php echo $infoProduccion["idempleado"] ?>" required type="number" class="form-control" name="idEmpleado" id="idEmpleado">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="observaciones" class="form-label">Observaciones</label>
                                                                    <input value="<?php echo $infoProduccion["observaciones"] ?>" type="text" class="form-control" id="observaciones" name="observaciones">
                                                                </div>

                                                                <div class="mb3">
                                                                    <button class="btn btn-success">Guardar</button>
                                                                    <a class="btn btn-info" href="../loginUsuario/principal.php">Retornar</a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>




                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <?php include_once "../common/pie.php" ?>

                    </div>
                    <!-- end dashboard inner -->
                </div>
            </div>
            <!-- model popup -->
            <!-- The Modal -->
            <?php include_once "../common/modal.php" ?>
            <!-- end model popup -->
        </div>
    </div>
    <?php include_once "../common/script.php" ?>
</body>