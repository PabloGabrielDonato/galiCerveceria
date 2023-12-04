<header class="main-header " id="header">
    <nav class="navbar navbar-static-top navbar-expand-lg">
        <!-- Sidebar toggle button -->
        <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
        </button>
        <!-- search form -->
        <div class="search-form d-none d-lg-inline-block">
        </div>

        <div class="navbar-right ">
            <ul class="nav navbar-nav">
                <!-- User Account -->
                <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <!-- <img src="assets/img/user/user.png" class="user-image" alt="User Image" /> -->
                        <span class="d-none d-lg-inline-block"><?php echo $nomreUsuario . ' ' . $apellidoUsuario . ' - ' . $accesoUsuario ?></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="right-sidebar-in">
                            <a href="javascript:0"> <i class="mdi mdi-settings"></i> Setting </a>
                        </li>

                        <li class="dropdown-footer">
                            <a href="index.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>