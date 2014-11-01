<?php
	//会员model类
	class User_model extends MY_Model {
		
		//新增会员
		public function add_user($data) {
			return $this->_insert($data);
		}
		
		//判断会员唯一(前台，ajax)
		public function select_one($data) {
			$filter = array(
				'fields' => 'user_id',
				'where' => "user_alias = '$data'",
			);
			return $this->_select($filter);
		}
		
		//验证id的合法性
		public function check_id($id) {
			$filter = array(
				'fields' => 'user_id',
				'where' => "user_id = $id",
				'limit' => 1,
			);
			return $this->_select($filter);
		}
		
		//验证登陆
		public function login_check($data) {
			$filter = array(
				'fields' => 'user_id',
				'where' => "user_alias = '{$data['user_alias']}' AND user_pass = md5('{$data['user_pass']}')",
			);
			return $this->_select($filter);
		}
		
		//获取会员总量
		public function get_total() {
			return $this->db->count_all($this->son_table_name);
		}
		
		//获取制定会员状态的的会员总量
		public function get_total_filter($statu,$fie = '') {
			if(empty($fie)) {
				$where = "user_flag in ($statu)";
			}else {
				$where = "user_flag in ($statu) AND user_alias like '%$fie%'";
			}
			return $this->_filter_count($where);
		}
		
		//获取所有会员信息，带limit
		public function get_all_user($data) {
			if(empty($data['where'])) {
				$filter = array(
						'limit' => $data['limit'],
				);
			}else {
				$filter = array(
					'where' => $data['where'],
					'limit' => $data['limit'],
				);
			}
			return $this->_select($filter);
		}
		
		//获取单个会员全部信息
		public function get_one_user($id) {
			$filter = array(
				'fields' => 'user_id,user_name,user_email,user_question,user_sex,user_birthday,user_inte,user_vip,user_reg_time,user_last_time,user_last_ip,user_login_count,user_flag,user_alias',
				'where' => "user_id = $id",
				'limit' => 1,
			);
			return $this->_select($filter);
		}
		
		//获取会员id
		public function get_id($name) {
			$filter = array(
					'fields' => 'user_id',
					'where' => "user_alias = '$name'",
					'limit' => 1,
			);
			return $this->_select($filter);
		}
		
	}

?>