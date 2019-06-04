<?php
include 'php/core.php';
include 'php/db_connect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fractals - Scoreboard</title>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="icon" href="images/1497557606_Snowflake.ico">

</head>
<body link="#09648c" alink="#064662" vlink="#09648c">

<?php include("homeHeader.php"); ?>

<div id="box">
<br>

	<font size="5" face="Berlin Sans FB">SCOREBOARD</font>
	<div class="hline"></div>
	<font size="3">&nbsp;&nbsp;&nbsp;Ranking of all users is shown below, according to their points in each portal.</font>
<br>
<br>

<!-- Maths -->

<button class="accordion">Maths Portal</button>
<div class="panel">
  <p><?php
echo '<table width="600" border="0" cellspacing="5" cellpadding="5">';
echo '<tr><td><b>Ranking</b></td><td><b>Name</b></td><td><b>Surname</b></td><td><b>Points</b></td></tr>';

$query = "SELECT name, surname, maths_pt FROM users ORDER BY maths_pt DESC";
$query_run = mysql_query($query);
$counter = 1;
while($row = mysql_fetch_assoc($query_run))
 {
	echo '<tr>
	<td>'.$counter.'</td>
	<td>'.$row['name'].'</td>
	<td>'.$row['surname'].'</td>
	<td>'.$row['maths_pt'].'</td>
	</tr>';
	$counter+=1;
 }
echo '</table>';
?></p>
</div>

<!-- Physics -->

<button class="accordion">Physics Portal</button>
<div class="panel">
  <p><?php
echo '<table width="600" border="0" cellspacing="5" cellpadding="5">';
echo '<tr><td><b>Ranking</b></td><td><b>Name</b></td><td><b>Surname</b></td><td><b>Points</b></td></tr>';

$query = "SELECT name, surname, physics_pt FROM users ORDER BY physics_pt DESC";
$query_run = mysql_query($query);
$counter = 1;
while($row = mysql_fetch_assoc($query_run))
 {
	echo '<tr>
	<td>'.$counter.'</td>
	<td>'.$row['name'].'</td>
	<td>'.$row['surname'].'</td>
	<td>'.$row['physics_pt'].'</td>
	</tr>';
	$counter+=1;
 }
echo '</table>';
?></p>
</div>

<!-- Chemistry -->

<button class="accordion">Chemistry Portal</button>
<div class="panel">
  <p><?php
echo '<table width="600" border="0" cellspacing="5" cellpadding="5">';
echo '<tr><td><b>Ranking</b></td><td><b>Name</b></td><td><b>Surname</b></td><td><b>Points</b></td></tr>';

$query = "SELECT name, surname, chemistry_pt FROM users ORDER BY chemistry_pt DESC";
$query_run = mysql_query($query);
$counter = 1;
while($row = mysql_fetch_assoc($query_run))
 {
	echo '<tr>
	<td>'.$counter.'</td>
	<td>'.$row['name'].'</td>
	<td>'.$row['surname'].'</td>
	<td>'.$row['chemistry_pt'].'</td>
	</tr>';
	$counter+=1;
 }
echo '</table>';
?></p>
</div>

<!-- Biology --> 

<button class="accordion">Biology Portal</button>
<div class="panel">
  <p><?php
echo '<table width="600" border="0" cellspacing="5" cellpadding="5">';
echo '<tr><td><b>Ranking</b></td><td><b>Name</b></td><td><b>Surname</b></td><td><b>Points</b></td></tr>';

$query = "SELECT name, surname, biology_pt FROM users ORDER BY biology_pt DESC";
$query_run = mysql_query($query);
$counter = 1;
while($row = mysql_fetch_assoc($query_run))
 {
	echo '<tr>
	<td>'.$counter.'</td>
	<td>'.$row['name'].'</td>
	<td>'.$row['surname'].'</td>
	<td>'.$row['biology_pt'].'</td>
	</tr>';
	$counter+=1;
 }
echo '</table>';
?></p>
</div>

<!-- Programming --> 

<button class="accordion">Programming Portal</button>
<div class="panel">
  <p><?php
echo '<table width="600" border="0" cellspacing="5" cellpadding="5">';
echo '<tr><td><b>Ranking</b></td><td><b>Name</b></td><td><b>Surname</b></td><td><b>Points</b></td></tr>';

$query = "SELECT name, surname, programming_pt FROM users ORDER BY programming_pt DESC";
$query_run = mysql_query($query);
$counter = 1;
while($row = mysql_fetch_assoc($query_run))
 {
	echo '<tr>
	<td>'.$counter.'</td>
	<td>'.$row['name'].'</td>
	<td>'.$row['surname'].'</td>
	<td>'.$row['programming_pt'].'</td>
	</tr>';
	$counter+=1;
 }
echo '</table>';
?></p>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
</script>

<br>
</div>
<div id="footer"><font size="2" face="Times New Roman">Copyright © 2017</div>

</body>
</html>