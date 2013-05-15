<?php
class pager {
	var $standard_page_num;
	var $current_page;
	// 总条目数量
	var $sum_item;
	// 总页数
	var $sum_page;
	// 参数
	var $query_string;
	
	function pager($sum_item) {
		$this->standard_page_num = 10;
		$this->current_page = ($_GET['page'] == null)?1:$_GET['page'];
		$this->sum_item = $sum_item;
		$this->sum_page = ceil($this->sum_item/$this->standard_page_num);
		$this->query_string = $_SERVER['QUERY_STRING'];
	}
	
	function getcurrentpage() {
		return $this->current_page;
	}
	
	function getstandardpagenum() {
		return $this->standard_page_num;
	}
	
	function printpager() {
		if($this->query_string == '')
			$this->query_string .= 'page=1';
		elseif(!preg_match('/page=/',$this->query_string))
			$this->query_string .= '&page=1';
		$query_string_prefix = str_replace('page='.$this->current_page,'page=',$this->query_string);
		
		echo '<div id="page">';
		if($this->current_page != 1)
			echo '<a href="'.$base_url.'news.php?'.$query_string_prefix.($this->current_page-1).'"><span>上一页</span></a>';
		
		for($i = 1; $i <= $this->sum_page; $i++) {
			if($this->current_page == $i)
				echo '<span class="page_active">'.$i.'</span>';
			else
				echo '<a href="'.$base_url.'news.php?'.$query_string_prefix.$i.'">
					<span>'.$i.'</span>
					</a>';
		}
			
		if($this->current_page != $this->sum_page)
			echo '<a href="'.$base_url.'news.php?'.$query_string_prefix.($this->current_page+1).'"><span>下一页</span></a>';
		
		echo ' 共'.$this->sum_item.'条 '.$this->current_page.'/'.$this->sum_page.'页';
		echo '</div>';
	}
}