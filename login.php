<?php
include 'php/core.php';
include 'php/db_connect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fractals - Login</title>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="icon" href="images/1497557606_Snowflake.ico">

</head>
<body link="#09648c" alink="#064662" vlink="#09648c"> 

<?php include("homeHeader.php"); ?>

<div id="box">
  <br>
  <font size="5" face="Berlin Sans FB">LOGIN</font>
  <div class="hline"></div>
  <?php
    if (loggedin()){
      echo '<br/>You are logged in as '.getuserfield('username').'. <br/><br/><a style="text-decoration:none" href="php/logout.php">Log out.</a><br>';
    }else{  //log in
      include 'loginForm.php';
    }
?>
<br>
</div>
<div id="footer"><font size="2" face="Times New Roman">Copyright © 2017</div>

</body>
</html>