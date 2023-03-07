<?php
if(isset($_GET['file'])){
  $file = $_GET['file'];
  $folder = "";

  header("Content-Type: image/png");
  header("Content-Disposition: attachment; filename=".$file);

  readfile($folder.$file);
}
?>