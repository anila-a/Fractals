<?php
include 'php/core.php';
include 'php/db_connect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fractals - Cat-claw Shape</title>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="icon" href="images/1497557606_Snowflake.ico">

</head>
<body link="#09648c" alink="#064662" vlink="#09648c">

<?php include("homeHeader.php"); ?>

<div id="box">
<br>

	<font size="5" face="Berlin Sans FB">Cat-claw Shape</font>
	<div class="hline"></div>
	<font size="3"><img id="contest_images" src="contest_images/cat-claw-shape.jpg" width="324" height="210" align="right">The pink cat-claw shape is bounded by 3 arcs
			   of circle with the same diameter. The perimeter of the green parallelogram
			   is 42cm long and its height is half the radius of the circles. Then, the
			   area of the pink shape is: <b>larger, smaller </b>or<b> equal</b> to the area of
			   the green parallelogram?<br><br><br><br><br><br>
               Suggest your solution!<br><br>
               <b>Note: </b>Be careful by explaining your solution step by step.</font><br><br>
               
<?php
@$solution = $_POST['solution'];
if($solution != ''){
        $query = "INSERT INTO contest_maths (id, user_id, user_solution, user_date) VALUES
                  ('', '".$_SESSION['user_id']."','$solution','".date('Y/M/D').'/'.time()."')";
        if($query_run = mysql_query($query)){
                echo '<br>Your solution was submitted.';
        }else{
                echo '<br>Sorry, we couldn\'t submit your solution. Try again later.';
    }
}

function participated(){
        $query = "SELECT id FROM contest_maths WHERE user_id = ".$_SESSION['user_id'];
        $query_run = mysql_query($query);
        if(mysql_num_rows ($query_run) == 0){   //checks if the solution is submitted or not
                return false;
        }else{
                return true;
        }
}
if(loggedin()){
        if(!participated()){
                echo '<form action="contests_Cat_Claw_Shape.php" method="post"><textarea name="solution" cols="70" rows="15"></textarea>
                <br><br><input name="" type="submit" value="Submit" /></form>';
        }else{
                echo '<br><br>Your solution can be submitted only once.';
        }
}else{
        echo '<br>Please, <a href="login.php" style="text-decoration:none">Log in</a> first.';
}

?>
                                     
<br>
<br>

</div>

<div id="footer"><font size="2" face="Times New Roman">Copyright © 2017</div>

</body>
</html>