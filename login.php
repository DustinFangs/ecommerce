<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}
?>


<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Flashpoint.</title>
    <link rel="stylesheet" href="styles\styles.css" />
    <link rel="stylesheet" href="styles\login.css">
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    

    <form action = "verify.php" method="post">
                <div class="login-wrapper">
                  <img src="images\products\login.jpg" alt="login">
                    <div class="controls">
                    <h1>Login</h1>
                    <label for="asas" class = "all">Email:</label>
                     <input type="text" name="username" placeholder = "Email" class = "email" >
                    <br>
                    <label for="asas" class = "all">Password:</label>
                    <input type="text" name="pwd" style="-webkit-text-security: circle" placeholder = "Password" class = "passwords">
                    <br>
                        <div class="login-buttons">
                        <input type="submit" value="Login">
                        <input type="reset" id="elf-label" value="Reset">
                        <a href="forgotpass.php">Forgot Password?</a>
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
