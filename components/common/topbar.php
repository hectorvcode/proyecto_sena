<!-- <?php
session_start();
if (isset($_SESSION['nombreUsuario'])) {
    $usuarioInicio = $_SESSION['nombreUsuario'];
} else {
    header('location:index.php');
}
?> -->




<div class="topbar">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="full">
            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                <div class="logo_section" style="width:80%; margin: 0 auto;">
                    <a href="../loginUsuario/index.php"><img class="img-responsive" src="../../images/logo/latincoLogo.png" alt="#" /></a>
                </div>
            <!-- <div class="right_topbar">
                <div class="icon_info">
                    <ul>
                        <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                        <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                    </ul>
                    <ul class="user_profile_dd">
                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" 
                            src="../../images/layout_img/user_img.jpg" alt="#" /><span class="name_user"><?=$usuarioInicio?></span></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="../../profile.html">My Profile</a>
                                <a class="dropdown-item" href="../../settings.html">Settings</a>
                                <a class="dropdown-item" href="../../help.html">Help</a>
                                <a class="dropdown-item" href="../common/logout.php">Cerrar Sesión</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> -->
        </div>
    </nav>
</div>