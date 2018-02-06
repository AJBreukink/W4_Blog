<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


      $sql5 = "SELECT c.comment_user, c.comment_text, c.comment_date, c.comment_id, c.article_id
              FROM Comments c
              WHERE c.article_id = '$id'";


      $result2 = $conn->query($sql5);
            if ($result2->num_rows > 0) {
              // output data of each row
              while($row = $result2->fetch_assoc()) {
              // get output tempalate
              include('the_comments.php');
              }
            }
            else {
              echo "0 results";
            }


            $conn->close();
            ?>
