<?php

  function createReview($username,$review,$cat_id) {
    global $conn;

    $stmt = $conn->prepare('INSERT INTO reviews VALUES (NULL, ? , ? , ?)');
    $stmt->execute(array($username,$review,$cat_id));
    return $stmt->fetch();
  }

  function getReviewsFromRestaurant($cat_id) {
    global $conn;

    $stmt = $conn->prepare('SELECT * FROM reviews WHERE cat_id = ?');
    $stmt->execute(array($cat_id));
    return $stmt->fetchAll();
  }
?>
