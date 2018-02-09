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

                  // output data of each row & make a table
                  ?>
                  <table id="shortcuts_table">
                    <thead>
                     <tr>
                       <th>Shortcuts</th>
                       <th>Description</th>
                     </tr>
                   </thead>
                  <?php
                      while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                          <td>
                          <?php echo $row["shortcut_name"] ?>
                        </td>
                           <td>
                          <?php echo $row["shortcut_value"]; ?>
                        </td>
                        </tr>

                          <?php
                        }
                  ?>
                 </table> <?php
              }

              else {
                  echo "no shortcuts";
              }

$conn->close();
?>
