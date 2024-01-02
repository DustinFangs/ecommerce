<?php

include 'config.php';


$email = $_POST["email"];
$pwd = md5($_POST["pwd"]);

if($mysqli->query("INSERT INTO users (email, password) VALUES('$email', '$pwd')")){
	echo 'Data inserted';
	echo '<br/>';
}

header ("location:login.php");

?>
