<?php
include 'php/core.php';
include 'php/db_connect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fractals - Change Password</title>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="icon" href="images/1497557606_Snowflake.ico">

</head>
<body link="#09648c" alink="#064662" vlink="#09648c">

<?php include("homeHeader.php"); ?>

<div id="box">
<br>

	<font size="5" face="Berlin Sans FB">CHANGE PASSWORD</font>
	<div class="hline"></div>

<?php
if (loggedin()){
  if (isset($_POST['password'])&&isset($_POST['newpassword'])&&isset($_POST['retypenewpassword'])){
          $password = md5($_POST['password']);
          $newpassword = md5($_POST['newpassword']);
          $retypenewpassword = md5($_POST['retypenewpassword']);
          
          if(!empty($password)&&!empty($newpassword)&&!empty($retypenewpassword)){
          
                  $query = "SELECT password FROM users WHERE id = ".$_SESSION['user_id'];
                  $query_run = mysql_query($query);
                  $row = mysql_fetch_assoc($query_run);
                  if($row['password'] == $password){
                          if($newpassword == $retypenewpassword){
                                  $query = "UPDATE users SET password = '$newpassword' WHERE id = ".$_SESSION['user_id'];
                                  if($query_run = mysql_query($query)){
                                        //does not work in biz.nf :
                                                                
                                                echo "<script>location.href='passChangeSuccess.php'</script>";
                                  }else{
                                                echo 'We couldn\'t change your password this time. Try again later.';
                                  }
                                  
                          }else{
                                  echo 'Passwords do not match.';
                          }
                  }else{
                          echo 'Wrong password.';
                  }
          }else{
                  echo 'All fields are required';
          }
  }
}else{
	echo 'Please, <a href="login.php">Log in</a> first.';
}
?>
<form action="changePassword.php" method="post">
   <table width="400" border="0" cellspacing="10" cellpadding="0">
   <tr>
     <td>Password:</td>
	 <td><input name="password" type="password" maxlength="40" /></td>
   </tr>
   <tr>
     <td>New Password:</td>
	 <td><input name="newpassword" type="password" maxlength="40" /></td>
   </tr>
   <tr>
     <td>Retype New Password:</td>
	 <td><input name="retypenewpassword" type="password" maxlength="40" /></td>
   </tr>   
   </table>
<br/>
<input name="submit" type="submit" value="Save" />
</form>

<br>
<br>
</div>
<div id="footer"><font size="2" face="Times New Roman">Copyright © 2017</div>

</body>
</html>