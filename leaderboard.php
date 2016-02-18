<?php 
session_start();
if (!isset($_SESSION['user'])) header("location:login");
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
   
    <link rel="stylesheet" href="style.css">    
     <script src="js/libs/modernizr-2.0.6.min.js"></script>
    

 
</head>
<body >	
    <?php
    include("header.php");
    ?>
    
     
    
 <div id="main" >
   <div id="box" style="margin-left:30%;margin-top:2%;margin-right:30%;display:block;width:40%;height:20px%;text-align:center;">
   <h2><u><font color="#000000">Leaderboard</font></u></h2></div> 
   <div id="box" style="margin-left:30%;;margin-bottom:10%;margin-right:30%;display:block;width:40%;height:60%;text-align:center;">
  <h2></h2>
  <table width="100%">
  <tr align="center" style="color:#000">
   <td width="10%"><b>Rank</b></td>
   <td width="40%"><b>Name</b></td>
   <td width="10%"><b>Level</b></td>
  </tr>
  <tr><td colspan="3"><hr width="100%" color="#000000"></td></tr>
 <?php 
 $i=1;
 include('login/abc/config.php');
 $con=mysql_connect($datahost, $datauser, $datapassword);
 mysql_select_db("segreta", $con);
  $result=mysql_query("SELECT * FROM users ORDER BY level DESC, time ASC");
while($row=mysql_fetch_array($result))
  {
	 ?>
     <tr align="center" style="color:#000" height=25px>
     <td><?php echo $i ; $i=$i+1;?></td>
     <td><?php echo $row['user'];  ?></td>
	 <td><?php echo $row['level'];  ?></td>
     </tr>
	 <?php	 
  }	
  
  ?>
  
  </table>
  
 
  
</div>
    
    </div>
    
      
 
   <?php include("footer.php"); ?>
</body>
</html>
<?php  endif; ?>