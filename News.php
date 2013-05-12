<?php
	require 'frame/global.php';
	require 'frame/head.php';
	require 'frame/listdir.php';
	
	// 初始化新闻资讯的类型
	$news_arr = array('公司新闻','公司公告','行业资讯','产品动态');
	
	// 初始化对象，并使用getlist方法获取文件路径树
	$news_dir = new listdir('news');
	$news_list = $news_dir->getlist();
	// 对所有类型的新闻资讯按时间排序
	$news_list_1 = $news_dir->getpatharr($news_list[1]);
	krsort($news_list_1);
	
	// 用于统计各个类型的数量
	$news_tree = $news_dir->gettree();
	$news_counter = array();
	foreach($news_list[0] as $news_key=>$news_item) {
		$news_counter[$news_key] = count($news_tree[$news_item]);
	}
	
	// 按类型将新闻资讯分类
	$news_category_arr = array();
	foreach($news_list_1 as $news_key=>$news_item) {
		$categorytemp = $news_item['category'];
		array_shift($news_item);
		$news_category_arr[$categorytemp][$news_key] = $news_item;
	}
	print_r($news_category_arr);
	
	// 页码
	$standard_page_num = 10;
	// 当前页面
	$current_page = ($_GET['page'] == null)?1:$_GET['page'];
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
							<ul>
								<?php foreach($news_arr as $news_key=>$news_item): ?>
									<li><a href="<?=$base_url; ?>news.php?category=<?=$news_key; ?>"><?=$news_item; ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div>
						<div id="type_rightpart">
							<?php if(null == $_GET['time']): ?>
								<div class="type_title">
									<a href="<?=$base_url; ?>index.php">首页</a>
									>>
									新闻资讯
								</div>
								<br />
								<?php if($_GET['category'] == null): ?>
								<ul>
									<?php
									// 获取当前页面的条目数
									$news_list_current_page = array_slice($news_list_1,($current_page-1)*$standard_page_num,$standard_page_num);
									foreach($news_list_current_page as $news_key=>$news_item):
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
								<div id="page">
									<?php
									// 总条数
									$sum_item = count($news_list_1);
									// 总页数
									$sum_page = ceil($sum_item/$standard_page_num);
									if(count($_SERVER['argv']) == 0 || (count($_SERVER['argv']) == 1 && $_GET['page'] != null)):
										
										if($current_page != 1): ?>
										<a href="<?=$base_url; ?>news.php?page=<?=$current_page-1; ?>"><span>上一页</span></a>
										<?php endif;
										
										for($i = 1; $i <= $sum_page; $i++):
											if($current_page == $i): ?>
											<span class="page_active"><?=$i; ?></span>
											<?php else: ?>
											<span><a href="<?=$base_url; ?>news.php?page=<?=$i; ?>"><?=$i; ?></a></span>
											<?php endif;
										endfor;
										
										if($current_page != $sum_page): ?>
										<a href="<?=$base_url; ?>news.php?page=<?=$current_page+1; ?>"><span>下一页</span></a>
										<?php endif;
									
									endif; ?>
									共<?=$sum_item; ?>条 <?=$current_page; ?>/<?=$sum_page; ?>页
								</div>
								<?php elseif($_GET['category'] != null && $news_counter[$_GET['category']] != 0): ?>
								<ul>
									<?php
									// 获取当前页面的条目数
									$news_list_current_page = array_slice($news_category_arr[$_GET['category']],
										($current_page-1)*$standard_page_num,$standard_page_num);
									foreach($news_list_current_page as $news_key=>$news_item):
										// 组织时间字符串
										$news_timestr = $news_item['time']['year'].'/'.$news_item['time']['day'].'/'.
											$news_item['time']['month'];
										// 一项新闻内容的文件路径
										$news_filepath = dirname(__FILE__).'/news/'.$_GET['category'].'/'.
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
										【<?=$news_arr[$_GET['category']]; ?>】<?=trim(strip_tags($news_content[0])); ?></a>
										<span><?=$news_timestr; ?></span>
									</li>
									<?php endforeach; ?>
								</ul>
								<div id="page">
									<?php
									// 总条数
									$sum_item = count($news_category_arr[$_GET['category']]);
									// 总页数
									$sum_page = ceil($sum_item/$standard_page_num);
									if(count($_SERVER['argv']) > 1 || (count($_SERVER['argv']) == 1 && $_GET['category'] != null)):
										
										if($current_page != 1): ?>
										<a href="<?=$base_url; ?>news.php?category=<?=$_GET['category']; ?>&page=<?=$current_page-1; ?>">
											<span>上一页</span></a>
										<?php endif;
										
										for($i = 1; $i <= $sum_page; $i++):
											if($current_page == $i): ?>
											<span class="page_active"><?=$i; ?></span>
											<?php else: ?>
											<span><a href="<?=$base_url; ?>news.php?category=<?=$_GET['category']; ?>&page=<?=$i; ?>">
												<?=$i; ?></a></span>
											<?php endif;
										endfor; ?>
										
										<?php if($current_page != $sum_page): ?>
										<a href="<?=$base_url; ?>news.php?category=<?=$_GET['category']; ?>&page=<?=$current_page+1; ?>">
											<span>下一页</span></a>
										<?php endif;
									
									endif; ?>
									共<?=$sum_item; ?>条 <?=$current_page; ?>/<?=$sum_page; ?>页
								</div>
								<?php else: ?>
								<ul>
									<li>暂无内容...</li>
								</ul>
								<?php endif;
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
								$news_time = explode('-',$_GET['time']);
								echo '<div id="news_time">发布时间：'.$news_time[0].'/'.$news_time[1].'/'.
									$news_time[2].' '.$news_time[3].':'.$news_time[4].'</div>';
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