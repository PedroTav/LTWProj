<section id="content">
  <h2>Add a Restaurant</h2>
  <form action="action_edit_restaurant.php" method="post">
    <input type="hidden"  name="cat_id"  value="<?=$restaurant['id']?>">
      <input type="hidden"  name="images"  value="<?=$restaurant['images']?>">
    <label>Name:
      <input type="text" name="name">
    </label>
    <label>Description:
  <textarea name="description" rows="10" cols="50"></textarea>
</label>
    <label>Type:
      <select name="type">
      <option value="Fast">Fast Food</option>
      <option value="Pizzeria">Pizzeria</option>
      <option value="Tavern">Tavern</option>
      <option value="Seafood">Sea Food</option>
    </select>
    </label>
    <input type="submit">
  </form>
</section>
