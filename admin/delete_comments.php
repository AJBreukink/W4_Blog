<?php
$configs = include('../include/config.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Escape user inputs for security
        // $comment_deleted = mysqli_real_escape_string($conn, $_REQUEST['comment_deleted']);
        $comment_id = mysqli_real_escape_string($conn, $_REQUEST['comment_id']);




        // values to be submited for the post
        $sql = "UPDATE Comments
                SET deleted = 1
                WHERE comment_id = $comment_id";

        //make an array & loop through checkbox value





        if ($conn->query($sql) === TRUE) {
        


        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

$conn->close();
?>
