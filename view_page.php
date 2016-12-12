<?php
  include_once('config/init.php');
  include_once('database/restaurant.php');
  include_once('database/review.php');
  include_once('database/menu.php');

  $cat_id = $_GET['cat_id'];
  $username = get_current_user();
  $restaurant = getRestaurant($cat_id);
  $reviews = getReviewsFromRestaurant($cat_id);
  $menus = getMenusFromRestaurant($cat_id);


  include ('templates/header.php');
  include ('templates/view_page.php');
  include ('templates/footer.php');
?>
