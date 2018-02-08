<?php
$comment_id = $row["comment_id"];
$comment_date = date("m/d/Y", strtotime($row["comment_date"]));
$comment_text = $row["comment_text"];
$comment_user = $row["comment_user"];



echo "
  <div id=\"comment-$comment_id\" class=\" comment_box\">

      <div class=\"username\"> $comment_user

      </div>
      <div class=\"comment_text\" >
      $comment_text
      </div>

       <span class=\"date-footer\"> $comment_date </span>
  </div>
";


?>
