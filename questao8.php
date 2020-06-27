




<!DOCTYPE html>
<html>
<?php
        $a = $_POST ['valor1'];
        $b = $_POST ['valor2'];
        $op =$_POST ['operacao'];
        $c = [];
        if($op == "soma")
            $c = $a + $b;
            //echo $c = "resultado";
        else if($op == "subtracao")
            $c = $a - $b;
            //echo $c = "resultado";
        else if($op == "multiplicacao")
            $c = $a*$b;
            //echo $c = "resultado";
        else
            $c = $a/$b;
       
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
                  <h1 class="m-0 text-dark">Questão 8</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Questão 8</li>
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
                    <h3 class="card-title">Operações Matemáticas</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="form_calculo" id="form_calculo" action="" method="POST" class="form-horizontal">
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="valor1" class="col-sm-2 col-form-label">Valor 1</label>
                        <div class="col-sm-10">
                        <input type="number" min="0" class="form-control" id="valor1" name="valor1" placeholder="Ex.: 50 " required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="valor2" class="col-sm-2 col-form-label">Valor 2</label>
                        <div class="col-sm-10">
                        <input type="number" min="0" class="form-control" id="valor2" name="valor2" placeholder="Ex.: 50 " required>
                        </div>
                    </div>
                    <div class="form-group row">
                    

                    </div>
                   
                    <!-- /.card-body -->
                    <div class="card-footer">
                  
                        
                    
                    <p>
                <select type="submit" class="btn btn-info" name="operacao">
                    <option value=""> Operações</option>
                    <option id="soma" name="soma" value="soma">Soma</option>
                    <option id="subtracao" name="subtracao"value="subtracao">Subtração</option>
                    <option id="multiplicacao" name="multiplicacao"value="multiplicacao">Multiplicação</option>
                    <option id="divisao" name="divisao"value="divisao">Divisão</option>
                </select>
                <input type="submit" value="CALCULAR" /> 
            </p>
                    <button type="reset" class="btn btn-default float-right">Cancelar</button>
                    </div>
               
                </form>
            </div>
    
            <?// echo"O resultado é :". soma($valor1,$valor2);    ?>
            
       </div><!-- /.container-fluid -->
  </section>

<?php      echo "O resultado da operação é: $c";?>

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