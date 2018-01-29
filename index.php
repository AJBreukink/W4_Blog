<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Post Form</title>
</head>
<body>
<form action="insert.php" method="post">
    <p>
        <label for="PostTitle">Title</label>
        <input type="text" name="PostTitle" id="firstName">
    </p>
    <p>
        <label for="PostText"> Post Text</label>
        <input type="text" name="PostText" id="lastName">
    </p>
    <p>
      <label for="OwnderID"> Owner ID</label>
        <input type="text" name="OwnerID" value="1" readonly id="emailAddress">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>
