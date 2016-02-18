<?php 
session_start();
if (!isset($_SESSION['user'])) header("location:../../index.php");
elseif($_SESSION['level'] < 0) header("location:../../error.php");

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
   <script>
   function validateForm()
{
var x=document.getElementById('answer').value;
var letters = /^[0-9a-zA-Z]+$/;  
if (x==null || x=="" || !x.match(letters))
  {
  alert("Please input alphanumeric characters only");
  return false;
  }
}
   </script> 

 
</head>
<body >	
    <?php
    include("../header.php");
    ?>
    
     
   
 <div id="main" >
 <?php include("../slider.php"); ?>
   <div id="box" style="margin-left:30%;margin-top:2%;margin-right:30%;display:block;width:40%;height:20px%;text-align:center;color:#000"><br><h2><u>Level 0</u></h2></div> 
   <div id="box" style="margin-left:30%;margin-top:5%;margin-bottom:10%;margin-right:30%;display:block;width:40%;height:60%;text-align:center;">
  <h2><img src="no_entry.png" width="65%" height="80%" ></h2>
  
</div>
    
    </div>
    

    <?php include("../../footer.php"); ?>

    
  

</body>
</html>
<?php  endif; ?>