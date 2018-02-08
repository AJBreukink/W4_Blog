<div class="form-placeholder">

  <h5> Write a comment</h5>

    <form action="admin/insert_comments.php" method="post">
      <p>

      <input type="text" name="comment_user" placeholder="name">
      </p>

          <textarea  type="text" name="comment_text" placeholder="comment" > </textarea>
        </p>
        <!-- hidden field to catch post id -->
        <input type="text" name="article_id" value="<?php echo $id; ?>" readonly hidden >

        <input class="link-button" type="submit" value="Submit">

      </form>
  </div>
