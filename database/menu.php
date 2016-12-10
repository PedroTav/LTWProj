<?php

  function createMenu($name,$price,$description) {
    global $conn;

    $stmt = $conn->prepare('INSERT INTO menu VALUES (NULL, ? , ?, ?)');
    $stmt->execute(array($username,$review));
    return $stmt->fetch();
  }

  function getMenusFromRestaurant($cat_id) {
    global $conn;

    $stmt = $conn->prepare('SELECT * FROM menu WHERE cat_id = ?');
    $stmt->execute(array($cat_id));
    return $stmt->fetchAll();
  }
?>
