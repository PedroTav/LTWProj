<section id="content">
  <h2>Add a Restaurant</h2>
  <form action="action_create_restaurant.php" method="post">
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
