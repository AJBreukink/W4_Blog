<?php
$post_id = $row["post_id"];
$post_title = $row["post_title"];
$post_date = date("m/d/Y", strtotime($row["post_date"]));
$comments = $row["comments_named"];
$comments_value = $row["comments"];
$post_deleted = $row["status"];



echo  "<tr class='$post_deleted'>
          <th>$post_title </th>
          <th>$post_date</th>
          <th>$post_deleted</th>
          <th><button class='delete_button_posts' data-id='$post_id'> delete </button></th>
          <th>$comments</th>";
          //if comments on
          if ($comments_value == 0) {
              echo "<th><button class='off_button_posts' data-id='$post_id'> Off </button></th>
              <th><button class='pause_button_posts' data-id='$post_id'> Pause </button></th>";
          }
          //if comments turned off
          elseif ($comments_value == 1) {
              echo "<th><button class='on_button_posts' data-id='$post_id'> On </button></th>
                      <th><button class='pause_button_posts' data-id='$post_id'> Pause </button></th>";
          }
          //if comments paused
          elseif ($comments_value == 2) {
              echo "<th><button class='on_button_posts' data-id='$post_id'> On </button></th>
                      <th><button class='off_button_posts' data-id='$post_id'> Off </button></th>";
          }
           else {
              echo "<th><button class='on_button_posts' data-id='$post_id'> On </button></th>
                      <th><button class='off_button_posts' data-id='$post_id'> Off </button></th>
                      <th><button class='pause_button_posts' data-id='$post_id'> Pause </button></th>";
          }

  echo   "</tr>";


?>
