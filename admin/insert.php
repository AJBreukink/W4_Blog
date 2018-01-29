<?php
$configs = include('../include/config.php');


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Escape user inputs for security
$PostTitle = mysqli_real_escape_string($conn, $_REQUEST['PostTitle']);
$PostText = mysqli_real_escape_string($conn, $_REQUEST['PostText']);
$OwnerID = mysqli_real_escape_string($conn, $_REQUEST['OwnerId']);



$sql = "INSERT INTO Posts (PostTitle, OwnerID, PostText) VALUES('$PostTitle','$OwnerID','$PostText')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully <a href='../index.php'>Back to posts</a> ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
