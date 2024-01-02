<?php

session_start();


  include("config.php");

echo 'test';
if (isset($_POST['np'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$np = validate($_POST['np']);
	$c_np = validate($_POST['c_np']);
    
    // if(empty($op)){
    //   header("Location: newpass.php?error=Old Password is required");
	  // exit();
    // }
     if(empty($np)){
      header("Location: newpass.php?error=New Password is required");
	  exit();
    }else if($np !== $c_np){
      header("Location: newpass.php?error=The confirmation password  does not match");
	  exit();
    }else {
    // hashing the password
    $np = md5($np);
       $email = $_POST['email'];

        // $sql = "SELECT password
        //         FROM users WHERE 
        //         id='$id' AND password='$op'";

        // $result = mysqli_query($mysqli, $sql);
        	
        	$sql_2 = "UPDATE users
        	          SET password='$np'
        	          WHERE email='$email'";

        	mysqli_query($mysqli, $sql_2);
        	header("Location: login.php");
          echo "Nice";
	        exit();


    }
}else{
	header("Location: newpass.php");
	exit();
}
