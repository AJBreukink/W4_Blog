<!-- the form for submiting new posts -->

<div class="form-placeholder">

  <h1> What inspires you today? </h1>

    <form action="insert_post.php" method="post">

      <label for="PostTitle">Title</label>
      <input type="text" name="post_title" > <br>

       <label >Select a category</label> <br>
        <?php include("get_categories_checkbox.php") ?> <br>

          <textarea id="post-text" type="text" name="post_content" placeholder="Say meauwww..." > </textarea>

        <!-- hidden field to catch author id -->
        <input type="text" name="owner_id" value="1" readonly hidden >
          <!-- hidden field to get shortcuts -->
          <div id='keywords_wrap'>
        <?php include("get_shortcuts_json.php")?>
      </div>
        <input class="link-button" type="submit" value="Submit">

      </form>
  </div>
