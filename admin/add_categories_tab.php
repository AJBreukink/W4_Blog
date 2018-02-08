<div class="form-placeholder">

  <h1> Add new categories</h1>

    <form action="insert_categories.php" method="post">
      <p>
      <label for="Category">Title</label>
      <input type="text" name="category_title" >
      </p>

          <textarea id="category-description" type="text" name="category_description" placeholder="What is it about?" > </textarea>
        </p>

        <input class="link-button" type="submit" value="Submit">

      </form>

      <?php include("get_categories.php") //get the list of existing categories?>
    </div>
