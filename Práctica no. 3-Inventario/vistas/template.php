<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Sistema de inventario</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" href="vistas/assets/img/plantilla/icono-negro.png">

   <!--=====================================
  PLUGINS DE CSS
  ======================================-->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/assets/bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/assets/dist/css/AdminLTE.css">
  
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="vistas/assets/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

   <!-- DataTables -->
  <link rel="stylesheet" href="vistas/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="vistas/assets/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="vistas/assets/plugins/iCheck/all.css">

   <!-- Daterange picker -->
  <link rel="stylesheet" href="vistas/assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <!-- Morris chart -->
  <link rel="stylesheet" href="vistas/assets/bower_components/morris.js/morris.css">

  <!--=====================================
  PLUGINS DE JAVASCRIPT
  ======================================-->

  <!-- jQuery 3 -->
  <script src="vistas/assets/bower_components/jquery/dist/jquery.min.js"></script>
  
  <!-- Bootstrap 3.3.7 -->
  <script src="vistas/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- FastClick -->
  <script src="vistas/assets/bower_components/fastclick/lib/fastclick.js"></script>
  
  <!-- AdminLTE App -->
  <script src="vistas/assets/dist/js/adminlte.min.js"></script>

  <!-- DataTables -->
  <script src="vistas/assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vistas/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="vistas/assets/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="vistas/assets/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>

  

  <!-- SweetAlert 2 -->
  <script src="vistas/assets/plugins/sweetalert2/sweetalert2.all.js"></script>
   <!-- By default SweetAlert2 doesn't support IE. To enable IE 11 support, include Promise polyfill:-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

  <!-- iCheck 1.0.1 -->
  <script src="vistas/assets/plugins/iCheck/icheck.min.js"></script>

  <!-- InputMask -->
  <script src="vistas/assets/plugins/input-mask/jquery.inputmask.js"></script>
  <script src="vistas/assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="vistas/assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>

  <!-- jQuery Number -->
  <script src="vistas/assets/plugins/jqueryNumber/jquerynumber.min.js"></script>

  <!-- daterangepicker http://www.daterangepicker.com/-->
  <script src="vistas/assets/bower_components/moment/min/moment.min.js"></script>
  <script src="vistas/assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Morris.js charts http://morrisjs.github.io/morris.js/-->
  <script src="vistas/assets/bower_components/raphael/raphael.min.js"></script>
  <script src="vistas/assets/bower_components/morris.js/morris.min.js"></script>

  <!-- ChartJS http://www.chartjs.org/-->
  <script src="vistas/assets/bower_components/Chart.js/Chart.js"></script>




</head>

<!--=====================================
CUERPO DOCUMENTO
======================================-->

<body class="hold-transition skin-blue sidebar-mini">
 
<div class="wrapper">

<!-- Main Header -->
<?php 
   include "vistas/modulos/header.php";
?>
<!--FIN HEADER-->

<!-- Left side column. contains the logo and sidebar -->
<?php 
   include "vistas/modulos/menu.php";
?>
<!--FIN NAVVAR-LATERAL-->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
 

  <!-- Main content -->
  <section class="content container-fluid">
    
  
    <!--------------------------
      | Your Page Content Here |
      -------------------------->
   <?php 
   $mvc = new MvcController();
    $mvc -> enlacesPaginasController();
    ?>
 

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
<?php 
   include "vistas/modulos/footer.php";
?>
<!--</footer>-->

<!-- Control Sidebar -->


<div class="control-sidebar-bg"></div>
</div>


  

<script src="vistas/js/plantilla.js"></script>
</body>
</html>