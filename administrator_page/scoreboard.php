<?php 
require "core_admin.php";
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

	<font size="5" face="Berlin Sans FB">SCOREBOARD</font>
	<div class="hline"></div>
<?php  
if(!loggedin()){
  echo '<p>Please <a href="adminLogin.php" style="text-decoration:none">Log in.</a></p>';
}else{
  $query_id = "SELECT id FROM users ORDER BY id";   
  $query_run = mysql_query($query_id);
  $row1 = mysql_fetch_assoc($query_run);
  $firstID = $row1['id'];
  $change = $_POST['maths_pt'.$firstID];

  if($change != ''){
	  //change the points of the users
	  $query_change = "SELECT id FROM users ORDER BY id";  
	  $query_run = mysql_query($query_change);
	  while($row = mysql_fetch_assoc($query_run)){
		  $id = $row['id'];
		  $maths_pt = $_POST['maths_pt'.$id];
		  $physics_pt = $_POST['physics_pt'.$id];
		  $chemistry_pt = $_POST['chemistry_pt'.$id];
		  $biology_pt = $_POST['biology_pt'.$id];
		  $programming_pt = $_POST['programming_pt'.$id];
		  $total = $maths_pt + $physics_pt + $chemistry_pt + $biology_pt +$programming_pt;
		  
		  $query_update = "UPDATE users SET maths_pt = '$maths_pt', physics_pt = '$physics_pt', chemistry_pt = '$chemistry_pt', biology_pt = '$biology_pt', programming_pt = '$programming_pt', points = '$total' WHERE id = ".$id;
		  $query_run2 = mysql_query($query_update);
	  }
  }
  
  echo "<form action='scoreboard.php' method='POST' name='change_pt'>";
  echo "<input name='' type='submit' value='Save changes' />";
  echo '<table width="850" border="0" cellspacing="5" cellpadding="5">';
  echo '<tr>
  <td><b>ID</b></td>
  <td><b>Username</b></td>
  <td><b>Maths pts</b></td>
  <td><b>Physics pts</b></td>
  <td><b>Chemistry pts</b></td>
  <td><b>Biology pts</b></td>
  <td><b>Programming pts</b></td>
  <td><b>Total</b></td>
  </tr>';
  $query = "SELECT id, username, maths_pt, physics_pt, chemistry_pt, biology_pt, programming_pt, points FROM users ORDER BY id";
  $query_run = mysql_query($query);
  $counter=1;
  while($row = mysql_fetch_assoc($query_run))
	{
		echo "<tr>
		<td>".$row['id']."</td>
		<td>".$row['username']."</td>
		<td><input name='maths_pt".$row['id']."' type='text' size='10' value='".$row['maths_pt']."'/></td>
		<td><input name='physics_pt".$row['id']."' type='text' size='10' value='".$row['physics_pt']."'/></td>
		<td><input name='chemistry_pt".$row['id']."' type='text' size='10' value='".$row['chemistry_pt']."'/></td>
		<td><input name='biology_pt".$row['id']."' type='text' size='10' value='".$row['biology_pt']."'/></td>
		<td><input name='programming_pt".$row['id']."' type='text' size='10' value='".$row['programming_pt']."'/></td>
		<td>".$row['points']."</td>
		</tr>";
		$counter+=1;
	}
  echo '</table>';
  echo "</form>";
}
?>

</div>

<div id="footer"><font size="2" face="Times New Roman">Copyright © 2017</div>

</body>
</html>