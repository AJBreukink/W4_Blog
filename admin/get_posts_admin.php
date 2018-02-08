<?php
$configs = include('../include/config.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


      $sql_posts = "SELECT p.post_id,p.post_deleted, p.post_title, p.post_date, p.comments,
                            CASE p.post_deleted
                              WHEN '1'
                              THEN 'DELETED'
                              WHEN '0'
                              THEN 'Posted'
                            END AS status,
                          CASE p.comments
                              WHEN '0'
                              THEN 'on'
                              WHEN '1'
                              THEN 'off'
								              WHEN '2'
	                            THEN 'paused'
                          END AS comments_named
                          FROM Posts p
                      ";


      $result = $conn->query($sql_posts);
            if ($result->num_rows > 0) {
              // output data of each row
              ?>
              <table id="article_status">
                <tr>
                  <th>Article Title</th>
                  <th>Date</th>

                  <th>Delete/Restor</th>
        
                  <th colspan="2">Comments</th>

                </tr>
               <?php
              while($row = $result->fetch_assoc()) {
              // get output tempalate
              include('post_table.php');
              }
              ?> </table> <?php
            }

            else {
              echo "0 results";
            }

$conn->close();
?>
