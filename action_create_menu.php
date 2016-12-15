<?php
  include_once('config/init.php');
  include_once('database/menu.php')


  $cat_id = $_POST['cat_id'];
  $name = trim(strip_tags($_POST['name']));
  $price = $_POST['price'];

  createMenu($name,$price,$cat_id);

  header("Location: view_page.php?cat_id=$cat_id ");
?>
