<?php include_once "../common/encabezado.php" ?>
<link rel="stylesheet" href="usuarios.css">
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
                                    <h2>Módulo Inventario</h2>
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
                                            <h2>Registrar Inventario</h2>
                                        </div>
                                    </div>
                                    <div class="full gallery_section_inner padding_infor_info">
                                        <div class="row">



                                            <div class="container mt-5 mb-5 d-flex justify-content-center">
                                                <div class="card px-1 py-4">

                                                    <div class="row">
                                                        <div class="col-12 contenedor">
                                                            <form class="main-form" action="registrar-inventario.php" method="POST">                                                                
                                                                <div class="mb-3">
                                                                    <label for="codigoItem" class="form-label">Código Item</label>
                                                                    <input type="text" class="form-control" name="codigoItem" id="codigoItem">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="descripcion" class="form-label">Descripción</label>
                                                                    <input type="text" class="form-control" name="descripcion" id="descripcion">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="precio" class="form-label">Precio</label>
                                                                    <input required type="number" class="form-control" name="precio" id="precio">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="cantidad" class="form-label">Cantidad</label>
                                                                    <input required type="number" class="form-control" name="cantidad" id="cantidad">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="fecha" class="form-label">Fecha</label>
                                                                    <input required type="date" class="form-control" name="fecha" id="fecha">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="unidadMedida" class="form-label">Unidad de Medida</label>
                                                                    <input required type="text" class="form-control" name="unidadMedida" id="unidadMedida">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="stockMaximo" class="form-label">Stock Máximo</label>
                                                                    <input required type="number" class="form-control" name="stockMaximo" id="stockMaximo">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="stockMinimo" class="form-label">Stock Mínimo</label>
                                                                    <input required type="number" class="form-control" name="stockMinimo" id="stockMinimo">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="observaciones" class="form-label">Observaciones</label>
                                                                    <input required type="text" class="form-control" name="observaciones" id="observaciones">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="idAlmacen" class="form-label">Id Almacén</label>
                                                                    <input required type="number" class="form-control" name="idAlmacen" id="idAlmacen">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="idRegistro" class="form-label">Id Registro</label>
                                                                    <input required type="number" class="form-control" name="idRegistro" id="idRegistro">
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
    <?php include_once "../common/script.php" ?>
</body>