<?php
include 'php/core.php';
include 'php/db_connect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fractals - Profile</title>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="icon" href="images/1497557606_Snowflake.ico">

</head>
<body link="#09648c" alink="#064662" vlink="#09648c">

<?php include("homeHeader.php"); ?>

<div id="box">
  <br>
  <font size="5" face="Berlin Sans FB">PROFILE</font>
  <div class="hline"></div>
  <br/>
  <?php
    if(loggedin()){
      echo 'Hello '.getuserfield('name').' '.getuserfield('surname').'.<br><br>';
      echo 'You have '.getuserfield('points').' total points.<br><br>';
      echo 'Change password <a style="text-decoration:none" href="changePassword.php">here.</a><br><br>';
    } else {
      echo 'Please <a style="text-decoration:none" href="login.php">Log in</a> to access your profile.<br><br>';
    }     
?>
</div>


<div id="footer"><font size="2" face="Times New Roman">Copyright © 2017</div>

</body>
</html>