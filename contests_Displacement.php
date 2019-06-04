<?php
include 'php/core.php';
include 'php/db_connect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fractals - Displacement</title>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="icon" href="images/1497557606_Snowflake.ico">

</head>
<body link="#09648c" alink="#064662" vlink="#09648c">

<?php include("homeHeader.php"); ?>

<div id="box">
<br>

	<font size="5" face="Berlin Sans FB">Displacement</font>
	<div class="hline"></div>
	<font size="3">A child walks 5 m east, then 3 m north, then 1 m east.<br><br>
                       a) What is the magnitude of the child's displacement?<br>
                       b) What is the direction of the child's displacement?<br><br><br><br><br><br>
               <b>Solution:</b><br><br>&nbsp;&nbsp;&nbsp;a) The child's total distance is 5 + 3 + 1 = 9, however 
               the displacement is the straight-line distance from the child's initial position to its final position. 
               It is best to start by drawing a diagram.
               <p><img id="contest_images" src="contest_images/example.gif" width="324" height="180" align="right"/>
               &nbsp;&nbsp;&nbsp;As you can see in this diagram, the displacement is equivalent to the hypotenuse of a right 
               triangle whose legs are 6 m and 3 m long. So, we can calculate the magnitude of the displacement using the Pythagorean theorem:
               d = sqrt(Δx2 + Δy2) = sqrt(62 + 32) = sqrt(45) = 6.7 m<br>
               <p>b) The child's direction is equal to the angle formed between d and Δx, which we will call θ. Here we must use some trigonometry. So, we will use the fact that tanθ = opposite/adjacent to find θ:
               tanθ = Δy/Δx
               θ = tan-1(Δy/Δx) = tan-1(3/6) = tan-1(0.5) = 26.5651o _ 26.5o north of east

               Notice the direction takes the form of an angle, 26.5o, and a reference for the angle, north of east. The second part is given so that it is clear what axis the angle is being measured from and in what 
               direction from the axis. North of east means that the angle is measured from the east, or positive x, axis, and is north, the positive y direction, from this axis.          
               
<br>
<br>

</div>

<div id="footer"><font size="2" face="Times New Roman">Copyright © 2017</div>

</body>
</html>