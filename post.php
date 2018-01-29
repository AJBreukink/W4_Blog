<?php
$configs = include('include/config.php');


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT PostID, PostTitle, PostText FROM Posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "PostId: " . $row["PostID"]. "<h1>" . $row["PostTitle"]. "</h1> <p> " . $row["PostText"]. "</p><br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
