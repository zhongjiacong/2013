<?php
$phone_number = '<span>+1 30</span>60 744 199';
$base_url = 'http://'.$_SERVER['SERVER_NAME'].'/2013/';

// 将url解析成数组
$url_arr = parse_url('http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);

// 页面相关元素
if($url_arr['path'] == '/2013/products.php')
	$onpage2 = true;
elseif($url_arr['path'] == '/2013/news.php')
	$onpage3 = true;
elseif($url_arr['path'] == '/2013/cases.php')
	$onpage4 = true;
elseif($url_arr['path'] == '/2013/contact.php')
	$onpage5 = true;
else
	$onpage1 = true;

// 产品分类

