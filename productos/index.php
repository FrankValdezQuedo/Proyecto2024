<?php
include("../app/config.php");
include("../layout/parte1.php");

?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
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

          <div class="card card-outline card-blue">
            <div class="card-header">
              <h3 class="card-title">Lista de Productos</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="display: block;">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Codigo</th>
                    <th>Producto</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>001</td>
                    <td>iphone 13 pro</td>
                    <td>Especificaciones del iPhone 13 · Pantalla Super Retina XDR ·
                      Pantalla OLED de 6.1 pulgadas (diagonal) sin marco ·
                      Resolución de 2532 x 1170 pixeles a 460 ppi</td>
                    <td>imagen</td>
                    <td>4000</td>
                    <td>45</td>
                    <td>
                      <a class="btn btn-danger" href="#"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></a>
                      <a class="btn btn-success" href="#"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a>
                    </td>
                  </tr>
                 
                  <tr>
                    <td>002</td>
                    <td>laptop hp</td>
                    <td>Intel® Core™ i7-7500U 2.7 / 3.5GHz - Séptima generación · Memoria RAM: 
                      8GB DDR4 / Disco Duro: 1 TB · Pantalla: SVA eDP
                       antirreflejo WLED de 15,6" HD (1366 x 768)</td>
                    <td>imagen</td>
                    <td>4500</td>
                    <td>47</td>
                    <td>
                      <a class="btn btn-danger" href="#"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></a>
                      <a class="btn btn-success" href="#"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a>
                    </td>
                  </tr>

                </tbody>
                <tfoot>

                </tfoot>
              </table>





            </div>
            <!-- /.card-body -->
          </div>


        </div>
      </div>




    </div><!-- /.container-fluid -->
  </div>

  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include("../layout/parte2.php"); ?>

<script>
  $(function() {
    $("#example1").DataTable({
      /* cambio de idiomas de datatable */
      "pageLength": 5,
      language: {
        "emptyTable": "No hay información",
        "decimal": "",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
        "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
        "infoFiltered": "(Filtrado de _MAX_ total Usuarios)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Usuarios",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscador:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
          "first": "Primero",
          "last": "Ultimo",
          "next": "Siguiente",
          "previous": "Anterior"
        }
      },
      /* fin de idiomas */
      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,
      buttons: [{
          extend: 'collection',
          text: 'Reportes',
          orientation: 'landscape',
          buttons: [{
            text: 'Copiar',
            extend: 'copy',
          }, {
            extend: 'pdf'
          }, {
            extend: 'csv'
          }, {
            extend: 'excel'
          }, {
            text: 'Imprimir',
            extend: 'print'
          }]
        },
        {
          extend: 'colvis',
          text: 'Visor de columnas',
          collectionLayout: 'fixed three-column'
        }
      ],
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>