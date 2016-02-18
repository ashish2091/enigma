<?php 
session_start();
if (!isset($_SESSION['user'])) header("location:../../login");
elseif($_SESSION['level'] < 2) header("location:../../error.php");
?>
<?php if(isset($_SESSION['user'])):?>
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
   
    <link rel="stylesheet" href="../../style.css">    
     <script src="../../js/libs/modernizr-2.0.6.min.js"></script>
    

 
</head>
<body >	
    <?php
    include("../header.php");
    ?>
    
     
    
 <div id="main" >
 <?php include("../slider.php"); ?>
   <div id="box" style="margin-left:30%;margin-top:2%;margin-right:30%;display:block;width:40%;height:20px%;text-align:center;color:#000"><br><h2><u>Level 2</u></h2></div> 
   <div id="box" style="margin-left:30%;;margin-bottom:12%;margin-right:30%;display:block;width:40%;height:60%;text-align:center;">
  <h2>
 <div style="margin-left:auto;margin-right:auto;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;height:90%;background-color:#FFF;width:70%;border:thin #666;border:thin rgba(0,0,0,0.3) solid;box-shadow: 0px 5px 20px #999;"> 
  <img src="img1.jpg" width="45%">
  <img src="img2.jpg" width="45%"><br><br>
  <img src="img3.png" height="45%">
  </div>
  <div>
  </h2>
  <form method="post" action="../check.php" onSubmit="return validateForm()" >
  <input id="answer" type="text" name="solution_level_2"><br><br>
  <input type="hidden" name="level" value='2'>
  <input type="submit" id="form_submit" name="submit" value="Submit">
  </form>
  
</div>
    
    </div>
    
      
 
   <?php include("../../footer.php"); ?>
</body>
</html>
<?php  endif; ?>