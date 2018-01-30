<?php
$configs = include('../include/config.php');


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



$sql = "INSERT INTO Posts (post_title, owner_id, post_content) VALUES('$post_title','$owner_id','$post_content')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully <a href='../index.php'>Back to posts</a> ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
