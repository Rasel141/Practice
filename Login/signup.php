<?php
session_start();

include "connection.php";

$first_name = $_POST['first'];
$last_name = $_POST['last'];
$user_id = $_POST['uid'];
$user_pass = $_POST['pwd'];

if(empty($first_name)){
  header("Location: process.php?error=empty");
  exit();
}
if(empty($last_name)){
  header("Location: process.php?error=empty");
  exit();
}
if(empty($user_id)){
  header("Location: process.php?error=empty");
  exit();
}
if(empty($user_pass)){
  header("Location: process.php?error=empty");
  exit();
}
else{
  $sql = "SELECT uid FROM user  WHERE  uid ='$user_id' ";
  $result = $conn->query($sql);
  $uidcheck = mysqli_num_rows($result);
if($uidcheck>0){

  header("Locaton: process.php?error=username");
  exit();
}else{

  $sql = "INSERT INTO user(first,last,uid,pwd) VALUES('$first_name','$last_name','$user_id','$user_pass')";
  $result =  $conn->query($sql);
    }
}




 ?>
