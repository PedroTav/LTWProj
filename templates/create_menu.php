<section id="content">
  <h2>Add a Menu</h2>
  <form action="action_create_menu.php" method="post">
    <input type="hidden" name= "cat_id" value="<?=$cat_id?>">

    <label>Name:
      <input type="text" name="name">
    </label>
    <label>Price:
  <input type="number" name ="price" step="any" />
</label>
    <input type="submit">
  </form>
</section>
