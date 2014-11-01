<?php if (!defined('BASEPATH')) exit('No direct access allowed.');
/*
 * 后台的商品分类模型类
 */
class Category_model extends MY_Model{
    const TBL_NAME  = 'gf_category';
    //实现父类的构造方法
    private $error; //保持错误信息
    
    public function __construct(){
        parent::__construct();
        //设置初始化参数
    }
    
    //获取商品的分类数据，树状显示
    public function showCategory($cat_id=0){
        $list = $this->getList();
        //var_dump($list);die;
        return $this->treeOrder($list,$cat_id,0);
    }
    
    //获取列表数据
    private function getList(){
        $sql = "select * from gf_category order by sort_order";
        //$res  = $this->db->get(self::TBL_NAME);
        //$data = $res->result_array();
        return $this->db->query($sql)->result_array();
    }
    
    /**
     *    定义一个递归函数，来完成树状结构的排序
     */
    private function treeOrder($list,$parent_id=0,$deep=0){
        static $res =array();//保存按顺序查找到的分类
        foreach($list as $row){
            if ($row['parent_id']==$parent_id){
                $row['deep'] = $deep;
                $res[] = $row;
                $this->treeOrder($list,$row['cat_id'],$deep+1);
            }
        }
        return $res;
    }
    
    //根据id获取每一条分类的信息
    public function getCatById($cid){
        $sql = "select * from gf_category where cat_id='$cid'";
        return $this->_query($sql);
    }
    
    /**
     * 删除一条分类数据
     */
    public function checkCat($cat_id){
        //数据的完整性校验,判断是否是末级分类，此操作只能针对末级分类
        $sql = "select count(*) as num from gf_category where parent_id='$cat_id'";
        $res = $this->_query($sql);
        //var_dump($res[0]->num);die;
        if($res[0]->num){
           // echo $sql;
            $this->error = '该分类不是末级分类，不能删除。';
        }
       /* $sqlb = "select goods_id as id from gf_goods where cat_id ='$cat_id'";
        $resb = $this->_query($sqlb);
        if($resb[0]->id){
            echo $sqlb;
            $this->error = '该分类下还有商品，不能删除。';
        }*/
        
        if(!empty($this->error)){
            return false;
        }else{
            return true;
        }
    }
    //更新分类的信息
    public function update(){
        $cid = $this->input->post('cat_id');
        //获取cat_id下所有的后代分类
        $sub_cat = $this->showCategory($cid);

    }
    
    //判断id是否存在
    public function is_id($id) {
    	$filter = array(
    		'fields' => 'cat_id',
    		'where' => array('cat_id' => $id),
    		'limit' => 1,
    	);
    	return $this->_select($filter);
    }
    
    //获取主分类
    public function get_main() {
    	$filter = array(
    		'fields' => 'cat_id,cat_name',
    		'where' => array('parent_id' => 0),
    		'order' => 'sort_order DESC',
    	);
    	return $this->_select($filter);
    }
    
    //获取所有子类
    public function get_sons() {
    	$filter = array(
    			'fields' => 'cat_id,cat_name,parent_id',
    			'where' => array('parent_id <>' => 0),
    			'order' => 'sort_order DESC',
    	);
    	return $this->_select($filter);
    }
    
    //获取指定id下所有的一级子类
    public function get_id_ms($id) {
    	$filter = array(
    		'fields' => 'cat_id,cat_name',
    		'where' => array('parent_id'=>$id),
    	);
    	return $this->_select($filter);
    }
    
    
    
}
