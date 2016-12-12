<?php
  include_once('config/init.php');
  include_once('database/review.php');

  $username = $_POST['username'];
  $review = trim(strip_tags($_POST['review']));
  $cat_id = $_POST['cat_id'];
  $reply = $_POST['reply'];

  createReplie($username,$review,$reply,$cat_id);

  header("Location: view_page.php?cat_id=$cat_id ");
?>
