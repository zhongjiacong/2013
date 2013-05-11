<?php
	require 'frame/global.php';
	require 'frame/head.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$main_title; ?>—新闻资讯</title>
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
		<?php require 'views/header.php'; ?>
		<div class="main">
			<!-- content -->
			<article id="content">
				<div class="wrapper">
					<div class="box1">
						<div id="type_leftpart">
							<div class="type_title">新闻资讯</div>
							<br />
							<?php
								$news_arr = array('公司新闻','公司公告','行业资讯','产品动态');
							?>
							<ul>
								<?php foreach($news_arr as $news_key=>$news_item): ?>
									<li><a href="<?=$base_url; ?>news.php?category=<?=$news_key; ?>"><?=$news_item; ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div>
						<div id="type_rightpart">
							<?php
							include 'frame/listdir.php';
							// 初始化对象，并使用getlist方法获取文件路径树
							$news_dir = new listdir('news');
							$news_list = $news_dir->getlist();
							// 对所有类型的新闻资讯按时间排序
							krsort($news_list[1]);
							// 用于统计各个类型的数量，用正则的方法
							// $news_counter = array();
							// print_r($news_list[2]);
							
							if(null == $_GET['time']):
							?>
								<div class="type_title">
									<a href="<?=$base_url; ?>index.php">首页</a>
									>>
									新闻资讯
								</div>
								<br />
								<ul>
								<?php
									foreach($news_list[1] as $news_key=>$news_item):
										if($_GET['category'] != null && $_GET['category'] != $news_item['category'])
											continue;
										// 组织时间字符串
										$news_timestr = $news_item['time']['year'].'/'.$news_item['time']['day'].'/'.
											$news_item['time']['month'];
										// 一项新闻内容的文件路径
										$news_filepath = dirname(__FILE__).'/news/'.$news_item['category'].'/'.
											implode('-',$news_item['time']).'/index.html';
										// 读取新闻文件内容
										$news_content = array();
										$file_handle = fopen($news_filepath, "r");
										while (!feof($file_handle)) {
											$line = fgets($file_handle);
											$news_content[] = $line;
										}
										fclose($file_handle);
										// 一项新闻内容的链接地址
										$news_item_url = $base_url.'news.php?time='.implode('-',$news_item['time']);
								?>
									<li>
										<a href="<?=$news_item_url; ?>">
										【<?=$news_arr[$news_item['category']]; ?>】<?=trim(strip_tags($news_content[0])); ?></a>
										<span><?=$news_timestr; ?></span>
									</li>
								<?php endforeach; ?>
								</ul>
							<?php
							else:
								// 寻找匹配的文件
								foreach($news_list[2] as $news_key=>$news_item):
									if(preg_match('/'.$_GET['time'].'.*html/',$news_item)) {
										$news_filepath = dirname(__FILE__).'/'.$news_item;
										$news_urlpath = $base_url.'/'.$news_item;
										$news_item_arr = explode('/',$news_item);
										$news_category = $news_item_arr[1];
									}
								endforeach;
							?>
								<div class="type_title">
									<a href="<?=$base_url; ?>index.php">首页</a>
									>>
									<a href="<?=$base_url; ?>news.php">新闻资讯</a>
									>>
									<a href="<?=$base_url; ?>news.php?category=<?=$news_category; ?>"><?=$news_arr[$news_category]; ?></a>
								</div>
								<br />
							<?php
								// 读取新闻文件内容
								$news_content = array();
								$file_handle = fopen($news_filepath, "r");
								while (!feof($file_handle)) {
									$line = fgets($file_handle);
									$news_content[] = $line;
								}
								fclose($file_handle);
								// 输入内容标题
								echo $news_content[0];
								array_shift($news_content);
								// 连接详细内容并替换图片
								$news_detail = implode('',$news_content);
								$news_detail = str_replace('<img src="','<img src="'.str_replace('index.html','',$news_urlpath),$news_detail);
								// 输出详细内容
								echo $news_detail;
								endif;
							?>
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