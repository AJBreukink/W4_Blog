<?php
$configs = include('../include/config.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Escape user inputs for security
        $shortcut_name = mysqli_real_escape_string($conn, $_REQUEST['shortcut_name']);
        $shortcut_value = mysqli_real_escape_string($conn, $_REQUEST['shortcut_value']);



        // values to be submited for the post
        $sql = "INSERT INTO Shortcuts (shortcut_name, shortcut_value)
                VALUES('$shortcut_name','$shortcut_value')";

        //make an array & loop through checkbox value





        if ($conn->query($sql) === TRUE) {
header('Location: ../index.php');

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

$conn->close();
?>
