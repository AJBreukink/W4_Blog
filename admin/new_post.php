<div class="form-placeholder">

  <h1> What inspires you today? </h1>

    <form action="insert.php" method="post">

      <label for="PostTitle">Title</label>
      <input type="text" name="post_title" >

       <label >Select a category</label> <br>
      <?php include("categories_checkbox.php") ?>

          <textarea id="post-text" type="text" name="post_content" placeholder="Say meauwww..." > </textarea>

        <!-- hidden field to catch author id -->
        <input type="text" name="owner_id" value="1" readonly hidden >
          <!-- hidden field to get shortcuts -->
        <input id="keywords" type="text" name='keywords' data-keywords='<?php include("shortcuts_json.php")?>' readonly hidden >
        <input class="link-button" type="submit" value="Submit">

      </form>
  </div>
