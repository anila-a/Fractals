<?php require "core_admin.php";
include 'db_connect.php';
?>
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

	<font size="5" face="Berlin Sans FB">ADMIN LOGIN</font>
	<div class="hline"></div>
<?php
$match = 'fractals';

if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password_hash = md5($password);
	
	if (!empty($username) && !empty($password)) {
		if ($username==$match && $password==$match){
                        $_SESSION['admin_id']=1;  
			echo "<script>location.href='adminHome.php'</script>";
		} else {
			echo 'Invalid username or password.';
		}
	} else {
		echo 'All fields are required.';
	}
} 
?>

<form action="/administrator_page/adminLogin.php" method="post" >
  <table width="400" border="0" cellspacing="10" cellpadding="0">
  <tr>
    <td>Username:</td>
    <td><input name="username" type="text" maxlength="40" /></td>
  </tr>
  <tr>
    <td>Password:</td>
    <td><input name="password" type="password" maxlength="40" /></td>
  </tr>
</table>
<br/>
<input type="submit" value="Log in" />
</form>
<br/>
<br>
</div>

<div id="footer"><font size="2" face="Times New Roman">Copyright © 2017</div>
</body>
</html>

