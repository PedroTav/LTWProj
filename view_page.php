<?php
  include_once('config/init.php');
  include_once('database/restaurant.php');
  include_once('database/review.php');

  $cat_id = $_GET['cat_id'];

  $restaurant = getRestaurant($cat_id);
  $reviews = getReviewsFromRestaurant($cat_id);

  include ('templates/header.php');
  include ('templates/view_page.php');
  include ('templates/footer.php');
?>
