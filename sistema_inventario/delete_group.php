<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(1);
?>
<?php
  $delete_id = delete_by_id('user_groups',(int)$_GET['id']);
  if($delete_id){
      $session->msg("s","El grupo ha sido eliminado.");
      redirect('group.php');
  } else {
      $session->msg("d","Error al eliminar el grupo.");
      redirect('group.php');
  }
?>
