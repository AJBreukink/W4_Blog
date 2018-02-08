<?php
$configs = include('../include/config.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Escape user inputs for security
        $comment_id = mysqli_real_escape_string($conn, $_REQUEST['data']);


        // values to be submited for the delete action
        $sql = "UPDATE Comments
                SET deleted = 1
                WHERE comment_id = $comment_id";


        if ($conn->query($sql) === TRUE) {



        } else {
            echo "Error: " . $sql . "<br>" . $comment_id . $conn->error;
        }

$conn->close();
?>
