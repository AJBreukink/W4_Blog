<?php
$configs = include('../include/config.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Escape user inputs for security
        $category_title = mysqli_real_escape_string($conn, $_REQUEST['category_title']);
        $category_description = mysqli_real_escape_string($conn, $_REQUEST['category_description']);



        // values to be submited for the post
        $sql = "INSERT INTO Categories (category_title, category_description)
                VALUES('$category_title','$category_description')";

        //make an array & loop through checkbox value





        if ($conn->query($sql) === TRUE) {
header('Location: ../index.php');

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

$conn->close();
?>
