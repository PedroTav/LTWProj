<section id="content">
  <h1><?=$restaurant['name']?> <?=$restaurant['likes'] ?> <img src="images/monkey.png"></h1>
  <h2 id="description" ><?=$restaurant['description']?></h2>
  <img src="images/restaurant<?=$restaurant['id']?>.png">


  <ul>
   <?php foreach ($reviews as $review) { ?>
     <li>
       <div>User:
         <?=$review['username']?>
       </div>
       <div>
         <?=$review['review']?>
       </div>
       
         <?php if (isset($_SESSION['username'])) {?>
         <button type="button">Click Me!</button>
         <?php } ?>
     </li>
   <?php } ?>
  </ul>



  <?php if (isset($_SESSION['username'])) {?>
  <?php  include('templates/create_review.php') ?>
  <?php } ?>

</section>
