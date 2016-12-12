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
         <img id="type_image" src="images/category1.png">
       <?php elseif($restaurant['type'] == "Tavern"): ?>
         <img id="type_image" src="images/category2.png">
       <?php endif ?>
     </li>
   <?php } ?>
 </ul>
 <?php if (isset($_SESSION['username'])) {?>
   <a href="action_add_restaurant.php">Add your Restaurant to our list</a>
 <?php } ?>
</section>
