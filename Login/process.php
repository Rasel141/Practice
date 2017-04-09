<?php
session_start();

include "connection.php";
 ?>

<html>
<head>
  <title> Registration </title>
  <meta charset="utf-8">
  <link rel = "stylesheet" type="text/css"  href = "style.css">
</html>

<body>
<header>
  <nav>
      <ul>
          <li><a href="process.php">Home</a></li>
          <li><a href="process.php">signup</a></li>
      </ul>
    </nav>
</header>


    <form method ="POST" action = "login.php">
        <input type = "text" name = "uid" placeholder=" User Id"> <br>
        <input type = "password" name = "pwd" placeholder=" Password"> <br>

        <button type = "submit"> Login </button>
    </form>

    <?php
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if(strpos($url, 'error=empty') !== false){
      echo "Fill out all fields";
    }
    elseif(strpos($url, 'error=username') !== false){
      echo "Username already exist!";
    }

    echo "<br>";
    if (isset($_SESSION['id'])){
      echo $_SESSION['id'];
    }else{
      echo "You are not logged in!";
    }
    ?>

  <br><br><br>

    <form method ="POST" action = "signup.php">
        <input type = "text" name = "first" placeholder=" First Name"> <br>
        <input type = "text" name = "last" placeholder=" Last Name"> <br>
        <input type = "text" name = "uid" placeholder=" User Id"> <br>
        <input type = "password" name = "pwd" placeholder=" Password"> <br>

        <button type = "submit"> Sign Up </button>
    </form>

    <br><br><br>
    <form action="logout.php">
      <button type="submit"> Logout </button>
    </form>







</body>

</html>
