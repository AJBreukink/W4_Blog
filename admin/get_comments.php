<?php
$configs = include('../include/config.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


      $sql_comments = "SELECT p.post_title, c.comment_user, c.comment_text,
                        c.comment_id, c.comment_date,c.deleted,
                          CASE c.deleted
                            WHEN '1'
                            THEN 'DELETED' END AS status
                          FROM Comments c, Posts p
                      WHERE c.article_id = p.post_id
                      ORDER BY p.post_id DESC";


      $result = $conn->query($sql_comments);
            if ($result->num_rows > 0) {
              // output data of each row
              ?>
              <table id="comments_status">
                <thead>
                <tr>
                  <th>Article Title</th>
                  <th>Username</th>
                  <th>Comment</th>
                  <th>Date</th>

                  <th>Delete</th>
                </tr>
              </thead>
               <?php
              while($row = $result->fetch_assoc()) {
              // get output tempalate
              include('comment_table.php');
              }
              ?> </table> <?php
            }

            else {
              echo "0 results";
            }

$conn->close();
?>
