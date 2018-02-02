<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog</title>
  <link rel="stylesheet" href="style/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- <script src="isotope.pkgd.min.js"></script>--> 
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>



</head>
<body>
  <a href="admin/index.php">Add new post</a>
  <div class="button-group filter-button-group">
  <button data-filter="*">show all</button>
  <button data-filter=".mischief">mischief</button>
  <button data-filter=".undefined">undefined</button>
  <button data-filter=".general">general</button>
  <button data-filter=":.food">food</button>
</div>
  <div id="grid">
  <?php include('get_posts.php'); ?>
</div>
<script src="script.js">

</script>
</body>
</html>
