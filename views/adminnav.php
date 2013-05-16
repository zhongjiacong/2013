<header>
	<div class="wrapper">
		<h1><a href="<?=$admin_base_url; ?>index.php" id="logo">中稆装饰材料</a></h1>
		<nav>
			<ul id="menu" class="adminmenu">
				<?php for($i = 0; $i < 2; $i++): ?>
					<?=$on_page_arr[$i]?'<li id="menu_active">':'<li>'; ?>
						<a href="<?=$admin_base_url.$admin_nav_arr[$i][0]; ?>.php"><?=$admin_nav_arr[$i][2]; ?></a>
					</li>
				<?php endfor; ?>
			</ul>
		</nav>
	</div>
	<div class="ic">&copy; zhonglvzs.com</div>
</header>