<section id="content">
 <h2>Favorites</h2>

 <ul class="favorites">
   <?php foreach ($favorites as $favorite) { ?>

     <?php $rest = getRestaurant($favorite[rest_id]) ?>
     <li>
       <a href="view_page.php?cat_id=<?=$rest[id]?>">
         <?=$rest[name]?>
       </a>
       <?="Pontuação: "?> <?=$rest['likes']?>
       <?php if($rest['type'] == "Fast"): ?>

        <img id="type_image" src="images/category1.png">

      <?php elseif($rest['type'] == "Pizzeria"): ?>

        <img id="type_image" src="images/category2.png">

  <?php elseif($rest['type'] == "Tavern"): ?>

        <img id="type_image" src="images/category3.png">

  <?php elseif($rest['type'] == "Seafood"): ?>

        <img id="type_image" src="images/category4.png">

      <?php endif ?>
     </li>
   <?php } ?>
 </ul>

</section>
