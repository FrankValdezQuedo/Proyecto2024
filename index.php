<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="estilos/estilos.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="public/dist/js/sweetalert2.js"></script>

</head>

<body class="">
  <div class="login-page">
    <?php
    session_start();
    if (isset($_SESSION['mensaje'])) {
      $respuesta = $_SESSION['mensaje']; ?>
      <script>
        Swal.fire({
          position: "top-end",
          icon: "error",
          title: "<?php echo $respuesta;?>",
          showConfirmButton: false,
          timer: 1500
        });
      </script>

    <?php
      unset($_SESSION['mensaje']);
    }
    ?>
    <!-- /.login-logo -->
    <div class="card card-outline card-blue">
      <div class="card-header text-center">
        <center>
          <img src="public/images/logoblack.png" width="200px">
        </center>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Ingresar Credenciales</p>

        <form action="app/controllers/login/ingreso.php" method="post">
          <div class="input-group mb-3">
            <input type="text" name="usuario" value="frank@gmail.com" class="form-control" placeholder="Usuario">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="clave" class="form-control" placeholder="Contraseña">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-12">
              <button id="btningresar" class="btn btn-blue btn-block">Ingresar</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->

  <!-- Bootstrap 4 -->
  <script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="public/dist/js/adminlte.min.js"></script>
</body>

</html>