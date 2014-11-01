<?php

	/*
	 * 角色模型类
	 */

	class Role_model extends MY_Model {
		
		//获取total
		public function get_total() {
			return $this->db->count_all($this->son_table_name);
		}
		
		//获取所有角色，带limit
		public function get_all_role($limit) {
			$filter = array('limit'=>$limit);
			return $this->_select($filter);
		}
		
		//获取所有角色，不带limit
		public function get_role_noli() {
			$filter = array(
				'fields' => 'role_name,role_id',
			);
			return $this->_select($filter);
		}
		
		//判断指定id
		public function is_id($id) {
			$filter = array(
					'fields' => 'role_id',
					'where' => array('role_id' => $id),
					'limit' => 1,
			);
			return $this->_select($filter);
		}
		
		
		//新增角色
		public function role_add($data,$auth_data) {
			$role_auth_ids = implode(',', $data['role_auth_ids']);
			$temp = '';
			foreach ($auth_data as $value) {
				if($value->auth_c !='' && $value->auth_a != '') {
					$temp .= $value->auth_c . '/' . $value->auth_a . ',';
				}
			}
			$info = array(
				'role_name' => $data['role_name'],
				'role_auth_ids' => $role_auth_ids,
				'role_auth_ac' => ltrim($temp,','),
			);
			return $this->_insert($info);
		}
		
		//获取指定id角色的信息
		public function one_info($id) {
			$filter = array(
				'fields' => 'role_id,role_name,role_auth_ids',
				'where'=>array('role_id' => $id),
				'limit' =>1,
			); 
			return $this->_select($filter);
		}
		
		//判断角色名唯一
		public function is_name($name) {
			$filter = array(
					'fields' => 'role_id',
					'where'=>array('role_name' => $name),
					'limit' =>1,
			);
			return $this->_select($filter);
		}
		
		//判断角色名唯一，修改
		public function is_name_mof($data) {
			$filter = array(
					'fields' => 'role_id',
					'where'=>array('role_name' => $data['role_name'],'role_id <>'=>$data['role_id']),
					'limit' =>1,
			);
			return $this->_select($filter);
		}
		
		//修改角色信息
		public function role_mof($data,$auth_data) {
			$role_auth_ids = implode(',', $data['role_auth_ids']);
			$temp = '';
			foreach ($auth_data as $value) {
				if($value->auth_c !='' && $value->auth_a != '') {
					$temp .= $value->auth_c . '/' . $value->auth_a . ',';
				}
			}
			$info = array(
					'role_name' => $data['role_name'],
					'role_auth_ids' => $role_auth_ids,
					'role_auth_ac' => $temp,
			);
			$where = array('role_id'=>$data['role_id']);
			return $this->_update($info, $where);
		}
		
		//删除角色信息
		public function role_del($id) {
			$where = array(
				'role_id' => $id,
			);
			return $this->_delete($where);
		}
		
		//取得所有角色的role_auth_ids集合，
		public function get_all_role_auth_ids() {
			$filter = array(
				'fields' => 'role_auth_ids',
			);
			return $this->_select($filter);
		}
		
	}
?>