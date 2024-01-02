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
    <title>Flashpoint.</title>
    <link rel="stylesheet" href="styles\styles.css" /> 
    <link rel="stylesheet" href="styles\login.css" /> 
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

  <?php include 'navbar.php'?>
    <div class="cart" >
        <?php

          echo '<p><h3>Your Shopping Cart</h3></p>';

          if(isset($_SESSION['cart'])) {

            $total = 0;
            echo '<div class = "tbl">';
            echo '<table>';
            echo '<tr>';
            echo '<th>Code</th>';
            echo '<th>Name</th>';
            echo '<th>Quantity</th>';
            echo '<th>Cost</th>';
            echo '</tr>';
            echo '</div>';
            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = $mysqli->query("SELECT product_code, product_name, product_desc, qty, price FROM products WHERE id = ".$product_id);


            if($result){

              while($obj = $result->fetch_object()) {
                $cost = $obj->price * $quantity;
                $total = $total + $cost; 

                echo '<tr>';
                echo '<td>'.$obj->product_code.'</td>';
                echo '<td>'.$obj->product_name.'</td>';
                echo '<td>'.$quantity.'&nbsp;<a class="plus" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="minus" href="update-cart.php?action=remove&id='.$product_id.'">-</a></td>';
                echo '<td>'.$cost.'</td>';
                echo '</tr>';
              }
            }

          }



          echo '<tr>';
          echo '<td colspan="3" align="right">Total</td>';
          echo '<td>'.$total.'</td>';
          echo '</tr>';

          echo '<tr>';
          echo '<td colspan="4" align="right"><a href="update-cart.php?action=empty" class="empty">EMPTY CART</a>&nbsp;<a href="products.php" class="continue">CONTINUE SHOPPING</a>';
          if(isset($_SESSION['username'])) {
            echo '<a href="orders-update.php"><button class = "checkout">Checkout --></button></a>';
          }

          else {
            echo '<a href="login.php"><button style="display: block;
            float: right;
            text-decoration: none;
            color: black;
            padding: 15px 18px 15px 18px;
            background-color: rgb(0, 100, 22);
            border: none;
            border-radius: 100px;
            font-size: 20px;
            cursor: pointer;
            color: white;">Login</button></a>';
          }

          echo '</td>';

          echo '</tr>';
          echo '</table>';
        }

        else {
          echo "<div class = 'no-items'> You have no items in your shopping cart. </div>";
        }





          echo '</div>';
          echo '</div>';
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
