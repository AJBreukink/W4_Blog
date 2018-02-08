<?php
$configs = include('../include/config.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Escape user inputs for security
        $article_id = mysqli_real_escape_string($conn, $_REQUEST['data']);



        // values to be submited for the delete action
        $sql = "UPDATE Posts
                SET post_deleted = 0
                WHERE post_id = $article_id";


        if ($conn->query($sql) === TRUE) {



        } else {
            echo "Error: " . $sql . "<br>"  . $conn->error;
        }

$conn->close();
?>
