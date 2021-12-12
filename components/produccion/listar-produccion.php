<?php
$mysqli = include_once "../database/conexion.php";
$resultadoQuery = $mysqli->query("SELECT 
    idregistro, codigo_registro, fecha, hora_inicio, hora_fin, cantidad_aprobada, cantidad_rechazada, 
        temperatura_inicial, temperatura_final, cantidad_inicial_acpm, cantidad_final_acpm, 
        cantidad_inicial_asfalto, cantidad_final_asfalto, cantidad_inicial_emulsion, cantidad_final_emulsion, 
        idempleado, observaciones
    FROM registro_produccion");
$listadoProduccion = $resultadoQuery->fetch_all(MYSQLI_ASSOC);
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
                                            <h2>Listar Producción</h2>
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
                                                                        <th scope="col">Codigo Registro</th>
                                                                        <th scope="col">fecha</th>
                                                                        <th scope="col">Hora Inicio</th>
                                                                        <th scope="col">Hora Fin</th>
                                                                        <th scope="col">Cantidad Aprobada</th>
                                                                        <th scope="col">Cantidad Rechazada</th>
                                                                        <th scope="col">Temperatura Inicial</th>
                                                                        <th scope="col">Temperatura Final</th>
                                                                        <th scope="col">Cantidad Inicial ACPM</th>
                                                                        <th scope="col">Cantidad Final ACPM</th>
                                                                        <th scope="col">Cantidad Inicial Asfalto</th>
                                                                        <th scope="col">Cantidad Final Asfalto</th>
                                                                        <th scope="col">Cantidad Inicial Emulsion</th>
                                                                        <th scope="col">Cantidad Final Emulsion</th>
                                                                        <th scope="col">ID Empleado</th>
                                                                        <th scope="col">Observaciones</th>
                                                                        <th scope="col">Editar</th>
                                                                        <th scope="col">Eliminar</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    foreach ($listadoProduccion as $listadoIndividual) {
                                                                    ?>
                                                                        <tr>
                                                                            <td><?php echo $listadoIndividual["idregistro"] ?></td>
                                                                            <td><?php echo $listadoIndividual["codigo_registro"] ?></td>
                                                                            <td><?php echo $listadoIndividual["fecha"] ?></td>
                                                                            <td><?php echo $listadoIndividual["hora_inicio"] ?></td>
                                                                            <td><?php echo $listadoIndividual["hora_fin"] ?></td>
                                                                            <td><?php echo $listadoIndividual["cantidad_aprobada"] ?></td>
                                                                            <td><?php echo $listadoIndividual["cantidad_rechazada"] ?></td>
                                                                            <td><?php echo $listadoIndividual["temperatura_inicial"] ?></td>
                                                                            <td><?php echo $listadoIndividual["temperatura_final"] ?></td>
                                                                            <td><?php echo $listadoIndividual["cantidad_inicial_acpm"] ?></td>
                                                                            <td><?php echo $listadoIndividual["cantidad_final_acpm"] ?></td>
                                                                            <td><?php echo $listadoIndividual["cantidad_inicial_asfalto"] ?></td>
                                                                            <td><?php echo $listadoIndividual["cantidad_final_asfalto"] ?></td>
                                                                            <td><?php echo $listadoIndividual["cantidad_inicial_emulsion"] ?></td>
                                                                            <td><?php echo $listadoIndividual["cantidad_final_emulsion"] ?></td>
                                                                            <td><?php echo $listadoIndividual["idempleado"] ?></td>
                                                                            <td><?php echo $listadoIndividual["observaciones"] ?></td>
                                                                            <td>
                                                                                <a href="editar-produccion.php?idregistro=<?php echo $listadoIndividual["idregistro"] ?>">Editar</a>
                                                                            </td>
                                                                            <td>
                                                                                <a href="eliminar-produccion.php?idregistro=<?php echo $listadoIndividual["idregistro"] ?>">Eliminar</a>
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

