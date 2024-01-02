<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if (isset($_SESSION["email"])) {header ("location:index.php");}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Flashpoint.</title>
    <link rel="stylesheet" href="styles\styles.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>


    <form method="POST" action="insert.php" style="margin-top:30px;">
      <div class="reg-wrapper">
      <img src="images\products\register.jpg" alt="login" width = "500px">

      <div class="controls-reg">
      <h1>Registration</h1>
  
              <label for="right-label" >E-Mail</label>           
              <input type="email"  placeholder="juandelacruz@gmail.com" name="email" required>
              <br>
              <label for="right-label" >Password</label>        
              <input type="password"  name="pwd" required>
              

              <div class="login-buttons">
              <input type="submit"  value="Register">
        </div>
        </div>
        </div>
    </form>

    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
