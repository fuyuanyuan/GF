<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends Home_Controller {


	public function index(){
		//设置导航
		$this->load->model('category_model','category');
		$main = $this->category->get_main();
		$sons = $this->category->get_sons();
		$this->assign('sons',$sons);
		$this->assign('main', $main);
		$this->assign('maxnum', 10);
		$this->display('welcome/index');
	}
	
	
	//显示文章详情
	public function artical() {
		//设置导航
		$this->load->model('category_model','category');
		$main = $this->category->get_main();
		$sons = $this->category->get_sons();
		$this->assign('sons',$sons);
		$this->assign('main', $main);
		
		$this->load->model('article_model','art');
		$id = $this->uri->segment(4);
		$max_id = $this->art->max_id();
		$min_id = $this->art->min_id();
		if(!$this->art->is_one($id)) {
			$this->show_error(base_url(), '非法操作！');
		}
		$info = $this->art->getArtById($id);
		$this->assign('max', $max_id[0]->max);
		$this->assign('min', $min_id[0]->min);
		$this->assign('info', $info);
		$this->display('welcome/artical');
	}
	
	//获取最新上架的商品（10）
	public function get_new_goods() {
			$this->load->model('goods_model');
			echo json_encode($this->goods_model->get_new(10));
	}
	
	//获取推荐商品10条
	public function get_recom_goods() {
		$this->load->model('goods_model');
		echo json_encode($this->goods_model->get_recom(10));
	}
	
	
	
	//获取前6条文章数据（前台）
	public function article() {
		$this->load->model('article_model','art');
		echo json_encode($this->art->getArtLimit(6));
	}
	

	
	
	
	
}
