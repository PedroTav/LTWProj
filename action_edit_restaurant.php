<?php
  include_once('config/init.php');
  include_once('database/restaurant.php');

  $name = trim(strip_tags($_POST['name']));
  $description = trim(strip_tags($_POST['description']));
  $type = $_POST['type'];
  $id = $_POST['cat_id'];

  editRestaurant($name,$description,$type,$id);

  header("Location: view_page.php?cat_id=$id");
?>
