<?php
$comment_id = $row["comment_id"];
$comment_date = date("m/d/Y", strtotime($row["comment_date"]));
$comment_text = $row["comment_text"];
$comment_user = $row["comment_user"];
$comment_status = $row["status"];
$comment_deleted = $row["deleted"];
$post_title = $row["post_title"];


echo  "<tr class='$comment_status'>
          <td>$post_title </td>
          <td>$comment_user</td>
          <td>$comment_text</td>
          <td class='date-th'>$comment_date</td>";

          if ($comment_deleted == 0) {
            echo  "<td><button class='delete_button_comment toggle' data-id='$comment_id'> delete </button></td>
                  </tr>";
          }
          elseif ($comment_deleted == 1) {
            echo  "<td><button class='restore_button_comment toggle' data-id='$comment_id'> restore </button></td>
                  </tr>";
          }




?>
