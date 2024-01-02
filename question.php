<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(isset($_SESSION["username"])){

        header("location:index.php");
}

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

    <div class="wrapper-index">
    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li>
          <h1 class="logo"><a href="index.php">Flashpoint.</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="navigation">
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>
    

    <form action = "pass.php" method="post">
                <div class="login-wrapper">
                  <img src="images\products\login.jpg" alt="login">
                    <div class="controls">
                    <h1>What is Your Pin?</h1>
                    <label for="asas" class = "all">Pin:</label>
                     <input type="text" name="pin" placeholder = "Email" class = "email" >
                
                        <div class="login-buttons">
                        <input type="submit" value="Login">
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
