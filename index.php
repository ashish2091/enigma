<?php 
session_start();
if (!isset($_SESSION['user'])) header("location:login");
elseif ($_SESSION['level']==0)header("location:lvls/level0_entry=no");
else header("location:lvls/level".$_SESSION['level']);
?>
