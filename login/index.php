<?php 
session_start();
if (isset($_SESSION['user'])) header("location:../");
?>
<html>
<head>
    <meta property="og:title" content="Radiance online" />
    <meta property="og:site_name" content="Radiance" />
    <meta property="og:url" content="http://radianceiitb.org" />
    <meta property="og:type" content="competition" />
    <meta property="og:description" content="ABC" />    
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
   
    <link rel="stylesheet" href="../style.css">    
     <script src="../js/libs/modernizr-2.0.6.min.js"></script>
    

 
</head>
<body >	
    <?php
    include("header.php");
    ?>
    
     
    <link href="abc/smirk-v4.css" media="screen" rel="stylesheet" type="text/css">

<script src="abc/jquery.js" type="text/javascript" charset="utf-8"></script>

<script src="abc/ro_home.js" type="text/javascript"></script>

  <div id="box" style="margin-left:35%;margin-top:10%;">
<div id="home-content">
	
	<div id="home-top">
		<a id="sign-up-link" class="tab signup" href="#">Sign up</a>
		<a id="log-in-link" class="tab tab-selected" href="#"><img src="abc/btn-close-login-up.png"></a>
	</div>
	
	<div style="overflow: hidden; height: 250px; display: block;" id="sign-in-drawer" class="module">  		
   		<iframe style="height: 250px; display: inline;" id="smirk-login-form-home" src="abc/auth_frame.htm" frameborder="0" scrolling="no">no iframe support!</iframe>     
   		<div style="display: none; height: 520px;" id="smirk-signup-form">
   		  <p style="font-size: 13px; font-weight: bold; margin: 10px 0px 5px 8px;">New account</p>
 	   		<iframe id="smirk-signup-form-newbie" src="abc/auth_frame_002.htm" style="height: 510px;" frameborder="0" scrolling="no">no iframe support!</iframe>   	 
   		</div>
    </div></div></div>
    <?php include("../footer.php"); ?>

    
  

</body>
</html>