<?php
/*
 * 后台的文章模块的控制器
 */
class Article extends Admin_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('article_model','art');
        $this->load->database();
        $this->load->helper('date');
        $this->load->helper('url');
    }
    //显示文章列表
    public function show_list(){
        //1.显示文章列表的页面，2处理文章的搜索数据
        if(empty($_POST)){
            //显示文章列表
            //1.获取文章的数据，分配到模版
            //每页显示5条
            $pagesize = 5;
            //获取总记录数
            $total = $this->art->getCount();
            //分页的配置项
            /*$config['base_url'] = site_url('admin/article/show_list');
            $config['total_rows'] = $total;    //总记录数
            $config['per_page'] = $pagesize; // 没有显示大小
            $config['first_link'] = '首页';
            $config['last_link'] = '尾页';
            $config['next_link'] = '下一页';
            $config['prev_link'] = '上一页';
           // $config['anchor_class'] = "font-color:red"; //添加 CSS 类 

            $this->pagination->initialize($config);
            //获取偏移量
            $offset = intval($this->uri->segment(3));
             * 
             */
            $config=array(
                'total' =>$total,
                'listRows'=>$pagesize,
                'pa' => '',
            );
            $this->load->library('cipage',$config);
            $sql="select * from gf_article where is_show=1 order by art_id desc ".$this->cipage->limit;
            $data = $this->art->art_list($sql);
            $pagelist  = $this->cipage->fpage(array(3,4,5,6,7,8));
            $this->assign('links',$pagelist);
            $this->assign('art_list', $data);
            //调用显示模版
            $this->display('admin/article/show_list');
        }  else {
            //处理文章搜索
        }
    }
    
    
    //添加文章动作
    public function add(){
        if(empty($_POST)){
            //显示添加表单
            $this->display('admin/article/add');
        }else{
            //处理添加表单的数据
            $_POST['art_time'] = now();
            $data = $_POST;
            $bool = $this->db->insert('article',$data);
            redirect('admin/article/show_list','refresh');
        }
    }

    //删除文章，不是真正的删除，只是不显示。
    public function delArt($art_id=0){
        //在ci中更新使用update方法，三个参数，第一个表名，第二个更新的数据，第三个条件
        $id = $this->uri->segment(4);
       //var_dump($id);die;
        $data = array(
            'is_show'=>0    
        );
        $where =array(
            'art_id'=>$id
        );
        $res = $this->db->update('article',$data,$where);
        if($res){
            redirect('admin/article/show_list', 'refresh');
        }else{
            redirect('admin/article/show_list');
        }

    }
    //编辑文章
    public function editArt($art_id=0){
        if(empty($_POST)){
            //显示编辑表单
            $data = $this->art->getArtById($art_id);
            $this->assign('article', $data);
            //调用显示模版
            $this->display('admin/article/editArt');
        }  else {
            //处理表单数据
            $_POST['art_mof_time'] = now();
            $data = $_POST;
             $where =array(
                 'art_id'=>$_POST['art_id']
             );
             //var_dump($_POST['art_id']);die;
             $res = $this->db->update('article',$data,$where);
             if($res){
                redirect('admin/article/show_list', 'refresh');
            }else{
                redirect('admin/article/editArt');
            }
        }
    }
    //跳转到前台查看显示
    public function forword($art_id=0){
        redirect('');
    }
    
    //获取前6条数据（前台）
//     public function for_front() {
//     	echo json_encode($this->art->getArtLimit(6));
//     }
    
    //获取下一篇文章
    public function get_next() {
    	$id_arr = $this->art->get_art_next($_GET['id']);
    	$max_id = $this->art->get_max_id() ? $this->art->get_max_id() : 0;
    	if($id_arr) {
    		$res = $this->art->getArtById($id_arr[0]->art_id);
    		if($_GET['id'] == $max_id[0]->art_id){
    			$res['flag'] = 'ok';
    		}
    		echo json_encode($res);
//     		echo json_encode($this->art->getArtById($id_arr[0]->art_id));
    	}else {
    		echo 0;
    	}
//     	if($id_arr) {
//     		echo $id_arr[0]->art_id;
//     	}else {
//     		echo 'error';
//     	}
    }
    
    //获取上一篇文章
    public function get_pre() {
    	$id_arr = $this->art->get_art_pre($_GET['id']);
    	$min_id = $this->art->get_min_id() ? $this->art->get_min_id() : 0;
    	if($id_arr[0]->max) {
    		$res = $this->art->getArtById($id_arr[0]->max);
    	    if($_GET['id'] == $min_id[1]->art_id){
    			$res['flag'] = 'ok';
    		}
    		
    		echo json_encode($res);
    	}else {
    		echo '0';
    	}
    }
    
    
    
    
    
}
