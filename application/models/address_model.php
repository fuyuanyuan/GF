<?php

	class Address_model extends MY_Model {
		
		
		//获取全部地址量
		public function get_total() {
			return $this->_count();
		}
		
		//获取全部地址，带limit
		public function get_all_addr($limit) {
			$filter = array(
				 'fields' => 'addr_id,addr_name,user_id,address,tel',
				 'limit' => $limit,
			);
			return $this->_select($filter);
		}
		
		//获取指定用户的地址
		public function get_by_user($id) {
			$filter = array(
				'fields' => 'addr_id',
				'limit' =>1,
			);
			return $this->_select($filter);
		}
		
	}

?>