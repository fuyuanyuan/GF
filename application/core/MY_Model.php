<?php

	if (!defined('BASEPATH')) exit('No direct access allowed.');
	
	class MY_Model extends CI_Model {
		//存放的是子类的表名
		protected $son_table_name;
		
		public function __construct() {
			parent::__construct();
			//设置子类的表名
			$son_class = get_called_class(); 
			$this->son_table_name = $this->db->swap_pre . strtolower(substr($son_class,0,strpos($son_class,'_')));
		}
		
		
		/*
		 * 新增方法，子类直接调用，自动转义
		 * $data 为键值对数组，即 字段=>值 
		 * return 受影响行数
		 * 		举例子类调用
		 * 		public function add_goods($data) {
						return $this->_insert($data);
				}
				不要使用 insert ,或者 _insert 来命名
			
		 */
		protected function _insert(Array $data) {
			if($this->db->insert($this->son_table_name,$data)) {
				return $this->db->affected_rows();
			}else {
				return false;
			}
		}
		
		
		/*
		 * 修改方法，子类直接调用，自动转义
		 * $data 为键值对数组，即 字段=>值 
		 * $where 为键值对数组，
		 * return 受影响行数
		 * 		举例子类调用
		 * 		public function mof_goods($data,$where) {
						return $this->_update($data,$where);
				}
				不要使用 update ,或者 _update 来命名
			
		 */
		protected function _update(Array $data,Array $where) {
			if($this->db->update($this->son_table_name,$data,$where)) {
				return $this->db->affected_rows();
			}else {
				return false;
			}
		}
		
		
		/*
		 * 删除
		 */
		protected function _delete(Array $where) {
			if($this->db->delete($this->son_table_name,$where)) {
				return $this->db->affected_rows();
			}else {
				return false;
			}
		}
		
		/*
		 * 新增 ， 返回的是一个数组，数组内元素为对象
		 *  实例：
		 *  $data = array(
					'fields' => 'name,age',
					'where' => "name = 'jack' and id = '1'",
					'join' => array('php26_goods as g','php26_test.id = g.goods_id'),
					'group' => 'name',
					'having' => 'name = 1',
					'order' => 'id desc',
					'limit' => '1,2',
			);
			注意： join 为数组，并且
							第一个参数为要链接的表，
							第二个参数为ON的条件，
							第三个参数为left，right，链接方法，默认为left
		 */
		protected function _select($data=array()) {
			foreach($data as $key=>$value) {
				//获取字段
				if($key == 'fields') {
					$this->db->select($value);
				}
				//获取where条件
				if($key == 'where') {
					$this->db->where($value);
				}
				//获取join条件
				if($key == 'join') {
					//重新生成表名
					//$this->son_table_name .= '';
					//生成join条件
					if(!isset($value[2])) $value[2] = 'left';
					$this->db->join($value[0],$value[1],$value[2]);
					//$this->db->join('php26_goods','php26_test.id = php26_goods.id','left');
				}
				//获取group by 条件(如果多个条件，传递数组)
				if($key == 'group') {
					$group = $value;
					$this->db->group_by($value);
				}
				//获取having条件
				if($key == 'having') {
					$having = $value;
					$this->db->having($value);
				}
				//获取order by 条件
				if($key == 'order') {
					$this->db->order_by($value);
				}
				//获取limit条件
				if($key == 'limit') {
					//在value里面找逗号
					if(strpos($value, ',')) {	//如果有逗号,将前后饭转
						$valuearr = explode(',', $value);
						$this->db->limit($valuearr[1],$valuearr[0]);
					}else {
						$this->db->limit($value);
					}
 				}
 				
			}
			return $this->db->get($this->son_table_name)->result();
		}
		
		/*
		 * 自己写sql语句,返回数组对象
		 */
		public function _query($sql) {
			return $this->db->query($sql)->result();
		}
		
		/*
		 * 获取一张表里面的总数据,直接可以在controller里面使用
		 * 
		 */
		public function _count() {
			return $this->db->count_all($this->son_table_name);
		}
		
		//查询制定条件的数据的总数量
		public function _filter_count($where) {
			$sql = "SELECT count(*) as count FROM $this->son_table_name WHERE $where";
			$res = $this->_query($sql);
			return $res[0]->count;
		}
		
		/*
		 * 获取最后新增的sql语句的id
		 */
		public function _last_id($id) {
			$sql = "SELECT MAX(LAST_INSERT_ID($id)) as max FROM " . $this->son_table_name;
			$res = $this->_query($sql);
			return $res[0]->max;
		}
		
		
	}

?>