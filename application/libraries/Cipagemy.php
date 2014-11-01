<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
// 分页类
class Cipagemy {
	private $total;
	private $pagesize;
	private $page;
	private $limit;
	private $pagecount;
	private $url;
	
	public function __construct(Array $page_config) {
		$this->total = $page_config['total'] ? $page_config['total'] : 1;
		$this->pagesize = $page_config['pagesize'];
		$this->pagecount = ceil ( $this->total / $this->pagesize );
		$this->filterPage($page_config['page']);
		$this->setUrl ($page_config['page_place']);
	}
	
	// 编号
	public function setNum() {
		return ($this->page - 1) * $this->pagesize + 1;
	}
	
	// 过滤$_GET[‘page’]数据
	private function filterPage($page_get) {
		// 不存在
		if (empty( $page_get)) {
			$this->page = 1;
		} else {
			// 不是数字
			if (( string ) ( int ) $page_get != $page_get) {
				$this->page = 1;
			}
			// 是数字，大于总页数，或者小于0
			if ($page_get >= $this->pagecount) {
				$this->page = $this->pagecount;
			} else if ($page_get <= 0) {
				$this->page = 1;
			} else {
				$this->page = ( int ) $page_get;
			}
		}
	}
	
	// 设置limit
	public function setLimit() {
		$start = ($this->page - 1) * $this->pagesize;
		return $start .' , '. $this->pagesize;
	}
	
	// 设置url
	private function setUrl($num) {
// 		$arr = parse_url ( $_SERVER ['REQUEST_URI'] );
// 		print_r($arr);
// 		parse_str ( $arr ['query'], $query );
// 		if (isset ( $query ['page'] ))
// 			unset ( $query ['page'] );
// 		http_build_query ( $query );
// 		$this->url = $arr ['path'] . '?' . http_build_query ( $query ) . '&';
// 		$arr = explode('/',$_SERVER['REQUEST_URI']);
// 		echo $arr[count($arr)-1];
		$arr =explode('/',$_SERVER ['REQUEST_URI']);
		unset($arr[$num+1]);
		$this->url = implode('/', $arr) . '/';
	}
	
	// 设置显示html
	public function showPage() {
		$page = '<a href="'.$this->url.'" class="page">首页</a>　';
		if ($this->page <= 1) {
			$page .= ' <span style="color:#ccc;" >上一页</span>　';
		} else {
			$page .= '<a href="' .$this->url. ($this->page-1) .'" class="page">上一页</a>　';
		}
		if ($this->page >= $this->pagecount) {
			$page .= ' <span style="color:#ccc;" class="page">下一页</span>　';
		} else {
			$page .= '<a href="'  .$this->url . ($this->page+1) .'" class="page">下一页</a>　';
		}
		$page .= '<a href="' .$this->url . $this->pagecount .'" class="page">尾页</a>　';
		$page .= $this->page . '/' . $this->pagecount . '　共' . $this->total . '条数据　';
		return $page;
	}
}


