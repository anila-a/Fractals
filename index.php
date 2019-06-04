<?php
include 'php/core.php';
include 'php/db_connect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fractals</title>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="icon" href="images/1497557606_Snowflake.ico">
</head>
<body link="#09648c" alink="#064662" vlink="#09648c">

<?php include("homeHeader.php"); ?>

<div id="box">
<br>
	<font size="5" face="Berlin Sans FB">PORTALS</font>
	<div class="hline"></div>
	<font size="3">&nbsp;&nbsp;&nbsp;Choose a portal to have fun with articles, contests and more.</font>
<br>
<br>

<!-- Portal gallery -->	
<div>
<div class="img">
  <a href="maths_portal.php">
    <img src="images/maths_portal.png" width="550" height="550">
  </a>
  <div class="desc">Maths</div>
</div>

<div class="img">
  <a href="physics_portal.php">
    <img src="images/physics_portal.png" width="550" height="550">
  </a>
  <div class="desc">Physics</div>
</div>

<div class="img">
  <a href="chemistry_portal.php">
    <img src="images/chemistry_portal.png" width="550" height="550">
  </a>
  <div class="desc">Chemistry</div>
</div>

<div class="img">
<a href="biology_portal.php">
    <img src="images/biology_portal.png" width="550" height="550">
  </a>
  <div class="desc">Biology</div>
</div>

<div class="img">
<a href="programming_portal.php">
    <img src="images/computer_portal.png" width="550" height="550">
  </a>
  <div class="desc">Programming</div>
</div>
<br>
<br>
<br>
<br>
<!-- Portal gallery end -->

<font size="5" face="Berlin Sans FB">OPEN CONTESTS</font>
		<div class="hline"></div>
                
<?php
$c=0;

//maths
$xml1 = simplexml_load_file('xml/contests_maths.xml');
	foreach($xml1->contest as $contest){
		if( $contest->date_finished != '-' ){
			echo "<a href = '".$contest->link."'>".$contest->title."</a><br/>";
			$c+=1;
		}else{
			break;
		}
	}
       
//physics
$xml2 = simplexml_load_file('xml/contests_physics.xml');
	foreach($xml2->contest as $contest){
		if( $contest->date_finished != '-' ){
			echo "<a href = '".$contest->link."'>".$contest->title."</a><br/>";
			$c+=1;
		}else{
			break;
		}
	}
	
//chemistry
$xml3 = simplexml_load_file('xml/contests_chemistry.xml');
	foreach($xml3->contest as $contest){
		if( $contest->date_finished != '-' ){
			echo "<a href = '".$contest->link."'>".$contest->title."</a><br/>";
			$c+=1;
		}else{
			break;
		}
	}
	
//biology
$xml4 = simplexml_load_file('xml/contests_biology.xml');
	foreach($xml4->contest as $contest){
		if( $contest->date_finished != '-' ){
                echo "<a href = '".$contest->link."'>".$contest->title."</a><br/>";
			$c+=1;
		}else{
			break;
		}
	}
        
//programming
$xml5 = simplexml_load_file('xml/contests_programming.xml');
	foreach($xml5->contest as $contest){
		if( $contest->date_finished != '-' ){
			echo "<a href = '".$contest->link."'>".$contest->title."</a><br/><br><br><br>";
			$c+=1;
		}else{
			break;
		}
	}

if($c == 0){ 
        echo '<br>No open contests yet.';
           }
?>

	<font size="5" face="Berlin Sans FB">WHY FRACTALS?</font>
		<div class="hline"></div>
		<font size="3">&nbsp;&nbsp;&nbsp;Fractals are infinitely complex patterns produced by nature that are 
			self-similar across different scales.They are tricky to define precisely, though most are linked by a set of four common 
			fractal features: infinite intricacy, zoom symmetry, complexity from simplicity and fractional dimensions – all of which 
			will be explained below....<a href="archive_Fractals.php" class="body">load more</a></font>
</div>

<br>

</div>

<div id="footer"><font size="2" face="Times New Roman">Copyright © 2017</div>

</body>
</html>