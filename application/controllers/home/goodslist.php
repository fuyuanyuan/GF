<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * 商品列表控制器
 */
	class Goodslist extends Home_Controller {
		private $pagesize = 6;
		
		public function __construct() {
			parent::__construct();
			$this->load->model('goods_model');
			$this->load->model('category_model','category');
		}
		
		//载入列表页面
		public function show() {
			//设置导航
			$main = $this->category->get_main();
			$sons = $this->category->get_sons();
			$id = $this->uri->segment(4) ? $this->uri->segment(4) : 0;
			$this->assign('page_size',$this->pagesize);  //每页显示条数
			$this->assign('a_id', $id);
			$this->assign('sons',$sons);
			$this->assign('main', $main);
			$this->display('welcome/goodslist');
		}
		
		//获取导航信息			//判断id
		public function get_nav() {
			$a_id = (int)$_POST['a_id'];
			if(empty($a_id) || !$this->category->is_id($a_id)) {		//如果是0，那么显示所有主导航
				 echo json_encode($this->category->get_main());
			}else {	//获取导航下的所有子导航
				$re_info = array();
				//获取当前id的导航名称
				$temp = $this->category->getCatById($a_id);
				$re_info[] = $temp[0];
				//获取当前id下所有子类的名称
				$s_info = $this->category->get_id_ms($a_id);
				if($s_info){		//如果有子类
					foreach ($s_info as $value) {
						$re_info[] = $value;
					}
				}else {
					$re_info[] = array('cat_id'=>$a_id,'cat_name'=>'暂无子类');
				}
				echo json_encode($re_info);
			}
		}
		
		//获取热销
		public function hot_sale() {
			echo json_encode($this->goods_model->get_sale(5));
		}
		
		//获取所有品牌
		public function get_brand() {
			echo json_encode($this->goods_model->get_brands());
		}
		
		/*
		//获取全部商品
		public function get_goods_list() {
			$this->load->model('goods_model');
			$total = $this->goods_model->get_total();
			//设置分页所在位置
			$page_place = 4;
			//获取页码
			$page = $this->uri->segment($page_place);
			//引入分页类
			$config_page = array(
					'total' => $total,
					'pagesize' => 5,
					'page' => $page,
					'page_place' => $page_place,
			);
			$this->load->library('cipagemy',$config_page);
			$limit = $this->cipagemy->setLimit();
			$all_goods =  $this->goods_model->get_goods_li($limit);
			$this->assign('page', $this->cipagemy->showPage());
			$this->assign('goods', $all_goods);
		}
		*/
		
		//获取商品总页码
		public function get_page_size() {
			$id = isset($_POST['a_id']) ? $_POST['a_id'] : 0;
			if(empty($id)) {
				$total = $this->goods_model->get_total();
				echo ceil($total / $this->pagesize);
			}else {
				//获取id下所有子类
				$ids = array();
				if(!$arr = $this->category->get_id_ms($id)) {
					$ids = array($id);
				}else {
					foreach ($arr as $v) {
						$ids[] = $v->cat_id;
					}
				}
				$total = $this->goods_model->get_total_filter($ids);
				echo ceil($total/$this->pagesize);
			}

		}
		
		
		//获取全部商品
		public function get_goods_list() {
			$start = isset($_POST['page']) ? $_POST['page'] : 1;
			$start1 = ($start - 1) * $this->pagesize;
			$limit = $start1 . ' , ' . $this->pagesize;
			//条件筛选
			$id = isset($_POST['a_id']) ? $_POST['a_id'] : 0;
			if(empty($id)) {
				echo json_encode($this->goods_model->get_goods_li($limit));
			}else {
				//获取id下所有子类
				$ids = array();
				if(!$arr = $this->category->get_id_ms($id)) {
					$ids = array($id);
				}else {
					foreach ($arr as $v) {
						$ids[] = $v->cat_id;
					}
				}
				//获取数据
				
				echo json_encode($this->goods_model->get_goods_where_in($limit,$ids));
			}
			
		}
		
		
		
	}
?>