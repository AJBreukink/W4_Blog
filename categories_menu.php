<?php
$configs = include('include/config.php');


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

      $sql = "SELECT  c.category_id, c.category_title, c.category_description
              FROM Categories c";


      $result = $conn->query($sql);
              if ($result->num_rows > 0) {

                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $category_title = $row["category_title"];
                    $category_description = $row["category_description"];


                    echo "  <button data-filter=\".$category_title\" title=\"$category_description\">$category_title</button>";

                  }
              }

              else {
                  echo "no categories";
              }

$conn->close();
?>
