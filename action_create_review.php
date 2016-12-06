<?php
  include_once('config/init.php');
  include_once('database/review.php');

  $username = trim(strip_tags($_POST['name']));
  $review = trim(strip_tags($_POST['review']));

  createReview($username,$review);

  header('Location: list_restaurants.php');
?>
