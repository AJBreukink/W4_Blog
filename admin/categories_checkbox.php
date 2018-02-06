<?php
$configs = include('../include/config.php');


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

      $sql = "SELECT  c.category_id, c.category_title, c.category_description
              FROM Categories c
              LIMIT 1, 18446744073709551615";


      $result = $conn->query($sql);
              if ($result->num_rows > 0) {

                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    ?>

                      <input type="checkbox"
                      title="<?php echo $row["category_description"]; ?>"name="categories[]" value="<?php echo $row["category_id"] ?>">
                      <?php echo $row["category_title"] ?>
                      <br>
                      <?php
                  }
              }

              else {
                  echo "no categories";
              }

$conn->close();
?>
