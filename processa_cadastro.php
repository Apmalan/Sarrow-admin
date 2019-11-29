
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Processa Cadastro</title>

  <?php require_once("dist/css/css.php"); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<?php require_once("layout/navBar.php"); ?>

<?php require_once("layout/mainSideBar.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row">
    <?php 
     var_dump($_POST);

     foreach ($_POST as $dado) {
       echo "<br>$dado";
     }

       ?>
      <div class="col-md-3"></div>
      <div class="col-md-3"></div>
      <div class="col-md-3"></div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php require_once("layout/controlSideBar.php"); ?>

  <?php require_once("layout/footer.php"); ?>
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<?php require_once("dist/js/javascript.php"); ?>
</body>
</html>
