



<!DOCTYPE html>
<html>
<?php 
 $produto        =    $_POST['produto'];
 $valor          =   $_POST['valor'];
 $desc           =   7/100;
 
 
  function calculo($valor,$desc){
      $resultado  =   ($valor-($desc*$valor));
      return $resultado;
  }
 ?>


<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
      <?php 
        include "_includes/header.php"
      ?>
 

     <?php 
        include "_includes/menu.php"
     ?>
      

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Questão 07</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Questão 07</li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!--<h2>10.	Escreva um algoritmo que receba de entrada a distância total (em km) percorrida por um automóvel e a quantidade de combustível (em litros) consumida para percorrê-la, calcule e imprima o consumo médio de combustível.  Fórmula: Consumo médio = Km / litros.</h2> -->
                    <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Calculando Desconto</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="form_calculo" id="form_calculo" action="" method="POST" class="form-horizontal">
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="nome" class="col-sm-2 col-form-label">Produto</label>
                        <div class="col-sm-10">
                        <input type="name" min="2" class="form-control" id="produto" name="produto" placeholder="Ex.: Televisão " required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="valor" class="col-sm-2 col-form-label">Valor Da TV</label>
                        <div class="col-sm-10">
                        <input type="number" min="0" class="form-control" id="valor" name="valor" placeholder="Ex.: R$ 2000 " required>
                        </div>
                    </div>
                   
                    
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-info">Calcular</button>
                    <button type="reset" class="btn btn-default float-right">Cancelar</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
             
          
            
       </div><!-- /.container-fluid -->
  </section>



        <?php 
          include "_includes/footer.php"
        ?>

 


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>