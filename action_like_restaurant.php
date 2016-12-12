<?php
  include_once('config/init.php');
  include_once('database/restaurant.php');

  $id = $_GET['cat_id'];
  //$restaurant = getRestaurant($id);

  Like($id);

  header("Location: view_page.php?cat_id=$id");
?>
