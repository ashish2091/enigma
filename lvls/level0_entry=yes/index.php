<?php 
session_start();
if (!isset($_SESSION['user'])) header("location:login");
$username = $_SESSION['user'];
	$con=mysql_connect("localhost", "ashish", "ashish");
	mysql_select_db("segreta", $con);
mysql_query("UPDATE users SET level=1 WHERE user='$username'");
  		$_SESSION['level']=1;
		header("location:../level1");
?>
