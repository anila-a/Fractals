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

	<font size="5" face="Berlin Sans FB">Users</font>
	<div class="hline"></div>
<?php
if(!loggedin()){
  echo '<p>Please <a style="text-decoration:none" href="adminLogin.php">Log in.</a></p>';
} else { //prepares the table with data from database
@$sort_type = 'id';
@$deleted_user = $_GET["del_user"];
  if($deleted_user!=''){
    //delete the user
    $queryDel = "DELETE FROM users WHERE id = ".$deleted_user;
    $query_run = mysql_query($queryDel);
  }
  echo '<table width="900" border="0" cellspacing="5" cellpadding="5">';
  echo '<tr><td><b>ID</b></td><td><b>Username</b></td><td><b>Name</b></td><td><b>Surname</b></td><td><b>Email</b></td><td><b>Points</b></td></tr>';
  $query = "SELECT id, username, name, surname, email, points FROM users ORDER BY ".$sort_type;
  $query_run = mysql_query($query);
  while($row = mysql_fetch_assoc($query_run))
  {
        echo '<tr><td>'.$row['id'].'</td><td>'.$row['username'].'</td><td>'.$row['name'].'</td><td>'.$row['surname'].'</td><td>'.$row['email'].'</td><td>'.$row['points'].'</td><td>'.$row['lastloggedin']."</td><td>
        <form action='admin_users.php' method='get' name='del_user'>
        <input type='hidden' name='del_user' value = '".$row['id']."'></label>
        <input type='submit' value='Delete'/></form></td></tr>";
  }
  echo '</table>';
}
?>
</section>
</div>

<div id="footer"><font size="2" face="Times New Roman">Copyright © 2017</div>

</body>
</html>