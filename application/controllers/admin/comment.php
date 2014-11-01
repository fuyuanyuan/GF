<?php
/*
 * 用户评论控制器
 */
class Comment extends Admin_Controller{
    //构造方法
    public function __construct(){
        parent::__construct();
        $this->load->model('comment_model','comment');
        $this->load->helper('date');
    }

    //显示用户评论列表
    public function show_list(){
        //获取评论列表数据
        $comments = $this->comment->getComment();
        $this->assign('comments',$comments);
        $this->display('admin/comment/show_list');
    }

    //添加商品评论，用于管理员后台作假，自己添加评论内容
    public function add(){
        if(empty($_POST)){
            //显示添加表单
            //获取评论商品的id

            $this->display('admin/comment/add');
        }else{
            //处理表单数据
        }
    }

    //管理员回复，评论
    public function reply($cid=0){
        //获取商品的id
        if(empty($_POST)){
            //显示回复表单
            $data = $this->comment->getCommentById($cid);
            //var_dump($data);die;
            $this->assign('data',$data);
            $manager['mag_id'] =$this->session->userdata('admin_id');
            $manager['mag_name'] = $this->session->userdata('admin');
            //var_dump($manager);die;
            $this->assign('manager',$manager);
            $this->display('admin/comment/reply');
        }else{
            //处理回复的数据
            $data['manager_id'] = $this->input->post('mag_id');
            $data['manager_name'] = $this->input->post('mag_name');
            $data['comment_id'] = $this->input->post('comment_id');
            $data['rep_content'] = $this->input->post('reply_content');
            $data['rep_time'] = now();
            $res = $this->comment->add_reply($data);
            if($res){
                //回复成功
                redirect('admin/comment/show_list');
            }else{
                //回复失败
                $meg['message'] = '回复失败';
                $meg['wait'] = 3;
                $meg['url'] = base_url('admin/comment/show_list');
                $this->assign('meg',$meg);
                $this->display('admin/message');
            }

        }
    }

    //管理员审核评论
    public function check_comment(){
        //获取评论信息，是否通过审核
    }

    //管理员删除评论
    public function del($cid=0){
        $this->comment->del_comment($cid);
        redirect('admin/comment/show_list');
    }
}