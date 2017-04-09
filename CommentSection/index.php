
<?php
date_default_timezone_set('Asia/Dhaka');
include 'comment.inc.php';
include 'dba.inc.php';

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Comment section</title>
    <link rel="stylesheet" type ="text/css" href="style.css">
  </head>
  <body>
    <!<video src="Official Trailer Bangla Movie Tukhor - Operation Club D Shib.mp4" autoplay poster="posterimage.jpg">

    </video>
    <br>
<br>
    <?php
    echo "<form method='POST' action = '".setComments($conn)."'>
    <input type = 'hidden' name = 'uid' value='Anonymous'>
    <input type = 'hidden' name =  'date' value='".date('Y-m-d H:i:s')."'>
    <textarea name ='message'></textarea><br>
    <button type='submit' name='commentSubmit'>Comment</button>


    </form>";

getComments($conn);
     ?>

  </body>
</html>
