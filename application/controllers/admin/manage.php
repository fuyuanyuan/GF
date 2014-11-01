<?php
	//管理员控制器类
	class Manage extends Admin_Controller {
		
		public function __construct() {
			parent::__construct();
			$this->load->model('manage_model','manage');
		}
			
		public function login() {
			if(!empty($_POST)) {
				$data = $this->input->post();
				if($manageinfo = $this->manage->login_check($data)) {
					$array = array(
						'name' => $manageinfo[0]->mg_name,
						'id' => $manageinfo[0]->mg_id,
						'flag' => 'ok'
					);
					$this->session->set_userdata($array);
				//更改信息
				$this->manage->login_mof($manageinfo[0]->mg_id);
					echo 'true';
				}else {
					echo 'false';
				}
			}else {
				if($this->session->userdata('flag') != 'ok') {
					$this->display('admin/manage/login');
				}else {
					$url = base_url('admin/welcome');
					header('Location:'.$url);
					die;
				}
			}
		}
		
		public function code() {
			//载入验证码类
			$this->load->library('cicaptcha');
			$this->cicaptcha->run();
// 			@session_start();
// 			$_SESSION['code'] = $this->cicaptcha->getCode();
			$this->session->set_userdata('code',$this->cicaptcha->getCode());
		}
		
		//ajax验证验证码
		public function checkCode() {
			@session_start();
			if(isset($_POST['login_code']) && (strtolower($_POST['login_code']) == $this->session->userdata('code'))) {
				echo 'true';
			}else {
				echo 'false';
			}
		}
		
		//管理员退出
		public function logout() {
			//清除session
			$array = array(
					'name' => '',
					'id' => '',
					'flag' => ''
			);
			$this->session->unset_userdata($array);
			$url = base_url('admin/');
			header('Location:'.$url);
			die;
		}
		
		//管理员列表
		public function showlist() {
			$total = $this->manage->get_total();
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
			$all_user =  $this->manage->get_all_user($limit);
			
			$this->assign('num_li', $this->cipagemy->setNum());
			$this->assign('page', $this->cipagemy->showPage());
			$this->assign('userlist', $all_user);
			$this->display('admin/manage/managelist');
		}
		
		//新增管理员信息
		public function add() {
			$this->load->model('role_model','role');
			//载入验证类
			$this->load->library('form_validation');
			if(!empty($_POST)) {
				//设置验证规则
				$this->form_validation->set_rules('mg_name','管理员名称','required|min_length[2]');
				$this->form_validation->set_rules('mg_pwd','管理员密码','required|min_length[6]');
				$this->form_validation->set_rules('mg_role_id','管理员角色','required');
				//执行验证
				if($this->form_validation->run() == FALSE) {
					$error = validation_errors();
					$this->show_error(base_url('admin/manage/add'), $error);
				}else {
					$p_data = $this->input->post();
					//判断用户名是否占用
					if($this->manage->is_name($p_data['mg_name'])) {
						$this->show_error(base_url('admin/manage/add'), '管理员姓名重复，请重新添加！');
					}else {
						if($this->manage->manage_add($p_data)) {
							$this->success(base_url('admin/manage/showlist'));
						}else {
							$this->show_error(base_url('admin/manage/add'), '很抱歉，新增失败，请重试！');
						}
					}
				}
			}else {
				//角色信息
				$role = $this->role->get_role_noli();
				$this->assign('role', $role);
				$this->display('admin/manage/add');
			}

		}
		
		//修改管理员信息
		public function mof_manage() {
			$this->load->model('role_model','role');
			//角色信息
			$role = $this->role->get_role_noli();
			$id = $this->uri->segment(4);
			if(!$this->manage->is_id($id) || $id == 1) {
				$this->show_error(base_url('admin/manage/showlist'), '非法操作123！');
			}
			$info = $this->manage->get_info($id);
			$this->assign('role', $role);
			$this->assign('info', $info[0]);
			$this->display('admin/manage/manage_edit');
		}
		
		//删除管理员
		public function del_manage($id) {
			$id = $this->uri->segment(4);
			if(!$this->manage->is_id($id)) {
				$this->show_error(base_url('admin/manage/showlist'), '非法操作！');
			}
			if($this->manage->delete_mg($id)) {
				$this->success(base_url('admin/manage/showlist'));
			}else {
				$this->show_error(base_url('admin/manage/showlist'), '删除该管理员失败！请重试！');
			}
		}
		
		
	}

?>