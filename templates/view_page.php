<section id="content">
  <div id="view_page_header">
  <h1 id="view_page_header_title"><?=$restaurant['name']?> | <?=$restaurant['likes'] ?> <img src="images/like.png" width="25" height="25"></h1>
  <h3 id="description" ><?=$restaurant['description']?></h3>
  <img id="image_restaurant" src="images/restaurant<?=$restaurant['id']?>.png">
  </div>

  <ul id="menus">
   <?php foreach ($menus as $menu) { ?>
     <li>
      <div class="dropdown">
  <img src="images/menu-<?=$restaurant[id]?>-<?=$menu[id]?>.png" alt="Menu" width="100" height="100">
  <div class="dropdown-content">
    <img src="images/menu-<?=$restaurant[id]?>-<?=$menu[id]?>.png" alt="Menu" width="300" height="200">
    <div class="desc">Menu <?=$restaurant[id]?> - <?=$menu[id]?></div>
  </div>
</div>
         <?php if (isset($_SESSION['username'])) {?>
          <input type="image" src="images/like.png" width="25" height="25" />
         <?php } ?>
     </li>
   <?php } ?>
  </ul>

  <ul id ="reviews">
   <?php foreach ($reviews as $review) { ?>
     <li>
       <div>User:
         <?=$review['username']?>
       </div>
       <div>
         <?=$review['review']?>
       </div>

         <?php if (isset($_SESSION['username'])) {?>
         <button type="button">Reply!</button>
         <?php } ?>
     </li>
   <?php } ?>
  </ul>





  <?php if (isset($_SESSION['username'])) {?>
  <?php  include('templates/create_review.php') ?>
  <?php } ?>

</section>
