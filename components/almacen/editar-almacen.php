<?php
$mysqli = include_once "../database/conexion.php";
$id_almacen = $_GET["idalmacen"];
$resultadoQuery = $mysqli->prepare("SELECT 
    idalmacen, 
    nombreAlmacen, 
    ubicacion, 
    observaciones
FROM almacen WHERE idalmacen=?");
$resultadoQuery->bind_param("i", $id_almacen);
$resultadoQuery->execute();
$resultadoData = $resultadoQuery->get_result();
$infoAlmacen = $resultadoData->fetch_assoc();
if (!$infoAlmacen) {
    exit("No existe información para el id que se envió");
}
?>

<?php include_once "../common/encabezado.php" ?>
<link rel="stylesheet" href="../../css/estilos.css">
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
                                    <h2>Módulo Almacén</h2>
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
                                            <h2>Registrar Almacén</h2>
                                        </div>
                                    </div>
                                    <div class="full gallery_section_inner padding_infor_info">
                                        <div class="row">



                                            <div class="container mt-5 mb-5 d-flex justify-content-center">
                                                <div class="card px-1 py-4">

                                                    <div class="row">
                                                        <div class="col-12 contenedor">

                                                            <form class="main-form" action="actualizar-almacen.php" method="POST">

                                                                <input type="hidden" name="id" id="id" value="<?php echo $id_almacen ?>">
                                                                <div class="mb-3">
                                                                    <label for="nombreAlmacen" class="form-label">Nombre Almacén *</label>
                                                                    <input value="<?php echo $infoAlmacen["nombreAlmacen"] ?>" type="text" class="form-control" name="nombreAlmacen" id="nombreAlmacen">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="ubicacion" class="form-label">Ubicación *</label>
                                                                    <input value="<?php echo $infoAlmacen["ubicacion"] ?>" type="text" class="form-control" name="ubicacion" id="ubicacion">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="observaciones" class="form-label">Observaciones</label>
                                                                    <input value="<?php echo $infoAlmacen["observaciones"] ?>" required type="text" class="form-control" name="observaciones" id="observaciones">
                                                                </div>
                                                                <small>Los campos con * son requeridos</small>
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
    <?php include_once "../common/script.php" ?>
    <!-- fancy box js -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <!-- calendar file css -->
    <script src="js/semantic.min.js"></script>
</body>