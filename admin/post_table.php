<?php
$post_id = $row["post_id"];
$post_title = $row["post_title"];
$post_date = date("m/d/Y", strtotime($row["post_date"]));
$comments = $row["comments_named"];
$comments_value = $row["comments"];
$post_deleted = $row["status"];
$deleted = $row["post_deleted"];



echo  "<tr class='$post_deleted'>
          <td>$post_title </td>
          <th class='date-th'>$post_date</td>
          ";
          //if post not deleted
          if ($deleted == 0) {
              echo "<td><button class='delete_button_posts toggle' data-id='$post_id'> delete </button></td>
                    <td>$comments</td>";

                      //if comments on
                      if ($comments_value == 0) {
                          echo "<td><button class='off_button_posts toggle' data-id='$post_id'> Off </button></td>
                          <td><button class='pause_button_posts toggle' data-id='$post_id'> Pause </button></td>";
                      }
                      //if comments turned off
                      elseif ($comments_value == 1) {
                          echo "<td><button class='on_button_posts toggle' data-id='$post_id'> On </button></td>
                                  <td><button class='pause_button_posts toggle' data-id='$post_id'> Pause </button></td>";
                      }
                      //if comments paused
                      elseif ($comments_value == 2) {
                          echo "<td><button class='on_button_posts toggle' data-id='$post_id'> On </button></td>
                                  <td><button class='off_button_posts toggle' data-id='$post_id'> Off </button></td>";
                      }

                      //if no data show all 3 buttons
                       else {
                          echo "<td><button class='on_button_posts toggle' data-id='$post_id'> On </button></td>
                                  <td><button class='off_button_posts toggle' data-id='$post_id'> Off </button></td>
                                  <td><button class='pause_button_posts toggle' data-id='$post_id'> Pause </button></td>";
                      }
          }
          //if post deleted
          elseif ($deleted == 1) {
              echo "<td><button class='restor_button_posts toggle' data-id='$post_id'> restore </button></td>";
          }
          else {
            echo "<td> could not get status </td>";
          }



  echo   "</tr>";


?>
