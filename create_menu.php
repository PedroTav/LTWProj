<?php

  include_once('config/init.php');
  include_once('database/menu.php');


  $cat_id = $_GET['cat_id'];
  echo $cat_id;

  include ('templates/header.php');
  include ('templates/create_menu.php');
  include ('templates/footer.php');
?>
