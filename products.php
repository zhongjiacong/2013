<?php
	require 'frame/global.php';
	require 'frame/head.php';
	require 'frame/type.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$main_title; ?>—产品介绍</title>
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
<body id="page2">
	<div class="body">
		<?php require 'views/header.php'; ?>
		<div class="main">
			<!-- content -->
			<article id="content">
				<div class="wrapper">
					<div class="box1">
						<div id="type_leftpart">
							<div class="type_title">产品分类</div>
							<br />
							<ul>
								<?php foreach($product_type as $product_key=>$product_name): ?>
								<li><a href="<?=$base_url; ?>products.php?type=<?=$product_key; ?>"><?=$product_name; ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div>
						<div id="type_rightpart">
							<?php
								if(null != $_GET['type']):
								// 每一个分类的分类列表
							?>
								<div class="type_title">
									<a href="<?=$base_url; ?>products.php">产品列表</a>
									>>
									<?=$product_type[$_GET['type']]; ?>
								</div>
								<br />
								<p>
									<img width="264" height="196" src="images/product/<?=$_GET['type']; ?>.jpg" alt="<?=$product_type[$_GET['type']]; ?>">
									<?=$product_description[$_GET['type']]; ?>
								</p>
							<?php
								else:
								// 在非分类列表中，所有产品的一个列表
							?>
								<div class="type_title">产品列表</div>
								<?php foreach($product_type as $product_key=>$product_name): ?>
									<div class="type_list_item">
										<div>
											<a href="<?=$base_url; ?>products.php?type=<?=$product_key; ?>">
												<img width="132" height="98" src="images/product/<?=$product_key; ?>.jpg" alt="<?=$product_name; ?>">
											</a>
										</div>
										<div>
											<a href="<?=$base_url; ?>products.php?type=<?=$product_key; ?>">
												<?=$product_name; ?>
											</a>
										</div>
									</div>
								<?php endforeach; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="wrapper">
					<div class="wrapper">
						<h3>定制产品</h3>
						<div class="quot">
							<div></div>
							<div>
								<p>中稆生产的铝单板等幕墙材料美观大方、保温节能、重量轻、耐侯性好、易加工、耐冲击、防火性能好、易保养、颜色多等特点，
								是目前现代化装饰的首选材料。</p>
								<p>产品细节：铝单板表面处理方式多样，包括氟碳、滚涂、石纹、木纹、拉丝、聚酯、户内粉末、户外粉末、仿大理石、
								水性大理石纹等；</p>
								<p>产品用途：广泛应用于建筑金属幕墙、外墙装饰、瓦楞板、金属屋顶、金属吊顶、室内装饰、机船车辆装饰、
								广告展板、家具饰面、厢体隔板、体育馆、会展中心、高铁站、机场等大型现代化公共场所。</p>
								<div></div>
							</div>
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