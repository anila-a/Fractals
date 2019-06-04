<?php require "core_admin.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fractals</title>
<link rel="stylesheet" type="text/css" href="adminStyle.css">
<link rel="icon" href="1497557606_Snowflake.ico">

</head>
<body link="#09648c" alink="#064662" vlink="#09648c">

<?php include("homeHeader.php"); ?>

<div id="box">
<br>

	<font size="5" face="Berlin Sans FB">SOLUTIONS</font>
	<div class="hline"></div>
<?php
if (!loggedin()){
        echo '<p>Please <a style="text-decoration:none" href="adminLogin.php">Log in.</a></p>';
} else {
	echo '<a href="maths_contest_solutions.php" style="text-decoration:none">Maths Contest Solutions</a><br><br>';
	echo '<a href="physics_contest_solutions.php" style="text-decoration:none">Physics Contest Solutions</a><br><br>';
	echo '<a href="chemistry_contest_solutions.php" style="text-decoration:none">Chemistry Contest Solutions</a><br><br>';
	echo '<a href="biology_contest_solutions.php" style="text-decoration:none">Biology Contest Solutions</a><br><br>';
	echo '<a href="programming_contest_solutions.php" style="text-decoration:none">Programming Contest Solutions</a><br><br>';
} ?>
</div>

<div id="footer"><font size="2" face="Times New Roman">Copyright © 2017</div>

</body>
</html>