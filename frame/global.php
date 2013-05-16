<?php
$phone_number = '<span>+1 86</span> 2028 7128';
$base_url = 'http://'.$_SERVER['SERVER_NAME'].'/2013/';
$admin_base_url = 'http://'.$_SERVER['SERVER_NAME'].'/2013/zlv/';
	
// 初始化新闻资讯的类型
$news_arr = array('公司新闻','公司公告','行业资讯','产品动态');

$nav_arr = array(
				array('index','Home','首页'),
				array('products','Our Product','产品介绍'),
				array('news','News &amp; Info','新闻资讯'),
				array('cases','Project Cases','工程案例'),
				array('contact','Contact Us','联系我们')
			);
$admin_nav_arr = array(
				array('index','Home','首页'),
				array('news','News &amp; Info','新闻资讯'),
			);
// 将url解析成数组
$url_arr = parse_url('http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
// 导航高亮当前页标签
$on_page_arr = array();
$url_arr_path = ($url_arr['path'] == '/2013/')?
	$url_arr['path'].'index.php':$url_arr['path'];
foreach($nav_arr as $nav_key=>$nav_item) {
	if($url_arr_path == '/2013/'.$nav_item[0].'.php')
		$on_page_arr[$nav_key] = true;
}

