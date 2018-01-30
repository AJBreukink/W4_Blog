<?php
$configs = include('include/config.php');


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT post_id, post_title, post_content FROM Posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "post_id: " . $row["post_id"]. "<h1>" . $row["post_title"]. "</h1> <p> " . $row["post_content"]. "</p><br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
