<?php
	/*
	 * 管理员类
	 */
	class Manage_model extends MY_Model {
		
		//验证管理员登陆
		public function login_check($data) {
			$filter = array(
				'fields' => 'mg_id,mg_name',
				'where' => array('mg_name'=>$data['login_user'],'mg_pwd'=>md5($data['login_pass'])),
				'limit' => 1
			);
			return $this->_select($filter);
		}
		
		//验证管理员id
		public function is_id($id) {
			$filter = array(
				'fields' => 'mg_id',
				'where' => array('mg_id' => $id),
				'limit' => 1,
			);
			return $this->_select($filter);
		}
		
		//获取管理员总量
		public function get_total() {
			return $this->db->count_all($this->son_table_name);
		}
		
		//获取管理员列表
		public function get_all_user($limit) {
			$filter = array(
					'fields' => 'mg_id,mg_name,mg_last_login_time,mg_last_ip,role.role_name as name,mg_role_id',
					'join' => array('gf_role as role','gf_manage.mg_role_id = role.role_id'),
					'limit'=>$limit
			);
			return $this->_select($filter);
		}
		
		//获取单个管理员信息
		public function get_info($id) {
			$filter = array(
				'fields' => 'mg_id,mg_name,role.role_name as name,mg_role_id,role.role_auth_ac as role_auth_ac,role.role_auth_ids as auth_ids',
				'join' => array('gf_role as role','gf_manage.mg_role_id = role.role_id'),
				'where' => array('mg_id' => $id),
				'limit' => 1,
			);
			return $this->_select($filter);
		}
		
		//删除单个管理员
		public function delete_mg($id) {
			$where = array(
				'mg_id' => $id,
			);
			return $this->_delete($where);
		}
		
		//新增
		public function manage_add($data) {
			$info = array(
				'mg_name' => $data['mg_name'],
				'mg_pwd' =>md5($data['mg_pwd']),
				'mg_role_id' => $data['mg_role_id'],
			);
			return $this->_insert($info);
		}
		
		//验证管理员是否重名
		public function is_name($name) {
			$filter = array(
					'fields' => 'mg_id',
					'where' => array('mg_name' => $name),
					'limit' => 1,
			);
			return $this->_select($filter);
		}
		
		//登陆后更改信息
		public function login_mof($id) {
			$filter = array(
				'mg_last_login_time' => time(),
				'mg_last_ip' => ip2long($_SERVER['REMOTE_ADDR']),
			);
			$where = array('mg_id'=>$id);
			return $this->_update($filter, $where);
		}
		
		//检测角色占用，有一条即可
		public function is_use_role($id) {
			$filter = array(
				'fields' => 'mg_id',
				'mg_role_id' => $id,
				'limit' => 1,
			);
			return $this->_select($filter);
		}
		
	}
