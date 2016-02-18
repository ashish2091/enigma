
<link href="../slider/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../slider/jquery.js"></script>
<script type="text/javascript" src="../slider/slider.js"></script>

<script type="text/javascript" src="chrome-extension://bfbmjmiodbnnpllbbbfblcplfjjepjdn/js/injected.js"></script></head>

<div id="button" style="float:left;">
<img src="../slider/button.jpg" width="130" height="25" border="0" class="menu_class">
<ul class="the_menu" style="display: none; ">

<?php $j=0; while($j <= $_SESSION['level']){ ?>
<li><a href="<?php echo "../level".$j; ?>"><?php echo "Level ".$j; $j = $j+1;?></a></li>
<?php } ?>

</ul>
</div>

