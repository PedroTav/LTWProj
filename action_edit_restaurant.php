<?php
  include_once('config/init.php');
  include_once('database/restaurant.php');

  $name = $_POST['name'];
  $description = $_POST['description'];
  $type = $_POST['type'];
  $id = $_POST['cat_id'];
  $images = $_POST['images'];

  editRestaurant($name,$description,$type,$id,$images);

  header("Location: view_page.php?cat_id=$id");
?>
