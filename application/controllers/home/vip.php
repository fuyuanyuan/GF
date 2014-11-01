<?php
	/*
	 * 会员控制器
	 */
	class Vip extends Home_Controller {
		
		public function __construct() {
			parent::__construct();
			$this->load->model('user_model');
		}
		
		
		//验证码
		public function code() {
			//加载验证码自定义类
			$this->load->library('cicaptcha');
			$this->cicaptcha->run();
			//使用ci session（首先config里面自动加载session）
			//加密请使用 字符串  'gf';
// 			@session_start();
// 			$_SESSION['v_code'] = $this->cicaptcha->getCode();
			$this->session->set_userdata('v_code',$this->cicaptcha->getCode());
		}
		
		//验证验证码
		public function checkCode() {
			@session_start();
			if(isset($_POST['login_code']) && (strtolower($_POST['login_code']) == $this->session->userdata('v_code'))) {
				echo 'true';
			}else {
				echo 'false';
			}
		}
		
		//会员注册
		public function reg_vip() {
			//验证数据
// 			$this->load->library('form_validation');
// 			$this->form_validation->set_rules('user_name', 'reg_user', 'required|min_length[2]|max_length[30]');
// 			if($this->form_validation->run() == FALSE) {
// 				echo 'false';
// 				return;
// 			}
			$data['user_alias'] = $_POST['reg_user'];
			$data['user_pass'] = md5($_POST['reg_pass']);
			$data['user_email'] = $_POST['reg_email'];
			$data['user_reg_time'] = time();
			$data['user_last_time'] = time();
			$data['user_last_ip'] = ip2long($_SERVER['REMOTE_ADDR']);
			$data['user_login_count'] = 1;
			//提交model
			
			if($this->user_model->add_user($data)) {
				echo 'true';
			}else {
				echo 'false';
			}
		}
		
		//判断用户名唯一
		public function is_onlyone() {
			$data['user_alias'] = $_POST['reg_user'];
			if($this->user_model->select_one($data['user_alias'])) {//如果有值，说明用户名重复，返回false
				echo 'false';
			}else {
				echo 'true';
			}
		}
		
		//会员登陆
		public function login_check() {
			$data['user_alias'] = $_POST['login_user'];
			$data['user_pass'] = $_POST['login_pass'];
			if($this->user_model->login_check($data)) {	//如果有数据，ok
				echo 'true';
			}else {
				echo 'false';
			}
		}
		
		
		//获取会员id值
		public function get_id() {
			$name = $_POST['name'];
			$info = $this->user_model->get_id($name);
			echo $info[0]->user_id;
		}
		
		
		
		
		
	}

?>