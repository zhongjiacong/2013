<!DOCTYPE html>
<html lang="en">
<head>
	<title>新闻资讯编辑</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
</head>
<body>
	<?php
	date_default_timezone_set('PRC');

	if($_POST['title'] && $_POST['content']) {
		// 创建目录
		$news_item_dir = '../../2013_news/'.$_POST['category'].'/'.date("Y-m-d-h-i-s",time()).'/';
		$news_item_filedir = $news_item_dir.'index.html';
		if(!file_exists($news_item_dir))
			mkdir($news_item_dir, 0777);
		
		if(!file_exists($news_item_filedir)) {
			$file = fopen($news_item_filedir,'w');
			$content = preg_replace('/(\r\n)+/','</p>'."\n".'    <p>','    <p>'.$_POST['content'].'</p>');
			$content = str_replace('<p></p>','',$content);
			fwrite($file,'<div id="news_title">'.$_POST['title'].'</div>'."\n".
				'<div id="news_detail">'."\n".$content."\n".'</div>');
			fclose($file);
			
			echo '提交成功！';
		}
	}
	elseif($_POST['del'] == 'news') {
		require '../frame/listdir.php';
		
		// 记录需要删除的文件夹
		$del_arr = array();
		foreach($_POST as $del_key=>$del_item) {
			if($del_item == 'on')
				$del_arr[] = explode('_',$del_key);
		}
		
		foreach($del_arr as $del_key=>$del_item) {
			$mylistdir = new listdir('../../2013_news/'.$del_item[0].'/'.$del_item[1].'/');
			$mylistdir->deldir();
		}
		
		echo '删除成功！';
	}
	else
		echo '标题或内容不能为空！';
	?>
	<script language="javascript">
		function redirect() {
			location.href = "<?=$_SERVER['HTTP_REFERER']; ?>";
		}
		setTimeout("redirect()",1000);
	</script>
</body>
</html>