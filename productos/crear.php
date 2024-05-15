<?php
include("../app/config.php");
include("../layout/parte1.php");

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header ">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">

        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-blue">
            <div class="card-header">
              <h3 class="card-title">Llenar datos</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
            </div>

            <div class="card-body" style="display: block;">
              <div class="row">
                <div class="col-md-12">

                  <form action="../app/controllers/almacen/create.php" method="post" enctype="multipart/form-data">

                    <div class="row">
                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="">Código:</label>
                              <input type="text" class="form-control" value="P-00004" disabled="">
                              <input type="text" name="codigo" value="P-00004" hidden="">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="">Categoría:</label>
                              <div style="display: flex">
                                <select name="id_categoria" id="" class="form-control" required="">
                                  <option value="1">
                                    LIQUIDOS </option>
                                  <option value="2">
                                    FRUTAS </option>
                                  <option value="3">
                                    COMIDAS </option>
                                  <option value="4">
                                    ELECTRODOMESTICOS </option>
                                  <option value="5">
                                    VERDURAS </option>
                                  <option value="6">
                                    MEDICAMENTOS Y COMIDAS </option>
                                  <option value="8">
                                    algo2 </option>
                                  <option value="9">
                                    algo3 </option>
                                  <option value="11">
                                    ELECTRONICOS </option>
                                </select>
                                <a href="../categorias/crear.php" class="btn btn-blue"><i class="fa fa-plus"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="">Nombre del producto:</label>
                              <input type="text" name="nombre" class="form-control" required="">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="">Usuario</label>
                              <input type="text" class="form-control" value="frank@gmail.com" disabled="">
                              <input type="text" name="id_usuario" value="1" hidden="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="form-group">
                              <label for="">Descripción del producto:</label>
                              <textarea name="descripcion" id="" cols="30" rows="2" class="form-control"></textarea>
                            </div>
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-md-2">
                            <div class="form-group">
                              <label for="">Stock:</label>
                              <input type="number" name="stock" class="form-control" required="">
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <label for="">Stock mínimo:</label>
                              <input type="number" name="stock_minimo" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <label for="">Stock máximo:</label>
                              <input type="number" name="stock_maximo" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <label for="">Precio compra:</label>
                              <input type="number" name="precio_compra" class="form-control" required="">
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <label for="">Precio venta:</label>
                              <input type="number" name="precio_venta" class="form-control" required="">
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <label for="">Fecha de ingreso:</label>
                              <input type="date" name="fecha_ingreso" class="form-control" required="">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">Imagen del producto</label>
                          <input type="file" name="image" class="form-control" id="file">
                          <br>
                          <output id="list"></output>
                         
                        </div>
                      </div>
                    </div>

                    <hr>
                    <div class="form-group">
                      <a href="index.php" class="btn btn-secondary">Cancelar</a>
                      <button type="submit" class="btn btn-blue">Guardar producto</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include("../layout/parte2.php"); ?>