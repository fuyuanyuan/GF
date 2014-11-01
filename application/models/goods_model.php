<?php

/*
 * 商品模型类
 */
	class Goods_model extends MY_Model {
		
		
		//获取最新上架的10款商品
		public function get_new($num) {
			$filter = array(
				'fields' => 'goods_id,goods_name,shop_price,market_price,	goods_img,goods_thumb',
				'where' => array('onsale' => 1,'del_flag'=>1),
				'order' => 'create_time ASC',
				'limit' => "0,$num",	
// 				'limit' => 1,
			);
			return $this->_select($filter);
		}
		
		//获取推荐10款商品
		public function get_recom($num) {
			$filter = array(
					'fields' => 'goods_id,goods_name,shop_price,market_price,	goods_img,goods_thumb',
					'where' => array('onsale' => 1,'del_flag'=>1,'is_recom' => 1),
					'limit' => "0,$num",
			);
			return $this->_select($filter);
		}
		
		//获取热销
		public function get_sale($num) {
			$filter = array(
					'fields' => 'goods_id,goods_name,shop_price,sale_num',
					'where' => array('onsale' => 1,'del_flag'=>1),
					'order' => 'sale_num DESC',
					'limit' => "0,$num",
			);
			return $this->_select($filter);
		}
		
		//修改推荐
		public function mof_is_recom($_POST) {
			$goods_id = $_POST['goods_id'];
			$is_recom = $_POST['is_recom'] == '1' ? '0' : '1';
			$data = array(
				'is_recom' => $is_recom,
			);
			$where = array(
				'goods_id' => $goods_id,
			);
			return $this->_update($data, $where);
		}
		
		//判断id是否合法
		public function is_one($id) {
			$filter = array(
				'fields' => 'goods_id',
				'where' => array('goods_id' => $id),
				'limit' => 1,
			);
			return $this->_select($filter);
		}
		
	   //获取指定id的详情
	   public function get_info_one($id) {
	   		$filter = array(
	   			'fields' => 'goods_id,goods_name,shop_price,b.brand_name as brand_name,goods_jifen,goods_sn,small_desc,goods_desc,goods_img,goods_thumb,sale_num',
	   			'join' => array('gf_brand as b','gf_goods.brand_id = b.brand_id'),
	   			'where' => array('goods_id' => $id),
	   			'limit' => 1,
	   		);
	   		return  $this->_select($filter);
	   }
	   
	   
	   //获取指定商品的颜色值（临时）
	   public function get_attr_color($id) {
	   		$sql = "SELECT value FROM gf_goodsattr WHERE goods_id = $id AND attr_id = (SELECT attr_id FROM gf_attr WHERE attr_name = '颜色')";
	   		return $this->_query($sql);
	   }
	   
	   //获取指定商品的尺寸值（临时）
	   public function get_attr_size($id) {
	   	$sql = "SELECT value FROM gf_goodsattr WHERE goods_id = $id AND attr_id = (SELECT attr_id FROM gf_attr WHERE attr_name = '尺寸')";
	   	return $this->_query($sql);
	   }
	   
	   //获取指定商品相册
	   public function get_photo_id($id) {
	   		$sql ="SELECT img_id,img_url,thumb_url,img_desc FROM gf_galary WHERE goods_id = '$id' LIMIT 0,2";
	   		return $this->_query($sql);
	   }
	   
		//获取所有品牌
		public function get_brands() {
			$sql = "SELECT brand_id,brand_name FROM gf_brand";
			return $this->_query($sql);
		}
		
		//获取商品总量
		public function get_total() {
			return $this->_count();
		}
		
		//待条件的获取商品总量
		public function get_total_filter($where_in) {
			$this->db->where_in('cate_id',$where_in);
			$this->db->from('gf_goods');
			return $this->db->count_all_results();
		}
		
		
		
		//获取商品列表（带limit）
		public function get_goods_li($limit) {
			$filter = array(
				'fields' => 'goods_id,goods_name,shop_price,market_price,	goods_img,goods_thumb',
				'limit' => $limit,
			);
			return $this->_select($filter);
		}
		
		
		public function get_goods_where_in($limit,$ids) {
			$filter = array(
					'fields' => 'goods_id,goods_name,shop_price,market_price,	goods_img,goods_thumb',
					'limit' => $limit,
			);
			$this->db->where_in('cate_id',$ids);
			return $this->_select($filter);
		}
		
	}

?>