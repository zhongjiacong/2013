<?php
$phone_number = '<span>+1 348</span>020 59 03';
$base_url = 'http://'.$_SERVER['SERVER_NAME'].'/2013/';

// 将url解析成数组
$url_arr = parse_url('http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);

// 页面相关元素
if($url_arr['path'] == '/2013/Product.php')
	$onpage2 = true;
elseif($url_arr['path'] == '/2013/News.php')
	$onpage3 = true;
elseif($url_arr['path'] == '/2013/Cases.php')
	$onpage4 = true;
elseif($url_arr['path'] == '/2013/Contact.php')
	$onpage5 = true;
else
	$onpage1 = true;


