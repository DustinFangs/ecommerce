<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>
<?php include "config.php";?>

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
    <div class="row-wrapper">
   <div style="margin-top:10px;">
<?php
if(isset($_POST ['search'])){
  $search = $_POST['search'];
  $search = preg_replace("#[^0-9a-z]i#","",$search);
  $output='';
  $squery= $mysqli->query("SELECT * FROM products where product_name LIKE '%$search%'");

  if($squery){

  while ($obj = $squery->fetch_object()){
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

    echo '</div>';
    echo '</div>';

    
  }}}
?>
</div>
</div>
</div>
</body>
</html>