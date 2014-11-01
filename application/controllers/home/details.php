<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * 商品列表控制器
 */
	class Details extends Home_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('goods_model','goods');
		}
		
		
		//显示详情信息
		public function show() {
			//判断id是否合法
			$g_id = $this->uri->segment(4);
			$this->is_id($g_id);
			//商品评论
			$id = $this->uri->segment(4);
			$pings = $this->db->get_where('comment',array('goods_id'=>$id));
			$pinglist = $pings->result();
			foreach($pinglist as $prow)
			{
				$res = $this->db->get_where('reply',array('comment_id'=>$prow->comment_id));
				$rerow = $res->row();
				if(!empty($rerow))
				{
					$relist[$prow->comment_id] = $rerow;
				}
			}
			//商品评论分配
			if(!empty($relist)) {
				$this->assign('relist',$relist);
			}else {
				$this->assign('relist',array());
			}
			
			$this->assign('pinglist',$pinglist);
			//设置导航
			$this->load->model('category_model','category');
			$main = $this->category->get_main();
			$sons = $this->category->get_sons();
			//最近浏览
			$this->mem_save($g_id);
			$this->assign('g_id',$g_id);
			$this->assign('sons',$sons);
			$this->assign('main', $main);
			$this->display('welcome/details');
		}
		
		//memcache 存储最近浏览数据
		private function mem_save($g_id) {
			//存储该数据，使用memcache
			$mem = new Memcache();
			$mem->connect('192.168.18.24',11211);
			//首先获取memcache中的lookinfo信息
			if(!$mem->get('lookinfo')) {		//如果没有找到任何数据
				$this->save($mem,$g_id);
			}else {		//判断是否为现有数据
				$lookinfo = $mem->get('lookinfo');
				if(!array_key_exists('g_' .$g_id, $lookinfo)) {	//存在，不做操作，否则加入
					//判断存储元素的个数，如果超过5个，那么将第一个shift掉
					if(count($lookinfo) > 5) {
						array_shift($lookinfo);
					}
					$this->save($mem,$g_id,$lookinfo);
				}
			}
		}
		
		private function save($mem,$g_id,$lookinfo=array()) {
			//获取id的商品数据，将其拼为数组，存储
			$info = $this->goods->get_info_one($g_id);
			$lookinfo['g_' . $g_id] = array(
					'goods_id' => $info[0]->goods_id,
					'goods_name' => $info[0]->goods_name,
					'shop_price' => $info[0]->shop_price,
					'sale_num' => $info[0]->sale_num,
			);
			//存储,即使失败也不用返回错误
			$mem->set('lookinfo', $lookinfo , 0 , 2592000);
			//关闭链接
			$mem->close();
		}
		
		//ajax请求获取最近浏览
		public function ajax_lookinfo() {
			$mem = new Memcache();
			$mem->connect('192.168.18.24',11211);
			$a_info =  $mem->get('lookinfo');
			//反转数组
			echo json_encode(array_reverse($a_info));
		}
		
		//判断id是否合法
		private function is_id($id) {
			//判断id是否合法
			if(!$this->goods->is_one($id)) {
				$this->show_error(base_url('/'), '非法操作！');
			}
		}
		
		//获取商品数据
		public function get_info() {
			$id = $_POST['g_id'];
			echo json_encode($this->goods->get_info_one($id));
		}
		
		//获取商品attr(颜色)
		public function get_attr_color() {
			$id = $_POST['g_id'];
			$a_info = $this->goods->get_attr_color($id);
			if($a_info) {
				echo json_encode($a_info);
			}else {
				echo '0';
			}
		}
		
		//获取商品attr(尺寸)
		public function get_attr_size() {
			$id = $_POST['g_id'];
			$a_info = $this->goods->get_attr_size($id);
			if($a_info) {
				echo json_encode($a_info);
			}else {
				echo '0';
			}
		}
		
		//获取商品相册
		public function get_images() {
			$id = $_POST['g_id'];
			$a_info = $this->goods->get_photo_id($id);
			if($a_info) {
				echo json_encode($a_info);
			}else {
				echo '0';
			}
		}
		
		//ajax 写入cookie
		public function in_cookie() {
			$price = '0';
			$in_cookie = $res = array();
			if(isset($_GET['info'])) {
				$info = $_GET['info'];
				if(!isset($_COOKIE['p_details'])) {
					$in_cookie[] = $info;
				}else {
					$in_cookie = unserialize($_COOKIE['p_details']);
					$in_cookie[] = $info;
				}
				setcookie('p_details',serialize($in_cookie),time() +604800,'/');
			}else {
				$in_cookie = isset($_COOKIE['p_details']) ? unserialize($_COOKIE['p_details']) : array();
			}
				$total = count($in_cookie) ? count($in_cookie) : 0;
				foreach ($in_cookie as $v) {
					$price += $v['price'];
				}

			$res = array('total'=>$total,'price'=>$price);
			echo json_encode($res);
		}
		

	}
?>