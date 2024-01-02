<?php
session_start();

include("config.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $email = $_POST['username'];
  
    if (!empty($email)) {

        //read from database
        $query = "SELECT * FROM users WHERE email = '$email' ";
        $result = mysqli_query($mysqli, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user = mysqli_fetch_assoc($result);
                if ($user['email'] === $email) {
                    $_SESSION['id'] = $user['email'];
                    //palitan nyo nalng yung location ng home page natin
                    header("Location: remember_your_pass.php");
                    die;
                }
            }
        }
        echo "Wrong Email!";
    }
}
