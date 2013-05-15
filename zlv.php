<?php
require 'frame/global.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>新闻资讯编辑</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
	<form action="protected/form.php" method="POST">
		<p>分类：<select name="category">
			<?php foreach($news_arr as $news_key=>$news_item): ?>
				<option value="<?=$news_key; ?>"><?=$news_item; ?></option>
			<?php endforeach; ?>
		</select></p>
		<p>标题：<input type="text" name="title" style="width: 640px;" /></p>
		<p>内容：<textarea name="content" rows="30" cols="77"></textarea></p>
		<input type="submit" name="submit" value="提交" />
	</form>
</body>
</html>