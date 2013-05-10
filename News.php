<?php
	require 'frame/global.php';
	require 'frame/head.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$main_title; ?>—新闻公告</title>
	<meta charset="utf-8">
	<meta name="keywords" content="<?=$keywords; ?>" />
	<meta name="description" content="<?=$description; ?>" />
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
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
<body id="page3">
	<div class="body">
		<div class="main">
			<?php require 'views/header.php'; ?>
			<!-- content -->
			<article id="content">
				<div class="wrapper">
					<div class="box1">
						<div class="wrapper">
							<section class="col1">
								<h2><strong>关</strong>于<span>我们</span></h2>
								<div class="line1">
									<figure class="left marg_right1"><img width="254" height="148" src="images/page3_img1.jpg"
										alt="广州市中稆装饰材料有限公司"></figure>
									<p class="pad_bot1">
										广州市中稆装饰材料有限公司。是一间集生产、研发于一身的专业生产铝幕墙板、蜂窝板天花板系列产品的现代化企业。
										公司规模宏大，配套齐全。是一家充满创造力、想象力、行动力的新兴企业。
									</p>
									<p class="pad_bot2">
										本公司现有员工数百人，各领域专业人士占公司人数比重达50%以上，并拥有一大批优秀的管理和技术人才。
										引进世界最先进的日本电脑数控钣金加工设备、日本兰氏全自动喷涂生产线，德国汉高的前处理工艺技术。
										成功设计和承造了数百项工程，均以优良的产品质量和良好的客户服务得到了用户的称赞。
									</p>
								</div>
							</section>
						</div>
					</div>	
				</div>
			</article>
			<!-- / content -->
			<?php require 'views/footer.php'; ?>
		</div>
	</div>
</body>
</html>