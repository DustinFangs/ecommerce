<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])) {
  header("location:index.php");
}

if($_SESSION["type"]!="admin") {
  header("location:index.php");
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
    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <h3>Hey Admin!</h3>
        <h4>Here are the list of all users:</h4>

        <?php
          $result = $mysqli->query("SELECT * from users order by id asc");
          if($result) {
            while($obj = $result->fetch_object()) {
              echo '<form action = "delete-user.php" method = "post">';
              echo '<div class="large-4 columns">';
              echo '<p><h1>'.$obj->fname.' '.$obj->lname.'</h1></p>';
              echo '</div>';
              echo '</div>';
            }

           
          }
        ?>
        <input type="text" name="delete" class = "del" placeholder = "Enter first name of the user">
         <center><p><input type ="submit" value ="delete user?" class = "del-user"></p></center>
         </form>
        <?php
          $result = $mysqli->query("SELECT * from products order by id asc");
          if($result) {
            while($obj = $result->fetch_object()) {
              echo '<div class="imgs">';
              echo '<p><h1>'.$obj->product_name.'</h1></p>';
              echo '<img src="images/products/'.$obj->product_img_name.'" width = "300px"/>';
              echo '<p class = "units"><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p class = "units"><strong>Units Available</strong>: '.$obj->qty.'</p>';
              echo '<div class="large-6 columns" style="padding-left:0;">';
              echo '<form method="post" name="update-quantity" action="admin-update.php">';
              echo '<p class = "units"><strong>New Qty</strong>:</p>';
              echo '</div>';
              echo '<div class="large-6 columns">';
              echo '<input type="number" name="quantity[]"  class = "quantity"/>';

              echo '</div>';
              echo '</div>';
            }
          }
        ?>



      </div>
    </div>


   

        <center><p><input style="clear:both; margin-bottom :50px;" type="submit" class="update" value="Update"></p></center>
        </form>


    </div>





    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
