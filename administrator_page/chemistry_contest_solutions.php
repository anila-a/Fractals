<?php 
require 'db_connect.php';
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

	<font size="5" face="Berlin Sans FB">CHEMISTRY SOLUTIONS</font>
	<div class="hline"></div>
<?php
$query = "SELECT user_id, user_solution, user_date FROM contest_chemistry ORDER BY user_date";
$query_run = mysql_query($query);
$counter = 1;
	if (mysql_num_rows($query_run) == 0){
		echo 'No solutions.';
	} else {
		echo '<table width="900" border="0" cellspacing="5" cellpadding="5">';
		echo "<tr><td><b>id</b></td><td><b>Solution</b></td><td><b>Date</b></td></tr>";
		while($row = mysql_fetch_assoc($query_run))
		{
			echo "<tr>
			<td>".$row['user_id']."</td>
			<td><textarea name='' cols='60' row='5'>".$row['user_solution']."</textarea></td>
			<td>".$row['user_date']."</td>
			</tr>";
			$counter+1;
		}
		echo '</table>';
		echo "</form>";
		echo "<form action='chemistry_contest_solutions.php' method='post' name='form'>
		<br><input type='submit' value='Clear'/><br><br>
		</form>";
	}
?>
</div>

<div id="footer"><font size="2" face="Times New Roman">Copyright © 2017</div>

</body>
</html>