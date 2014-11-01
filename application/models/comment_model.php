<?php
/*
 * 后台商品评论模型类
 */
class Comment_model extends CI_Model{

    const TAB_NAME = 'comment';
    //构造方法
    public function __construct(){
        parent::__construct();
    }

    //获取评论列表
    public function getComment(){
        $sql = "select o.goods_id,o.goods_name,c.* from gf_comment as c left join gf_order as o on o.goods_id=c.goods_id";
        $res = $this->db->query($sql);
        return $res->result_array();
    }

    //获取一条评论信息
    public function getCommentById($cid){
        $sql = "select o.goods_id,o.goods_name,c.* from gf_comment as c left join gf_order as o on o.goods_id=c.goods_id where c.comment_id='$cid'";
        $res = $this->db->query($sql);
        return $res->row_array();
    }

    //插入管理员回复数据
    public function add_reply($data){
        //$sql = "insert into gf_reply values(null,'{$data["mag_id"]}','{$data["mag_name"]}','{$data["comment_id"]}''{$data["rep_content"]}''{$data["rep_time"]}')";
        $sql  = $this->db->insert_string('gf_reply',$data);
        return $this->db->query($sql);


    }
    //删除商品评论的属性
    public function del_comment($cid){
       return $this->db->delete(self::TAB_NAME,array('comment_id'=>$cid));
    }

    //
}