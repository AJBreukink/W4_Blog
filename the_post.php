<?php
$id = $row["post_id"];
$date = date("m/d/Y", strtotime($row["post_date"]));
$category_list = $row["category_list"];
$post_content = $row["post_content"];
$title = $row["post_title"];
$extract = $row["extract"];
$content_min_extract = $row["content"];
$comments_form = 'add_comment.php';
$comments_list = 'get_comments.php';
$comment_status = $row["comments"];

echo "
  <div id=\"post-$id\" class=\"article $category_list grid-item\">
      <div class=\"title\">
      <h2>$title  </h2>
      </div>
      <div class=\"extract\"> $extract

      </div>
      <div class=\"content\" id=\"dropdown-$id\">
      $content_min_extract";
      
      if ($comment_status == 0) {
        include($comments_form);
        include($comments_list);
      }
      //if comments turned off
      elseif ($comment_status == 1) {
          echo "<h5>comments are dissabled for this article</h5>";
      }
      //if comments paused
      elseif ($comment_status == 2) {
        echo "<h5> New comments are dissabled for this article</h5>";
        include($comments_list);
      }

      //if no data show all 3 buttons
       else {
          echo "something went wrong, try reloading the page to see comments";
      }

echo  "
      </div>
      <button id=\"toggle-$id\" data-target=\"#dropdown-$id\" class=\"dropdown\"> read more </button>
      <span class=\"category-footer\">$category_list </span> <span class=\"date-footer\"> $date </span>

  </div>"
;


?>
