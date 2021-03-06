<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MI APP</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="/assets/plugins/fullcalendar/main.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/css/adminlte.min.css">

  <link rel="stylesheet" type="text/css" href="https:/cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/estilo.css"> 
  <link rel="stylesheet" type="text/css" href="https:/cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">

<!-- Recargar DataTable -->
<script type="text/javascript">
  var TablePacientes=null;

</script>  

</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background: #11B3EB;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="escritorio.php" class="nav-link">Inicio</a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu 
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start 
            <div class="media">
              <img src="/assets/img/3.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End 
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start 
            <div class="media">
              <img src="/assets/img/4.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End 
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start 
            <div class="media">
              <img src="/assets/img/5.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End 
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu 
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      -->


      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      

      <!-- Nav Item - User Information-->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link " href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="img-profile rounded-circle d-none d-lg-inline text-gray-600 small" style="height: 27px;" src="assets/img/user.png">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["s_usuario"];?></span>
          <i class="fas fa-door-closed"></i>

        </a>
         <!-- Dropdown - User Information --> 
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
          </a>
          <a class="dropdown-item" href="#">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            Settings
          </a>
          <a class="dropdown-item" href="#">
            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
            Activity Log
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Cerrar Sesi??n
          </a>
        </div>
      </li>
      

    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4" style="background: #03435A;">
    <!-- Brand Logo -->
    <a href="../index3.html" class="brand-link">
      <img src="/assets/img/2.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light" style="color:white;">Nephro Care</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/assets/img/121.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" style="color:white">Alain Peralta</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item" id="login-form-btn">
            <a href="escritorio.php" class="nav-link">
              <i class="nav-icon fas fa-chalkboard"></i>
              <p>
                Escritorio
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="home.php" class="nav-link">
              <i class="nav-icon  fas fa-users"></i>
              <p>
                Pacientes
              </p>
            </a>
          </li>       
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-clinic-medical"></i>
              <p>
                Clinica
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="home.conf.php" class="nav-link">
                  <i class="fas fa-cog nav-icon"></i>
                  <p>Configuraci??n</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="home.serv.php" class="nav-link">
                  <i class="fas fa-praying-hands nav-icon"></i>
                  <p>Servicios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="home.pers.php" class="nav-link">
                  <i class="fas fa-pump-medical nav-icon"></i>
                  <p>Personal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="home.perm.php" class="nav-link">
                  <i class="fas fa-hands-helping nav-icon"></i>
                  <p>Permisos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="home.diag.php" class="nav-link">
                  <i class="  fas fa-notes-medical nav-icon"></i>
                  <p>Diagnostico</p>
                </a>
                  
              </li>
            </ul>
          </li>
          <!-- Boton desplegble
          <div class="desplegable">
            <button class="boton" id="des">Clinica</button>
            <div class="links">
              <a href="#">Lin1</a>
              <a href="#">Lin2</a>
              <a href="#">Lin3</a>
            </div>
          </div>
          -->
           <li class="nav-item">
            <a href="home.aten.php" class="nav-link">
              <i class="nav-icon fas fa-stethoscope"></i>
              <p>
                Atencion
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="triaje.php" class="nav-link">
              <i class="nav-icon fas fa-folder-open"></i>
              <p>
                Triaje
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-hand-holding-heart"></i>
              <p>
                Plan de Atencion
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Consultas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item mr-3">
                <a href="#" class="nav-link">
                  <i class="fas fa-dollar-sign nav-icon"></i>
                  <p>Pagos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-book-medical nav-icon"></i>
                  <p>Historias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="contactos.php" class="nav-link">
                  <i class="fas fa-address-book nav-icon"></i>
                  <p>Contactos</p>
                </a>
              </li>
            </ul>
            </li>  

           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plus-circle"></i>
              <p>
                Ayuda
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-question-circle"></i>
              <p>
                Acerca De...
              </p>
            </a>
          </li>
                   
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>