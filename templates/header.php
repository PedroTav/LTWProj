<!DOCTYPE html>
<html>
  <head>
    <title>Lounge Porto</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header>
      <h1>Lounge Porto</h1>
    </header>
    <nav>
      <?php
        if (isset($_SESSION['username']))
          include ('templates/logout_form.php');
        else
          include ('templates/login_form.php');
      ?>

      <ul>
        <li><a href="list_restaurants.php">Restaurants</a></li>
        <?php if (!isset($_SESSION['username'])) { ?>
          <li><a href="register.php">Register</a></li>
        <?php } ?>
      </ul>
    </nav>
