<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
?>
<?php
  $categorie = find_by_id('categories',(int)$_GET['id']);
  if(!$categorie){
    $session->msg("d","Falta idenfiticacion de categoría.");
    redirect('categorie.php');
  }
?>
<?php
  $delete_id = delete_by_id('categories',(int)$categorie['id']);
  if($delete_id){
      $session->msg("s","la categoria se elimino.");
      redirect('categorie.php');
  } else {
      $session->msg("d","la categoria no se pudo eliminar.");
      redirect('categorie.php');
  }
?>
