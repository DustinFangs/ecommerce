<nav class="top-bar" data-topbar role="navigation">
          <h1 class = "logo"><a href="index.php">Flashpoint.</a></h1>
        <div class = "navigation">
        <ul>
          <li class="active"><a href="home.php">Home</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>

          </ul>
</div>

          <div class = "personal">
          <ul>
         <li> <form action = "search.php" method = "post"><input type="search" name="search" placeholder = "search" class = "search" id = "search" onmouseover = "search()" onmouseout = "searchleave()">
        <input type="submit" value="search" class = "search-button">
        </form></li>
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
        </div>
    </nav>