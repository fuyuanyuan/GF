<?php
	//后台首页
	class Welcome extends Admin_Controller {
		
		public function __construct(){
			parent::__construct();
		}
		
		
		private function info() {
			$this->load->model('manage_model');
			return $this->manage_model->get_info($this->session->userdata('id'));
		}
		
		//载入top
		public function top() {
			$this->assign('user', $this->session->userdata('name'));
			//获取权限信息
			$info = $this->info();
			if($info[0]->mg_role_id == '') {
				$this->assign('auth_role', '超级管理员');
			}else {
				$this->assign('auth_role', $info[0]->name);
			}
			$this->display('admin/welcome/top');
		}
		
		//载入menu
		public function menu() {
			$this->load->model('auth_model');
			//通过会员id，找到权限ids集合
			$info = $this->info();
			//普通管理员，获取其自身的权限集合
			if($info[0]->mg_role_id != '') {
				$ids = $info[0]->auth_ids;
				//通过ids获取全部权限信息
				$auth_info = $this->auth_model->get_authac($ids);
				//处理结果
				$main_auth = $son_auth = array();
				foreach($auth_info  as $value) {
					if($value->auth_level == 0) {
						$main_auth[] = $value;
					}else if ($value->auth_level == 1) {
						$son_auth[] = $value;
					}
				}
			}else {
				$main_auth = $this->auth_model->get_main_auth();
				$son_auth = $this->auth_model->get_son_auth();
			}
			
			$this->assign('main_auth', $main_auth);
			$this->assign('son_auth', $son_auth);
			$this->display('admin/welcome/menu');
		}
		
		//载入drag
		public function drag() {
			$this->display('admin/welcome/drag');
		}
		
		//载入main
		public function main() {
			$this->display('admin/welcome/main');
		}
		
		
		//载入后台
		public function index() {
			$this->display('admin/welcome/index');
		}
		
	}

?>