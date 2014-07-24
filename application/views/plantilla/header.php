<!-- start: HEADER -->
<div class="navbar navbar-inverse navbar-fixed-top">
        <!-- start: TOP NAVIGATION CONTAINER -->
        <div class="container">
                <div class="navbar-header">
                        <!-- start: RESPONSIVE MENU TOGGLER -->
                        <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                <span class="clip-list-2"></span>
                        </button>
                        <!-- end: RESPONSIVE MENU TOGGLER -->
                        <!-- start: LOGO -->
                        <a class="navbar-brand" href="<?php echo base_url(); ?>panel">
                                <img src="<?php echo base_url(); ?>img/Logo_energy_sentinel.png" alt="Logo" style="margin-top:-14px;"/>
                        </a>
                        <!-- end: LOGO -->
                </div>
                <div class="navbar-tools">
                        <!-- start: TOP NAVIGATION MENU -->
                        <ul class="nav navbar-right">


                                <!-- start: USER DROPDOWN -->
                                <li class="dropdown current-user">
                                        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                                                <span class="username">ID Cliente: <?php echo $usuario_id; ?></span>
                                                <i class="clip-chevron-down"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                                <li>
                                                        <a href="<?php echo base_url(); ?>perfil">
                                                                <i class="clip-user-2"></i>
                                                                &nbsp;Mi Perfil
                                                        </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                        <a href="<?php echo base_url(); ?>cerrarsesion">
                                                                <i class="clip-exit"></i>
                                                                &nbsp;Log Out
                                                        </a>
                                                </li>
                                        </ul>
                                </li>
                                <!-- end: USER DROPDOWN -->
                        </ul>
                        <!-- end: TOP NAVIGATION MENU -->
                </div>
        </div>
        <!-- end: TOP NAVIGATION CONTAINER -->
</div>
<!-- end: HEADER -->
