<?php
  include_once('config/init.php');
  include_once('database/restaurant.php');

  $type = $_GET[type];
  $restaurants = getRestaurantsByType($type);

  include ('templates/header.php');

  include ('templates/list_by_type.php');
  include ('templates/footer.php');
?>
