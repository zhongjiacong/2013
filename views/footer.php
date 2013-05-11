<!-- footer -->
<footer>
	<div class="wrapper">
		<a href="<?=$base_url; ?>index.php" id="footer_logo"><span>ZhongLv</span>Decorative Materials</a>
		<ul id="icons">
			<li><a href="http://zhonglvzs.taobao.com" title="进入淘宝店铺" target="_blank">
				<img width="45" height="22" src="images/icon1.gif" alt="淘宝"></a></li>
			<li><a href="tencent://message/?uin=172367155&amp;Site=http://zhonglvzs.com&amp;Menu=yes" title="腾讯QQ聊天">
				<img width="77" height="22" border="0" src="images/button_10.gif" alt="腾讯QQ聊天"></a></li>
		</ul>
	</div>
	<div class="wrapper">
		<nav>
			<ul id="footer_menu">
				<?=$onpage1?'<li class="active">':'<li>'; ?><a href="<?=$base_url; ?>index.php">Home</a></li>
				<?=$onpage2?'<li class="active">':'<li>'; ?><a href="<?=$base_url; ?>products.php">Our Product</a></li>
				<?=$onpage3?'<li class="active">':'<li>'; ?><a href="<?=$base_url; ?>news.php">News &amp; Press</a></li>
				<?=$onpage4?'<li class="active">':'<li>'; ?><a href="<?=$base_url; ?>cases.php">Project Cases</a></li>
				<?=$onpage5?'<li class="end active">':'<li class="end">'; ?><a href="<?=$base_url; ?>contact.php">Contact</a></li>
			</ul>
		</nav>
		<div class="tel"><?=$phone_number; ?></div>
	</div>
	<div id="footer_text">
		All rights reserved by <a rel="nofollow" href="http://www.zhonglvzs.com/" target="_blank">&copy; zhonglvzs.com</a>
	</div>
</footer>
<!-- / footer -->
