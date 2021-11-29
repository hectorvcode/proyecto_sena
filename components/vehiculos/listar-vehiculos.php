<?php
    $mysqli = include_once "../database/conexion.php";
    $resultadoQuery = $mysqli->query("SELECT idvehiculo, placa, marca, modelo, 
    modeloAnio, capacidad, cantidad_combustible, observaciones, idempleado
    FROM vehiculos");
    $listadoVehiculos = $resultadoQuery->fetch_all(MYSQLI_ASSOC);
?>

<?php include_once "../common/encabezado.php" ?>
<link rel="stylesheet" href="vehiculos.css">
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
                                            <h2>Listar Vehiculos</h2>
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
                                                                        <th scope="col">Placa</th>
                                                                        <th scope="col">Marca</th>
                                                                        <th scope="col">Modelo</th>
                                                                        <th scope="col">M Año</th>
                                                                        <th scope="col">Capacidad</th>
                                                                        <th scope="col">Combustible</th>
                                                                        <th scope="col">Observaciones</th>
                                                                        <th scope="col">Id Empleado</th>
                                                                        <th scope="col">Editar</th>
                                                                        <th scope="col">Eliminar</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    foreach ($listadoVehiculos as $listadoIndividual) {
                                                                    ?>
                                                                        <tr>
                                                                            <td><?php echo $listadoIndividual["idvehiculo"] ?></td>
                                                                            <td><?php echo $listadoIndividual["placa"] ?></td>
                                                                            <td><?php echo $listadoIndividual["marca"] ?></td>
                                                                            <td><?php echo $listadoIndividual["modelo"] ?></td>
                                                                            <td><?php echo $listadoIndividual["modeloAnio"] ?></td>
                                                                            <td><?php echo $listadoIndividual["capacidad"] ?></td>
                                                                            <td><?php echo $listadoIndividual["cantidad_combustible"] ?></td>
                                                                            <td><?php echo $listadoIndividual["observaciones"] ?></td>
                                                                            <td><?php echo $listadoIndividual["idempleado"] ?></td>
                                                                            <td>
                                                                                <a href="editar-vehiculos.php?idvehiculo=<?php echo $listadoIndividual["idvehiculo"] ?>">Editar</a>
                                                                            </td>
                                                                            <td>
                                                                                <a href="eliminar-vehiculos.php?idvehiculo=<?php echo $listadoIndividual["idvehiculo"] ?>">Eliminar</a>
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