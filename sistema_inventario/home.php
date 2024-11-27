<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
  <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
         <h1>¡BIENVENIDO A PUNTONET!</h1>
         <p>Sistema de inventario ingresos y salidas de laptops</p>
      </div>
      <!-- Imagen centrada debajo del texto -->
      <div class="text-center">
        <img src="imagenes/logo.png" alt="Descripción de la imagen" class="img-fluid" style="max-width: 100%; height: auto;">
      </div>
    </div>
  </div>
</div>
<?php include_once('layouts/footer.php'); ?>
