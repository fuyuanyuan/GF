<?php
if (!defined('BASEPATH')) exit('No direct access allowed.');
/*
 * 后台商品的分类模块
 */
class Category extends Admin_Controller{
    //实现父类的构造方法
    public function __construct(){
        parent::__construct();
        //初始化的参数
        $this->load->model('Category_model','category');
        $this->load->database();
        $this->load->library('form_validation');
    }

    //获取分类列表的数据，并树状显示，多次用到，所以封装到一个方法里面
    private function getCat(){
        return  $this->category->showCategory();
    }
    //显示商品的分类列表
    public function  show_list(){
        //1.获取商品的分类的数据，数据的树状显示
        $list = $this->getCat();
        //$list = array();
        $this->assign('list',$list);
        //2.把数据分配到模板，再调用显示模板
        $this->display('admin/category/show_list');

    }
    //商品分类的添加模块
    public function add(){
        //1.显示添加的表单
        //2.获取上级分类的数据，供添加的时候选择所属上级分类
        if(empty($_POST)){
            $list = $this->getCat();
            $this->assign('list',$list);
            $this->display('admin/category/add');
        }else{
        //2.处理表表单的数据
            $this->form_validation->set_rules('cat_name','分类名称','required');
            if($this->form_validation->run()==false){
                $data['message'] = validation_errors();
                $data['url'] = site_url("admin/category/add");
                $data['wait'] = 3;
                $this->assign('data',$data);
                $this->display('admin/message');
            }else{
                $data = array(
                    'cat_name' => $this->input->post('cat_name'),
                    'parent_id'=> $this->input->post('parent_id'),
                    'sort_order'=>$this->input->post('sort_order')
                );
                $this->db->insert('category',$data);
                redirect('admin/category/show_list','refresh');
            }
        }
    }
    //商品分类的修改模块
    public function edit($cid=0){
        if(empty($_POST)){
            //1.获取编辑数据
            $data = $this->category->getCatById($cid);
            //2.获取商品分类列表
            $list = $this->getCat();

            //3. 显示编辑的表单
            $this->assign('data',$data);
            $this->assign('list',$list);
            $this->display('admin/category/edit');
        }else{
        //2.处理编辑表单的数据
            $cid = $this->input->post('cat_id');
            //获取cat_id下所有的后代分类
            $sub_cat = $this->category->showCategory($cid);
            //获取后台分类的cat_id
            $sub_ids = array();
            foreach($sub_cat as $v){
                $sub_ids[] = $v['cat_id'];
            }
            //判断所选的父类类是否为当前分类或后代分类。
            $parent_id = $this->input->post('parent_id');
            if($parent_id==$cid || in_array($parent_id,$sub_ids)){
                $data['message'] = '不能将分类放置当前分类或其子分类下。';
                $data['url'] = site_url("admin/category/edit/$cid");
                $data['wait'] = 3;
                $this->assign('data',$data);
                $this->display('admin/message');
            }else{
                //设置验证规则
                $this->form_validation->set_rules('cat_name','分类名称','required');
                if($this->form_validation->run()==false){
                    $data['message'] = validation_errors();
                    $data['url'] = site_url("admin/category/edit/$cid");
                    $data['wait'] = 3;
                    $this->assign('data',$data);
                    $this->display('admin/message');
                }else{
                    $where =array(
                        'cat_id'=>$_POST['cat_id']
                    );
                    $data = array(
                        'cat_name' =>$this->input->post('cat_name'),
                        'parent_id'=>$this->input->post('parent_id'),
                        'sort_order'=>$this->input->post('sort_order')
                    );
                    //var_dump($_POST['art_id']);die;
                    $res = $this->db->update('category',$data,$where);
                    if($res){
                        redirect('admin/category/show_list', 'refresh');
                    }else{
                        redirect('admin/category/edit');
                    }
                }

            }
        }
    }
    //删除商品分类的方法
    public function del($cid=0){
        //删除商品分类时逻辑：1，分类下有子分类时，不能删除。2.分类下有商品时不能删除。
        $res = $this->category->checkCat($cid);
        if($res){
            //可以删除
            $this->db->where('cat_id',$cid);
            $this->db->delete('gf_category');
            redirect('admin/category/show_list','refresh');
        }else{
            //不能删除
            $msg = $this->category->error;
            //不能删除的错误提示还没做。
            redirect('admin/category/show_list');
        }
    }
}








