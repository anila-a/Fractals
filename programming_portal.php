<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fractals - Programming Portal</title>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="icon" href="images/1497557606_Snowflake.ico">

</head>
<body link="#09648c" alink="#064662" vlink="#09648c">

<?php include("homeHeader.php"); ?>

<div id="mySidenav" class="sidenav">
  <a href="maths_portal.php" id="maths_portal">Maths</a>
  <a href="physics_portal.php" id="physics_portal">Physics</a>
  <a href="chemistry_portal.php" id="chemistry_portal">Chemistry</a>
  <a href="biology_portal.php" id="biology_portal">Biology</a>
  <a href="programming_portal.php" id="programming_portal">Programming</a>
</div>

<div id="box">
<br>
	<font size="5" face="Berlin Sans FB">CONTESTS</font>
	<div class="hline"></div>
	<font size="3">
                        <?php  //prepares the table with data from contests_programming.xml
                        $xml = simplexml_load_file('xml/contests_programming.xml');
                        echo '<table width="600" border="0" cellspacing="5" cellpadding="5">';
                        echo '<tr>
                        <td><b>Contest</b></td>
                          <td><b>Date</b></td>
                          <td><b>Winner 1</b></td>
                          <td><b>Winner 2</b></td>
                          <td><b>Winner 3</b></td>';
                        foreach($xml->contest as $contest){
                        echo '<tr><td><a style="text-decoration:none" href="'.$contest->link.'">'.$contest->title.'</a><td>'.$contest->date_started.'-'.$contest->date_finished.'</td><td>'.$contest->winner1.'</td><td>'.$contest->winner2.'</td><td>'.$contest->winner3.'</td></tr>';
                        }
                        echo '</table>';
                        ?>
                </font>
<br>
<br>
	<font size="5" face="Berlin Sans FB">ARTICLES</font>
	<div class="hline"></div>
		<font size="3">
                        <?php  //prepares the table with data from archive_programming.xml
                        $xml = simplexml_load_file('xml/archive_programming.xml');
                        echo '<table width="600" border="0" cellspacing="5" cellpadding="5">';

                        foreach($xml->article as $article){
                        echo '<tr><td width="110">' . $article->date_uploaded . '</td><td width="475"><a style="text-decoration:none" href="' . $article->link . '">' . $article->title . '</a></td></tr>';
                        }

                        echo '</table>';
                        ?>
                </font>
<br>
<br>
	<font size="5" face="Berlin Sans FB">VIDEOS</font>
	<div class="hline"></div>
		<font size="3">
                        <?php  //prepares the table with data from video_programming.xml
                        $xml = simplexml_load_file('xml/video_programming.xml');
                        echo '<table width="600" border="0" cellspacing="5" cellpadding="5">';

                        foreach($xml->video as $video){
                        echo '<tr><td width="110">' . $video->date_uploaded . '</td><td width="475"><a style="text-decoration:none" href="' . $video->link . '">' . $video->title . '</a></td></tr>';
                        }

                        echo '</table>';
                        ?>
                </font>
<br>
</div>

<div id="footer"><font size="2" face="Times New Roman">Copyright © 2017</div>

</body>
</html>