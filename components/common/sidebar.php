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
                    <i class="bi bi-truck"></i> <span>Vehiculos</span></a>
                <ul class="collapse list-unstyled" id="vehiculos">
                    <li><a href="../vehiculos/formulario-vehiculos.php">> <span>Registrar Vehiculos</span></a></li>
                    <li><a href="../vehiculos/listar-vehiculos.php">> <span>Lista Vehiculos</span></a></li>
                </ul>
            </li>

            <li>
                <a href="#produccion" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                    <i class="bi bi-building"></i> <span>Producción</span></a>
                <ul class="collapse list-unstyled" id="produccion">
                    <li><a href="../produccion/formulario-produccion.php">> <span>Registrar Producción</span></a></li>
                    <li><a href="../produccion/listar-produccion.php">> <span>Lista Producción</span></a></li>
                </ul>
            </li>

            <li>
                <a href="#inventario" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                    <i class="bi bi-building"></i> <span>Inventario</span></a>
                <ul class="collapse list-unstyled" id="inventario">
                    <li><a href="../inventario/formulario-inventario.php">> <span>Registrar Inventario</span></a></li>
                    <li><a href="../inventario/listar-inventario.php">> <span>Lista Inventario</span></a></li>
                </ul>
            </li>

            
            <li><a href="../../widgets.html"><i class="fa fa-clock-o orange_color"></i> <span>Widgets</span></a></li>

            <li>
                <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-diamond purple_color"></i> <span>Elements</span></a>
                <ul class="collapse list-unstyled" id="element">
                    <li><a href="../../general_elements.html">> <span>General Elements</span></a></li>
                    <li><a href="../../media_gallery.html">> <span>Media Gallery</span></a></li>
                    <li><a href="../../icons.html">> <span>Icons</span></a></li>
                    <li><a href="../../invoice.html">> <span>Invoice</span></a></li>
                </ul>
            </li>
            <li><a href="../../tables.html"><i class="fa fa-table purple_color2"></i> <span>Tables</span></a></li>
            <li>
                <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
                <ul class="collapse list-unstyled" id="apps">
                    <li><a href="../../email.html">> <span>Email</span></a></li>
                    <li><a href="../../calendar.html">> <span>Calendar</span></a></li>
                    <li><a href="../../media_gallery.html">> <span>Media Gallery</span></a></li>
                </ul>
            </li>
            <li><a href="../../price.html"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing Tables</span></a></li>
            <li>
                <a href="../../contact.html">
                    <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
            </li>
            <li class="active">
                <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional Pages</span></a>
                <ul class="collapse list-unstyled" id="additional_page">
                    <li>
                        <a href="../../profile.html">> <span>Profile</span></a>
                    </li>
                    <li>
                        <a href="../../project.html">> <span>Projects</span></a>
                    </li>
                    <li>
                        <a href="../../login.html">> <span>Login</span></a>
                    </li>
                    <li>
                        <a href="../../404_error.html">> <span>404 Error</span></a>
                    </li>
                </ul>
            </li>
            <li><a href="../../map.html"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
            <li><a href="../../charts.html"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a></li>
            <li><a href="../../settings.html"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li>
        </ul>
    </div>
</nav>