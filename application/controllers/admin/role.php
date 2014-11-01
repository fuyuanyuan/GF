<?php

	/*
	 * 角色控制器
	 */
	class Role extends Admin_Controller{
		
		public function __construct() {
			parent::__construct();
			$this->load->model('role_model','role');
		}
		
		//显示角色列表
		public function showlist() {
			$total = $this->role->get_total();
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
			$all_role =  $this->role->get_all_role($limit);
			$this->assign('num_li', $this->cipagemy->setNum());
			$this->assign('page', $this->cipagemy->showPage());
			$this->assign('rolelist', $all_role);
			
			$this->display('admin/role/rolelist');
		}
		
		//显示角色详情
		public function detail() {
			$id = $this->uri->segment(4);
			if(!$this->role->is_id($id)) {
				$this->show_error(base_url('admin/role/showlist'), '非法操作！');
			}
			$info = $this->role->one_info($id);
			$this->load->model('auth_model','auth');
			$main_auth = $this->auth->get_main_auth();
			$son_auth = $this->auth->get_son_auth();
			$this->assign('main_auth', $main_auth);
			$this->assign('son_auth', $son_auth);
			$this->assign('info', $info[0]);
			$this->assign('auth_ids', explode(',', $info[0]->role_auth_ids));
			$this->display('admin/role/detail');
		}
		
		//添加新角色
		public function add() {
			$this->load->model('auth_model','auth');
			if(!empty($_POST)) {
				//数据验证
				$this->load->library('form_validation');
				$this->form_validation->set_rules('role_name','角色名称','required');
				if($this->form_validation->run() == FALSE) {
					$errors = validation_errors();
					$this->show_error(base_url('admin/role/add'), $errors);
					die;
				}
				$data = $this->input->post();
				//验证角色名称是否重复
				if($this->role->is_name($data['role_name'])) {
					$this->show_error(base_url('admin/role/add'), '角色名称重复，请重新添加！');
					die;
				}
				//获取相关auth数据
				$authsdata = $this->auth->get_authac(implode(',', $data['role_auth_ids']));
				if($this->role->role_add($data,$authsdata)) {
					$this->success(base_url('admin/role/showlist'));
				}else {
					$this->show_error(base_url('admin/role/add'), '很抱歉！新增失败！请重新添加');
				}
			}
			
			$main_auth = $this->auth->get_main_auth();
			$son_auth = $this->auth->get_son_auth();
			$this->assign('main_auth', $main_auth);
			$this->assign('son_auth', $son_auth);
			$this->display('admin/role/add');
		}
		
		//修改权限
		public function mof_role() {
			$this->load->model('auth_model','auth');
			if(!empty($_POST)) {
				$this->load->library('form_validation');
				$this->form_validation->set_rules('role_name','角色名称','required');
				if($this->form_validation->run() == FALSE) {
					$errors = validation_errors();
					$this->show_error(base_url('admin/role/add'), $errors);
					die;
				}
				$data = $this->input->post();
				//判断唯一性
				if($this->role->is_name_mof($data)) {
					$this->show_error(base_url('admin/role/add'), '角色名重复！');
					die;
				}
				//获取相关auth数据
				$authsdata = $this->auth->get_authac(implode(',', $data['role_auth_ids']));
				if($this->role->role_mof($data,$authsdata)) {
					$this->success(base_url('admin/role/showlist'));
				}else {
					$this->show_error(base_url('admin/role/mof_role/'.$data['role_id']), '很抱歉！修改失败！请重新添加');
				}
			}
			
			$id = $this->uri->segment(4);
			if(!$this->role->is_id($id)) {
				$this->show_error(base_url('admin/role/showlist'), '非法操作！');
			}
			$info = $this->role->one_info($id);
			$this->load->model('auth_model','auth');
			$main_auth = $this->auth->get_main_auth();
			$son_auth = $this->auth->get_son_auth();
			$this->assign('main_auth', $main_auth);
			$this->assign('son_auth', $son_auth);
			$this->assign('info', $info[0]);
			$this->assign('auth_ids', explode(',', $info[0]->role_auth_ids));
			$this->display('admin/role/mof_role');
		}
		
		//删除角色
		public function del_role() {
			//判断id是否存在
			$id = $this->uri->segment(4);
			if(!$this->role->is_id($id)) {
				$this->show_error(base_url('admin/role/showlist'), '非法操作！');
				die;
			}
			//检查要删除的角色是否有管理员使用
			$this->load->model('manage_model');
			if($this->manage_model->is_use_role($id)) {
				$this->show_error(base_url('admin/role/showlist'), '此角色有管理员正在使用，请先解除关系！');
				die;
			}
			if($this->role->role_del($id)) {
				$this->success(base_url('admin/role/showlist'));
			}else {
				$this->show_error(base_url('admin/role/showlist'), '删除失败！请重试！');
				die;
			}
		}
		
		
	}

?>