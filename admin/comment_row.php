<?php
$comment_id = $row["comment_id"];
$comment_date = date("m/d/Y", strtotime($row["comment_date"]));
$comment_text = $row["comment_text"];
$comment_user = $row["comment_user"];
$comment_deleted = $row["deleted"];
$post_title = $row["post_title"];


echo  "<tr>
          <th>$post_title </th>
          <th>$comment_user</th>
          <th>$comment_text</th>
          <th>$comment_date</th>
          <th>$comment_deleted </th>
          <th><button class='delete_button_comment' data-id='$comment_id'> delete </button></th>
        </tr>";


?>
