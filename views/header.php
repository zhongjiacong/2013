<!-- header -->
<header>
	<div class="wrapper">
		<h1><a href="<?=$base_url; ?>index.php" id="logo">中稆装饰材料</a></h1>
		<nav>
			<div id="top_tel">
				<div id="top_icons">
					<ul>
						<li><a href="http://zhonglvzs.taobao.com" title="进入淘宝店铺" target="_blank">
							<img width="45" height="22" src="images/icon1.gif" alt="淘宝"></a></li>
						<li><a href="tencent://message/?uin=172367155&amp;Site=http://zhonglvzs.com&amp;Menu=yes" title="腾讯QQ聊天">
							<img width="77" height="22" border="0" src="images/button_10.gif" alt="腾讯QQ聊天"></a></li>
					</ul>
				</div>
				<div class="clear"></div>
				<div class="tel"><?=$phone_number; ?></div>
			</div>
		</nav>
		<nav>
			<ul id="menu">
				<?=$onpage1?'<li id="menu_active">':'<li>'; ?><a href="<?=$base_url; ?>index.php">首页</a></li>
				<?=$onpage2?'<li id="menu_active">':'<li>'; ?><a href="<?=$base_url; ?>products.php">产品介绍</a></li>
				<?=$onpage3?'<li id="menu_active">':'<li>'; ?><a href="<?=$base_url; ?>news.php">新闻资讯</a></li>
				<?=$onpage4?'<li id="menu_active">':'<li>'; ?><a href="<?=$base_url; ?>cases.php">工程案例</a></li>
				<?=$onpage5?'<li id="menu_active">':'<li>'; ?><a href="<?=$base_url; ?>contact.php">联系我们</a></li>
			</ul>
		</nav>
	</div>
	<div class="ic">&copy; zhonglvzs.com</div>
</header>
<!-- / header -->