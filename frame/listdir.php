<?php

class listdir {
	var $depth;
	var $dirname;
	var $list;
	var $tree;

	function listdir($dir) {
		$this->dirname = $dir;
		$this->depth = 0;
		$this->tree = array();
	}

	// 把结果保存进多维数组
	function getlist($dir='') {
		// 未传参时默认使用对象初始化时的路径
		if($dir=='')
			$dir=$this->dirname;
		
		// echo $dir;
		$d=@dir($dir);
		while(false!==($item=$d->read())) {
			if($item!="."&&$item!="..") {
				$path=$dir."/".$item;
				if(is_dir($path)){
					$this->depth+=1;
					$this->getlist($path);
				}
				if(!preg_match('/README/',$item))
					$this->list[$this->depth][] = $path;
			}
		}
		$this->depth-=1;
		$d->close();
		return $this->list;
	}
	
	// 处理depth为1的路径
	function getpatharr($oripatharr) {
		$patharr = array();
		foreach($oripatharr as $path_key=>$path_item) {
			$path_arr = explode('/',$path_item);
			$path_time = explode('-',$path_arr[count($path_arr) - 1]);
			$patharr[implode('',$path_time)] = array(
											'category'=>$path_arr[count($path_arr) - 2],
											'time'=>array(
												'year'=>$path_time[0],
												'month'=>$path_time[1],
												'day'=>$path_time[2],
												'hour'=>$path_time[3],
												'minute'=>$path_time[4],
												'second'=>$path_time[5]
											)
										);
		}
		return $patharr;
	}
	
	// 统计每个文件夹中文件夹或文件数量
	function gettree($dir='') {
		// 未传参时默认使用对象初始化时的路径
		if($dir=='')
			$dir=$this->dirname;
		
		$d=@dir($dir);
		while(false!==($item=$d->read())) {
			if($item!="."&&$item!="..") {
				$path=$dir."/".$item;
				// 先收录当前路径到tree数组中
				// 组成一棵树
				if(!preg_match('/README/',$item))
					$this->tree[$dir][] = $path;
				// 递归
				if(is_dir($path))
					$this->gettree($path);
			}
		}
		return $this->tree;
	}
	
	function deldir($dir='') {
		// 未传参时默认使用对象初始化时的路径
		if($dir=='')
			$dir=$this->dirname;
		
		//先删除目录下的文件：
		$dh = opendir($dir);
		while($file = readdir($dh)) {
			if($file != "." && $file != "..") {
				$fullpath = $dir."/".$file;
				if(!is_dir($fullpath))
					unlink($fullpath);
				else
					$this->deldir($fullpath);
			}
		}

		closedir($dh);
		
		//删除当前文件夹：
		if(rmdir($dir))
			return true;
		return false;
	}
}