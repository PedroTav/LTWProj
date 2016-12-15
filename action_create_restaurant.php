<?php
  include_once('config/init.php');
  include_once('database/restaurant.php');

  $owner = $_POST['username'];
  $name = $_POST['name'];
  $description = $_POST['description'];
  $type = $_POST['type'];

  createRestaurant($name,$description,$type,$owner);

  header('Location: list_restaurants.php');
?>
