<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home || Flashpoint.</title>
    <link rel="stylesheet" href="styles\slider.css" />
    <link rel="stylesheet" href="styles\login.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <?php include 'navbar.php'?>
<div class="wrapper"></div>
  <div id="image-track" data-mouse-down-at="0" data-prev-percentage="0">
  <img class="image" src="images\products\1.jpg" draggable="false" />
  <img class="image" src="images\products\2.jpg" draggable="false" />
  <img class="image" src="images\products\3.jpg" draggable="false" />
  <img class="image" src="images\products\4.jpg" draggable="false" />
  <img class="image" src="images\products\5.jpg" draggable="false" />
  <img class="image" src="images\products\6.jpg" draggable="false" />
  <img class="image" src="images\products\9.jpg" draggable="false" />
 
</div>
<div class="bg-text1">
  <h1>Running Shoes</h1>
</div>
<div class="bg-text2">
  <h1>Featured Products</h1>
</div>
<div class="bg-text3">
  <h2><a href = "products.php"> View Collection </a></h2>
</div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src = "app.js">
      $(document).foundation();
    </script>
  </body>
</html>
