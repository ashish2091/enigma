<?php
session_start();
include('config.php');
$user = $_POST['username'];
$passwd = $_POST['password'];
$email = $_POST['email'];
$time = date('dHis');
$con=mysql_connect($datahost, $datauser, $datapassword);
mysql_select_db("segreta", $con);

if($_POST['tag'] == 'signin')
{
if (user_login($user, $passwd)): ?>

<html><head>
<style>
#lb_form_submit {
	clear:both;
	background-color:#005481;
	border:none;
	color:#000;
	cursor: pointer;
	font-weight: normal;
	font-size: 11px;
	text-transform: uppercase;
	overflow: visible;
	padding: 9px 30px;
	text-align: center;	
	-webkit-border-top-right-radius: 4px;
	-webkit-border-top-left-radius: 4px;
	-webkit-border-bottom-right-radius: 4px;
	-webkit-border-bottom-left-radius: 4px;
	-moz-border-radius: 4px 4px 4px 4px;
}
</style>
<br />
<h1 align="center" style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">Welcome<br />
<?php echo $user; ?>
	<br />
<br /><button id='lb_form_submit'><a href='../../index.php' target="_parent"><font color="#FFFFFF">Start</font></a>
</h1>
<?php

else:
{
	echo $user."Incorrect Login Credentials";
}
endif;
}

if($_POST['tag'] == 'signup'){
	if(userexist($user, $email) == 1) echo "username already exist";
	elseif(userexist($user, $email) == 2) echo "email-id already exist";
	elseif(userexist($user, $email) == 3) 
	{create_account($user, $passwd, $email, $time);
	$_SESSION['level'] = 0;
	$_SESSION['user'] = $user;}
	
	if (user_login($user, $passwd)): ?>

<html><head>
<style>
#lb_form_submit {
	clear:both;
	background-color:#005481;
	border:none;
	color:#000;
	cursor: pointer;
	font-weight: normal;
	font-size: 11px;
	text-transform: uppercase;
	overflow: visible;
	padding: 9px 30px;
	text-align: center;	
	-webkit-border-top-right-radius: 4px;
	-webkit-border-top-left-radius: 4px;
	-webkit-border-bottom-right-radius: 4px;
	-webkit-border-bottom-left-radius: 4px;
	-moz-border-radius: 4px 4px 4px 4px;
}
</style>
<br />
<h1 align="center" style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">Welcome<br />
<?php echo $user; ?>
	<br />
<br /><button id='lb_form_submit'><a href='../../index.php' target="_parent"><font color="#FFFFFF">Start</font></a>
</h1>
<?php endif; 
	
	}

else ;
function userexist($user, $email){
	$result=mysql_query("SELECT * FROM users");
while($row=mysql_fetch_array($result))
  {
	  if($user == $row['user']) return 1;
      elseif ($email == $row['email']) return 2;
  }	
  return 3;
}

function user_login($user, $passwd){
	$result=mysql_query("SELECT * FROM users WHERE user='$user'");
	$row=mysql_fetch_array($result);
	if($passwd == $row['passwd']){$_SESSION['level'] = $row['level'];$_SESSION['user'] = $user; return true;}
	else return false;
	
/*
while($row=mysql_fetch_array($result))
  {
	  if($user == $row['user']) 
	  {
      if($passwd == $row['passwd']) return 2;
	  }
  }	*/
}

function create_account($user, $passwd, $email, $time){
	mysql_query("INSERT INTO users (serial, user, passwd, email, time)
VALUES ('$serial', '$user', '$passwd', '$email', '$time')");
}


?>
