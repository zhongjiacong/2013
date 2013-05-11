<?php

class listdir{
	var $depth;
	var $dirname;
	var $list;

	function listdir($dir){
		$this->dirname=$dir;
		$this->depth=0;
	}

	// 把结果保存进多维数组
	function getlist($dir=""){
		if($dir=="")
			$dir=$this->dirname;
		$d=@dir($dir);
		while(false!==($item=$d->read())) {
			if($item!="."&&$item!="..") {
				$path=$dir."/".$item;
				if(is_dir($path)){
					$this->depth+=1;
					$this->getlist($path);
				}
				if($this->depth == 1) {
					$path_arr=explode('/',$path);
					$path_time=explode('-',$path_arr[2]);
					$this->list[$this->depth][implode('',$path_time)]=array(
													'category'=>$path_arr[1],
													'time'=>array(
														'year'=>$path_time[0],
														'month'=>$path_time[1],
														'day'=>$path_time[2],
														'hour'=>$path_time[3],
														'minute'=>$path_time[4]
													)
												);
				}
				else
					$this->list[$this->depth][] = $path;
			}
		}
		$this->depth-=1;
		$d->close();
		return $this->list;
	}
}