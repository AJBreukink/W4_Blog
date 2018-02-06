<div class="form-placeholder">
  
  <h1> What inspires you today? </h1>

    <form action="insert.php" method="post">
      <p>
      <label for="PostTitle">Title</label>
      <input type="text" name="post_title" >
      </p>
      <p> <label >Select a category</label> <br>
      <?php include("categories.php") ?><p>
        <p>
          <textarea id="post-text" type="text" name="post_content" placeholder="Say meauwww..." > </textarea>
        </p>
        <!-- hidden field to catch author id -->
        <input type="text" name="owner_id" value="1" readonly hidden >
        <input id="keywords" type="text" name="keywords" data-keywords='{"cci": "customer called in",
        "rfc": "request for comments",
      "www": "world wide web"}' readonly hidden >
        <input class="link-button" type="submit" value="Submit">

      </form>
    </div>
