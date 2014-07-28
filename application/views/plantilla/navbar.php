<div class="navbar-content">
        <!-- start: SIDEBAR -->
        <div class="main-navigation navbar-collapse collapse">
                <!-- start: MAIN MENU TOGGLER BUTTON -->
                <div class="navigation-toggler">
                        <i class="clip-chevron-left"></i>
                        <i class="clip-chevron-right"></i>
                </div>
                <!-- end: MAIN MENU TOGGLER BUTTON -->
                <!-- start: MAIN NAVIGATION MENU -->
                <ul class="main-navigation-menu">
                        <?php 
                        if ($dashboard==1){
                            echo '<li class="active open">';
                        } else {
                            echo '<li>';
                        }
                        ?>
                                <a href="<?php echo base_url(); ?>panel"><i class="clip-home-3"></i>
                                        <span class="title"> Dashboard </span>
                                        <?php 
                                        if ($dashboard==1){
                                            echo '<span class="selected"></span>';
                                        } 
                                        ?>                                        
                                </a>
                        </li>
                        <?php 
                        if ($menus==1){
                            echo '<li class="active open">';
                        } else {
                            echo '<li>';
                        }
                        ?>
                                <a href="<?php echo base_url(); ?>menus"><i class="clip-list-4"></i>
                                        <span class="title"> Menús </span>
                                        <?php 
                                        if ($menus==1){
                                            echo '<span class="selected"></span>';
                                        } 
                                        ?>                                        
                                </a>
                        </li>
                        <?php 
                        if ($clientes==1){
                            echo '<li class="active open">';
                        } else {
                            echo '<li>';
                        }
                        ?>
                                <a href="<?php echo base_url(); ?>clientes"><i class="clip-home-2"></i>
                                        <span class="title"> Clientes </span>
                                        <?php 
                                        if ($clientes==1){
                                            echo '<span class="selected"></span>';
                                        } 
                                        ?>  
                                </a>
                        </li>
                        <?php 
                        if ($usuarios==1){
                            echo '<li class="active open">';
                        } else {
                            echo '<li>';
                        }
                        ?>
                                <a href="<?php echo base_url(); ?>usuarios"><i class="clip-user"></i>
                                        <span class="title"> Usuarios </span>
                                        <?php 
                                        if ($usuarios==1){
                                            echo '<span class="selected"></span>';
                                        } 
                                        ?>  
                                </a>
                        </li>
                        <?php 
                        if ($grafico==1){
                            echo '<li class="active open">';
                        } else {
                            echo '<li>';
                        }
                        ?>
                                <a href="<?php echo base_url(); ?>grafico"><i class="clip-bars"></i>
                                        <span class="title"> Gráfico </span>
                                        <?php 
                                        if ($grafico==1){
                                            echo '<span class="selected"></span>';
                                        } 
                                        ?>  
                                </a>
                        </li>
                        <?php 
                        if ($contadores==1){
                            echo '<li class="active open">';
                        } else {
                            echo '<li>';
                        }
                        ?>
                                <a href="javascript:void(0)"><i class="clip-cog-2"></i>
                                        <span class="title"> Contadores </span><i class="icon-arrow"></i>
                                        <span class="selected"></span>
                                </a>
                                <ul class="sub-menu">
                                        <li>
                                                <a href="<?php echo base_url(); ?>menus">
                                                        <span class="title"> Contador 1 </span>
                                                </a>
                                        </li>
                                        <li>
                                                <a href="<?php echo base_url(); ?>menus">
                                                        <span class="title"> Contador2 </span>
                                                </a>
                                        </li>
                                        <li>
                                                <a href="<?php echo base_url(); ?>menus">
                                                        <span class="title"> Contador 3 </span>
                                                </a>
                                        </li>
                                        <li>
                                                <a href="<?php echo base_url(); ?>menus">
                                                        <span class="title"> Contador 4 </span>
                                                </a>
                                        </li>                                        
                                </ul>
                        </li>



                </ul>
                <!-- end: MAIN NAVIGATION MENU -->
        </div>
        <!-- end: SIDEBAR -->
</div>
<!-- start: MAIN CONTAINER -->
<div class="main-container">