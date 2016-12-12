<?php
  include_once('config/init.php');
  include_once('database/restaurant.php');
  include_once('database/favorite.php');

  $username  = $_GET['username'];
  $favorites = getUserFavorites($username);

  include ('templates/header.php');

  include ('templates/list_favorites.php');
  include ('templates/footer.php');
?>
