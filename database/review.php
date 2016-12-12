<?php

function getReplies($reply) {
  global $conn;

  $stmt = $conn->prepare('SELECT * FROM restaurant WHERE reply =?');
  $stmt->execute(array($reply));
  return $stmt->fetchAll();
}

  function createReview($username,$review,$cat_id) {
    global $conn;

    $stmt = $conn->prepare('INSERT INTO reviews VALUES (NULL, ? , ? , ? , ?)');
    $stmt->execute(array($username,$review,0,$cat_id));
    return $stmt->fetch();
  }

  function getReviewsFromRestaurant($cat_id) {
    global $conn;

    $stmt = $conn->prepare('SELECT * FROM reviews WHERE cat_id = ?');
    $stmt->execute(array($cat_id));
    return $stmt->fetchAll();
  }
?>
