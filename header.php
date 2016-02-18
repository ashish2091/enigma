<header>
		
		<nav>
			<ul>
				<li class="page_item page-item-4"><a href="index.php">home</a></li>
<li class="page_item page-item-11"><a href="leaderboard.php">leaderboard</a></li>
<li class="page_item page-item-13"><a href="">fb discussion</a></li>
<li class="page_item page-item-16"><a href="/rules/">rules</a></li>
<li class="page_item page-item-18"><a href="">contact us</a></li>
<?php if(isset($_SESSION['user'])):?><li  style="text-align:right;"><a href="logout.php">Logout</a></li><?php endif;?>
			</ul>
		</nav>
		
</header>