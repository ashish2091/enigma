<?php 
session_start();
if (!isset($_SESSION['user'])) header("location:../login");
elseif(!isset($_POST['submit'])) header("location:../error.php");
else
{	
	include('../login/abc/config.php');
	$username = $_SESSION['user'];
	$time = date('dHis');
	$con=mysql_connect($datahost, $datauser, $datapassword);
	mysql_select_db("segreta", $con);
	switch ($_POST['level']){
	
	case 0:
	if($_SESSION['level'] <= 0) header("location:../error.php");
	$level0 = $_POST['solution_level_0'];
	$result=mysql_query("SELECT * FROM level_ans_check WHERE level=0");
	$row=mysql_fetch_array($result);
	if($level0 == $row['answer']){
		mysql_query("UPDATE users SET level=1, time='$time' WHERE user='$username'");
  		$_SESSION['level']=1;
		header("location:level1");
	}
	else header("location:level0");
	break;	
	
	
	case 1:
	if($_SESSION['level'] <= 1) header("location:../error.php");
	$level0 = $_POST['solution_level_1'];
	$result=mysql_query("SELECT * FROM level_ans_check WHERE level=1");
	$row=mysql_fetch_array($result);
	if($level0 == $row['answer']){
		mysql_query("UPDATE users SET level=2, time='$time' WHERE user='$username'");
  		$_SESSION['level']=2;
		header("location:level2");
	}
	else header("location:level1");
	break;	
	
	case 2:
	if($_SESSION['level'] < 2 ) header("location:../error.php");
	else{
	$level0 = $_POST['solution_level_2'];
	$result=mysql_query("SELECT * FROM level_ans_check WHERE level=2");
	$row=mysql_fetch_array($result);
	if($level0 == $row['answer']){
		mysql_query("UPDATE users SET level=3, time='$time' WHERE user='$username'");
  		$_SESSION['level']=3;
		header("location:level3");
	}
	else header("location:level2");
	}
	break;
	
	case 3:
	if($_SESSION['level'] < 3 ) header("location:../error.php");
	else{
	$level = $_POST['solution_level_3'];
	$result=mysql_query("SELECT * FROM level_ans_check WHERE level=3");
	$row=mysql_fetch_array($result);
	if($level == $row['answer']){
		mysql_query("UPDATE users SET level=4, time='$time' WHERE user='$username'");
  		$_SESSION['level']=4;
		header("location:level4");
	}
	else header("location:level3");
	}
	break;	
	
	case 4:
	if($_SESSION['level'] < 4 ) header("location:../error.php");
	else{
	$level = $_POST['solution_level_4'];
	$result=mysql_query("SELECT * FROM level_ans_check WHERE level=4");
	$row=mysql_fetch_array($result);
	if($level == $row['answer']){
		mysql_query("UPDATE users SET level=5, time='$time' WHERE user='$username'");
  		$_SESSION['level']=5;
		header("location:level5");
	}
	else header("location:level4");
	}
	break;	
	
	case 5:
	if($_SESSION['level'] < 5 ) header("location:../error.php");
	else{
	$level = $_POST['solution_level_5'];
	$result=mysql_query("SELECT * FROM level_ans_check WHERE level=5");
	$row=mysql_fetch_array($result);
	if($level == $row['answer']){
		mysql_query("UPDATE users SET level=6, time='$time' WHERE user='$username'");
  		$_SESSION['level']=6;
		header("location:level6");
	}
	else header("location:level5");
	}
	break;	
	
	case 6:
	if($_SESSION['level'] < 6 ) header("location:../error.php");
	else{
	$level = $_POST['solution_level_6'];
	$result=mysql_query("SELECT * FROM level_ans_check WHERE level=6");
	$row=mysql_fetch_array($result);
	if($level == $row['answer']){
		mysql_query("UPDATE users SET level=7, time='$time' WHERE user='$username'");
  		$_SESSION['level']=7;
		header("location:level7");
	}
	else header("location:level6");
	}
	break;	
	
	case 7:
	if($_SESSION['level'] < 7 ) header("location:../error.php");
	else{
	$level = $_POST['solution_level_7'];
	$result=mysql_query("SELECT * FROM level_ans_check WHERE level=7");
	$row=mysql_fetch_array($result);
	if($level == $row['answer']){
		mysql_query("UPDATE users SET level=8, time='$time' WHERE user='$username'");
  		$_SESSION['level']=8;
		header("location:level8");
	}
	else header("location:level7");
	}
	break;	
	
	case 8:
	if($_SESSION['level'] < 8 ) header("location:../error.php");
	else{
	$level = $_POST['solution_level_8'];
	$result=mysql_query("SELECT * FROM level_ans_check WHERE level=8");
	$row=mysql_fetch_array($result);
	if($level == $row['answer']){
		mysql_query("UPDATE users SET level=9, time='$time' WHERE user='$username'");
  		$_SESSION['level']=9;
		header("location:level9");
	}
	else header("location:level8");
	}
	break;	
	
	case 9:
	if($_SESSION['level'] < 9 ) header("location:../error.php");
	else{
	$level = $_POST['solution_level_9'];
	$result=mysql_query("SELECT * FROM level_ans_check WHERE level=9");
	$row=mysql_fetch_array($result);
	if($level == $row['answer']){
		mysql_query("UPDATE users SET level=10, time='$time' WHERE user='$username'");
  		$_SESSION['level']=10;
		header("location:level10");
	}
	else header("location:level9");
	}
	break;	
	
	case 10:
	if($_SESSION['level'] < 10 ) header("location:../error.php");
	else{
	$level = $_POST['solution_level_10'];
	$result=mysql_query("SELECT * FROM level_ans_check WHERE level=10");
	$row=mysql_fetch_array($result);
	if($level == $row['answer']){
		mysql_query("UPDATE users SET level=11, time='$time' WHERE user='$username'");
  		$_SESSION['level']=11;
		header("location:level11");
	}
	else header("location:level10");
	}
	break;	
	
	case 11:
	if($_SESSION['level'] < 11 ) header("location:../error.php");
	else{
	$level = $_POST['solution_level_11'];
	$result=mysql_query("SELECT * FROM level_ans_check WHERE level=11");
	$row=mysql_fetch_array($result);
	if($level == $row['answer']){
		mysql_query("UPDATE users SET level=12, time='$time' WHERE user='$username'");
  		$_SESSION['level']=12;
		header("location:level12");
	}
	else header("location:level11");
	}
	break;	
	
	case 12:
	if($_SESSION['level'] < 12 ) header("location:../error.php");
	else{
	$level = $_POST['solution_level_12'];
	$result=mysql_query("SELECT * FROM level_ans_check WHERE level=12");
	$row=mysql_fetch_array($result);
	if($level == $row['answer']){
		mysql_query("UPDATE users SET level=13, time='$time' WHERE user='$username'");
  		$_SESSION['level']=13;
		header("location:level13");
	}
	else header("location:level12");
	}
	break;	
	
	case 13:
	if($_SESSION['level'] < 13 ) header("location:../error.php");
	else{
	$level = $_POST['solution_level_13'];
	$result=mysql_query("SELECT * FROM level_ans_check WHERE level=13");
	$row=mysql_fetch_array($result);
	if($level == $row['answer']){
		mysql_query("UPDATE users SET level=14, time='$time' WHERE user='$username'");
  		$_SESSION['level']=14;
		header("location:level14");
	}
	else header("location:level13");
	}
	break;	
	
	case 14:
	if($_SESSION['level'] < 14 ) header("location:../error.php");
	else{
	$level = $_POST['solution_level_14'];
	$result=mysql_query("SELECT * FROM level_ans_check WHERE level=14");
	$row=mysql_fetch_array($result);
	if($level == $row['answer']){
		mysql_query("UPDATE users SET level=15, time='$time' WHERE user='$username'");
  		$_SESSION['level']=15;
		header("location:level15");
	}
	else header("location:level14");
	}
	break;	
	
	}
	mysql_close($con);
		
}
?>
