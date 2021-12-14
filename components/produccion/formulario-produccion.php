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
                                                            <form class="main-form" action="registrar-produccion.php" method="POST">

                                                                <div class="mb-3">
                                                                    <label for="codigoRegistro" class="form-label">Código Registro *</label>
                                                                    <input required type="text" class="form-control" name="codigoRegistro" id="codigoRegistro" placeholder="código registro interno">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="fecha" class="form-label">Fecha *</label>
                                                                    <input required type="date" class="form-control" name="fecha" id="fecha">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="horaInicio" class="form-label">Hora Inicio *</label>
                                                                    <input required type="time" class="form-control" name="horaInicio" id="horaInicio">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="horaFin" class="form-label">Hora Finalización *</label>
                                                                    <input required type="time" class="form-control" name="horaFin" id="horaFin">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="cantidadAprobada" class="form-label">Cantidad Aprobada *</label>
                                                                    <input type="number" class="form-control" name="cantidadAprobada" id="cantidadAprobada">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="cantidadRechazada" class="form-label">Cantidad Rechazada *</label>
                                                                    <input type="number" class="form-control" name="cantidadRechazada" id="cantidadRechazada">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="temperaturaInicial" class="form-label">Temperatura Inicial *</label>
                                                                    <input required type="number" class="form-control" name="temperaturaInicial" id="temperaturaInicial">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="temperaturaFinal" class="form-label">Temperatura Final *</label>
                                                                    <input required type="number" class="form-control" name="temperaturaFinal" id="temperaturaFinal">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="cantidadInicialAcpm" class="form-label">Cantidad Inicial ACPM *</label>
                                                                    <input required type="number" class="form-control" name="cantidadInicialAcpm" id="cantidadInicialAcpm">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="cantidadFinalAcpm" class="form-label">Cantidad Final ACPM *</label>
                                                                    <input required type="number" class="form-control" name="cantidadFinalAcpm" id="cantidadFinalAcpm">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="cantidadInicialAsfalto" class="form-label">Cantidad Inicial Asfalto *</label>
                                                                    <input required type="number" class="form-control" name="cantidadInicialAsfalto" id="cantidadInicialAsfalto">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="cantidadFinalAsfalto" class="form-label">Cantidad Final Asfalto *</label>
                                                                    <input required type="number" class="form-control" name="cantidadFinalAsfalto" id="cantidadFinalAsfalto">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="cantidadInicialEmulsion" class="form-label">Cantidad Inicial Emulsion *</label>
                                                                    <input required type="number" class="form-control" name="cantidadInicialEmulsion" id="cantidadInicialEmulsion">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="cantidadFinalEmulsion" class="form-label">Cantidad Final Emulsion *</label>
                                                                    <input required type="number" class="form-control" name="cantidadFinalEmulsion" id="cantidadFinalEmulsion">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="idEmpleado" class="form-label">ID Empleado *</label>
                                                                    <input required type="number" class="form-control" name="idEmpleado" id="idEmpleado">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="observaciones" class="form-label">Observaciones</label>
                                                                    <input type="text" class="form-control" id="observaciones" name="observaciones">
                                                                </div>
                                                                <small>Los campos con * son requeridos</small>
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