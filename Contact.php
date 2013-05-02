<?php
	require 'frame/global.php';
	require 'frame/head.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$main_title; ?>—联系我们</title>
	<meta charset="utf-8">
	<meta name="keywords" content="<?=$keywords; ?>" />
	<meta name="description" content="<?=$description; ?>" />
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<script type="text/javascript" src="js/jquery-1.6.js"></script>
	<script type="text/javascript" src="js/cufon-yui.js"></script>
	<script type="text/javascript" src="js/cufon-replace.js"></script> 
	<script type="text/javascript" src="js/Vegur_700.font.js"></script>
	<script type="text/javascript" src="js/Vegur_400.font.js"></script>
	<script type="text/javascript" src="js/Vegur_300.font.js"></script>
	<script type="text/javascript" src="js/atooltip.jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<!--[if lt IE 9]>
		<script type="text/javascript" src="js/html5.js"></script>
		<style type="text/css">
			.box1 figure {behavior:url(js/PIE.htc)}
		</style>
	<![endif]-->
	<!--[if lt IE 7]>
			<div style='clear:both;text-align:center;position:relative'>
				<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode">
				<img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" alt="" /></a>
			</div>
	<![endif]-->
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-26964472-4']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</head>
<body id="page5">
	<div class="body1">
		<div class="main">
			<?php require 'views/header.php'; ?>
			<!-- content -->
			<article id="content">
				<div class="wrapper">
					<div class="box1">
						<div class="line1 wrapper">
							<section class="col1">
								<h2><strong>联</strong>系<span>信息</span></h2>
								<strong class="address">
									城市:<br>
									邮编:<br>
									电话:<br>
									地址:<br>
									厂址:<br>
									E-Mail:
								</strong>
								广东广州<br>
								510360<br>
								13480205903<br>
								广州市芳村大道西<br>
								佛山市南海区里水镇<br>
								<a href="mailto:zhongjiacong@gmail.com">zhongjiacong@gmail.com</a>
							</section>
							<section class="col2 pad_left1">
								<h2 class="color2"><strong>销</strong>售<span>途径</span></h2>
								<p class="pad_bot1">
									本公司拥有庞大的销售网络，在全国各大城市设有办事处或代理商，我们严格按照国家质量管理体系的要求和标准运作，
									本着“诚信行天下，质量创品牌”的企业宗旨，“务实创新、不求最好只求更好”的服务理念，在实践中不断强化经营和管理意识，
									研发出了一系列深受客户满意的创新产品，并广泛应用到去全国各地建筑群上。
								</p>
								公司在淘宝开有网店销售公司产品，上面描述了各种产品的详细内容，联系请查看当前网址右下方的淘宝链接或咨询服务电话。
							</section>
						</div>
					</div>	
				</div>
			</article>
			<!-- / content -->
			<?php require 'views/footer.php'; ?>
		</div>
	</div>
	<script type="text/javascript">Cufon.now();</script>
</body>
</html>