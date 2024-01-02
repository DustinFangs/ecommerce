<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home || Flashpoint.</title>
    <link rel="stylesheet" href="styles\login.css" />
    <link rel="stylesheet" href="styles\styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

  <?php include 'navbar.php'?>
   <div class="row-wrapper">
   <div style="margin-top:10px;">
        <?php
          $i=0;
          $product_id = array();
          $product_quantity = array();

          $result = $mysqli->query('SELECT * FROM products');
          if($result === FALSE){
            die(mysql_error());
          }

          if($result){

            while($obj = $result->fetch_object()) {

              echo  '<div class="imgs">';
              echo '<p><h1>'.$obj->product_name.'</h1></p>';
              echo '<img src="images/products/'.$obj->product_img_name.'" width = "400px"/>';
              echo  '<div>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p> '.$obj->product_desc.'</p>';
              echo '</div>';
              echo  '<div class = "units">';
              echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';
              echo '<p><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</p>';
              if($obj->qty > 0){
                echo '<p class = "add-cart"><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="ADD TO CART"  /></a></p>';
              }
              else {
                echo 'Out Of Stock!';
              }
              echo '</div>';

              $i++;
              echo '</div>';
              echo '</div>';

              
            }

          }

          $_SESSION['product_id'] = $product_id;


       
          ?>




      </div>
    </div>
  




    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
