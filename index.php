<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Flashpoint.</title>
    <link rel="stylesheet" href="styles\login.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

  <?php include 'navbar.php'?>

    <script>
      $(document).foundation();
    </script>
  </body>
</html>
