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
                                    <h2>Módulo Despachos</h2>
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
                                            <h2>Registrar Despachos</h2>
                                        </div>
                                    </div>
                                    <div class="full gallery_section_inner padding_infor_info">
                                        <div class="row">



                                            <div class="container mt-5 mb-5 d-flex justify-content-center">
                                                <div class="card px-1 py-4">

                                                    <div class="row">
                                                        <div class="col-12 contenedor">
                                                            <form class="main-form" action="registrar-despachos.php" method="POST">                                                              
                                                                <div class="mb-3">
                                                                    <label for="idItem" class="form-label">Id Item *</label>
                                                                    <input type="number" class="form-control" name="idItem" id="idItem">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="cantidadItem" class="form-label">Cantidad Item *</label>
                                                                    <input type="number" class="form-control" name="cantidadItem" id="cantidadItem">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="fechaDespacho" class="form-label">Fecha Despacho *</label>
                                                                    <input required type="date" class="form-control" name="fechaDespacho" id="fechaDespacho">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="idVehiculo" class="form-label">Id Vehiculo *</label>
                                                                    <input type="number" class="form-control" name="idVehiculo" id="idVehiculo">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="idProyecto" class="form-label">Id Proyecto *</label>
                                                                    <input type="number" class="form-control" name="idProyecto" id="idProyecto">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="observaciones" class="form-label">Observaciones</label>
                                                                    <input type="text" class="form-control" name="observaciones" id="observaciones">
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
</body>