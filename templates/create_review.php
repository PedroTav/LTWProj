  <form  method="POST" id="review" action="action_create_review.php">
      <input type="hidden"  name="username" value="<?=$_SESSION['username']?>">
      <input type="hidden"  name="cat_id"  value="<?=$restaurant['id']?>">
      <textarea name="review" rows="10" cols="50"></textarea>
    <input type="submit" value="Comment">
  </form>
