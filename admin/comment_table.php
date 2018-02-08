<?php
$comment_id = $row["comment_id"];
$comment_date = date("m/d/Y", strtotime($row["comment_date"]));
$comment_text = $row["comment_text"];
$comment_user = $row["comment_user"];
$comment_status = $row["status"];
$comment_deleted = $row["deleted"];
$post_title = $row["post_title"];


echo  "<tr class='$comment_status'>
          <th>$post_title </th>
          <th>$comment_user</th>
          <th>$comment_text</th>
          <th>$comment_date</th>";

          if ($comment_deleted == 0) {
            echo  "<th><button class='delete_button_comment toggle' data-id='$comment_id'> delete </button></th>
                  </tr>";
          }
          elseif ($comment_deleted == 1) {
            echo  "<th><button class='restore_button_comment toggle' data-id='$comment_id'> restore </button></th>
                  </tr>";
          }




?>
