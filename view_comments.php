<?php
  include_once('config/init.php');
  include_once('database/review.php');

  $cat_id = $_GET['cat_id'];

  $restaurant = getRestaurant($cat_id);

  $reviews = getReviewsFromRestaurant($cat_id);

  include ('templates/list_reviews.php');
?>
