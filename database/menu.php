<?php

function createMenu($name,$price,$cat_id) {
    global $conn;

    $stmt = $conn->prepare('INSERT INTO menu VALUES (NULL, ? , ?, ?)');
    $stmt->execute(array($name,$price,$cat_id));

    return $stmt->fetch();
  }

  function getMenusFromRestaurant($cat_id) {
    global $conn;

    $stmt = $conn->prepare('SELECT * FROM menu WHERE cat_id = ?');
    $stmt->execute(array($cat_id));
    return $stmt->fetchAll();
  }


?>
