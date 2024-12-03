<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PhandoraCRUD</title>

<link rel="shortcut icon" href="vistas/assets/dist/img/logo.png" type="image/x-icon">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Ionicons-->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="vistas/assets/plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="vistas/assets/dist/css/adminlte.css">
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="vistas/assets/plugins/jquery/jquery.min.js"></script>

<!-- ChartJS -->
<script src="vistas/assets/plugins/charts.js/Chart.min.js"></script>

<!-- SweetAlert2 -->
<script src="vistas/assets/plugins/sweetalert2.min.js"></script>

<!-- Bootstrap 4 -->
<script src="vistas/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- ============================================================
=LIBRERIAS PARA USO DE DATATABLES JS
===============================================================-->
<script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>        
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

<!-- ============================================================
=LIBRERIAS PARA EXPORTAR A ARCHIVOS
===============================================================-->
<script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>


<!-- AdminLTE App -->
<script src="vistas/assets/dist/js/adminlte.min.js"></script>

</head>
<body class="hold-transition sidebar-mini">
  
<div class="wrapper">
    
    <?php
        include "modulos/navbar.php";
        include "modulos/aside.php";
    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  <?php include "vistas/dashboard.php"?>
    
  </div>
  <!-- /.content-wrapper -->

  <?php include "modulos/footer.php";?>
 
</div> 
<!-- ./wrapper -->

  <script>
    function CargarContenido(pagina_php,contenedor){
      $("." + contenedor).load(pagina_php);
    }
  </script>

</body>
</html>
