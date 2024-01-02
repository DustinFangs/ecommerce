<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])) {
  echo '<h1>Invalid Login! Redirecting...</h1>';
  header("Refresh: 3; url=index.php");
}

if($_SESSION["type"]==="admin") {
  header("location:admin.php");
}

include 'config.php';

?>



<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Flashpoint.</title>
    <link rel="stylesheet" href="styles\styles.css" />
    <link rel="stylesheet" href="styles\login.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
  <?php include 'navbar.php'?>

    <div class="info">
        <p><h1><?php echo '<h3>Hi ' .$_SESSION['fname'] .'</h3>'; ?></h1></p>

        <p><h4>Account Details</h4></p>

        <p style = " margin-left: 40px;   ">Below are your details in the database. If you wish to change anything, then just enter new data in text box and click on update.</p>
    </div>


    <form method="POST" action="update.php" style="margin-top:30px;">

            
              
              <?php

                $result = $mysqli->query('SELECT * FROM users WHERE id='.$_SESSION['id']);

                if($result === FALSE){
                  die(mysql_error());
                }

                if($result) {
                  $obj = $result->fetch_object();
                  echo '<div class="forms">';
                  echo '<label for="right-label" class="forms-inputs">First Name</label>';
                  echo '<input type="text"" placeholder="'. $obj->fname. '" name="fname">';
                  echo '<label for="right-label" class="forms-inputs">Last Name</label>';
                  echo '<input type="text" placeholder="'. $obj->lname. '" name="lname">';
                  echo '<label for="right-label" class="forms-inputs">Address</label>';
                  echo '<input type="text" placeholder="'. $obj->address. '" name="address">';
                  echo '<label for="right-label" class="forms-inputs">City</label>';
                  echo '<input type="text" placeholder="'. $obj->city. '" name="city">';
                  echo '<label for="right-label" class="forms-inputs">Pin Code</label>';
                  echo '<input type="text" placeholder="'. $obj->pin. '" name="pin">';
                  echo '<label for="right-label" class="forms-inputs">Email</label>';
                  echo '<input type="email" placeholder="'. $obj->email. '" name="email">';
                  echo '</div>';
              }
              echo '<div class="forms">';
              echo '<label for="right-label" class="forms-inputs">Password</label>';
              echo '<input type="password" name="pwd">';
              echo '</div>';
          ?>
            <div class="myacct-buttons">
                  <input type="submit" id="right-label" value="Update">
                  <input type="reset" id="right-label" value="Reset" >
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
