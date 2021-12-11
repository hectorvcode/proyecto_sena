<?php
session_start();
if (isset($_SESSION['nombreUsuario'])) {
    $usuarioInicio = $_SESSION['nombreUsuario'];
} else {
    header('location: ../loginUsuario/index.php');
}
?>

<nav id="sidebar">
    <div class="sidebar_blog_1">
        <div class="sidebar-header">
            <div class="logo_section">
                <a href="index.html"><img class="logo_icon img-responsive" src="../../images/logo/latinlogo.png" alt="#" /></a>
            </div>
        </div>
        <div class="sidebar_user_info">
            <div class="icon_setting"></div>
            <div class="user_profle_side">
                <div class="user_img"><img class="img-responsive" src="../../images/layout_img/user_img.jpg" alt="#" /></div>
                <div class="user_info">
                    <h6><?=$usuarioInicio?></h6>
                    <p><span class="online_animation"></span> Online</p>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar_blog_2">
        <h4>General</h4>
        <ul class="list-unstyled components">
            <li class="active">
                <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                <ul class="collapse list-unstyled" id="dashboard">
                    <li>
                        <a href="../loginUsuario/principal.php">> <span>Main Page</span></a>
                    </li>
                </ul>
            </li>


            <li>
                <a href="#usuarios" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                    <i class="bi bi-person-workspace"></i> <span>Usuarios</span></a>
                <ul class="collapse list-unstyled" id="usuarios">
                    <li><a href="../usuarios/formulario-usuarios.php">> <span>Registrar Usuarios</span></a></li>
                    <li><a href="../usuarios/listar-usuarios.php">> <span>Lista Usuarios</span></a></li>
                </ul>
            </li>


            <li>
                <a href="#empleados" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                    <i class="bi bi-people-fill"></i> <span>Empleados</span></a>
                <ul class="collapse list-unstyled" id="empleados">
                    <li><a href="../empleados/formulario-empleados.php">> <span>Registrar Empleado</span></a></li>
                    <li><a href="../empleados/listar-empleados.php">> <span>Lista Empleados</span></a></li>
                </ul>
            </li>

            <li>
                <a href="#vehiculos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                    <i class="bi bi-truck purple_color2"></i> <span>Vehiculos</span></a>
                <ul class="collapse list-unstyled" id="vehiculos">
                    <li><a href="../vehiculos/formulario-vehiculos.php">> <span>Registrar Vehiculos</span></a></li>
                    <li><a href="../vehiculos/listar-vehiculos.php">> <span>Lista Vehiculos</span></a></li>
                </ul>
            </li>

            <li>
                <a href="#produccion" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                    <i class="bi bi-building blue2_color"></i> <span>Producción</span></a>
                <ul class="collapse list-unstyled" id="produccion">
                    <li><a href="../produccion/formulario-produccion.php">> <span>Registrar Producción</span></a></li>
                    <li><a href="../produccion/listar-produccion.php">> <span>Lista Producción</span></a></li>
                </ul>
            </li>

            <li>
                <a href="#inventario" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                    <i class="bi bi-minecart-loaded red_color"></i> <span>Inventario</span></a>
                <ul class="collapse list-unstyled" id="inventario">
                    <li><a href="../inventario/formulario-inventario.php">> <span>Registrar Inventario</span></a></li>
                    <li><a href="../inventario/listar-inventario.php">> <span>Lista Inventario</span></a></li>
                </ul>
            </li>

            <li>
                <a href="#almacen" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                    <i class="bi bi-shop-window yellow_color"></i> <span>Almacén</span></a>
                <ul class="collapse list-unstyled" id="almacen">
                    <li><a href="../almacen/formulario-almacen.php">> <span>Registrar Almacén</span></a></li>
                    <li><a href="../almacen/listar-almacen.php">> <span>Lista Almacén</span></a></li>
                </ul>
            </li>

            <li>
                <a href="#proyecto" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                    <i class="bi bi-clipboard-data green_color"></i> <span>Proyecto</span></a>
                <ul class="collapse list-unstyled" id="proyecto">
                    <li><a href="../proyectos/formulario-proyecto.php"> <span>Registrar Proyecto</span></a></li>
                    <li><a href="../proyectos/listar-proyecto.php"> <span>Lista Proyecto</span></a></li>
                </ul>
            </li>

            <li>
                <a href="#despacho" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                    <i class="bi bi-basket2"></i> <span>Despacho</span></a>
                <ul class="collapse list-unstyled" id="despacho">
                    <li><a href="../despachos/formulario-despacho.php">> <span>Registrar Despachos</span></a></li>
                    <li><a href="../despachos/listar-despacho.php">> <span>Lista Despachos</span></a></li>
                </ul>
            </li>

            <li>
                <a href="../../logout.php" aria-expanded="false"> 
                    <i class="fa fa-cog yellow_color"></i> <span>Logout</span></a>
            </li>

        </ul>
    </div>
</nav>