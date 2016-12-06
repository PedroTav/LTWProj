<?php
  include_once('config/init.php');
  include_once('database/restaurant.php');

  $name = trim(strip_tags($_POST['name']));
  $description = trim(strip_tags($_POST['description']));
  $type = $_POST['type'];

  createRestaurant($name,$description,$type);

  header('Location: list_restaurants.php');
?>
