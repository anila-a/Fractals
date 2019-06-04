<?php
include 'php/core.php';
include 'php/db_connect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fractals - Sum of Matrices</title>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="icon" href="images/1497557606_Snowflake.ico">

</head>
<body link="#09648c" alink="#064662" vlink="#09648c">

<?php include("homeHeader.php"); ?>

<div id="box">
<br>

	<font size="5" face="Berlin Sans FB">Sum of matrices</font>
	<div class="hline"></div>
	<font size="3">Write a Java program to add two matrices of the same size.<br><br><br>
			   <br><br><br>Suggest your solution!<br><br>
               <b>Note: </b>Be careful by explaining your solution step by step. Your solution will be submitted only once.</font><br><br>
               
<?php
@$solution = $_POST['solution'];
if($solution != ''){
        $query = "INSERT INTO contest_programming (user_id, user_solution) VALUES
                  ('".$_SESSION['user_id']."','$solution')";
        if($query_run = mysql_query($query)){
                echo '<br>Your solution was submitted.';
        }else{
                echo '<br>Sorry, we couldn\'t submit your solution. Try again later.';
    }
}

function participated(){
        $query = "SELECT id FROM contest_programming WHERE user_id = ".$_SESSION['user_id'];
        $query_run = mysql_query($query);
        if(mysql_num_rows ($query_run) == 0){   //checks if the solution is submitted or not
                return false;
        }else{
                return true;
        }
}
if(loggedin()){
        if(!participated()){
                echo '<form action="contests_Sum_Of_Matrices.php" method="post"><textarea name="solution" cols="70" rows="15"></textarea>
                <br><br><input name="" type="submit" value="Submit" /></form>';
        }else{
                echo '<br>Your solution can be submitted only once.';
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