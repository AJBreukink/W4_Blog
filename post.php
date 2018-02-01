<?php
$configs = include('include/config.php');


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }


$sql = "SELECT p.post_title, p.post_content,p.post_id,
GROUP_CONCAT(c.category_title  SEPARATOR ', ') as 'category_list'
FROM Posts p , Posts_Categories pc , Categories c
WHERE p.post_id = pc.post_id and pc.category_id = c.category_id
GROUP BY p.post_id
ORDER BY p.post_id DESC";



$result = $conn->query($sql);
if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "post_id: " . $row["post_id"]. "<h1>" . $row["post_title"]. "</h1> <h5> category "  . $row["category_list"] . "</h5> <p> " . $row["post_content"]. "</p><br> <br> ";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
