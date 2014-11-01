<?php

/*
 * 文章模型类
 */
class Article_model extends MY_Model{
    
    public function __construct() {
        parent::__construct();
    }
    public function art_list($sql){
        return $this->_query($sql);
    }
    //获取文章记录的总数
    public function getCount(){
        return $this->_count();
    }
    //根据id获得需要编辑的文章信息
    public function getArtById($id){
        $sql = "SELECT  art_title,art_author,art_time,art_mof_time,art_content,art_id,is_show FROM gf_article WHERE art_id='$id'";
        return $this->_query($sql);
    }
    
    //获取指定条数都文章
    public function getArtLimit($num) {
    	$filter = array(
    		'fields' => 'art_id,art_title',
    		'where' => array('is_show'=>'1'),
    		'limit' => $num,
    	);
    	return $this->_select($filter);
    }
    
    //判断文章id是否合法
    public function is_one($id) {
    	$filter = array(
    		'fields' => 'art_id',
    		'where' => array('art_id' => $id),
    		'limit' => 1,
    	);
    	return $this->_select($filter);
    }
    
    //获取下一篇文章
    public function get_art_next($id) {
    	$filter = array(
    			'fields' => 'art_id',
    			'where' => array('art_id >' => $id),
    			'limit' => 1,
    	);
    	return $this->_select($filter);
    }
    
   //获取可以显示倒数第二大的id
   public function get_max_id() {
   		$limit =($this->getCount()-2) . ' , ' . ($this->getCount()-1);
   		$sql = "SELECT art_id FROM gf_article WHERE is_show = 1 LIMIT $limit";
   		return $this->_query($sql);
   }
   
   //获取可以显示的最大的id
   public function max_id() {
   		$sql = "SELECT MAX(art_id) as max FROM gf_article WHERE is_show = 1 LIMIT 1";
   		return $this->_query($sql);
   }
    
    //获取上一篇文章
    public function get_art_pre($id) {
//     	$filter = array(
//     			'fields' => 'art_id',
//     			'where' => array('art_id <' => $id),
//     			'limit' => 1,
//     	);
    	$sql = "SELECT MAX(art_id) as max FROM gf_article WHERE art_id < $id LIMIT 1";
    	return $this->_query($sql);
    }
  
    //获取最小的倒数第二个可以显示的id
    public function get_min_id() {
    	$sql = "SELECT art_id FROM gf_article WHERE is_show = 1 LIMIT 2";
    	return $this->_query($sql);
    }
    
    //获取最小的可以显示的id
    public function min_id() {
    	$sql ="SELECT MIN(art_id) as min FROM gf_article WHERE is_show = 1 LIMIT 1";
    	return $this->_query($sql);
    }
    
}

