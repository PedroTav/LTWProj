<section id="content">
  <script type="text/javascript" src="scripts/script.js"></script>
  <div id="view_page_header">
  <h1 id="view_page_header_title"><?=$restaurant['name']?> | <?=$restaurant['likes'] ?>

    <?php foreach ($likes as $like) { ?>
        <?php if($like['rest_id'] == $restaurant[id]){ ?>
          <?php if($like['user_id'] == $_SESSION['username']){ ?>
            <?php $bool = true; ?>
            <?php } ?>
          <?php } ?>
      <?php }?>

    <?php if(isset($_SESSION['username'])){ ?>
      <?php if($bool == false){?>
          <a href="action_like_restaurant.php?cat_id=<?=$restaurant['id']?>">
            <img  src="images/like.png" width="25" height="25" />
          </a>
           <?php } ?>

           <?php if($bool == true){?>
                 <img  src="images/like.png" width="25" height="25" />
                <?php } ?>

           <?php } ?>
           <?php if(!isset($_SESSION['username'])){ ?>
                   <img  src="images/like.png" width="25" height="25" />
                  <?php } ?>
  </h1>
  <h3 id="description" ><?=$restaurant['description']?></h3>
  <!--  <img id="image_restaurant" src="images/restaurant<?=$restaurant['id']?>.png"> -->

   <div class="slideshow" style="max-width:250px">
      <img class="mySlides" src="images/restaurant<?=$restaurant[id]?>_1.png" style="width:100%">
      <img class="mySlides" src="images/restaurant<?=$restaurant[id]?>_2.png" style="width:100%">
    </div>


  <?php if ($_SESSION['username'] == $restaurant[cat_user]) {?>
   <a class="btn"  href="edit_restaurant.php?cat_id=<?=$restaurant[id]?>">Edit</a>
  <?php } ?>
  </div>



  <ul id="menus">
   <?php foreach ($menus as $menu) { ?>
     <li>
      <div class="dropdown">
  <img src="images/menu-<?=$restaurant[id]?>-<?=$menu[id]?>.png" alt="Menu" width="100" height="100">
  <h3><?=$menu[price]?></h3>
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

   <?php if ($_SESSION['username'] == $restaurant[cat_user]) {?>
   <li>
     <a href = "create_menu.php?cat_id=<?=$restaurant[id]?>">
       <img src="images/create_menu.png">
     </a>
   </li>

   <?php } ?>
  </ul>



  <ul id ="reviews">
   <?php foreach ($reviews as $review) { ?>

     <?php if($review[reply]==NULL) { ?>
 <?php $replies=getReplies($review[id])?>

     <li>
       <div>User:
         <?=$review['username']?>
       </div>
       <div>
         <?=$review['review']?>
       </div>

       <?php if (isset($_SESSION['username'])) {?>
       <div class="dropdown-replies">
       <button type="button">Reply!</button>
       <div class="dropdown-content-replies">
       <form  method="POST" id="reply" action="action_create_reply.php">
         <input type="hidden"  name="username" value="<?=$_SESSION['username']?>">
         <input type="hidden"  name="cat_id"  value="<?=$restaurant['id']?>">
         <input type="hidden"  name="reply"  value="<?=$review['id']?>">
         <textarea name="review" rows="5" cols="30"></textarea>
       <input type="submit" value="Comment">
       </form>
       </div>
       </div>
<?php } ?>
         <ul id ="replies">
    <?php foreach ($replies as $review) { ?>
      <li >
        <div>User:
          <?=$review['username']?>
        </div>
        <div>
          <?=$review['review']?>
        </div>
      <?php } ?>
    </ul>
   <?php } ?>
<?php } ?>
  </ul>




  <?php if (isset($_SESSION['username'])) {?>
  <?php  include('templates/create_review.php') ?>
  <?php } ?>

</section>
