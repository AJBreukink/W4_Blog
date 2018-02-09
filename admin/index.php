<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Post Form</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poiret+One" rel="stylesheet">
  <link rel="stylesheet" href="../style/main.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poiret+One" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  <div style="height:3em"> <a class="login-link" href="../index.php">Back to posts</a> </div>
      <div class="container">

        	<ul class="tabs">
        		<li class="tab-link current" data-tab="tab-1">New Post</li>
            <li class="tab-link" data-tab="tab-2">Edit Posts</li>
        		<li class="tab-link" data-tab="tab-3">Add Categories</li>
        		<li class="tab-link" data-tab="tab-4">Edit Comments</li>
        		<li class="tab-link" data-tab="tab-5">Shortcuts Dictionary</li>
        	</ul>

        	<div id="tab-1" class="tab-content current">
            <?php include('add_post_tab.php'); ?>
          </div>
          <div id="tab-2" class="tab-content">
            <?php include('edit_posts_tab.php'); ?>
          </div>
        	<div id="tab-3" class="tab-content">
        	  <?php include('add_categories_tab.php'); ?>
        	</div>

        	<div id="tab-4" class="tab-content">
            <?php include('edit_comments_tab.php'); ?>
          </div>

        	<div id="tab-5" class="tab-content">
        		<?php include('add_shortcuts_tab.php'); ?>
        	</div>

    </div>

      <script src="script.js">

      </script>
</body>
</html>
