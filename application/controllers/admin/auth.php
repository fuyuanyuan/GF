<?php

	/*
	 * 权限控制器
	 */
	class Auth extends Admin_Controller {
		
		public function __construct(){
			parent::__construct();
			$this->load->model('auth_model','auth');
		}
		
		//显示权限列表
		public function showlist() {
			$total = $this->auth->get_total();
			//设置分页所在位置
			$page_place = 4;
			//获取页码
			$page = $this->uri->segment($page_place);
			//引入分页类
			$config_page = array(
					'total' => $total,
					'pagesize' => 9,
					'page' => $page,
					'page_place' => $page_place,
			);
			$this->load->library('cipagemy',$config_page);
			$limit = $this->cipagemy->setLimit();
			$all_auth =  $this->auth->get_all_auth($limit);
			$this->assign('num_li', $this->cipagemy->setNum());
			$this->assign('page', $this->cipagemy->showPage());
			$this->assign('authlist', $all_auth);
			$this->display('admin/auth/authlist');
		}
		
		//添加新权限
		public function add() {
			if(!empty($_POST)) {
				$p_data = $this->input->post();
				//验证数据
				$this->load->library('form_validation');
				$this->form_validation->set_rules('auth_name','权限名称','required|min_length[2]');
				if($p_data['auth_pid'] != '0') {
					$this->form_validation->set_rules('auth_c','控制器名称','required');
					$this->form_validation->set_rules('auth_a','方法名称','required');
				}
				if($this->form_validation->run() == FALSE) {
					$errors = validation_errors();
					$this->show_error(base_url('admin/auth/add'), $errors);
				}else {
					//检查名称是否重复
					if($this->auth->is_name($p_data['auth_name'])) {
						$this->show_error(base_url('admin/auth/add'), '权限名称重复！请重新添加！');
						die;
					}
					if($this->auth->add_auth($p_data)) {
						$this->success(base_url('admin/auth/showlist'));
					}else {
						$this->show_error(base_url('admin/auth/add'), '很抱歉！新增失败！请重新添加');
					}
				}
			}
			$auths = $this->auth->get_auths_noli();
			$this->assign('auths', $auths);
			$this->display('admin/auth/add');
		}
		
		//修改权限
		public function mof_auth() {
			if(!empty($_POST)) {
				$p_data = $this->input->post();
				//验证数据
				$this->load->library('form_validation');
				$this->form_validation->set_rules('auth_name','权限名称','required|min_length[2]');
				if($p_data['auth_pid'] != '0') {
					$this->form_validation->set_rules('auth_c','控制器名称','required');
					$this->form_validation->set_rules('auth_a','方法名称','required');
				}
				if($this->form_validation->run() == FALSE) {
					$errors = validation_errors();
					$this->show_error(base_url('admin/auth/add'), $errors);
					die;
				}
				//检查权限名称
				if($this->auth->is_name_mof($p_data)) {
					$this->show_error(base_url('admin/auth/add'), '权限名称重复！请重新修改！');
					die;
				}
				if($this->auth->auth_edit($p_data)) {
					$this->success(base_url('admin/auth/showlist'));
				}else {
					$this->show_error(base_url('admin/auth/add'), '修改失败或者没有修改任何内容！请重试！');
				}
			}
			$id = $this->uri->segment(4);
			if(!$this->auth->is_id($id)) {
				$this->show_error(base_url('admin/auth/showlist'), '非法操作！');
			}
			$auths = $this->auth->get_auths_noli();
			$info = $this->auth->id_info($id);
			$this->assign('info', $info[0]);
			$this->assign('auths', $auths);
			$this->display('admin/auth/mof_auth');
		}
		
		//删除权限
		public function del_auth() {
			//验证id
			$id = $this->uri->segment(4);
			if(!$this->auth->is_id($id)) {
				$this->show_error(base_url('admin/auth/showlist'), '非法操作！');
				die;
			}
			//验证是否被占用
			//判断是否为主类
			$this->load->model('role_model');
			$info = $this->auth->id_info($id);
			//获取全部的使用权限的集合
			$auth_ids = $this->role_model->get_all_role_auth_ids();
			$temp = '';
			foreach ($auth_ids as $v) {
				$temp .= $v->role_auth_ids . ',';
			}
			if($info[0]->auth_level != 0) {	//子类，目前全二级，不判断三级的情况
				if(in_array($id, explode(',', rtrim($temp,',')))) {
					$this->show_error(base_url('admin/auth/showlist'), '此权限有角色正在使用！请先解除关系！');
					die;
				}
			}else{
				$temparr = array();
				//找到主类下所有的子类
				$sons = $this->auth->get_son_auths($id);
				if($sons) {	//有子类
					foreach ($sons as $v) {
						$temparr[] = $v->auth_id;
					}
					$temparr[] = $id;
					//判断是否占用
					if(array_intersect($temparr, explode(',', rtrim($temp,',')))) {
						$this->show_error(base_url('admin/auth/showlist'), '此权限有角色正在使用！请先解除关系！');
						die;
					}
				}else {	//没有子类
					if(in_array($id, explode(',', rtrim($temp,',')))) {
						$this->show_error(base_url('admin/auth/showlist'), '此权限有角色正在使用！请先解除关系！');
						die;
					}
				}
			}
			if($this->auth->auth_del($id)) {
				$this->success(base_url('admin/auth/showlist'));
			}else {
				$this->show_error(base_url('admin/auth/showlist'), '删除失败！请重试！');
			}
		}
		
		
	}

?>