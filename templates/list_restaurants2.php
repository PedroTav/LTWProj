 <section id="content">
  <h2>Restaurants</h2>
  <ul class="restaurants">
    <?php foreach ($restaurants as $restaurant) { ?>
      <li>
        <a href="view_page.php?cat_id=<?=$restaurant['id']?>">
          <?=$restaurant['name']?>
        </a>
        <?="Pontuação: "?> <?=$restaurant['likes']?>
        <?php if($restaurant['type'] == "Fast"): ?>
          <a href="list_by_type.php?type='Fast' ">
          <img id="type_image" src="images/category1.png">
        </a>
      <?php elseif($restaurant['type'] == "Pizzeria"): ?>
          <a href="list_by_type.php?type='Pizzeria' ">
          <img id="type_image" src="images/category2.png">
        </a>
		<?php elseif($restaurant['type'] == "Tavern"): ?>
          <a href="list_by_type.php?type='Tavern' ">
          <img id="type_image" src="images/category3.png">
        </a>
		<?php elseif($restaurant['type'] == "Seafood"): ?>
          <a href="list_by_type.php?type='Seafood' ">
          <img id="type_image" src="images/category4.png">
        </a>
        <?php endif ?>
      </li>
    <?php } ?>
  </ul>
  <?php if (isset($_SESSION['username'])) {?>
    <a href="action_add_restaurant.php">Add your Restaurant to our list</a>
  <?php } ?>
</section>
