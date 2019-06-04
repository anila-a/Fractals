<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fractals - Kaprekar's Constant 6174</title>
<link rel="stylesheet" type="text/css" href="styles/style2.css">
<link rel="icon" href="images/1497557606_Snowflake.ico">

</head>
<body>

<?php include("homeHeader.php"); ?>

<div id="box">
<br>

	<font size="5" face="Berlin Sans FB">Kaprekar's Constant 6174</font>
	<div class="hline"></div>
	<font size="3">&nbsp;&nbsp;&nbsp;In 1949 the mathematician D. R. Kaprekar from Devlali, India, devised a process now known as Kaprekar's operation. First choose a four digit number where 
                the digits are not all the same (that is not 1111, 2222,...). Then rearrange the digits to get the largest and smallest numbers these digits can make. Finally, subtract the smallest 
                number from the largest to get a new number, and carry on repeating the operation for each new number.</font>
	<font size="3"><p><img id="archive_images" src="archive_images/6174.png" width="324" height="217" align="right">&nbsp;&nbsp;&nbsp;It is a simple operation, but Kaprekar discovered it led to a surprising result. Let's 
                try it out, starting with the number 2005, the digits of last year. The maximum number we can make with these digits is 5200, and the minimum is 0025 or 25 (if one or more of the digits 
                is zero, embed these in the left hand side of the minimum number). The subtractions are:</p></font>
	<font size="3">5200 - 0025 = 5175<br>7551 - 1557 = 5994<br>9954 - 4599 = 5355<br>5553 - 3555 = 1998<br>9981 - 1899 = 8082<br>8820 - 0288 = 8532<br>8532 - 2358 = 6174<br>7641 - 1467 = 6174</font>
        <p><font size="3">&nbsp;&nbsp;&nbsp;When we reach 6174 the operation repeats itself, returning 6174 every time. We call the number 6174 a kernel of this operation. So 6174 is a kernel for Kaprekar's operation, 
                but is this as special as 6174 gets? Well not only is 6174 the only kernel for the operation, it also has one more surprise up its sleeve. Let's try again starting with a different number, say 1789.</font></p>
        <p><font size="3">9871 - 1789 = 8082<br>8820 - 0288 = 8532<br>8532 - 2358 = 6174</font></p>
        <p><font size="3">&nbsp;&nbsp;&nbsp;We reached 6174 again!</font></p>
<br>
                <a href="archive_Fractals.php" class="previous round">&#8249;</a>
                <a href="archive_Fractals.php" class="next round" hspace="20">&#8250;</a>
<br>
<br>

</div>

<div id="footer"><font size="2" face="Times New Roman">Copyright © 2017</div>

</body>
</html>
