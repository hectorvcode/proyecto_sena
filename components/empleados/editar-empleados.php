<?php
$mysqli = include_once "../database/conexion.php";
$id_empleado = $_GET["idempleado"];
$resultadoQuery = $mysqli->prepare("SELECT idempleado, 
    tipo_documento, 
    numero_documento, 
    nombres, 
    apellidos, 
    fecha_nacimiento, 
    genero, 
    ciudad_residencia, 
    observaciones
FROM empleados WHERE idempleado=?");
$resultadoQuery->bind_param("i", $id_empleado);
$resultadoQuery->execute();
$resultadoData = $resultadoQuery->get_result();
$infoEmpleado = $resultadoData->fetch_assoc();
if (!$infoEmpleado) {
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
                                    <h2>Módulo Empleados</h2>
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
                                            <h2>Registrar Empleado</h2>
                                        </div>
                                    </div>
                                    <div class="full gallery_section_inner padding_infor_info">
                                        <div class="row">



                                            <div class="container mt-5 mb-5 d-flex justify-content-center">
                                                <div class="card px-1 py-4">

                                                    <div class="row">
                                                        <div class="col-12 contenedor">

                                                            <form class="main-form" action="actualizar-empleados.php" method="POST">

                                                                <input type="hidden" name="id" id="id" value="<?php echo $id_empleado ?>">

                                                                <div class="mb-3">
                                                                    <label for="numDoc" class="form-label">Tipo Documento</label>
                                                                    <input value="<?php echo $infoEmpleado["tipo_documento"] ?>" required type="text" 
                                                                    class="form-control" name="typeDoc" id="typeDoc" placeholder="CC, TI, CE">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="numDoc" class="form-label">Número Documento</label>
                                                                    <input value="<?php echo $infoEmpleado["numero_documento"] ?>" required type="number" 
                                                                    class="form-control" name="numDoc" id="numDoc" placeholder="Unicamente números">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="nombres" class="form-label">Nombres</label>
                                                                    <input value="<?php echo $infoEmpleado["nombres"] ?>" required type="text" 
                                                                    class="form-control" name="nombres" id="nombres" placeholder="Nombres completos">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="apellidos" class="form-label">Apellidos</label>
                                                                    <input value="<?php echo $infoEmpleado["apellidos"] ?>" required type="text" 
                                                                    class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos completos">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="birthDate" class="form-label">Fecha Nacimiento</label>
                                                                    <input value="<?php echo $infoEmpleado["fecha_nacimiento"] ?>" type="date" 
                                                                    class="form-control" name="birthDate" id="birthDate" placeholder="Formato dd-mm-aaa">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label required for="genero" class="form-label">Género</label>
                                                                    <input value="<?php echo $infoEmpleado["genero"] ?>" type="text" 
                                                                    class="form-control" name="genero" id="genero">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="ciudadResidencia" class="form-label">Ciudad de Residencia</label>
                                                                    <input value="<?php echo $infoEmpleado["ciudad_residencia"] ?>" required type="text" 
                                                                    class="form-control" name="ciudadResidencia" id="ciudadResidencia">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="observaciones" class="form-label">Observaciones</label>
                                                                    <textarea value="<?php echo $infoEmpleado["observaciones"] ?>" 
                                                                    class="form-control" id="observaciones" name="observaciones" rows="3"></textarea>
                                                                </div>

                                                                <div class="mb3">
                                                                    <button class="btn btn-success">Guardar</button>
                                                                    <a class="btn btn-info" href="../loginUsuario/pagina_principal.php">Retornar</a>
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
                        <!-- footer -->
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
    <!-- calendar file css -->
    <script src="js/semantic.min.js"></script>

    <?php include_once "../common/script.php" ?>
</body>