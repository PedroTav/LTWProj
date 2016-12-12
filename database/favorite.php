<?php
function getLikes() {
  global $conn;

  $stmt = $conn->prepare('SELECT * FROM Favorites');
  $stmt->execute();
  return $stmt->fetchAll();
}

function getUserFavorites($username) {
  global $conn;

  $stmt = $conn->prepare("SELECT * FROM Favorites WHERE user_id='$username'");
  $stmt->execute();
  return $stmt->fetchAll();
}

function getRestFavorites($username) {
  global $conn;

  $stmt = $conn->prepare("SELECT user_id FROM Favorites WHERE rest_id=?");
  $stmt->execute($username);
  return $stmt->fetchAll();
}

 ?>
