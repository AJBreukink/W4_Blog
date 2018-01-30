<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Post Form</title>
</head>
<body>
  <a href="../index.php">Back to posts</a>
<form action="insert.php" method="post">
    <p>
        <label for="PostTitle">Title</label>
        <input type="text" name="post_title" >
    </p>
    <p>
        <label for="post_content"> Post Text</label>
        <input type="text" name="post_content" >
    </p>
    <p>
      <label for="owner_id"> Owner ID</label>
        <input type="text" name="owner_id" value="1" readonly >
    </p>
    <p> <lable> Category </lable><select name="category_id">
    <option value="1"> mischief </option>
    <option value="2"> general </option>
    <option value="3"> food</option>

  </select> <p>
    <input type="submit" value="Submit">
</form>
</body>
</html>
