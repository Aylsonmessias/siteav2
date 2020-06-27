



<!DOCTYPE html>
<html>

<?php 
 
$salario_inicial = 1000;
$aumento_anual = 1.5;
$ano = 2016;





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
                  <h1 class="m-0 text-dark">Questão 5</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Questão 5</li>
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
                    <h3 class="card-title">Aumentando salário anualmente</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
           
            </div>
    
            
       </div><!-- /.container-fluid -->
  </section>
  <?php
$ano = 2016;
$salario_inicial=1000;
$aumento_anual=1.5;

while($ano <= 2020) {
  echo "<br> No ano   $ano "." - " ." O salário era : ".((($aumento_anual*$salario_inicial)/100)+$salario_inicial);
  $ano++;
  $aumento_anual+=$aumento_anual;
}
?>

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