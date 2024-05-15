<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Principal</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../estilos/estilos.css">
  <script src="https://kit.fontawesome.com/34cfb03424.js" crossorigin="anonymous"></script>

  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <script src="<?php echo $URL; ?>/public/dist/js/sweetalert2.js"></script>
 <style>
  
 </style>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #0B0066;">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa-solid fa-bars" style="color: #ffffff;"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link" style="color: white;">SISTEMA DE VENTAS</a>
        </li>

      </ul>
      <div style="margin-left: auto;">
        <a href="<?php echo $URL; ?>/app/controllers/login/cerrarSession.php" class="btn btn-light"><i class="fa-solid fa-right-from-bracket"></i></a>
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #0B0066">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="<?php echo $URL; ?>/public/images/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Faith Shop</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo $URL; ?>/public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $nombre_sesion; ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->



            <li class="nav-item menu-close">
              <a href="#" class="nav-link ">
                <i class="fa-solid fa-user"></i>
                <p>
                  Usuarios
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../usuarios/index.php" class="nav-link ">
                    <i class="fa-solid fa-clipboard-list"></i>
                    <p> Lista de Usuarios</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../usuarios/crear.php" class="nav-link">
                    <i class="fa-solid fa-user-plus"></i>
                    <p>Crear Usuarios</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item menu-close">
              <a href="#" class="nav-link ">
                <i class="fa-solid fa-cart-shopping"></i>
                <p>
                  Productos
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../productos/index.php" class="nav-link ">
                    <i class="fa-solid fa-table-list"></i>
                    <p> Lista de Productos</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../productos/crear.php" class="nav-link">
                    <i class="fa-solid fa-cart-plus"></i>
                    <p>Agregar Productos</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item menu-close">
              <a href="#" class="nav-link ">
                <i class="fa-solid fa-users"></i>
                <p>
                  Clientes
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../clientes/index.php" class="nav-link ">
                    <i class="fa-solid fa-list-check"></i>
                    <p> Lista de Clientes</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../clientes/crear.php" class="nav-link">
                    <i class="fa-solid fa-person-circle-plus"></i>
                    <p>Agregar Clientes</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item menu-close">
              <a href="#" class="nav-link ">
                <i class="fa-solid fa-layer-group"></i>
                <p>
                  Categorias
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../categorias/index.php" class="nav-link ">
                    <i class="fa-solid fa-list-check"></i>
                    <p> Lista de Categorias</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../categorias/crear.php" class="nav-link">
                    <i class="fa-solid fa-folder-plus"></i>
                    <p>Agregar Categoria</p>
                  </a>
                </li>
              </ul>
            </li>


            <li class="nav-item menu-close">
              <a href="#" class="nav-link ">
                <i class="fa-solid fa-truck-field-un"></i>
                <p>
                  Proveedores
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../proveedores/index.php" class="nav-link ">
                    <i class="fa-solid fa-list-check"></i>
                    <p> Listado de Proveedores</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../proveedores/crear.php" class="nav-link">
                    <i class="fa-solid fa-person-circle-plus"></i>
                    <p>Agregar Proveedor </p>
                  </a>
                </li>
              </ul>
            </li>


            <li class="nav-item menu-close">
              <a href="#" class="nav-link ">
                <i class="fa-solid fa-gears"></i>
                <p>
                  Roles
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../roles/index.php" class="nav-link ">
                    <i class="fa-solid fa-list-ol"></i>
                    <p> Listado de Roles</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../roles/crear.php" class="nav-link">
                    <i class="fa-solid fa-square-plus"></i>
                    <p>Agregar Roles </p>
                  </a>
                </li>
              </ul>
            </li>


            <li class="nav-item menu-close">
              <a href="#" class="nav-link ">
                <i class="fa-brands fa-salesforce"></i>
                <p>
                  Ventas
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../ventas/index.php" class="nav-link ">
                    <i class="fa-solid fa-rectangle-list"></i>
                    <p> Listado de Ventas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../ventas/crear.php" class="nav-link">
                    <i class="fa-solid fa-cart-plus"></i>
                    <p>Agregar Ventas </p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item menu-close">
              <a href="#" class="nav-link ">
                <i class="fa-solid fa-shop"></i>
                <p>
                  Compras
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../compras/index.php" class="nav-link ">
                    <i class="fa-solid fa-bars-staggered"></i>
                    <p> Listado de Compras</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../compras/crear.php" class="nav-link">
                    <i class="fa-solid fa-cart-plus"></i>
                    <p>Comprar </p>
                  </a>
                </li>
              </ul>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>