<?php
$configs = include('../include/config.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Escape user inputs for security
        $post_title = mysqli_real_escape_string($conn, $_REQUEST['post_title']);
        $post_content = mysqli_real_escape_string($conn, $_REQUEST['post_content']);
        $owner_id = mysqli_real_escape_string($conn, $_REQUEST['owner_id']);
        $category_id = isset(($_REQUEST['categories'])) ? $_REQUEST['categories'] : array("0" => "1");


        // values to be submited for the post
        $sql = "INSERT INTO Posts (post_title, owner_id, post_content)
                VALUES('$post_title','$owner_id','$post_content')";

        //make an array & loop through checkbox value
        $sql_array = array();
        foreach($category_id as $value) {
            $sql_array[] = "(LAST_INSERT_ID()," . "'" .$value . "'" .")";
        }
        //category values to submit
        $sql3 = 'INSERT INTO Posts_Categories (post_id, category_id)
                VALUES '.implode(',', $sql_array);



        if ($conn->query($sql) === TRUE) {

            if ($conn-> query($sql3) === TRUE) {
                header('Location: ../index.php');
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

$conn->close();
?>
