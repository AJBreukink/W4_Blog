<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Post Form</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poiret+One" rel="stylesheet">
  <link rel="stylesheet" href="../style/main.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poiret+One" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  <div class="form-placeholder">
    <div style="height:3em"> <a class="login-link" href="../index.php">Back to posts</a> </div>
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

          <input class="link-button" type="submit" value="Submit">
        </form>
      </div>
      <script src="script.js">

      </script>
</body>
</html>
