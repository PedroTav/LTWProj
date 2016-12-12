<?php

function getReplies($reply) {
  global $conn;

  $stmt = $conn->prepare('SELECT * FROM reviews WHERE reply =?');
  $stmt->execute(array($reply));
  return $stmt->fetchAll();
}

  function createReview($username,$review,$cat_id) {
    global $conn;

    $stmt = $conn->prepare('INSERT INTO reviews VALUES (NULL, ? , ? , ? , ?)');
    $stmt->execute(array($username,$review,NULL,$cat_id));
    return $stmt->fetch();
  }

  function createReplie($username,$review,$reply,$cat_id) {
    global $conn;

    $stmt = $conn->prepare('INSERT INTO reviews VALUES (NULL, ? , ? , ? , ?)');
    $stmt->execute(array($username,$review,$reply,$cat_id));
    return $stmt->fetch();
  }

  function getReviewsFromRestaurant($cat_id) {
    global $conn;

    $stmt = $conn->prepare('SELECT * FROM reviews WHERE cat_id = ?');
    $stmt->execute(array($cat_id));
    return $stmt->fetchAll();
  }
?>
