<?php
  function getAllRestaurants() {
    global $conn;

    $stmt = $conn->prepare('SELECT * FROM restaurant');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getRestaurant($cat_id) {
    global $conn;

    $stmt = $conn->prepare('SELECT * FROM restaurant WHERE id = ?');
    $stmt->execute(array($cat_id));
    return $stmt->fetch();
  }

  function createRestaurant($name,$description,$type) {
    global $conn;

    $stmt = $conn->prepare('INSERT INTO restaurant VALUES (NULL, ?, ? , ? , ?)');
    $stmt->execute(array(0,$name,$type,$description));
    return $stmt->fetch();
  }

  function editRestaurant($name,$description,$type,$id) {
    global $conn;

    $stmt = $conn->prepare("UPDATE restaurant
SET name='$name',description='$description',type='$type'
WHERE id='$id' ");
    $stmt->execute();
    //$stmt->execute(array($name,$description,$type));
    return $stmt->fetch();
  }

  function Like($cat_id) {
    global $conn;

    $stmt = $conn->prepare(" UPDATE restaurant SET likes=likes+1 WHERE id='$cat_id' ");
      $stmt->execute();
    return $stmt->fetch();
  }

?>
