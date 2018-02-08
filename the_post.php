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

echo "
  <div id=\"post-$id\" class=\"article $category_list grid-item\">
      <div class=\"title\">
      <h2>$title  </h2>
      </div>
      <div class=\"extract\"> $extract

      </div>
      <div class=\"content\" id=\"dropdown-$id\">
      $content_min_extract";
      include($comments_form);
      include($comments_list);
echo  "
      </div>
      <button id=\"toggle-$id\" data-target=\"#dropdown-$id\" class=\"dropdown\"> read more </button>
      <span class=\"category-footer\">$category_list </span> <span class=\"date-footer\"> $date </span>

  </div>"
;


?>
