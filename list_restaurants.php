<?php
  include_once('config/init.php');
  include_once('database/restaurant.php');

  $restaurants = getAllRestaurants();

  include ('templates/header.php');

  include ('templates/list_restaurants2.php');
  include ('templates/footer.php');
?>
