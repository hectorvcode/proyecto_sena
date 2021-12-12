<?php
    $mysqli = include_once "../database/conexion.php";
    $resultadoQuery = $mysqli->query("SELECT 
        iditem,
        codigo_item,
        descripcion,
        precio,
        cantidad,
        fecha,
        unidad_medida,
        stock_maximo,
        stock_minimo,
        observaciones,
        idalmacen,
        idregistro
    FROM inventario");
    $listadoInventario = $resultadoQuery->fetch_all(MYSQLI_ASSOC);
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
                                            <h2>Listar Inventario</h2>
                                        </div>
                                    </div>
                                    <div class="full gallery_section_inner padding_infor_info">
                                        <div class="row">




                                            <!-- table section -->
                                            <div class="col-md-12">
                                                <div class="white_shd full margin_bottom_30">

                                                    <div class="table_section padding_infor_info">
                                                        <div class="table-responsive-sm">
                                                            <table class="table table-dark table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Id</th>
                                                                        <th scope="col">Codigo Item</th>
                                                                        <th scope="col">Descripción</th>
                                                                        <th scope="col">Precio</th>
                                                                        <th scope="col">Cantidad</th>
                                                                        <th scope="col">Fecha</th>
                                                                        <th scope="col">Unidad de Medida</th>
                                                                        <th scope="col">Stock Máximo</th>
                                                                        <th scope="col">Stock Mínimo</th>
                                                                        <th scope="col">Observaciones</th>
                                                                        <th scope="col">Id Almacen</th>
                                                                        <th scope="col">Id Registro</th>
                                                                        <th scope="col">Editar</th>
                                                                        <th scope="col">Eliminar</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    foreach ($listadoInventario as $listadoIndividual) {
                                                                    ?>
                                                                        <tr>
                                                                            <td><?php echo $listadoIndividual["iditem"] ?></td>
                                                                            <td><?php echo $listadoIndividual["codigo_item"] ?></td>
                                                                            <td><?php echo $listadoIndividual["descripcion"] ?></td>
                                                                            <td><?php echo $listadoIndividual["precio"] ?></td>
                                                                            <td><?php echo $listadoIndividual["cantidad"] ?></td>
                                                                            <td><?php echo $listadoIndividual["fecha"] ?></td>
                                                                            <td><?php echo $listadoIndividual["unidad_medida"] ?></td>
                                                                            <td><?php echo $listadoIndividual["stock_maximo"] ?></td>
                                                                            <td><?php echo $listadoIndividual["stock_minimo"] ?></td>
                                                                            <td><?php echo $listadoIndividual["observaciones"] ?></td>
                                                                            <td><?php echo $listadoIndividual["idalmacen"] ?></td>
                                                                            <td><?php echo $listadoIndividual["idregistro"] ?></td>
                                                                            <td>
                                                                                <a href="editar-inventario.php?iditem=<?php echo $listadoIndividual["iditem"] ?>">Editar</a>
                                                                            </td>
                                                                            <td>
                                                                                <a href="eliminar-inventario.php?iditem=<?php echo $listadoIndividual["iditem"] ?>">Eliminar</a>
                                                                            </td>
                                                                        </tr>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- table section -->





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