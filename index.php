<?php require 'frame/global.php';
	require 'frame/head.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$main_title; ?></title>
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
<body id="page1">
	<div class="body">
		<?php require 'views/header.php'; ?>
		<div class="main">
			<!-- content -->
			<article id="content">
				<div class="slider">
					<ul class="items">
						<li>
							<img width="810" height="465" src="images/roll/img1.jpg" alt="诚信行天下，质量创品牌。">
							<div class="banner">
								<div class="wrapper"><span>诚信行天下，质量创品牌。</span></div>
							</div>
						</li>
						<li>
							<img width="810" height="465" src="images/roll/img2.jpg" alt="创新改进，掌握关键技术。">
							<div class="banner">
								<div class="wrapper"><span>创新改进，掌握关键技术。</span></div>
							</div>
						</li>
						<li>
							<img width="810" height="465" src="images/roll/img3.jpg" alt="精雕细琢，真诚服务。">
							<div class="banner">
								<div class="wrapper"><span>精雕细琢，真诚服务。</span></div>
							</div>
						</li>
					</ul>
					<ul class="pagination">
						<li id="banner1"><a href="#">产品<span>优质</span></a></li>
						<li id="banner2"><a href="#">技术<span>精湛</span></a></li>
						<li id="banner3"><a href="#">服务<span>细心</span></a></li>
					</ul>
				</div>
				<div class="wrapper">
					<div class="box1">
						<div class="line1">
							<div class="line2 wrapper">
								<section class="col1">
									<h2><strong>1</strong><span>产品介绍</span></h2>
									<div class="pad_bot1">
										<figure><img width="254" height="148" src="images/index/1.jpg" alt="产品介绍"></figure>
									</div>
									<p>中稆装饰材料主要为建筑工程定制供应铝装材料，产品覆盖幕墙铝板、蜂窝铝板、铝单板、冲孔铝板、双曲铝板、
									仿石材木材铝板和铝方通、铝格栅等铝天花产品，真诚为客户提供优质产品，竭力为客户解决工程难题。</p>
									<a href="<?=$base_url; ?>products.php" class="button1">更多</a>
								</section>
								<section class="col1 pad_left1">
									<h2 class="color2"><strong>2</strong><span>新闻资讯</span></h2>
									<div class="pad_bot1">
										<figure><img width="254" height="148" src="images/index/2.jpg" alt="新闻公告"></figure>
									</div>
									<p>帮助客户了解我们公司报价流程，一般我们会根据您对产品规格、颜色、形状等要求提供一个常规报价，
									并在参考设计图纸后给您一个较准确的价格。另外，将介绍一些与产品安装，铝装材料咨询动态相关的信息。</p>
									<a href="<?=$base_url; ?>news.php" class="button1 color2">更多</a>
								</section>
								<section class="col1 pad_left1">
									<h2 class="color3"><strong>3</strong><span>工程案例</span></h2>
									<div class="pad_bot1">
										<figure><img width="254" height="148" src="images/index/3.jpg" alt="工程案例"></figure>
									</div>
									<p>曾为许多大型工程项目设计、生产并供应各类铝装材料。其中一些工程中有部分产品加工生产难度大、外观质量要求高，
									中稆凭借雄厚的技术实力和质量保证，经过严格审批和层层筛选，成为这些工程项目铝装材料的指定生产供应商。</p>
									<a href="<?=$base_url; ?>cases.php" class="button1 color3">更多</a>
								</section>
							</div>
						</div>
					</div>	
				</div>
				<div class="wrapper">
					<h3>企业介绍</h3>
					<div class="quot">
						<div></div>
						<div>
							<p>广州市中稆装饰材料有限公司（下简称“中稆”）是一家集设计、生产、加工于一身的专业铝装材料生产加工的现代型企业。主营产品有：
							幕墙铝板、蜂窝铝板、铝单板、冲孔铝板、双曲铝板、异型板等。公司规模较大，设备完善，是一家充满创造力和行动力的企业。</p>
							<p>中稆成立于2007年，现已拥有员工数百人，并拥有一个善于解决工程难题的技术团队；同时引进了先进的数控钣金加工设备、
							自动喷涂生产线。对技术人才和先进设备的重视是中稆为客户提供高质量产品的基本保证，至今中稆已为数十个大型工程项目提供优质铝板。</p>
							<p>中稆始终秉持“诚信行天下，质量创品牌”、“务实创新”、“不求最好只求更好”的品牌理念，视信誉和质量为企业的生命，
							真诚为客户提供优质产品，竭力为客户解决工程难题。持精诚兢业之心，怀勤俭奋发之志，积极进取，精益求精，
							产品通过了国家和地区的各种认证及得到了市场的认可。</p>
							<p>中稆——用诚信赢得信誉，用质量打造品牌。我们将与时俱进，与广大客户一起共创行业更加美好的未来。</p>
							<div></div>
						</div>
					</div>
					<br />
				</div>
			</article>
			<!-- / content -->
			<?php require 'views/footer.php'; ?>
		</div>
	</div>
	<script type="text/javascript" src="js/script.js"></script>
	<script>
	$(window).load(function(){
		$('.slider')._TMS({
			preset:'zabor',
			easing:'easeOutQuad',
			duration:800,
			pagination:true,
			banners:true,
			waitBannerAnimation:false,
			slideshow:6000,
			bannerShow:function(banner){
				banner
					.css({right:'-700px'})
					.stop()
					.animate({right:'0'},600, 'easeOutExpo')
			},
			bannerHide:function(banner){
				banner
					.stop()
					.animate({right:'-700'},600,'easeOutExpo')
			}
		})
		$('.pagination li').hover(function(){
			if (!$(this).hasClass('current')) {
				$(this).find('a').stop().animate({backgroundPosition:'0 0'},600,'easeOutExpo',
					function(){$(this).parent().css({backgroundPosition:'-20px 0'})});
			}
		},function(){
			if (!$(this).hasClass('current')) {
				$(this).css({backgroundPosition:'0 0'}).find('a').stop().animate({backgroundPosition:'-250px 0'},600,'easeOutExpo');
			}
		})
	})
	</script>
</body>
</html>