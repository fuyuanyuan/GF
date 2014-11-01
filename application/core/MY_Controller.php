<?php

	if (!defined('BASEPATH')) exit('No direct access allowed.');
	/*
	 * 需要创建一个后台控制器父类，跟前台控制器父类
	 * 前台控制器父类
	 */
	 	class Home_Controller extends CI_Controller {
		
		 	    public function __construct() {
			 	        parent::__construct();
			 	 }
			
			 	 public function assign($key,$val) {
				 	    $this->cismarty->assign($key,$val);
			 	 }
				
				 public function display($html) {
					 	$this->cismarty->display($html.'.html');
				 }
				 
				 protected function show_error($url,$errors) {
				 		$this->assign('url', $url);
				 		$this->assign('errors', $errors);
				 		$this->display('public/error');
				 }
				 
				 protected function success($url) {
				 	  header('Location:'.$url);
				 	  die;
				 }
		}
		
		/*
		 * 后台控制器父类
		 */
		class Admin_Controller extends CI_Controller {
			//允许直接访问的后台地址
			private $allow_array = array('admin','admin/manage/login','admin/manage/code','admin/manage/checkCode','admin/manage/logout');
			public function __construct() {
				parent::__construct();
				$this->is_session();
				$this->check_auth();
			}
			
			//判断session是否存在，否则跳转到登陆页面
			private function is_session() {
				$query_uri = $this->uri->uri_string();
				if(!in_array($query_uri, $this->allow_array)) {
					if($this->session->userdata('flag') != 'ok') {
						$url = base_url('admin/');
						header('Location:'.$url);
						die;
					}
				}
			}
			
			//判断会员权限
			private function check_auth() {
				//后台公共页面
				$public_back = array('welcome','welcome/index','welcome/top','welcome/menu','welcome/drag','welcome/main');
				$this->load->model('manage_model','manage');
				//如果不存在session，绕过
				if(!isset($this->session->userdata['flag'])) {
					return true;
				}

				//获取登陆会员权限信息
				$info = $this->manage->get_info($this->session->userdata('id'));
				//如果是超级管理员，绕过
				if($info[0]->mg_role_id == '') {
					return true;
				}
				//会员权限列表
				$auth_list = explode(',',strtolower($info[0]->role_auth_ac));
				//获取当前页面请求
				$query_uri = $this->uri->uri_string();
				//拼接请求地址
				$query_uri_arr = explode('/', $query_uri);
				//当前请求（内部）
				if(!isset($query_uri_arr[2])) {
					$query_uri_arr[2] = '';
				}
				$check = strtolower(rtrim($query_uri_arr[1] . '/' . $query_uri_arr[2],'/'));
				//如果是可以直接访问页面，直接绕过
				if(in_array($query_uri, $this->allow_array) || in_array($check, $public_back)) {
					return true;
				}
// 				print_R($query_uri_arr);echo '<hr />';
// 				echo $query_uri; echo '<br />';
				
// 				echo $check;
// 				echo '<hr />';
// 				print_r($auth_list);
// 				echo '<br />';
// 				var_dump(in_array($check,$auth_list));die;
				//检查权限
				if(!in_array($check,$auth_list)) {
					$this->show_error(base_url('admin/welcome'), '您没有此权限！');
					die;
				}
			}
			
			public function assign($key,$val) {
				$this->cismarty->assign($key,$val);
			}
			
			public function display($html) {
				$this->cismarty->display($html.'.html');
			}
			
			protected function show_error($url,$errors) {
				$this->assign('url', $url);
				$this->assign('errors', $errors);
				$this->display('public/error');
			}
			
			protected function success($url) {
				header('Location:'.$url);
				die;
			}
		}
?>