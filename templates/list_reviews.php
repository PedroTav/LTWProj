<section id="content">
 <h2>Comments</h2>
 <ul class="comments">
   <?php foreach ($reviews as $review) { ?>
     <li>
         <?=$review['username']?>
         <?=$review['review']?>
      </li>

   <?php } ?>
 </ul>
</section>
