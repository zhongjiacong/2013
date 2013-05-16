<?php
class items {
	var $news_arr;
	var $content;
	var $current_page;
	var $standard_page_num;
	var $news_list_current_page;
	var $base_url;
	
	function items($news_arr,$content,$current_page,$standard_page_num,$base_url = '') {
		$this->news_arr = $news_arr;
		$this->content = $content;
		$this->current_page = $current_page;
		$this->standard_page_num = $standard_page_num;
		$this->news_list_current_page = array_slice($content,
			($current_page-1)*$standard_page_num,$standard_page_num);
		$this->base_url = $base_url;
	}
	
	function adminitems() {
		echo '<form action="../protected/form.php" method="POST">'.
			'<input type="hidden" name="del" value="news" />'.
			'<ul>';
			// 获取当前页面的条目数
			foreach($this->news_list_current_page as $news_key=>$news_item) {
				// 先确定分类
				$news_item_category = (null != $_GET['category'])?$_GET['category']:
					$news_item['category'];
				// 组织时间字符串
				$news_timestr = $news_item['time']['year'].'/'.$news_item['time']['day'].'/'.
					$news_item['time']['month'];
				// 一项新闻内容的文件路径
				$news_filepath = dirname(__FILE__).'/../news/'.$news_item_category.'/'.
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
				$news_item_url = $this->base_url.'news.php?time='.implode('-',$news_item['time']);
				
				echo '<li><a href="'.$news_item_url.'">【'.$this->news_arr[$news_item_category].'】'.
					trim(strip_tags($news_content[0])).'</a>';
				echo '<input type="checkbox" name="'.$news_item_category.'_'.implode('-',$news_item['time']).'" />'.
					'<span>'.$news_timestr.'</span></li>';
			}
		echo '</ul><input type="submit" name="submit" value="删除" /></form>';
	}
	
	function printitems() {
		echo '<ul>';
			// 获取当前页面的条目数
			foreach($this->news_list_current_page as $news_key=>$news_item) {
				// 先确定分类
				$news_item_category = (null != $_GET['category'])?$_GET['category']:
					$news_item['category'];
				// 组织时间字符串
				$news_timestr = $news_item['time']['year'].'/'.$news_item['time']['day'].'/'.
					$news_item['time']['month'];
				// 一项新闻内容的文件路径
				$news_filepath = dirname(__FILE__).'/../news/'.$news_item_category.'/'.
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
				$news_item_url = $this->base_url.'news.php?time='.implode('-',$news_item['time']);
				
				echo '<li><a href="'.$news_item_url.'">【'.$this->news_arr[$news_item_category].'】'.
					trim(strip_tags($news_content[0])).'</a>';
				echo '<span>'.$news_timestr.'</span></li>';
			}
		echo '</ul>';
	}
}