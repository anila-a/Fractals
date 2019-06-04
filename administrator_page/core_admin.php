<?php
//ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
$http_referer = @$_SERVER['HTTP_REFERER'];  //tells us the page which we have come from


function loggedin(){
	if(isset($_SESSION['admin_id'])&& !empty($_SESSION['admin_id'])){
		return true;
	}else{
	return false;}
}
?>