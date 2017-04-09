<?php
session_start();

include "connection.php";

$user_id = $_POST['uid'];
$user_pass = $_POST['pwd'];

if(empty($user_id)){
  header("Location: process.php?error=empty" );
  exit();
}
else if(empty($user_pass)){
  header("Location: process.php?error=empty" );
  exit();
}
else{
  $sql = "SELECT * FROM user WHERE uid = '$user_id' AND pwd = '$user_pass'";
  $result =  $conn->query($sql);
}



if(!$row = $result->fetch_assoc()){
  echo "Your username or password is incorrect!";
}else{
  //echo  "You are logged in!";
  $_SESSION['id'] = $row['id'];
}

 ?>
