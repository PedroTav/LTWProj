<?php
  include_once('config/init.php');
  include_once('database/restaurant.php');

  $id = $_GET['cat_id'];
  $username = $_SESSION['username'];
  //$restaurant = getRestaurant($id);

  Like($id);
  Like2($id, $username);


  header("Location: view_page.php?cat_id=$id");
?>
