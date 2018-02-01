<?php
$configs = include('include/config.php');


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }


$sql = "SELECT p.post_id, p.post_title, p.post_content,
GROUP_CONCAT(c.category_title ORDER BY  c.category_id ASC SEPARATOR ', ') as 'category_list'
FROM
Posts p
JOIN  Posts_Categories pc on p.post_id = pc.post_id
JOIN Categories c on pc.category_id = c.category_id
GROUP by p.post_title
ORDER BY p.post_id ASC";



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
