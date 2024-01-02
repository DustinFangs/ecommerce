<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

$username = $_POST["email"];
$password = md5($_POST["pwd"]);
$flag = 'true';

$result = $mysqli->query('SELECT id,email,password from users order by id asc');

if($result === FALSE){
  die(mysql_error());
}

if($result){
  while($obj = $result->fetch_object()){
    if($obj->email === $username && $obj->password === $password) {

      $_SESSION['email'] = $username;
      $_SESSION['id'] = $obj->id;
      header("location:home.php");
    } else {

        if($flag === 'true'){
          redirect();
          $flag = 'false';
        }
    }
  }
}

function redirect() {
  echo '<h1>Invalid Login! Redirecting...</h1>';
  header("Refresh: 10; url=index.php");
}


?>
