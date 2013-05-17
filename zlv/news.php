<?php require '../frame/global.php';
	require '../frame/listdir.php';
	require '../frame/pager.php';
	require '../frame/items.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>中稆管理平台—新闻资讯</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
</head>
<body>
	<div class="body">
		<?php require '../views/adminnav.php'; ?>
		<div class="main">
			<div id="news_leftpart">
				<form action="../protected/form.php" method="POST">
					<p>分类：<select name="category">
						<?php foreach($news_arr as $news_key=>$news_item): ?>
							<option value="<?=$news_key; ?>"><?=$news_item; ?></option>
						<?php endforeach; ?>
					</select></p>
					<p>标题：<input type="text" name="title" maxlength="25" /></p>
					<p>内容：<textarea name="content" rows="15" cols="40"></textarea></p>
					<input  type="submit" name="submit" value="添加" />
				</form>
			</div>
			<div id="news_rightpart">
				<?php
					// 初始化对象，并使用getlist方法获取文件路径树
					$news_dir = new listdir('../../2013_news');
					$news_list = $news_dir->getlist();
					
					// 对所有类型的新闻资讯按时间排序
					$news_list_1 = $news_dir->getpatharr($news_list[1]);
					krsort($news_list_1);
					
					$mypager = new pager(count($news_list_1));
					$myitems = new items($news_arr,$news_list_1,
						$mypager->getcurrentpage(),$mypager->getstandardpagenum(),$base_url);
					$myitems->adminitems();
					$mypager->printpager();
				?>
			</div>
		</div>
	</div>
</body>
</html>