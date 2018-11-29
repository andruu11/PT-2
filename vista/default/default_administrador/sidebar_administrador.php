    
<!--Ventanas a modificar-->


<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="">Bienvenid@ <?php echo $_SESSION['esteusuario']; ?></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

        
    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <h4>INICIO ADMINISTRADORES</h4>
        
        </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        
        <!--BOTON DE PERFIL-->
        <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fas fa-user-circle fa-fw"></i>
            <!--no tiene notificación-->
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="../../views/views_administrador/perfil_administrador.php">Mi Perfil</a>
            <a class="dropdown-item" href="../../views/views_administrador/usuarios_administrador.php">Usuarios</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Cerrar sesión</a>
        </div>
        </li>
    </ul>

    </nav>

    <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="../../views/views_administrador/index_administrador.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>INICIO</span>
        </a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Repositorio</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Explorar</h6>
            <a class="dropdown-item" href="../../views/views_administrador/doc_acad.php">Academicos</a>
            <a class="dropdown-item" href="../../views/views_administrador/doc_didac.php">Didacticos</a>
            <!--<a class="dropdown-item" href="../../../soon.php">Activos</a>-->
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Mis repositorios</h6>
            <a class="dropdown-item" href="../../../soon.php">Ver</a>
            <a class="dropdown-item" href="../../../soon.php">Nuevo</a>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../../views/views_administrador/reportes_administrador.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Reportes</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../../../soon.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Extra</span></a>
        </li>
    </ul>

        <div id="content-wrapper">

            <div class="container-fluid">