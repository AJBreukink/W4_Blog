<?php
$configs = include('../include/config.php');

$settings ="Allow User Variables=True";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Escape user inputs for security
$post_title = mysqli_real_escape_string($conn, $_REQUEST['post_title']);
$post_content = mysqli_real_escape_string($conn, $_REQUEST['post_content']);
$owner_id = mysqli_real_escape_string($conn, $_REQUEST['owner_id']);
$category_id = mysqli_real_escape_string($conn, $_REQUEST['category_id']);


//$sql = "INSERT INTO Posts (post_title, owner_id, post_content) VALUES('$post_title','$owner_id','$post_content')";

$sql = "INSERT INTO Posts (post_title, owner_id, post_content)
  VALUES('$post_title','$owner_id','$post_content')";
$sql2 ="INSERT INTO PostCategory (post_id, category_id)
  VALUES( LAST_INSERT_ID(), '$category_id')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully <a href='../index.php'>Back to posts</a> ";
    if ($conn->query($sql2) === TRUE) {
        echo "New record created successfully (category) <a href='../index.php'>Back to posts</a> ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
