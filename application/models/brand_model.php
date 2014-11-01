<?php if (!defined('BASEPATH')) exit('No direct access allowed.');

/*
 * 后台品牌模型类，实现对商品品牌的增，删，改，查，等操作
 *
 */
class Brand_model extends MY_Model{

    const TAB_NAME = 'brand';
    //实现父类的构造方法
    public function __cnstruct(){
        parent::__construct();
    }

    //添加品牌
    public function add_brand($data){
        //insert方法的两个参数，第一个表名，第二个数据。
        //insert方法的返回值就true或false，所以直接返回就ok
        return $this->db->insert(self::TAB_NAME,$data);
    }
    //更新品牌
    public function upd_brand($bid,$data){

       return $this->db->update(self::TAB_NAME,$data,array('brand_id'=>$bid));
    }
    //查询商品品牌
    public function show_brand($limit){
        $sql = "select * from gf_brand order by sort_order ".$limit;
        return $this->db->query($sql)->result_array();
        //$query = $this->db->get(self::TAB_NAME);
        //return $query->result_array();
    }
    //得到一条品牌信息
    public function getBrandById($bid){
        $query = $this->db->get_where(self::TAB_NAME,array('brand_id'=>$bid));
        return $query->row_array();
    }
    //删除一条品牌信息
    public function del_rand($bid){
        //两个参数：表名，条件
        return $this->db->delete(self::TAB_NAME,array('brand_id'=>$bid));
    }
    //统计商品品牌的总数
    public function countBrand(){
        return $this->db->count_all(self::TAB_NAME);
    }
}