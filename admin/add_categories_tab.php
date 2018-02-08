
<h2> Add a new category</h2> <hr> <br>
<div class="form-placeholder">



    <form action="insert_categories.php" method="post">
      <p>

      <input type="text" name="category_title" placeholder="category name">
      </p>

          <textarea id="category-description" type="text" name="category_description" placeholder="What is it about?" > </textarea>
        </p>

        <input class="link-button" type="submit" value="Submit">

      </form>

      <?php include("get_categories.php") //get the list of existing categories?>
    </div>
