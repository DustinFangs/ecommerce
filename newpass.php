<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {}

?>
    <!DOCTYPE html>
    <html>


    <head>
        <title>Change Password</title>
        <link rel="stylesheet" type="text/css" href="styles\style.css">
    </head>

    <body>
        <div class="whole">
            <form action="newpass1.php" method="post">

                <h2>Change Password</h2>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error">
                        <?php echo $_GET['error']; ?>
                    </p>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <p class="success">
                        <?php echo $_GET['success']; ?>
                    </p>
                <?php } ?>


                <label>New Password: </label>
                <input type="password" name="np" placeholder="New Password" class ="p">
                <br>
                <br>
                <br>
                <input type="text" name="email" value="<?php echo $_GET['email'] ?>" disable style = "display:none;">
                <label>Confirm New Password: </label>
                <input type="password" name="c_np" placeholder="Confirm New Password">
                <br>

                <button type="submit">RESET</button>
               
            </form>
        </div>
    </body>

    </html>

                
