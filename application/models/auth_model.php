<?php
	/*
	 * 权限管理
	 */
	class Auth_model extends MY_Model {
		
		//获取权限总条数
		public function get_total() {
			return $this->db->count_all($this->son_table_name);
		}
		
		//获取权限列表
		public function get_all_auth($limit) {
			$filter = array(
					'fields' => 'auth_id,auth_name,auth_pid,auth_c,auth_a,auth_path,auth_level',
					'order' => 'auth_path ASC',
					'limit'=>$limit,
			);
			return $this->_select($filter);
		}
		
		//获取所有的权限列表，不带limit
		public function get_auths_noli() {
			$filter = array(
					'fields' => 'auth_id,auth_name,auth_pid,auth_c,auth_a,auth_path,auth_level',
					'order' => 'auth_path ASC',
			);
			return $this->_select($filter);
		}
		
		//获取下一个最新的自增长id
		public function get_auto_id() {
			$sql = "SHOW TABLE STATUS LIKE 'gf_auth'";
			$res = $this->_query($sql);
			return $res[0]->Auto_increment;
		}
		
		//获取指定id全部信息
		public function id_info($id) {
			$filter = array(
				'fields' => 'auth_id,auth_name,auth_pid,auth_c,auth_a,auth_path,auth_level,is_show',
				'where' => array('auth_id' => $id),
				'limit' => 1,
			);
			return $this->_select($filter);
		}
		
		//判断指定id
		public function is_id($id) {
			$filter = array(
				'fields' => 'auth_id,auth_path',
				'where' => array('auth_id' => $id),
				'limit' => 1,
			);
			return $this->_select($filter);
		}
		
		//新增权限
		public function add_auth($data) {
			//获取自增长id
			$new_id = $this->get_auto_id();
			//判断是否为主类
			if($data['auth_pid'] == '0') {
				$insert_data = array(
					'auth_name' => $data['auth_name'],
					'auth_pid' => $data['auth_pid'],
					'auth_path' => $new_id,
					'auth_level' => 0,
					'is_show' => $data['is_show'],
				);
			}else {
				$auth_pid = $this->is_id($data['auth_pid']);
				$data['auth_path'] = $auth_pid[0]->auth_path . '-' . $new_id;
				$temp = explode('-', $data['auth_path']);
				$data['auth_level'] = count($temp) - 1;
				$insert_data = array(
						'auth_name' => $data['auth_name'],
						'auth_pid' => $data['auth_pid'],
						'auth_c' => $data['auth_c'],
						'auth_a' => $data['auth_a'],
						'auth_path' =>$data['auth_path'],
						'auth_level' => $data['auth_level'],
						'is_show' => $data['is_show'],
				);
			}
			return $this->_insert($insert_data);
		}
		
		//修改权限
		public function auth_edit($data) {
			if($data['auth_level'] == '0') {
				$auth_info = array(
					'auth_name' => $data['auth_name'],
					'is_show' => $data['is_show'],
				);
			}else {
				$auth_pid = $this->is_id($data['auth_pid']);
				$data['auth_path'] = $auth_pid[0]->auth_path . '-' . $data['auth_id'];
				$temp = explode('-', $data['auth_path']);
				$data['auth_level'] = count($temp) - 1;
				$auth_info = array(
					'auth_name' => $data['auth_name'],
					'auth_pid' => $data['auth_pid'],
					'auth_c' =>$data['auth_c'],
					'auth_a' => $data['auth_a'],
					'auth_path' => $data['auth_path'],
					'auth_level' => $data['auth_level'],
					'is_show' => $data['is_show']
				);
			}
			$where = array('auth_id' => $data['auth_id']);
			return $this->_update($auth_info, $where);
		}
		
		//删除权限
		public function auth_del($id) {
			$info = $this->id_info($id);
			if($info[0]->auth_level == '0') {	//删除主类
				//找到主类下所有的子类
				$ids = '';
				$auths = $this->get_auths_noli();
				foreach ($auths as $v) {
					if(strpos($v->auth_path,$id . '-') === 0 || $v->auth_path == $id) {
						$ids .= $v->auth_id . ',';
					}
				}
				$ids = rtrim($ids,',');
				$this->db->where_in('auth_id',explode(',', $ids));
				$this->db->delete('gf_auth');
				return $this->db->affected_rows();
			}else {
				$where = array(
					'auth_id' => $id,
				);
				return $this->_delete($where);
			}
			
		}
		
		
		//获取全部的主权限
		public function get_main_auth() {
			$filter = array(
				'fields' => 'auth_id,auth_name,auth_pid,auth_c,auth_a,auth_path,auth_level',
				'where' => array('auth_level'=>0),
			);
			return $this->_select($filter);
		}
		
		//获取全部的子权限
		public function get_son_auth() {
			$filter = array(
					'fields' => 'auth_id,auth_name,auth_pid,auth_c,auth_a,auth_path,auth_level,is_show',
					'where' => array('auth_level <>'=>0),
			);
			return $this->_select($filter);
		}
		
		//判断唯一权限名称
		public function is_name($name) {
			$filter = array(
					'fields' => 'auth_id',
					'where' => array('auth_name'=>$name),
					'limit' => 1,
			);
			return $this->_select($filter);
		}
		
			//判断唯一权限名称，修改
		public function is_name_mof($data) {
			$filter = array(
					'fields' => 'auth_id',
					'where' => array('auth_name'=>$data['auth_name'],'auth_id <>'=>$data['auth_id']),
					'limit' => 1,
			);
			return $this->_select($filter);
		}
		
		//获取指定权限ids集合的auth_a,auth_c
		public function get_authac($ids) {
			$idsarr = explode(',', $ids);
			$this->db->select('auth_a,auth_c,auth_name,auth_level,auth_id,auth_pid,is_show');
			$this->db->where_in('auth_id',$idsarr);
			return $this->db->get('gf_auth')->result();
		}
		
		//获取指定主类下所有的子类
		public function get_son_auths($pid) {
			$filter = array(
				'fields' => 'auth_id',
				'where'=> array('auth_pid'=>$pid),
			);
			return $this->_select($filter);
		}
		
		
	}

?>