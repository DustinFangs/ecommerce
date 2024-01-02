
<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
?>
<?php include "config.php";?>
<?php

$SN = $_POST["delete"];

  $query1=mysqli_query($mysqli,"DELETE FROM users WHERE fname = '$SN';");
  if($query1){
    echo "The data has been deleted!";
    header ("location:admin.php");
  }
  ?>