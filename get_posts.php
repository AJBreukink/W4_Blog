<?php
$configs = include('include/config.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


      $sql = "SELECT p.post_title, p.post_content,p.post_id,p.post_date,p.comments,
              COUNT( cm.article_id ) AS 'comment_count',
              SUBSTRING(p.post_content,1,100) as 'extract',
              SUBSTRING(p.post_content,100) as 'content',
              GROUP_CONCAT(DISTINCT c.category_title  SEPARATOR ', ') as 'category_list'
              FROM  Posts_Categories pc , Categories c, Posts p
              LEFT JOIN Comments cm ON p.post_id = cm.article_id
              WHERE p.post_deleted = 0
                and p.post_id = pc.post_id
                and pc.category_id = c.category_id
              GROUP BY p.post_id
              ORDER BY p.post_id DESC";
            


      $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
              // get output tempalate
              include('the_post.php');
              }
            }
            else {
              echo "0 results";
            }

$conn->close();
?>
