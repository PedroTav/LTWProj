<?php
  include_once('config/init.php');
  include_once('database/restaurant.php');

  $cat_id = $_GET['cat_id'];
  $restaurant = getRestaurant($cat_id);
  include ('templates/header.php');

  include ('templates/edit_restaurant.php');
  include ('templates/footer.php');
?>
