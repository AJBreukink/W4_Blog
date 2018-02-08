<?php
$configs = include('../include/config.php');


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

      $sql = "SELECT  s.shortcut_id, s.shortcut_name, s.shortcut_value
              FROM Shortcuts s
              ";


      $result = $conn->query($sql);

              if ($result->num_rows > 0) {



                echo " <input id='keywords' type='text' name='keywords' data-keywords='";



                  // output shortcuts and make a json list

                      while($row = $result->fetch_assoc()) {
                        $shortcut_name = $row["shortcut_name"];
                        $shortcut_value = $row["shortcut_value"];
                       $array[$shortcut_name] = $shortcut_value;
                     }

                     echo json_encode( $array );
                     echo "' readonly hidden > ";

              }

              else {
                  echo "no shortcuts";
              }

$conn->close();
              ?>
