<?php
$mysql_host = 'fdb17.biz.nf';
$mysql_user = '2378351_fractals';
$mysql_pass = 'fractals123';
$mysql_db = '2378351_fractals';

//we use @ to not get an error message when the database is not connected
//we use die() to kill the page when we get error 

if(!@mysql_connect($mysql_host, $mysql_user, $mysql_pass) || !@mysql_select_db($mysql_db)){
die('Could not connect.');
}
?>