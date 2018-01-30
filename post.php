<?php
$configs = include('include/config.php');


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT Posts.post_id, Posts.post_title, Posts.post_content , PostCategory.category_id, Categories.category_title
FROM Posts
JOIN PostCategory ON Posts.post_id=PostCategory.post_id
JOIN Categories ON Categories.category_id=PostCategory.category_id";



$result = $conn->query($sql);
if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "post_id: " . $row["post_id"]. "<h1>" . $row["post_title"]. "</h1> <h5> category "  . $row["category_title"] . "</h5> <p> " . $row["post_content"]. "</p><br>". $row["post_content"] . "<br> ";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
