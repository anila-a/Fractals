<?php
include 'php/core.php';
include 'php/db_connect.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fractals - Register</title>
<link rel="stylesheet" type="text/css" href="styles/style2.css">
<link rel="icon" href="images/1497557606_Snowflake.ico">

</head>
<body link="#09648c" alink="#064662" vlink="#09648c">

<?php include("homeHeader.php"); ?>

<div id="box">
<br>

	<font size="5" face="Berlin Sans FB">REGISTER</font>
	<div class="hline"></div>
<?php

if(!loggedin()){
	//check if each field is submitted
	if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['retype_password'])&&isset($_POST['name'])&&isset($_POST['surname'])&&isset($_POST['email'])){
		$name = $_POST['name'];
		$surname = $_POST['surname'];
                $retype_password = $_POST['retype_password'];
                $password = $_POST['password'];
		$password_hash = md5($password);
		$username = $_POST['username'];
		$email = $_POST['email'];
		
	if(!empty($name)&&!empty($surname)&&!empty($password)&&!empty($retype_password)&&!empty($username)&&!empty($email)){
			if($password != $retype_password){
				echo 'Passwords do not match.';
			}else{
				// check if the username exists
				$query = "SELECT username FROM users WHERE username = '$username'";
				$query_run = mysql_query($query);
				if(mysql_num_rows($query_run) == 1){  //if there already exists a username like that
				echo 'The username already exists.';
				}else{
					//register the user
					$query = "INSERT INTO users VALUES 
					('', '".mysql_real_escape_string($name)."', '".mysql_real_escape_string($surname)."', '".mysql_real_escape_string($password_hash)."', '".mysql_real_escape_string($username)."', '".mysql_real_escape_string($email)."', 0, 0 ,0 ,0 ,0 ,0)";
					if($query_run = mysql_query($query)){
						//does not work in biz.nf :
						//header('Location: registerSuccess.php');
						echo "<script>location.href='registerSuccess.php'</script>";
					}else{
						echo 'We couldn’t register you this time. Try again later.';
					}
				}
			}
			
		}else{
			echo 'All fields are required';
		}
	}
	//register the user
?>
<form action="register.php" method="post" >
  <table width="400" border="0" cellspacing="10" cellpadding="0">
  <tr>
    <td>Name:</td>
    <td><input name="name" type="text" maxlength="40" /></td>
  </tr>
  <tr>
    <td>Surname:</td>
    <td><input name="surname" type="text" maxlength="40" /></td>
  </tr>
  <tr>
    <td>Username:</td>
    <td><input name="username" type="text" maxlength="40" /></td>
  </tr>
  <tr>
    <td>Password:</td>
    <td><input name="password" type="password" maxlength="40" /></td>
  </tr>
  <tr>
    <td>Retype password:</td>
    <td><input name="retype_password" type="password" maxlength="40" /></td>
  </tr>
  <tr>
    <td>Email:</td>
    <td><input name="email" type="text" maxlength="40" /></td>
  </tr>
</table>
<br/>
<p id="warning_msg"><i></i></p>
<p><b>Note:</b> All the fields are required.</p><br/>
<input name="submit" type="submit" value="Register" />
  </form>
	
<?php
}else if (loggedin()){
	echo 'You are already registered and logged in.';
}
?>


<br>
<br>
</div>
<div id="footer"><font size="2" face="Times New Roman">Copyright © 2017</div>

</body>
</html>