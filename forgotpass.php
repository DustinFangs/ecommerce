<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}


include 'config.php';
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles\style.css">
    <title>Change Password</title>
</head>

<body>
    <div class="whole">
        <h1>Enter Username relate with account </h1>

        <form action="remember_your_pass.php" method="post">
        <div class="textField">
        <label>Email: </label>
                <input type="email" name="email" placeholder="Enter email" required>
                
        </div>
    
            <input type="submit" value="Continue" name="submit" class = "cont">
        </form>

        <div class="forgot-footer">
      <a href="login.php">I remembered my password</a><br>
      <a href="home.php"><i class="fa fa-home"></i> Home</a>
      </div>
    </div>
</body>

</html>