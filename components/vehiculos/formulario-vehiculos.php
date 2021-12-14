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
                                    <h2>Módulo Vehiculos</h2>
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
                                            <h2>Registrar Vehiculo</h2>
                                        </div>
                                    </div>
                                    <div class="full gallery_section_inner padding_infor_info">
                                        <div class="row">



                                            <div class="container mt-5 mb-5 d-flex justify-content-center">
                                                <div class="card px-1 py-4">

                                                    <div class="row">
                                                        <div class="col-12 contenedor">
                                                            <form class="main-form" action="registrar-vehiculos.php" method="POST">                                                                
                                                                <div class="mb-3">
                                                                    <label for="placa" class="form-label">Placa *</label>
                                                                    <input required type="text" class="form-control" name="placa" id="placa" placeholder="Número de placa">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="marca" class="form-label">Marca *</label>
                                                                    <input required type="text" class="form-control" name="marca" id="marca" placeholder="Marca de vehiculo">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="modelo" class="form-label">Modelo *</label>
                                                                    <input required type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo de vehiculo">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="modeloAnio" class="form-label">Modelo Año *</label>
                                                                    <input required type="number" class="form-control" name="modeloAnio" id="modeloAnio" placeholder="Año de vehiculo">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="capacidad" class="form-label">Capacidad *</label>
                                                                    <input required type="number" class="form-control" name="capacidad" id="capacidad" placeholder="Capacidad carga de vehiculo">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="cantidadCombustible" class="form-label">Cantidad Combustible *</label>
                                                                    <input required type="number" class="form-control" name="cantidadCombustible" id="cantidadCombustible" placeholder="Cantidad combustible suministrado">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="idEmpleado" class="form-label">Id Empleado *</label>
                                                                    <input required type="number" class="form-control" name="idEmpleado" id="idEmpleado" placeholder="Id Empleado (tabla)">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="observaciones" class="form-label">Observaciones</label>
                                                                    <input required type="text" class="form-control" name="observaciones" id="observaciones">
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