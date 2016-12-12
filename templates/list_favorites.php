<section id="content">
 <h2>Restaurants</h2>

 <ul class="favorites">
   <?php foreach ($favorites as $favorite) { ?>

     <?php $rest = getRestaurant($favorite[rest_id]) ?>
     <li>
       <a href="view_page.php?cat_id=<?=$rest[id]?>">
         <?=$rest[name]?>
       </a>
       <?="Pontuação: "?> <?=$rest['likes']?>
       <?php if($rest['type'] == "Fast"): ?>
         <a href="list_by_type.php?type='Fast' ">
         <img id="type_image" src="images/category1.png">
       </a>
     <?php elseif($rest['type'] == "Tavern"): ?>
         <a href="list_by_type.php?type='Tavern' ">
         <img id="type_image" src="images/category2.png">
       </a>
       <?php endif ?>
     </li>
   <?php } ?>
 </ul>
 <?php if (isset($_SESSION['username'])) {?>
   <a href="action_add_restaurant.php">Add your Restaurant to our list</a>
 <?php } ?>
</section>
