<?php
$configs = include('../include/config.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Escape user inputs for security
        $comment_user = mysqli_real_escape_string($conn, $_REQUEST['comment_user']);
        $comment_text = mysqli_real_escape_string($conn, $_REQUEST['comment_text']);
        $article_id = mysqli_real_escape_string($conn, $_REQUEST['article_id']);



        // values to be submited for the post
        $sql = "INSERT INTO Comments (comment_user, comment_text, article_id)
                VALUES('$comment_user','$comment_text', '$article_id')";

        //make an array & loop through checkbox value





        if ($conn->query($sql) === TRUE) {
          echo "<script>
          alert('message sent succesfully');


          </script>";
          header("Location: ../index.php#post-$article_id");

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

$conn->close();
?>
