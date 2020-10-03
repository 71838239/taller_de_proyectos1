<?php namespace Vista;
ob_start();
session_start();
$template = new Template();
    
class Template{
  public function __construct(){
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Mesa de Partes Online GRJ</title>
  <link href="<?php echo URL; ?>Vista/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo URL; ?>Vista/template/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?php echo URL; ?>Vista/template/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="<?php echo URL; ?>Vista/template/css.css" rel="stylesheet">
  <script src="<?php echo URL; ?>Vista/template/bootstrap4/js/bootstrap.min.js"></script>
  <script src="<?php echo URL; ?>Vista/template/jquery-3.4.1.min.js"></script>
  <script src="https://checkout.culqi.com/js/v3"></script>
</head>
<body id="page-top">
  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
            <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100">
              <a class="nav-item dropdown no-arrow mx-1 font-weight-bold nav-link" href="<?php echo URL; ?>" id="" role="button"><h1 class="h3 mb-0 text-gray-800">Mesa de Partes en Línea</h1></a>             
            </div>
          <ul class="navbar-nav ml-auto">
             
        <?php 
    }
    public function __destruct(){
?>
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; CloudTecSystem 2020</span>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="<?php echo URL; ?>Vista/template/miscript.js"></script>
  <script src="<?php echo URL; ?>Vista/template/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo URL; ?>Vista/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo URL; ?>Vista/template/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo URL; ?>Vista/template/js/sb-admin-2.min.js"></script>
  <script src="<?php echo URL; ?>Vista/template/vendor/chart.js/Chart.min.js"></script>
  <script src="<?php echo URL; ?>Vista/template/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo URL; ?>Vista/template/js/demo/chart-pie-demo.js"></script>
  <script src="<?php echo URL; ?>Vista/template/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo URL; ?>Vista/template/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo URL; ?>Vista/template/js/demo/datatables-demo.js"></script>
</body>
</html>
<?php }
}?>