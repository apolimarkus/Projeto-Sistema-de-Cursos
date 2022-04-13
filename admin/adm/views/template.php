<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Hugo Vasconcelos">

    <title>Painel Administrativo</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo URL_BASE ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo URL_BASE ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?php echo URL_BASE ?>/assets/css/style.css" rel="stylesheet">

    <link href="<?php echo URL_BASE ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo URL_BASE ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo URL_BASE ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <link rel="shortcut icon" href="../../img/favicon0.ico" type="image/x-icon">
    <link rel="icon" href="../../img/favicon0.ico" type="image/x-icon">

</head>

<body id="page-top">


    <?php
    require "cabecalho.php";

    ?>
    <div>
        <?php $this->load($view, $viewData); ?>
    </div>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo URL_BASE ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo URL_BASE ?>/assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo URL_BASE ?>/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo URL_BASE ?>/assets/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo URL_BASE ?>/assets/js/demo/chart-pie-demo.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo URL_BASE ?>/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo URL_BASE ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo URL_BASE ?>/assets/js/demo/datatables-demo.js"></script>

</body>

</html>