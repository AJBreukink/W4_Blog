<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog</title>
  <link rel="stylesheet" href="style/main.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poiret+One" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- <script src="isotope.pkgd.min.js"></script>-->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>



</head>
<body>
  <div id="heading"> &#60;cat &#62; <span class="meuw" > Meuw </span> &#60; &#47;cat &#62;</div>
  <a class="login-link" href="admin/index.php">Add new post</a>
  <div class="button-group filter-button-group">
  <button data-filter="*">show all</button>
  <?php include('categories_menu.php'); ?>
</div>
  <div id="grid">
  <?php include('get_posts.php'); ?>
</div>
<script src="script.js">

</script>
</body>
</html>
